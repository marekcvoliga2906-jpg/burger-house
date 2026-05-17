<?php
$pageTitle = 'Burger House | Sign Up';
$pageDescription = 'Create your Burger House account.';
$activePage = '';
include __DIR__ . '/partials/header.php';

$error = $_GET['error'] ?? '';
$signup = $_GET['signup'] ?? '';
$errorMap = [
    'emptyinput' => 'Please fill in all fields.',
    'invaliduid' => 'Username can contain only letters and numbers.',
    'invalidemail' => 'Please enter a valid email.',
    'passwordsdontmatch' => 'Passwords do not match.',
    'useralreadytaken' => 'Username or email is already used.',
    'stmtfailed' => 'Server error. Please try again.',
];
?>
<section class="page-hero">
    <div class="container page-hero-grid">
        <article class="page-hero-copy">
            <span class="eyebrow">New Member</span>
            <h1>Sign Up</h1>
            <p>Create your account to continue with Burger House.</p>
        </article>

        <article class="form-card">
            <h3>Create Account</h3>
            <?php if ($error !== '' && isset($errorMap[$error])) { ?>
                <p class="form-note"><?php echo htmlspecialchars($errorMap[$error], ENT_QUOTES, 'UTF-8'); ?></p>
            <?php } ?>
            <?php if ($signup === 'success') { ?>
                <p class="form-note">Account created. You can now <a href="login.php">login</a>.</p>
            <?php } ?>
            <form action="includes/Signup.inc.php" method="post" class="form-grid">
                <div class="field field--full">
                    <label for="signup-uid">Username</label>
                    <input id="signup-uid" type="text" name="uid" required>
                </div>
                <div class="field field--full">
                    <label for="signup-email">Email</label>
                    <input id="signup-email" type="email" name="email" required>
                </div>
                <div class="field field--full">
                    <label for="signup-pwd">Password</label>
                    <input id="signup-pwd" type="password" name="pwd" required>
                </div>
                <div class="field field--full">
                    <label for="signup-pwd-repeat">Repeat Password</label>
                    <input id="signup-pwd-repeat" type="password" name="pwdRepeat" required>
                </div>
                <div class="field field--full">
                    <button class="btn btn-primary" type="submit" name="submit">Sign Up</button>
                </div>
            </form>
            <p class="form-note mt-16">Already have an account? <a href="login.php">Login here</a>.</p>
        </article>
    </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>

