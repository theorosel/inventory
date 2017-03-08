<?php

    // Get value and order parameters send in ajax request
    $value = isset($_GET['value']) ? $_GET['value'] : '';
    $order = $_GET['order'];

    // Create url for dynamic link
    $url   = URL;

    // Return the result according to order
    if ($order == 'id') {
        $prepare = $db->prepare('SELECT items.id, items.title, items.description, items.price, items.quantity, items.image, categories.title AS category
                                 FROM items
                                 LEFT JOIN categories
                                 ON items.category = categories.id
                                 WHERE items.title LIKE ?
                                 ORDER BY items.id');

        $prepare->execute(array("%$value%"));

        $result = $prepare->fetchAll();
    }

    else if ($order == 'price') {
        $prepare = $db->prepare('SELECT items.id, items.title, items.description, items.price, items.quantity, items.image, categories.title AS category
                                 FROM items
                                 LEFT JOIN categories
                                 ON items.category = categories.id
                                 WHERE items.title LIKE ?
                                 ORDER BY items.price');

        $prepare->execute(array("%$value%"));

        $result = $prepare->fetchAll();
    }

    else if ($order == 'quantity') {
        $prepare = $db->prepare('SELECT items.id, items.title, items.description, items.price, items.quantity, items.image, categories.title AS category
                                 FROM items
                                 LEFT JOIN categories
                                 ON items.category = categories.id
                                 WHERE items.title LIKE ?
                                 ORDER BY items.quantity');

        $prepare->execute(array("%$value%"));

        $result = $prepare->fetchAll();
    }


    // Create table of results
    $results = [
        'url' => $url,
        'result' => $result
    ];


    // Convert into string and send
    echo json_encode($results);
