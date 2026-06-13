<?php
class SessionManager
{
    private const REGEN_INTERVAL_SECONDS = 1800;

    public static function start(): void
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            return;
        }

        ini_set('session.use_only_cookies', '1');
        ini_set('session.use_strict_mode', '1');

        $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (isset($_SERVER['SERVER_PORT']) && (int) $_SERVER['SERVER_PORT'] === 443);

        session_set_cookie_params([
            'lifetime' => self::REGEN_INTERVAL_SECONDS,
            'path' => '/',
            'domain' => '',
            'secure' => $isHttps,
            'httponly' => true,
            'samesite' => 'Lax',
        ]);

        session_start();
        self::maybeRegenerate();
    }

    public static function setLoginSession(int $userId, string $userUid): void
    {
        self::start();

        $_SESSION['user_id'] = $userId;
        $_SESSION['useruid'] = $userUid;

        self::regenerateLoggedIn();
    }

    public static function destroy(): void
    {
        self::start();
        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], (bool) $params['secure'], (bool) $params['httponly']);
        }

        session_destroy();
    }

    private static function maybeRegenerate(): void
    {
        if (!isset($_SESSION['last_regeneration'])) {
            if (isset($_SESSION['user_id'])) {
                self::regenerateLoggedIn();
            } else {
                self::regenerateGuest();
            }
            return;
        }

        if ((time() - (int) $_SESSION['last_regeneration']) < self::REGEN_INTERVAL_SECONDS) {
            return;
        }

        if (isset($_SESSION['user_id'])) {
            self::regenerateLoggedIn();
        } else {
            self::regenerateGuest();
        }
    }

    private static function regenerateGuest(): void
    {
        session_regenerate_id(true);
        $_SESSION['last_regeneration'] = time();
    }

    private static function regenerateLoggedIn(): void
    {
        session_regenerate_id(true);

        $userId = (string) ($_SESSION['user_id'] ?? '');
        if ($userId !== '') {
            $newSessionId = session_create_id();
            session_id($newSessionId . '_' . $userId);
        }

        $_SESSION['last_regeneration'] = time();
    }
}
