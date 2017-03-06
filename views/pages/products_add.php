<!-- $product -->
<section class="grid">
    <div class="error-box <?= !empty($error_messages) ? 'active' : '' ?>"></div>
    <form class="form" action="#" method="post" enctype="multipart/form-data">

        <!-- $left form -->
        <div class="form-left">
            <div class="form-control <?= array_key_exists('title', $error_messages) ? 'error' : '' ?> ">
                <label for="title">Title :</label>
                <input type="text" name="title" value="<?= $title ?> ">
            </div>

            <div class="form-control <?= array_key_exists('description', $error_messages) ? 'error' : '' ?>">
                <label for="description">Description :</label>
                <textarea name="description"><?= $description ?></textarea>
            </div>

            <div class="form-control <?= array_key_exists('image', $error_messages) ? 'error' : '' ?>">
                <label for="image">Image :</label>
                <input type="file" name="image">
            </div>
        </div>



        <!-- $right form -->
        <div class="form-right">
            <div class="form-control">
                <label for="category">Category :</label>
                <select class="" name="category">

                    <?php foreach ($categories as $category): ?>
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
        </div>

        <div class="submit">
            <input class="submit" type="submit" name="submit">
        </div>
    </form>
</section>
