<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION['userid']) || empty($_SESSION['is_admin'])) {
    header('Location: ../index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../admin.php');
    exit();
}

require_once __DIR__ . '/Autoloader.inc.php';

$burger = new BurgerContr();

$action = $_POST['action'] ?? '';
$result = ['ok' => false, 'error' => 'Neznama akcia.'];

if ($action === 'create') {
    $result = $burger->create($_POST);
} elseif ($action === 'update') {
    $result = $burger->update($_POST);
} elseif ($action === 'delete') {
    $result = $burger->delete($_POST);
}

if (!empty($result['ok'])) {
    header('Location: ../admin.php?success=' . urlencode((string) $result['success']));
    exit();
}

$query = 'error=' . urlencode((string) ($result['error'] ?? 'Neznama chyba.'));
if (!empty($result['edit'])) {
    $query .= '&edit=' . (int) $result['edit'];
}

header('Location: ../admin.php?' . $query);
exit();
