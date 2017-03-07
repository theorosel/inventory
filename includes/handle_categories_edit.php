<?php

    // category query with id param
    $prepare = $db->prepare('SELECT * FROM categories WHERE id = ?');
    $prepare->execute(array($id));
    $item = $prepare->fetch();

    //errors array
    $error_messages   = array();
    $success_messages = array();

    // data sent
    if (!empty($_POST)) {

        $title              = isset($_POST['title']) ? trim($_POST['title']) : '';
        $description        = isset($_POST['description']) ? trim($_POST['description']) : '';

        // errors
        if (empty($title)) {
            $error_messages['title'] = 'Error Title : Missing value';
        }

        if (empty($description)) {
            $error_messages['description'] = 'Error Description : Missing value';
        }


        //no error
        if (empty($error_messages)) {

            $prepare = $db->prepare("UPDATE categories SET title=:title, description=:description WHERE id=:id");

            $prepare->bindParam('id', $id);
            $prepare->bindParam('title', $title);
            $prepare->bindParam('description', $description);

            $prepare->execute();

            // success message
            $success_messages[] = 'Your product is update';

            $redirection = URL;
            
            header("location: $redirection/categories");
            exit;
        }
    }

    // no data sent
    else {
        $title              = $item->title;
        $description        = $item->description;
    }
?>
