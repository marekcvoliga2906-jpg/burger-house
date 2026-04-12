<<<<<<< Updated upstream
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger House | Contact</title>
    <meta name="description" content="Visit Burger House, book a table, or send a message for pickup, dinner, and group orders.">
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
                <a href="index.php">Home</a>
                <a href="menu.php">Menu</a>
                <a href="about.php">About</a>
                <a href="contact.php" class="is-active" aria-current="page">Contact</a>
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

<?php
$pageTitle = 'Burger House | Contact';
$pageDescription = 'Visit Burger House, book a table, or send a message for pickup, dinner, and group orders.';
$activePage = 'contact';

$formSent = false;
$name = '';
$phone = '';
$email = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formSent = true;
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

include __DIR__ . '/partials/header.php';
?>
>>>>>>> Stashed changes
        <section class="page-hero">
            <div class="container contact-layout">
                <div class="page-hero-copy">
                    <span class="eyebrow">Contact</span>
                    <h1>Come Hungry. Leave Late.</h1>
                    <p>
                        Walk in for dinner, call ahead for pickup, or message us for group tables. We keep the line
                        moving, but there is always room for one more burger.
                    </p>
                    <div class="button-row">
                        <a href="tel:+15552348899" class="btn btn-primary">Call +1 555 234 8899</a>
                        <a href="menu.php" class="btn btn-secondary">View Menu</a>
                    </div>
                </div>

                <div class="spotlight-card">
                    <img src="assets/images/menu-burger-3.jpg" alt="Sesame burger with wedges on a wooden plate">
                    <div class="spotlight-copy">
                        <span class="eyebrow">Pickup Ready</span>
                        <h2>Fast Out The Door</h2>
                        <p>Order ahead, swing by, and leave with dinner still hot.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container contact-layout">
                <div>
                    <div class="contact-grid">
                        <div class="contact-card">
                            <span class="eyebrow">Address</span>
                            <h3>Find Us</h3>
                            <p>128 Grill Street<br>Downtown Food District<br>Bratislava Center</p>
                        </div>
                        <div class="contact-card">
                            <span class="eyebrow">Phone</span>
                            <h3>Reach The Team</h3>
                            <p>+1 555 234 8899<br>hello@burgerhouse.com</p>
                        </div>
                        <div class="contact-card">
                            <span class="eyebrow">Orders</span>
                            <h3>Large Groups</h3>
                            <p>For party orders and bigger tables, send us a message before the evening rush.</p>
                        </div>
                    </div>

                    <div class="hours-card mt-16">
                        <span class="eyebrow">Hours</span>
                        <h2>Open All Week</h2>
                        <p>Mon - Thu: 11:00 - 22:00<br>Fri - Sat: 11:00 - 23:30<br>Sun: 12:00 - 21:00</p>
                    </div>
                </div>

                <div class="form-card">
                    <span class="eyebrow">Message Us</span>
                    <h2>Send A Note</h2>
                    <p class="form-note">Ask about reservations, pickup times, private events, or anything else you need.</p>

                    <form method="post" action="">
                        <div class="form-grid">
                            <div class="field">
                                <label for="name">Name</label>
                                <input
                                    id="name"
                                    name="name"
                                    type="text"
                                    placeholder="Your name"
                                    value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>"
                                >
                            </div>
                            <div class="field">
                                <label for="phone">Phone</label>
                                <input
                                    id="phone"
                                    name="phone"
                                    type="tel"
                                    placeholder="Your phone number"
                                    value="<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>"
                                >
                            </div>
                            <div class="field field--full">
                                <label for="email">Email</label>
                                <input
                                    id="email"
                                    name="email"
                                    type="email"
                                    placeholder="hello@example.com"
                                    value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>"
                                >
                            </div>
                            <div class="field field--full">
                                <label for="message">Message</label>
                                <textarea
                                    id="message"
                                    name="message"
                                    placeholder="Tell us what you need"
                                ><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></textarea>
                            </div>
                        </div>

                        <div class="button-row">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                            <a href="index.php" class="btn btn-secondary">Back Home</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-links">
                <a href="index.php">Home</a>
                <a href="menu.php">Menu</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
            </div>
            <p>&copy; 2026 Burger House. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
