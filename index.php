<?php

    // Include config
    include('config.php');

    // Include functions
    include('includes/functions.php');

    // Get url and and explode it with '/' separator
    $url = isset($_GET['url']) ? trim($_GET['url']) : '' ;
    $url = explode('/', $url);


    // API
    if ($url[0] == 'api') {
        if(isset($url[1])) {

            $file = $url[1];

            if(file_exists("includes/api/$file.php")) {
                include("includes/api/$file.php");
            }

            else {
                header("HTTP/1.0 404 Not Found");
            }
        }

    }

    // Routing
    else {
        switch ($url[0]) {

            case '':
                $page = 'products';
                $title_page = 'Products';
                break;

            case 'products':
                $page = 'products';
                $title_page = 'Products';
                break;

            case 'categories':
                $page = 'categories';
                $title_page = 'categories';
                break;

            case 'reports':
                $page = 'reports';
                $title_page = 'Reports';
                break;

            default:
                break;
        }

        include("views/pages/$page.php");
    }
