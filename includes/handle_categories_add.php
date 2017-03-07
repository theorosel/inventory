<?php

    // categories query
    $categories = $db->query('SELECT * FROM categories')->fetchAll();

    // Variables declaration
    $title         ='';
    $description   ='';

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

            $prepare = $db->prepare("INSERT INTO categories (title, description) VALUES (:title, :description)");

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

?>
