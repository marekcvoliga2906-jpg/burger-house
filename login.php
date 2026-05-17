<?php
$pageTitle = 'Burger House | Login';
$pageDescription = 'Login to your Burger House account.';
$activePage = '';
include __DIR__ . '/partials/header.php';

$error = $_GET['error'] ?? '';
$errorMap = [
    'emptyinput' => 'Please fill in all fields.',
    'wronglogin' => 'User was not found.',
    'wrongpassword' => 'Wrong password.',
    'stmtfailed' => 'Server error. Please try again.',
];
?>
<section class="page-hero">
    <div class="container page-hero-grid">
        <article class="page-hero-copy">
            <span class="eyebrow">Member Access</span>
            <h1>Login</h1>
            <p>Log in with your username or email and password.</p>
        </article>

        <article class="form-card">
            <h3>Welcome Back</h3>
            <?php if ($error !== '' && isset($errorMap[$error])) { ?>
                <p class="form-note"><?php echo htmlspecialchars($errorMap[$error], ENT_QUOTES, 'UTF-8'); ?></p>
            <?php } ?>
            <form action="includes/Login.inc.php" method="post" class="form-grid">
                <div class="field field--full">
                    <label for="login-uid">Username or Email</label>
                    <input id="login-uid" type="text" name="uid" required>
                </div>
                <div class="field field--full">
                    <label for="login-pwd">Password</label>
                    <input id="login-pwd" type="password" name="pwd" required>
                </div>
                <div class="field field--full">
                    <button class="btn btn-primary" type="submit" name="submit">Login</button>
                </div>
            </form>
            <p class="form-note mt-16">No account yet? <a href="signup.php">Sign up here</a>.</p>
        </article>
    </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>

