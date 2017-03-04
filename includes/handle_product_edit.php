<?php

    // product query with id param
    $id = $_GET['id'];
    $prepare = $db->prepare('SELECT * FROM items WHERE id = ?');
    $prepare->execute(array($id));
    $item = $prepare->fetch();

    // categories query
    $categories = $db->query('SELECT * FROM categories')->fetchAll();


    $error_messages   = array();
    $success_messages = array();

    // data sent
    if (!empty($_POST)) {

        $title              = trim($_POST['title']);
        $description        = trim($_POST['description']);
        $category           = (int)$_POST['category'];
        $price              = (int)$_POST['price'];
        $quantity           = (int)$_POST['quantity'];

        // errors
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

        // no error
        if (empty($error_messages)) {

            $prepare = $db->prepare("UPDATE items SET title=:title, description=:description, category=:category, price=:price, quantity=:quantity WHERE id=:id");

            $prepare->bindParam('id', $id);
            $prepare->bindParam('title', $title);
            $prepare->bindParam('description', $description);
            $prepare->bindValue('category', $category);
            $prepare->bindParam('price', $price);
            $prepare->bindParam('quantity', $quantity);

            $prepare->execute();

            // success message
            $success_messages[] = 'Your product is update';
        }
    }

    // no data sent
    else {

        $title              = $item->title;
        $description        = $item->description;
        $category           = $item->category;
        $date               = $item->date;
        $price              = $item->price;
        $quantity           = $item->quantity;

    }

?>
