<?php
$pageTitle = $pageTitle ?? 'Burger House';
$pageDescription = $pageDescription ?? 'Burger House';
$activePage = $activePage ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <script defer src="assets/js/theme.js"></script>
</head>
<body>
    <header class="site-header">
        <div class="container nav">
            <a href="index.php" class="brand" aria-label="Burger House home">
                <img class="brand-mark" src="assets/images/brand-mark.svg" alt="Burger House logo">
                <span class="brand-text">
                    <strong>Burger House</strong>
                    <span>Flame Crafted</span>
                </span>
            </a>

            <nav class="nav-links" aria-label="Main navigation">
                <a href="index.php"<?php echo $activePage === 'home' ? ' class="is-active" aria-current="page"' : ''; ?>>Home</a>
                <a href="menu.php"<?php echo $activePage === 'menu' ? ' class="is-active" aria-current="page"' : ''; ?>>Menu</a>
                <a href="about.php"<?php echo $activePage === 'about' ? ' class="is-active" aria-current="page"' : ''; ?>>About</a>
                <a href="contact.php"<?php echo $activePage === 'contact' ? ' class="is-active" aria-current="page"' : ''; ?>>Contact</a>
            </nav>

            <div class="nav-actions">
                <button class="theme-toggle" type="button" data-theme-toggle aria-pressed="false" aria-label="Dark Theme">
                    <span data-theme-label>Dark Theme</span>
                </button>
                <a class="nav-cta" href="contact.php">Book A Table</a>
            </div>
        </div>
    </header>

    <main>
