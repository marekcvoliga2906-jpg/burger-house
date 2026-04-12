<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger House | About</title>
    <meta name="description" content="Learn the story, values, and kitchen philosophy behind Burger House.">
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
                <a href="about.php" class="is-active" aria-current="page">About</a>
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
        <section class="page-hero">
            <div class="container story-grid">
                <div class="page-hero-copy">
                    <span class="eyebrow">About Us</span>
                    <h1>Built Around Fire And Familiar Faces.</h1>
                    <p>
                        Burger House started with one simple idea: keep the menu tight, cook everything with intent,
                        and make a place people are happy to return to without overthinking it.
                    </p>
                    <div class="button-row">
                        <a href="menu.php" class="btn btn-primary">What We Serve</a>
                        <a href="contact.php" class="btn btn-secondary">Visit Tonight</a>
                    </div>
                </div>

                <div class="spotlight-card">
                    <img src="assets/images/menu-burger-1.jpg" alt="Close-up burger presentation with fries and sauce">
                    <div class="spotlight-copy">
                        <span class="eyebrow">Since 2016</span>
                        <h2>Simple Done Right</h2>
                        <p>Hot grill, cold drinks, and a room that moves fast without losing its warmth.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container dual-grid">
                <div class="panel">
                    <span class="eyebrow">Our Story</span>
                    <h2>Good Ingredients Need Less Noise</h2>
                    <p>
                        We like burgers with edge and character: crisp sear, sharp pickles, melted cheese, and sauce
                        that actually adds something. That mindset shapes the kitchen, the menu, and the room itself.
                    </p>
                </div>

                <div class="quote-card">
                    <span class="eyebrow">House Rule</span>
                    <h2>Keep The Food Honest.</h2>
                    <p>Big flavor works best when the ingredients stay clear and every texture gets a reason to be there.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="container feature-grid">
                <div class="feature-panel">
                    <span class="eyebrow">Quality</span>
                    <h3>Fresh Prep Every Day</h3>
                    <p>Buns, vegetables, sauces, and toppings are handled with the same care as the grill itself.</p>
                </div>
                <div class="feature-panel">
                    <span class="eyebrow">Service</span>
                    <h3>Fast Without Feeling Rushed</h3>
                    <p>The pace stays quick, but the room still feels relaxed enough to stay for one more round.</p>
                </div>
                <div class="feature-panel">
                    <span class="eyebrow">Atmosphere</span>
                    <h3>Warm Light, Strong Color, Open Kitchen Energy</h3>
                    <p>A place that works just as well for a quick lunch as it does for a late evening bite.</p>
                </div>
            </div>
        </section>

        <section>
            <div class="container service-grid">
                <div class="service-card">
                    <span class="eyebrow">01</span>
                    <h3>Sharp Grill Work</h3>
                    <p>Pressed patties and crisp edges define the center of the menu.</p>
                </div>
                <div class="service-card">
                    <span class="eyebrow">02</span>
                    <h3>Balanced Builds</h3>
                    <p>Everything on the burger earns its place instead of stacking ingredients for show.</p>
                </div>
                <div class="service-card">
                    <span class="eyebrow">03</span>
                    <h3>Regular-First Mentality</h3>
                    <p>The goal is not just one great visit. It is making people want the next one.</p>
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
