<?php
require_once __DIR__ . '/includes/SessionBootstrap.inc.php';

if (!isset($_SESSION['userid']) || empty($_SESSION['is_admin'])) {
    header('Location: index.php');
    exit();
}

$burgerModel = new Burger();

$editId = isset($_GET['edit']) ? (int) $_GET['edit'] : 0;
$editBurger = $editId > 0 ? $burgerModel->getById($editId) : null;
$burgers = $burgerModel->getAll();

$error = $_GET['error'] ?? '';
$success = $_GET['success'] ?? '';

$pageTitle = 'Burger House | Admin Panel';
$pageDescription = 'Admin panel for Burger House CRUD operations.';
$activePage = '';
include __DIR__ . '/partials/header.php';
?>
<section class="page-hero">
    <div class="container dual-grid">
        <article class="page-hero-copy">
            <span class="eyebrow">Admin</span>
            <h1>Admin Panel</h1>
            <p>System for managing your whole menu at one place easy and simple for everyone to use the <strong>menu</strong>.</p>
        </article>
        <article class="form-card">
            <span class="eyebrow"><?php echo $editBurger ? 'Edit Item' : 'Menu Creator'; ?></span>
            <h3><?php echo $editBurger ? 'Edit Form' : 'Create An Item'; ?></h3>

            <?php if ($error !== '') { ?>
                <p class="form-note"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php } ?>
            <?php if ($success !== '') { ?>
                <p class="form-note"><?php echo htmlspecialchars($success, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php } ?>

            <form method="post" action="includes/Burger.inc.php" class="form-grid">
                <input type="hidden" name="action" value="<?php echo $editBurger ? 'update' : 'create'; ?>">
                <input type="hidden" name="id" value="<?php echo $editBurger ? (int) $editBurger['id'] : 0; ?>">

                <div class="field field--full">
                    <label for="burger-name">Name</label>
                    <input id="burger-name" type="text" name="name" required value="<?php echo htmlspecialchars($editBurger['name'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div class="field field--full">
                    <label for="burger-description">Description</label>
                    <textarea id="burger-description" name="description" required><?php echo htmlspecialchars($editBurger['description'] ?? '', ENT_QUOTES, 'UTF-8'); ?></textarea>
                </div>

                <div class="field">
                    <label for="burger-price">Price</label>
                    <input id="burger-price" type="text" name="price" required value="<?php echo htmlspecialchars(isset($editBurger['price']) ? (string) $editBurger['price'] : '', ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div class="field">
                    <label for="burger-badge">Badge</label>
                    <input id="burger-badge" type="text" name="badge" value="<?php echo htmlspecialchars($editBurger['badge'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div class="field field--full">
                    <label for="burger-tags">Tags (comma-separated)</label>
                    <input id="burger-tags" type="text" name="tags" value="<?php echo htmlspecialchars($editBurger['tags'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div class="field field--full">
                    <label for="burger-image">Image Path</label>
                    <input id="burger-image" type="text" name="image_path" required placeholder="assets/images/menu-burger-1.jpg" value="<?php echo htmlspecialchars($editBurger['image_path'] ?? '', ENT_QUOTES, 'UTF-8'); ?>">
                </div>

                <div class="field field--full">
                    <button class="btn btn-primary" type="submit"><?php echo $editBurger ? 'Edit Item' : 'Create Item'; ?></button>
                    <?php if ($editBurger) { ?>
                        <a class="btn btn-secondary mt-16" href="admin.php">Cancel Edit</a>
                    <?php } ?>
                </div>
            </form>
        </article>
    </div>
</section>

<section>
    <div class="container">
        <div class="section-head">
            <div>
                <span class="eyebrow">House Burgers</span>
                <h2>Main Lineup</h2>
            </div>
            <p>All employees double check all changes before you add them to the menu.</p>
        </div>

        <div class="menu-grid">
            <?php if (count($burgers) === 0) { ?>
                <article class="menu-item">
                    <div class="menu-item-body">
                        <h3>No burgers available yet!</h3>
                        <p>Our team is working on adding some delicious options for you soon.</p>
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

                        <div class="button-row admin-actions">
                            <a class="btn btn-secondary" href="admin.php?edit=<?php echo (int) $burger['id']; ?>">Edit</a>
                            <form method="post" action="includes/Burger.inc.php" class="admin-inline-form" onsubmit="return confirm('Are you sure you want to delete this burger?');">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?php echo (int) $burger['id']; ?>">
                                <button class="btn btn-secondary" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </article>
            <?php } ?>
        </div>
    </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>