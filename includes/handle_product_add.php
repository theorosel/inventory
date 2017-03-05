<?php

    // categories query
    $categories = $db->query('SELECT * FROM categories')->fetchAll();

    $error_messages   = array();
    $success_messages = array();

    $title         ='';
    $description   ='';
    // $category   ='';
    $price         ='';
    $quantity      ='';

    if (!empty($_POST)) {

        $title              = trim($_POST['title']);
        $description        = trim($_POST['description']);
        $category           = (int)$_POST['category'];
        $price              = (int)$_POST['price'];
        $quantity           = (int)$_POST['quantity'];
        $image              = $_FILES['image'];


        if (empty($title)) {
            $error_messages['title'] = 'Missing value';
        }

        if (empty($title)) {
            $error_messages['description'] = 'Missing value';
        }


        if (empty($price)) {
            $error_messages['price'] = 'Please enter a price';

            if (!is_numeric($price)) {
                $error_messages['price'] = 'Price must be a number';
            }
        }

        if (empty($quantity)) {
            $error_messages['quantity'] = 'Please enter a quantity';

            if (!is_numeric($quantity)) {
                $error_messages['quantity'] = 'quantity must be a number';
            }
        }

        function image_check($image) {

            if (empty($image['type'])) {
                return 'Error : Please give a file';
            }

            if (!exif_imagetype($image['tmp_name'])) {
                return 'Error : Please give an image';
            }

            // $image_dimensions = getimagesize($image['tmp_name']);
            // if ($image_dimensions[0] != $image_dimensions[1]) {
            //     return 'Error : Please give a square';
            // }

            if ($image['size'] > 1000000) {
                return 'Error : Your picture is too big (> 1Mo)';
            }

            return true;
        }

        $image_check = image_check($image);

        if (is_string($image_check)) {
            $error_messages['image'] = $image_check;
        }


        // No error
        if (empty($error_messages)) {

            function image_upload($image) {

                $directory  = __DIR__ . '/../uploads/';
                $temp_name  = explode('.', $image['name']);
                $file       = round(microtime(true)) . '.' . end($temp_name);

                $target_file = $directory . $file;

                if (move_uploaded_file($image['tmp_name'], $target_file)) {
                    return $file;
                }
                else {
                    echo "Error : Couldn't upload the image";
                    die;
                }
            }

            $file_name = image_upload($image);

            $prepare = $db->prepare("INSERT INTO items (title, description, category, price, quantity, image) VALUES (:title, :description, :category, :price, :quantity, :image)");

            $prepare->bindParam('title', $title);
            $prepare->bindParam('description', $description);
            $prepare->bindParam('category', $category);
            $prepare->bindParam('price', $price);
            $prepare->bindParam('quantity', $quantity);
            $prepare->bindParam('image', $file_name);

            $prepare->execute();

            // success message
            $success_messages[] = 'Your product is update';

            header('location: index.php');
            exit;
        }
    }

?>
