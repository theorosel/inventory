<?php

    // Categories query
    $categories = $db->query('SELECT * FROM categories')->fetchAll();

    $error_messages   = array();
    $success_messages = array();

    // Variables declaration
    $title         ='';
    $description   ='';
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

        $image_check = image_check($image);

        if (is_string($image_check)) {
            $error_messages['image'] = $image_check;
        }


        // No error
        if (empty($error_messages)) {

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

            $redirection = URL;
            header("location: $redirection");
            exit;
        }
    }

?>
