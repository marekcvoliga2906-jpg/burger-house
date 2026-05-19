<?php
require_once __DIR__ . '/includes/SessionBootstrap.inc.php';

$burgerModel = new Burger();
$burgers = $burgerModel->getAll();

$pageTitle = 'Burger House | Menu';
$pageDescription = 'Explore stacked burgers, crispy chicken, loaded wedges, and house sauces at Burger House.';
$activePage = 'menu';
include __DIR__ . '/partials/header.php';
?>
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
            <?php if (count($burgers) === 0) { ?>
                <article class="menu-item">
                    <div class="menu-item-body">
                        <h3>Zatial bez burgerov</h3>
                        <p>Menu sa automaticky naplni, ked admin prida burgre v admin paneli.</p>
                    </div>
                </article>
            <?php } ?>

            <?php foreach ($burgers as $burger) { ?>
                <article class="menu-item">
                    <div class="menu-item-image">
                        <img src="<?php echo htmlspecialchars($burger['image_path'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($burger['name'], ENT_QUOTES, 'UTF-8'); ?>">
                    </div>
                    <div class="menu-item-body">
                        <h3><?php echo htmlspecialchars($burger['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($burger['description'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <div class="menu-item-meta">
                            <strong>$<?php echo number_format((float) $burger['price'], 2); ?></strong>
                        </div>
                        <?php
                        $tags = array_filter(array_map('trim', explode(',', (string) $burger['tags'])));
                        if (!empty($burger['badge'])) {
                            array_unshift($tags, $burger['badge']);
                        }
                        if (count($tags) > 0) {
                        ?>
                            <div class="menu-item-tags">
                                <?php foreach ($tags as $tag) { ?>
                                    <span><?php echo htmlspecialchars($tag, ENT_QUOTES, 'UTF-8'); ?></span>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </article>
            <?php } ?>
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
<?php include __DIR__ . '/partials/footer.php'; ?>