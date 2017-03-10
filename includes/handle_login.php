<?php

    $error_messages   = array();

    // Variables declaration
    $username = '';
    $password = '';

    // No error
    if (!empty($_POST)) {

        $username          = isset($_POST['username']) ? $_POST['username'] : '';
        $password          = isset($_POST['password']) ? $_POST['password'] : '';


        if (empty($username)) {
            $error_messages['username'] = 'Please enter correct username and password';
        }

        if (empty($password)) {
            $error_messages['password'] = 'Please enter correct username and password';
        }


        $password = hash('sha256',SALT.$_POST['password']);

        // Users query
        $prepare = $db->prepare("SELECT * FROM users WHERE username =:username");

        $prepare->bindParam('username', $username);
        $prepare->execute();

        $result = $prepare->fetch();

        // Password check
        if ($result && $result->password == $password) {

            $_SESSION['user'] = $username;
            $redirection = URL;

            header("location: $redirection");
            exit;
        }

        // Error
        else {
            $error_messages['username'] = 'Please enter correct username and password';
        }
    }
