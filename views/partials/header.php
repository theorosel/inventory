<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title> <?= $title_page ?> </title>

        <!-- $css import -->
        <link href="<?= URL ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body>

    <!-- $app -->
    <div class="app">

        <!-- $header -->
        <header class="header">
            <nav>
                <ul class="primary-nav">

                    <?php if ($page == 'products'): ?>
                        <li class="links active"><a href="<?= URL ?>" class="link">Products</a></li>
                        <li class="links"><a href="<?= URL ?>categories" class="link">Categories</a></li>
                        <li class="links"><a href="<?= URL ?>reports" class="link">Reports</a></li>

                    <?php elseif ($page == 'categories'): ?>
                        <li class="links "><a href="<?= URL ?>" class="link">Products</a></li>
                        <li class="links active"><a href="<?= URL ?>categories" class="link">Categories</a></li>
                        <li class="links"><a href="<?= URL ?>reports" class="link">Reports</a></li>

                    <?php elseif ($page == 'reports'): ?>
                        <li class="links "><a href="<?= URL ?>" class="link">Products</a></li>
                        <li class="links "><a href="<?= URL ?>categories" class="link">Categories</a></li>
                        <li class="links active"><a href="<?= URL ?>reports" class="link">Reports</a></li>
                    <?php endif; ?>
                </ul>
            </nav>

            <ul class="user-nav">
                <li class="links "><p>Welcome <strong><?= $_SESSION['user'] ?></strong> !</p></li>
                <li class="links"><a href="<?= URL ?>logout" class="logout-link">Log out</a></li>
            </ul>
        </header>
