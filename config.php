<?php

    // Connexion variables
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'db_inventory');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');

    // Database connexion
    try {
    $driver = "mysql:dbname=". DB_NAME .";host=". DB_HOST;
    $db = new PDO($driver, DB_USER, DB_PASS);

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    catch(PDOException $e) {
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    }

    define('URL', 'http://localhost:8888/');
