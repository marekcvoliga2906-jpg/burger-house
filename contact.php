<?php
$pageTitle = 'Burger House | Contact';
$pageDescription = 'Visit Burger House, book a table, or send a message for pickup, dinner, and group orders.';
$activePage = 'contact';
include __DIR__ . '/formhandler.php';
include __DIR__ . '/partials/header.php';
?>
        <section class="page-hero">
            <div class="container contact-layout">
                <div class="page-hero-copy">
                    <span class="eyebrow">Contact</span>
                    <h1>Come Hungry. Leave Full.</h1>
                    <p>
                        Walk in for dinner, call ahead for pickup, or message us for group tables. We keep the line
                        moving, but there is always room for one more burger.
                    </p>
                    <div class="button-row">
                        <a href="tel:+421907505050" class="btn btn-primary">Call +421 907 505 050</a>
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
                            <p>144 Grill Street<br>Downtown Food District<br>Nitra Center</p>
                        </div>
                        <div class="contact-card">
                            <span class="eyebrow">Phone</span>
                            <h3>Reach The Team</h3>
                            <p>+421 907 505 050<br>burgir@burgerhouse.com</p>
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

<?php
$renderFormData = true;
include __DIR__ . '/formhandler.php';
?>
                </div>
            </div>
        </section>
<?php include __DIR__ . '/partials/footer.php'; ?>
