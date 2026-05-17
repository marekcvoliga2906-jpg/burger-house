<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (!isset($_SESSION['userid']) || empty($_SESSION['is_admin'])) {
    header('Location: index.php');
    exit();
}

$pageTitle = 'Burger House | Admin Panel';
$pageDescription = 'Admin panel for Burger House CRUD operations.';
$activePage = '';
include __DIR__ . '/partials/header.php';
?>
<section class="page-hero">
    <div class="container page-hero-grid">
        <article class="page-hero-copy">
            <span class="eyebrow">Admin</span>
            <h1>Admin Panel</h1>
            <p>This page is reserved for admin account and serves as your CRUD workspace.</p>
        </article>
        <article class="form-card">
            <h3>CRUD Sections</h3>
            <div class="button-row">
                <a class="btn btn-primary" href="#">Create</a>
                <a class="btn btn-secondary" href="#">Read</a>
            </div>
            <div class="button-row">
                <a class="btn btn-secondary" href="#">Update</a>
                <a class="btn btn-secondary" href="#">Delete</a>
            </div>
            <p class="form-note">Next step: connect these actions to your database entities (users, menu items, orders).</p>
        </article>
    </div>
</section>
<?php include __DIR__ . '/partials/footer.php'; ?>

