<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burger House</title>
    <meta name="description" content="Burger House - fresh smashed burgers, crispy fries, and handmade shakes.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Instrument+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f6ead9;
            --panel: #fff9f0;
            --ink: #24160d;
            --muted: #6f5a49;
            --brand: #b83a1b;
            --brand-dark: #8d2810;
            --accent: #f2ba49;
            --line: rgba(36, 22, 13, 0.12);
            --shadow: 0 20px 40px rgba(73, 38, 18, 0.12);
            --radius: 24px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: "Instrument Sans", sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at top left, rgba(242, 186, 73, 0.35), transparent 28%),
                radial-gradient(circle at right 20%, rgba(184, 58, 27, 0.14), transparent 24%),
                linear-gradient(180deg, #fff7ec 0%, var(--bg) 100%);
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1120px, calc(100% - 2rem));
            margin: 0 auto;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 10;
            backdrop-filter: blur(10px);
            background: rgba(255, 247, 236, 0.84);
            border-bottom: 1px solid rgba(36, 22, 13, 0.08);
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 1rem 0;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .brand-badge {
            width: 46px;
            height: 46px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            background: var(--brand);
            color: #fff;
            font-family: "Bebas Neue", sans-serif;
            font-size: 1.35rem;
            box-shadow: var(--shadow);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            font-size: 0.95rem;
            color: var(--muted);
        }

        .nav-links a:hover {
            color: var(--brand);
        }

        .nav-cta {
            padding: 0.85rem 1.2rem;
            border-radius: 999px;
            background: var(--ink);
            color: #fff;
            font-weight: 600;
        }

        .hero {
            padding: 4.5rem 0 3rem;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            gap: 2rem;
            align-items: center;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.45rem 0.85rem;
            border-radius: 999px;
            background: rgba(184, 58, 27, 0.1);
            color: var(--brand-dark);
            font-size: 0.85rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        h1,
        h2,
        h3 {
            margin: 0;
            line-height: 1;
            font-family: "Bebas Neue", sans-serif;
            font-weight: 400;
            letter-spacing: 0.02em;
        }

        h1 {
            margin-top: 1rem;
            font-size: clamp(3.8rem, 10vw, 7rem);
        }

        .hero-copy p,
        .section-intro p,
        .about-copy p,
        .contact-card p {
            color: var(--muted);
            line-height: 1.7;
            font-size: 1rem;
        }

        .hero-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            margin: 2rem 0 1.5rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 1.35rem;
            border-radius: 999px;
            border: 1px solid transparent;
            font-weight: 700;
            transition: transform 0.2s ease, background 0.2s ease, border-color 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            background: var(--brand);
            color: #fff;
        }

        .btn-secondary {
            border-color: var(--line);
            background: rgba(255, 255, 255, 0.55);
        }

        .hero-meta {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
        }

        .hero-meta strong {
            display: block;
            font-size: 1.3rem;
        }

        .hero-meta span {
            color: var(--muted);
            font-size: 0.92rem;
        }

        .hero-card {
            position: relative;
            min-height: 520px;
            border-radius: 32px;
            overflow: hidden;
            background:
                radial-gradient(circle at 30% 20%, rgba(255, 255, 255, 0.25), transparent 28%),
                linear-gradient(180deg, #d34d29 0%, #8d2810 100%);
            box-shadow: var(--shadow);
        }

        .hero-card::before,
        .hero-card::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
        }

        .hero-card::before {
            width: 220px;
            height: 220px;
            top: -80px;
            right: -40px;
        }

        .hero-card::after {
            width: 180px;
            height: 180px;
            left: -60px;
            bottom: 40px;
        }

        .burger-stack {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
            padding: 2rem;
        }

        .burger-visual {
            width: min(100%, 370px);
            aspect-ratio: 1 / 1;
            position: relative;
            filter: drop-shadow(0 26px 26px rgba(0, 0, 0, 0.25));
            animation: floatBurger 4s ease-in-out infinite;
        }

        @keyframes floatBurger {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .layer {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 999px;
        }

        .bun-top {
            top: 24px;
            width: 310px;
            height: 110px;
            background: linear-gradient(180deg, #f8cf74 0%, #df9e2e 100%);
            border-radius: 160px 160px 70px 70px;
        }

        .sesame {
            position: absolute;
            width: 12px;
            height: 6px;
            border-radius: 50%;
            background: rgba(255, 248, 226, 0.92);
        }

        .sesame:nth-child(1) { top: 24px; left: 70px; transform: rotate(18deg); }
        .sesame:nth-child(2) { top: 32px; left: 118px; transform: rotate(-18deg); }
        .sesame:nth-child(3) { top: 22px; left: 160px; transform: rotate(12deg); }
        .sesame:nth-child(4) { top: 38px; left: 206px; transform: rotate(-12deg); }
        .sesame:nth-child(5) { top: 26px; left: 244px; transform: rotate(20deg); }

        .lettuce {
            top: 138px;
            width: 300px;
            height: 28px;
            background: #5a9f2f;
            clip-path: polygon(0 40%, 8% 0, 16% 45%, 24% 10%, 32% 50%, 40% 5%, 48% 48%, 56% 12%, 64% 55%, 72% 14%, 80% 52%, 88% 8%, 96% 46%, 100% 28%, 100% 100%, 0 100%);
        }

        .cheese {
            top: 160px;
            width: 278px;
            height: 24px;
            background: #f2ba49;
        }

        .patty {
            top: 182px;
            width: 292px;
            height: 50px;
            background: linear-gradient(180deg, #6d3518 0%, #4b220e 100%);
        }

        .tomato {
            top: 236px;
            width: 274px;
            height: 20px;
            background: #cf3d33;
        }

        .bun-bottom {
            top: 260px;
            width: 296px;
            height: 76px;
            background: linear-gradient(180deg, #efbe5f 0%, #d99522 100%);
            border-radius: 28px 28px 60px 60px;
        }

        .price-tag,
        .delivery-tag {
            position: absolute;
            padding: 0.9rem 1rem;
            border-radius: 18px;
            background: rgba(255, 249, 240, 0.96);
            box-shadow: var(--shadow);
        }

        .price-tag {
            top: 1.4rem;
            left: 1.4rem;
        }

        .delivery-tag {
            right: 1.4rem;
            bottom: 1.4rem;
        }

        .price-tag strong,
        .delivery-tag strong {
            display: block;
            font-size: 1.35rem;
        }

        .price-tag span,
        .delivery-tag span {
            color: var(--muted);
            font-size: 0.9rem;
        }

        section {
            padding: 2rem 0 4rem;
        }

        .section-head {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            align-items: end;
            margin-bottom: 1.75rem;
        }

        h2 {
            font-size: clamp(2.4rem, 6vw, 4rem);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.25rem;
        }

        .card {
            padding: 1.5rem;
            border-radius: var(--radius);
            background: rgba(255, 249, 240, 0.85);
            border: 1px solid rgba(36, 22, 13, 0.08);
            box-shadow: var(--shadow);
        }

        .card-art {
            height: 200px;
            border-radius: 22px;
            margin-bottom: 1.25rem;
        }

        .classic {
            background:
                radial-gradient(circle at 50% 20%, rgba(255, 255, 255, 0.45), transparent 25%),
                linear-gradient(180deg, #ffde9b 0%, #f5b33d 100%);
        }

        .double {
            background:
                radial-gradient(circle at 50% 20%, rgba(255, 255, 255, 0.35), transparent 25%),
                linear-gradient(180deg, #d75a37 0%, #8d2810 100%);
        }

        .chicken {
            background:
                radial-gradient(circle at 50% 20%, rgba(255, 255, 255, 0.4), transparent 25%),
                linear-gradient(180deg, #ffd673 0%, #d9921e 100%);
        }

        .card h3 {
            font-size: 2rem;
            margin-bottom: 0.6rem;
        }

        .card p {
            margin: 0 0 1rem;
            color: var(--muted);
            line-height: 1.65;
        }

        .card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }

        .card-footer strong {
            font-size: 1.25rem;
        }

        .about-grid {
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            gap: 1.5rem;
        }

        .about-panel,
        .contact-card {
            border-radius: 30px;
            background: rgba(255, 249, 240, 0.82);
            border: 1px solid rgba(36, 22, 13, 0.08);
            box-shadow: var(--shadow);
        }

        .about-panel {
            min-height: 380px;
            background:
                linear-gradient(160deg, rgba(184, 58, 27, 0.92), rgba(109, 53, 24, 0.98)),
                rgba(255, 249, 240, 0.82);
            padding: 2rem;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: end;
        }

        .about-panel p {
            color: rgba(255, 255, 255, 0.8);
            max-width: 23rem;
            line-height: 1.7;
        }

        .about-copy {
            padding: 2rem;
        }

        .feature-list {
            display: grid;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .feature {
            padding: 1rem 1.1rem;
            border-radius: 18px;
            background: #fff;
            border: 1px solid rgba(36, 22, 13, 0.08);
        }

        .feature strong {
            display: block;
            margin-bottom: 0.35rem;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 1.25rem;
        }

        .contact-card {
            padding: 1.5rem;
        }

        .contact-card h3 {
            font-size: 2rem;
            margin-bottom: 0.6rem;
        }

        .site-footer {
            padding: 1.5rem 0 2rem;
            color: var(--muted);
            text-align: center;
            font-size: 0.95rem;
        }

        @media (max-width: 920px) {
            .hero-grid,
            .about-grid,
            .cards,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .nav {
                flex-wrap: wrap;
            }

            .nav-links {
                width: 100%;
                justify-content: center;
                order: 3;
            }

            .section-head {
                align-items: start;
                flex-direction: column;
            }
        }

        @media (max-width: 640px) {
            .hero {
                padding-top: 3rem;
            }

            h1 {
                font-size: clamp(3.2rem, 16vw, 4.8rem);
            }

            .hero-card {
                min-height: 440px;
            }

            .burger-visual {
                transform: scale(0.84);
            }

            .price-tag,
            .delivery-tag {
                padding: 0.8rem 0.9rem;
            }

            .nav-links {
                gap: 0.8rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="container nav">
            <a href="#top" class="brand">
                <span class="brand-badge">BH</span>
                <span>Burger House</span>
            </a>
            <nav class="nav-links">
                <a href="#menu">Menu</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </nav>
            <a class="nav-cta" href="#contact">Order Now</a>
        </div>
    </header>

    <main id="top">
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy">
                    <span class="eyebrow">Fresh Grill • Daily Smash</span>
                    <h1>Big Flavor. No Compromise.</h1>
                    <p>
                        Burger House serves handcrafted burgers, crispy fries, and creamy shakes in a warm,
                        modern spot built for quick lunches and late-night cravings.
                    </p>
                    <div class="hero-actions">
                        <a href="#menu" class="btn btn-primary">See Signature Burgers</a>
                        <a href="#about" class="btn btn-secondary">Why People Come Back</a>
                    </div>
                    <div class="hero-meta">
                        <div>
                            <strong>12+</strong>
                            <span>signature burgers</span>
                        </div>
                        <div>
                            <strong>15 min</strong>
                            <span>average pickup time</span>
                        </div>
                        <div>
                            <strong>100%</strong>
                            <span>freshly grilled patties</span>
                        </div>
                    </div>
                </div>

                <div class="hero-card">
                    <div class="price-tag">
                        <strong>$9.90</strong>
                        <span>House Burger Meal</span>
                    </div>
                    <div class="burger-stack">
                        <div class="burger-visual" aria-hidden="true">
                            <div class="layer bun-top">
                                <span class="sesame"></span>
                                <span class="sesame"></span>
                                <span class="sesame"></span>
                                <span class="sesame"></span>
                                <span class="sesame"></span>
                            </div>
                            <div class="layer lettuce"></div>
                            <div class="layer cheese"></div>
                            <div class="layer patty"></div>
                            <div class="layer tomato"></div>
                            <div class="layer bun-bottom"></div>
                        </div>
                    </div>
                    <div class="delivery-tag">
                        <strong>Free Fries</strong>
                        <span>with every double combo</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="menu">
            <div class="container">
                <div class="section-head">
                    <div class="section-intro">
                        <span class="eyebrow">Popular Picks</span>
                        <h2>Signature Burgers</h2>
                    </div>
                    <p>Simple ingredients, strong grill flavor, and fast service.</p>
                </div>

                <div class="cards">
                    <article class="card">
                        <div class="card-art classic"></div>
                        <h3>Classic House</h3>
                        <p>Beef patty, cheddar, fresh lettuce, tomato, house sauce, and toasted brioche.</p>
                        <div class="card-footer">
                            <strong>$8.50</strong>
                            <a href="#contact" class="btn btn-secondary">Order</a>
                        </div>
                    </article>

                    <article class="card">
                        <div class="card-art double"></div>
                        <h3>Double Smash</h3>
                        <p>Two smashed patties, caramelized onions, double cheese, pickles, and smoky mayo.</p>
                        <div class="card-footer">
                            <strong>$10.90</strong>
                            <a href="#contact" class="btn btn-secondary">Order</a>
                        </div>
                    </article>

                    <article class="card">
                        <div class="card-art chicken"></div>
                        <h3>Crispy Chicken</h3>
                        <p>Crunchy chicken fillet, slaw, spicy glaze, pickles, and soft potato bun.</p>
                        <div class="card-footer">
                            <strong>$9.20</strong>
                            <a href="#contact" class="btn btn-secondary">Order</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container about-grid">
                <div class="about-panel">
                    <span class="eyebrow" style="background: rgba(255,255,255,0.12); color: #fff;">Since 2016</span>
                    <h2>Built Around the Grill</h2>
                    <p>
                        We keep the menu focused so every burger hits the table hot, juicy, and consistent.
                    </p>
                </div>

                <div class="about-copy about-panel" style="background: rgba(255, 249, 240, 0.82); color: var(--ink);">
                    <h2>What Makes It Good</h2>
                    <p>
                        Burger House is designed as a straightforward restaurant landing page template. You can
                        replace the text, prices, and contact details with your own content.
                    </p>
                    <div class="feature-list">
                        <div class="feature">
                            <strong>Fresh ingredients</strong>
                            <span>Daily prep with crisp vegetables and toasted buns.</span>
                        </div>
                        <div class="feature">
                            <strong>Fast service</strong>
                            <span>Perfect for takeaway, lunch rush, or online orders.</span>
                        </div>
                        <div class="feature">
                            <strong>Responsive layout</strong>
                            <span>Works on desktop, tablet, and mobile without external CSS frameworks.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="section-head">
                    <div class="section-intro">
                        <span class="eyebrow">Visit Us</span>
                        <h2>Order Or Drop By</h2>
                    </div>
                    <p>Update these sample details with your real restaurant information.</p>
                </div>

                <div class="contact-grid">
                    <div class="contact-card">
                        <h3>Location</h3>
                        <p>128 Grill Street<br>Downtown Food District<br>Open every day</p>
                    </div>
                    <div class="contact-card">
                        <h3>Hours</h3>
                        <p>Mon - Thu: 11:00 - 22:00<br>Fri - Sat: 11:00 - 23:30<br>Sun: 12:00 - 21:00</p>
                    </div>
                    <div class="contact-card">
                        <h3>Contact</h3>
                        <p>Phone: +1 555 234 8899<br>Email: hello@burgerhouse.com<br>Delivery and pickup available</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Burger House. Simple HTML5 restaurant template.</p>
        </div>
    </footer>
</body>
</html>
