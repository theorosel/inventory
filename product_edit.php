<?php
    // page variable
    $title_page = 'Inventory - Product';
    $page  = 'index';

    // includes
    include 'includes/config.php';
    include 'includes/handle_product_edit.php';
    include 'partials/header.php';

?>

<!-- $product -->
<section class="product">
    <div class="error-box"></div>
    <form class="product-form" action="#" method="post" enctype="multipart/form-data">

        <!-- $left form -->
        <div class="form-left">
            <div class="form-control <?= array_key_exists('title', $error_messages) ? 'error' : '' ?>">
                <label for="title">Title :</label>
                <input type="text" name="title" value="<?= $title ?> ">
            </div>

            <div class="form-control <?= array_key_exists('description', $error_messages) ? 'error' : '' ?>">
                <label for="description">Description :</label>
                <textarea name="description"><?= $description ?></textarea>
            </div>
        </div>

        <!-- $right form -->
        <div class="form-right">
            <div class="form-control">
                <label for="category">Category :</label>
                <select class="" name="category">
                    <?php foreach ($categories as $category): ?>

                        <?php if ($item->category == $category->id): ?>
                            <option value="<?= $category->id ?>" selected ><?= $category->title ?></option>
                        <?php endif; ?>

                        <option value="<?= $category->id ?>"><?= $category->title ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-control <?= array_key_exists('price', $error_messages) ? 'error' : '' ?>">
                <label for="price">Price :</label>
                <input type="number" name="price" value="<?= $price ?>">
            </div>

            <div class="form-control <?= array_key_exists('quantity', $error_messages) ? 'error' : '' ?>">
                <label for="quantity">quantity :</label>
                <input type="number" name="quantity" value="<?= $quantity ?>">
            </div>

            <div class="form-control">
                <label for="date"> last update :</label>
                <?= $item->date ?>
            </div>
        </div>
        <div class="submit">
            <input class="submit" type="submit" name="submit">
        </div>
    </form>
</section>


<?php
    include 'partials/footer.php';
?>
