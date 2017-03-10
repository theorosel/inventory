<?php

    include'includes/handle_login.php';
?>

<div class="form-container">

    <!-- $form -->
    <form class="form" action="#" method="post" enctype="multipart/form-data">
        <div class="form-control <?= array_key_exists('title', $error_messages) ? 'error' : '' ?> ">
            <label for="title">Title :</label>
            <input type="text" name="username" value="<?= $username ?>">
        </div>

        <div class="form-control <?= array_key_exists('title', $error_messages) ? 'error' : '' ?> ">
            <label for="title">Title :</label>
            <input type="password" name="password">
        </div>

        <!-- $submit ui component -->
        <div class="submit add">
            <input class="submit" type="submit" name="submit">
        </div>
    </form>
</div>
