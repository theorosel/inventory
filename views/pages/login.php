<?php

    include'includes/handle_login.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title> <?= $title_page ?> </title>

        <!-- $css import -->
        <link href="<?= URL ?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="form-login">
            <!-- $form container -->
            <form class="form-login-container" action="#" method="post">
                <div class="form-control-login <?= array_key_exists('username', $error_messages) ? 'error' : '' ?> ">
                    <label for="username">Username :</label>
                    <input type="text" name="username" value="<?= $username ?>" placeholder="root">
                </div>

                <div class="form-control-login <?= array_key_exists('password', $error_messages) ? 'error' : '' ?> ">
                    <label for="password">Password :</label>
                    <input type="password" name="password">
                </div>

                <!-- $error message -->
                <div class="form-control-login">
                    <div class="form-login-error ">
                        <?php if (array_key_exists('username', $error_messages) || array_key_exists('password', $error_messages) ): ?>
                            <p>Please enter correct username and password</p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="form-control-login">
                    <input  type="submit" name="Login" value="Log in">
                </div>
            </form>
        </div>
    </body>
</html>
