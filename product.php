<?php
    // page variable
    $title = 'Inventory - Product';
    $page  = 'index';

    // includes
    include 'includes/config.php';

    // get product
    $id = $_GET['id'];
    $prepare = $db->prepare('SELECT * FROM items WHERE id = ?');
    $prepare->execute(array($id));
    $item = $prepare->fetch();

    // categories query
    $categories = $db->query('SELECT * FROM categories')->fetchAll();

    // echo '<pre>';
    // print_r($categories);
    // echo '</pre>';

    include 'includes/header.php';
?>

<section class="product">
    <form class="product-form" action="index.html" method="post">
        <div class="form-left">
            <div class="form-control">
                <label for="title">Title :</label>
                <input type="text" name="title" value="<?= $item->title ?>">
            </div>

            <div class="form-control">
                <label for="description">Description :</label>
                <textarea name="description"><?= $item->description?></textarea>
            </div>
        </div>
        <div class="form-right">
            <div class="form-control">
                <label for="category">Category :</label>
                <select class="" name="category">

                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category->id ?>"><?= $category->title ?></option>
                    <?php endforeach; ?>

                </select>
            </div>

            <div class="form-control">
                <label for="price">Price :</label>
                <input type="number" name="title" value="<?= (int)$item->price ?>">
            </div>

            <div class="form-control">
                <label for="quantity">quantity :</label>
                <input type="number" name="title" value="<?= (int)$item->quantity ?>">
            </div>

            <div class="form-control">
                <?= $item->date ?>
            </div>
        </div>
    </form>
</section>

<?php
    include 'includes/footer.php';
?>
