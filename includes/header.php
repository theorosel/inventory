<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title> <?= $title ?> </title>
        <meta name="description" content="A simple starter template for front-end projects." />

        <!-- $css import -->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>
    <body>

    <!-- $app -->
    <div class="app">

        <!-- $header -->
        <header class="header">
            <nav>
                <ul class="primary-nav">
                    <?php if ($page == 'index'): ?>
                        <li class="links active"><a href="index.php" class="link">Products</a></li>
                        <li class="links"><a href="categories.php" class="link">Categories</a></li>
                        <li class="links"><a href="reports.php" class="link">Reports</a></li>

                    <?php elseif ($page == 'categories'): ?>
                        <li class="links "><a href="index.php" class="link">Products</a></li>
                        <li class="links active"><a href="categories.php" class="link">Categories</a></li>
                        <li class="links"><a href="reports.php" class="link">Reports</a></li>

                    <?php elseif ($page == 'reports'): ?>
                        <li class="links "><a href="index.php" class="link">Products</a></li>
                        <li class="links "><a href="categories.php" class="link">Categories</a></li>
                        <li class="links active"><a href="reports.php" class="link">Reports</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </header>
