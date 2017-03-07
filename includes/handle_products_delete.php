<?php

    //Product query with id param
    $items = $db->prepare('SELECT items.id, items.title, items.description, items.price, items.quantity, items.image, categories.title AS category
                           FROM items
                           LEFT JOIN categories
                           ON items.category = categories.id
                           WHERE items.id = ?');

    $items->execute(array($id));
    $item = $items->fetch();


    // Variables declaration
    $delete = $_POST['delete'];
    $image = $item->image;


    if (!empty($delete)) {

        $image = image_delete($image);

        $prepare = $db->prepare('DELETE FROM items WHERE id = ?');
        $prepare->execute(array($id));

        $redirection = URL;
        header("location: $redirection");
        exit;
    }
