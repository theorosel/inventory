<?php

    // Category query with id param
    $prepare = $db->prepare('SELECT * FROM categories WHERE id = ?');
    $prepare->execute(array($id));
    $category = $prepare->fetch();

    // Variables declaration
    $delete = $_POST['delete'];


    if (!empty($delete)) {

        $prepare = $db->prepare('DELETE FROM categories WHERE id = ?');
        $prepare->execute(array($id));

        $redirection = URL;

        header("location: $redirection/categories");
        exit;
    }
