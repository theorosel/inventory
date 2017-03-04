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

        // No error
        if (empty($error_messages)) {

            $prepare = $db->prepare("INSERT INTO items (title, description, category, price, quantity) VALUES (:title, :description, :category, :price, :quantity)");

            $prepare->bindParam('title', $title);
            $prepare->bindParam('description', $description);
            $prepare->bindParam('category', $category);
            $prepare->bindParam('price', $price);
            $prepare->bindParam('quantity', $quantity);

            var_dump($prepare);
            $prepare->execute();

            // success message
            $success_messages[] = 'Your product is update';

        }

        // no data sent
        else {
            $title              = '';
            $description        = '';
            $category           = '';
            $price              = '';
            $quantity           = '';
        }
    }
    
?>
