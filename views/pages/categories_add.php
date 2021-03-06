<!-- $grid -->
<div class="form-container">
    <h1> <?= $title_page ?> </h1>

    <!-- $error box -->
    <div class="error-box <?= !empty($error_messages) ? 'active' : '' ?>">
        <?php foreach ($error_messages as $error_message): ?>
            <p class="error-message"> <?= $error_message ?></p>
        <?php endforeach; ?>

    </div>

    <!-- $form -->
    <form class="form-category" action="#" method="post">
        <div class="form-control <?= array_key_exists('title', $error_messages) ? 'error' : '' ?>">
            <label for="title">Title :</label>
            <input type="text" name="title" value="<?= $title ?> ">
        </div>

        <div class="form-control <?= array_key_exists('description', $error_messages) ? 'error' : '' ?>">
            <label for="description">Description :</label>
            <textarea name="description"><?= $description ?></textarea>
        </div>

        <!-- $submit ui component -->
        <div class="submit validate">
            <input class="submit" type="submit" name="submit">
            <svg class="submit-icon"viewBox="0 0 13.35 9.67"><path class="cls-1" d="M4.77,9.67a1.22,1.22,0,0,1-.9-.4L.38,5.77a1.15,1.15,0,0,1,0-1.7,1.15,1.15,0,0,1,1.7,0l2.7,2.6,6.5-6.3a1.15,1.15,0,0,1,1.7,0,1.15,1.15,0,0,1,0,1.7l-7.3,7.2A1.09,1.09,0,0,1,4.77,9.67Z"/></svg>
        </div>
    </form>
</div>
