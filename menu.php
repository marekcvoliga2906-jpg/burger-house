<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger House | Menu</title>
    <meta name="description" content="Explore stacked burgers, crispy chicken, loaded wedges, and house sauces at Burger House.">
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
                <a href="menu.php" class="is-active" aria-current="page">Menu</a>
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
        <section class="page-hero">
            <div class="container menu-highlight">
                <div class="page-hero-copy">
                    <span class="eyebrow">Signature Menu</span>
                    <h1>Burgers That Own The Table.</h1>
                    <p>
                        Big sear, soft buns, sharp pickles, rich sauces, and sides that can hold their own. Built for
                        people who know exactly why they came in.
                    </p>
                    <div class="button-row">
                        <a href="contact.php" class="btn btn-primary">Order Tonight</a>
                        <a href="tel:+15552348899" class="btn btn-secondary">Call The Kitchen</a>
                    </div>
                </div>

                <div class="spotlight-card">
                    <img src="assets/images/hero-burger.jpg" alt="Burger with melted cheese and fries">
                    <div class="spotlight-copy">
                        <span class="eyebrow">Kitchen Favorite</span>
                        <h2>Smoke Stack</h2>
                        <p>Double beef, cheddar, crispy onions, barbecue glaze, and a bun that holds it all together.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-head">
                    <div>
                        <span class="eyebrow">House Burgers</span>
                        <h2>Main Lineup</h2>
                    </div>
                    <p>From classic builds to crisp chicken stacks, these are the plates that define the room.</p>
                </div>

                <div class="menu-grid">
                    <article class="menu-item">
                        <div class="menu-item-image">
                            <img src="assets/images/menu-burger-1.jpg" alt="Classic burger served with fries">
                        </div>
                        <div class="menu-item-body">
                            <h3>Classic House</h3>
                            <p>Beef patty, cheddar, crisp lettuce, tomato, pickles, and house burger sauce.</p>
                            <div class="menu-item-meta">
                                <strong>$8.50</strong>
                                <span class="chip">Best Seller</span>
                            </div>
                            <div class="menu-item-tags">
                                <span>Brioche Bun</span>
                                <span>House Sauce</span>
                            </div>
                        </div>
                    </article>

                    <article class="menu-item">
                        <div class="menu-item-image">
                            <img src="assets/images/menu-burger-2.jpg" alt="Crispy chicken burger on a wooden board">
                        </div>
                        <div class="menu-item-body">
                            <h3>Double Crunch</h3>
                            <p>Crispy chicken, cheddar, tomato, lettuce, and a smooth pepper mayo finish.</p>
                            <div class="menu-item-meta">
                                <strong>$10.90</strong>
                                <span class="chip">Crunch Pick</span>
                            </div>
                            <div class="menu-item-tags">
                                <span>Crispy</span>
                                <span>Pepper Mayo</span>
                            </div>
                        </div>
                    </article>

                    <article class="menu-item">
                        <div class="menu-item-image">
                            <img src="assets/images/menu-burger-3.jpg" alt="Sesame burger with wedges">
                        </div>
                        <div class="menu-item-body">
                            <h3>Grill Master</h3>
                            <p>Grilled beef, fresh tomato, sliced cheese, lettuce, and seasoned wedges on the side.</p>
                            <div class="menu-item-meta">
                                <strong>$9.20</strong>
                                <span class="chip">Combo Ready</span>
                            </div>
                            <div class="menu-item-tags">
                                <span>Sesame Bun</span>
                                <span>Potato Wedges</span>
                            </div>
                        </div>
                    </article>

                    <article class="menu-item">
                        <div class="menu-item-image">
                            <img src="assets/images/hero-burger.jpg" alt="Loaded burger with smoky toppings">
                        </div>
                        <div class="menu-item-body">
                            <h3>Smoke Stack</h3>
                            <p>Two patties, cheddar, crispy onion topping, barbecue glaze, and toasted bun.</p>
                            <div class="menu-item-meta">
                                <strong>$11.40</strong>
                                <span class="chip">Double Patty</span>
                            </div>
                            <div class="menu-item-tags">
                                <span>Smoky</span>
                                <span>Loaded</span>
                            </div>
                        </div>
                    </article>

                    <article class="menu-item">
                        <div class="menu-item-image">
                            <img src="assets/images/menu-burger-1.jpg" alt="Burger with fries and dipping sauce">
                        </div>
                        <div class="menu-item-body">
                            <h3>Cheese Melt</h3>
                            <p>Extra cheese, pickles, shredded lettuce, soft toasted bun, and balanced savory bite.</p>
                            <div class="menu-item-meta">
                                <strong>$8.90</strong>
                                <span class="chip">Melted</span>
                            </div>
                            <div class="menu-item-tags">
                                <span>Cheddar</span>
                                <span>Soft Bun</span>
                            </div>
                        </div>
                    </article>

                    <article class="menu-item">
                        <div class="menu-item-image">
                            <img src="assets/images/menu-burger-2.jpg" alt="Spicy chicken burger with cheese">
                        </div>
                        <div class="menu-item-body">
                            <h3>Spicy Crispy</h3>
                            <p>Crunchy fillet, hot glaze, slaw, tomato, and creamy dressing to cool the finish.</p>
                            <div class="menu-item-meta">
                                <strong>$9.70</strong>
                                <span class="chip">Spicy</span>
                            </div>
                            <div class="menu-item-tags">
                                <span>House Slaw</span>
                                <span>Heat Level 2</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="panel">
                    <div class="section-head">
                        <div>
                            <span class="eyebrow">Sides</span>
                            <h2>Go Beyond The Burger</h2>
                        </div>
                        <p>Golden fries, loaded wedges, onion crunch, and sauces that deserve their own spotlight.</p>
                    </div>

                    <div class="service-grid">
                        <div class="service-card">
                            <h3>Loaded Wedges</h3>
                            <p>Cheese sauce, herbs, and smoky drizzle over crisp potato wedges.</p>
                        </div>
                        <div class="service-card">
                            <h3>House Sauces</h3>
                            <p>Smoky BBQ, burger sauce, pepper mayo, and hot glaze at the counter.</p>
                        </div>
                        <div class="service-card">
                            <h3>Fries + Drink</h3>
                            <p>Turn any burger into a full meal with a simple combo upgrade.</p>
                        </div>
                    </div>

                    <div class="quote-card mt-16">
                        <span class="eyebrow">From The Grill</span>
                        <h2>Keep It Sharp.</h2>
                        <p>
                            Great burgers do not need twenty ingredients. They need heat, balance, texture, and a kitchen
                            that knows when to stop.
                        </p>
                    </div>
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
