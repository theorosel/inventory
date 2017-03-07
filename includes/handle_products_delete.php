<?php

    //Product query with id param
    $prepare = $db->prepare('SELECT * FROM items WHERE id = ?');
    $prepare->execute(array($id));
    $item = $prepare->fetch();


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
