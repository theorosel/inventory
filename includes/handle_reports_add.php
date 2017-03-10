<?php

    // Categories query
    $items = $db->query('SELECT * FROM items')->fetchAll();$items = $db->query('SELECT items.id, items.title, items.description, items.price, items.quantity, items.image, categories.title AS category
                         FROM items
                         LEFT JOIN categories
                         ON items.category = categories.id')->fetchAll();

    $error_messages   = array();
    $success_messages = array();

    // Variables declaration
    $title         ='';


    if (!empty($_POST)) {

        $title              = isset($_POST['title']) ? trim($_POST['title']) : '';


        if (empty($title)) {
            $error_messages['title'] = 'Error Title : Missing value';
        }


        // No error
        if (empty($error_messages)) {

            $file = report_upload($items);

            $prepare = $db->prepare("INSERT INTO reports (title, file) VALUES (:title, :file)");

            $prepare->bindParam('title', $title);
            $prepare->bindParam('file', $file);

            $prepare->execute();

            // success message
            $success_messages[] = 'Your product is update';

            $redirection = URL;

            header("location: $redirection/reports");
            exit;
        }
    }
