<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger House | Home</title>
    <meta name="description" content="Burger House serves stacked burgers, crisp fries, and bold late-night flavor in a warm downtown setting.">
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
                <a href="index.php" class="is-active" aria-current="page">Home</a>
                <a href="menu.php">Menu</a>
                <a href="about.php">About</a>
                <a href="contact.php">Contact</a>
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
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <span class="eyebrow">Downtown Favorite</span>
                    <h1>Smash Heat. Soft Buns. Big Nights.</h1>
                    <p>
                        From juicy double stacks to golden fries and creamy house sauces, Burger House is built for
                        quick lunches, dinner runs, and those late cravings that need something real.
                    </p>

                    <div class="hero-actions">
                        <a href="menu.php" class="btn btn-primary">See The Menu</a>
                        <a href="contact.php" class="btn btn-secondary">Reserve A Spot</a>
                    </div>

                    <div class="hero-stats">
                        <div class="hero-stat">
                            <strong>12+</strong>
                            <span>signature burgers</span>
                        </div>
                        <div class="hero-stat">
                            <strong>15 min</strong>
                            <span>average pickup</span>
                        </div>
                        <div class="hero-stat">
                            <strong>Open Late</strong>
                            <span>every Friday and Saturday</span>
                        </div>
                    </div>
                </div>

                <div class="hero-visual">
                    <div class="hero-image">
                        <div class="overlay-card">
                            <strong>$9.90 Combo</strong>
                            <span>burger, fries, soft drink</span>
                        </div>
                        <img src="assets/images/hero-burger.jpg" alt="Loaded cheeseburger served with fries">
                        <div class="media-caption">
                            <span class="eyebrow">House Special</span>
                            <h2>Smoky, Juicy, Crisp</h2>
                            <p>Seared beef, melted cheddar, crispy topping, and a toasted bun with deep grill flavor.</p>
                        </div>
                    </div>

                    <div class="reservation-card">
                        <div>
                            <strong>Tonight's Rush Starts Early</strong>
                            <span>Walk in before 19:00 for the fastest seating.</span>
                        </div>
                        <a href="contact.php" class="btn btn-secondary">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-head">
                    <div>
                        <span class="eyebrow">Most Ordered</span>
                        <h2>What People Come Back For</h2>
                    </div>
                    <p>Three kitchen favorites that keep the grills busy from lunch until close.</p>
                </div>

                <div class="cards">
                    <article class="card card-feature">
                        <div class="card-image">
                            <img src="assets/images/menu-burger-1.jpg" alt="Burger with fries on a slate board">
                        </div>
                        <div class="card-body">
                            <span class="card-note">Best Seller</span>
                            <h3>Classic House</h3>
                            <p>Beef patty, cheddar, lettuce, tomato, pickles, and our signature house sauce on toasted brioche.</p>
                            <div class="card-footer">
                                <strong>$8.50</strong>
                                <a href="menu.php" class="btn btn-secondary">Order It</a>
                            </div>
                        </div>
                    </article>

                    <article class="card">
                        <div class="card-image">
                            <img src="assets/images/menu-burger-2.jpg" alt="Stacked crispy chicken burger on a wooden board">
                        </div>
                        <div class="card-body">
                            <span class="card-note">Crunch Pick</span>
                            <h3>Double Crunch</h3>
                            <p>Crispy chicken layered with cheddar, tomato, lettuce, and pepper mayo.</p>
                            <div class="price-row">
                                <strong>$10.90</strong>
                                <span class="chip">Hot Favorite</span>
                            </div>
                        </div>
                    </article>

                    <article class="card">
                        <div class="card-image">
                            <img src="assets/images/menu-burger-3.jpg" alt="Sesame bun burger served with potato wedges">
                        </div>
                        <div class="card-body">
                            <span class="card-note">Grill Pick</span>
                            <h3>Grill Master</h3>
                            <p>Sesame bun, grilled beef, fresh tomato, cheese, and seasoned wedges on the side.</p>
                            <div class="price-row">
                                <strong>$9.20</strong>
                                <span class="chip">Combo Ready</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section>
            <div class="container story-grid">
                <div class="panel">
                    <span class="eyebrow">The Vibe</span>
                    <h2>Fast Service, Warm Room, Loud Flavor</h2>
                    <p>
                        Burger House mixes quick counter energy with a dining room that still feels inviting. The menu
                        stays focused, the grill stays hot, and every plate leaves the pass looking generous.
                    </p>
                    <div class="button-row">
                        <a href="about.php" class="btn btn-primary">Our Story</a>
                        <a href="menu.php" class="btn btn-secondary">Full Menu</a>
                    </div>
                </div>

                <div class="spotlight-card">
                    <img src="assets/images/menu-burger-1.jpg" alt="Close-up burger with fries and dipping sauce">
                    <div class="spotlight-copy">
                        <span class="eyebrow">Fresh Daily</span>
                        <h2>Made For Regulars</h2>
                        <p>Fresh prep, crisp textures, and burgers that hit hard without trying to do too much.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container feature-grid">
                <div class="feature-panel">
                    <span class="eyebrow">Kitchen</span>
                    <h3>Pressed To Order</h3>
                    <p>Every patty hits the grill fresh so the crust stays sharp and the center stays juicy.</p>
                </div>
                <div class="feature-panel">
                    <span class="eyebrow">Sides</span>
                    <h3>Fries Worth Stealing</h3>
                    <p>Seasoned, crisp, and served hot enough that they never make it back to the table untouched.</p>
                </div>
                <div class="feature-panel">
                    <span class="eyebrow">Late Hours</span>
                    <h3>Perfect After Dark</h3>
                    <p>When the city slows down, the grill still stays busy and the kitchen keeps the same pace.</p>
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
