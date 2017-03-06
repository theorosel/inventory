<?php

    // Include config
    include('config.php');

    // Include functions
    include('includes/functions.php');

    // Get url and and explode it with '/' separator
    $url = isset($_GET['url']) ? trim($_GET['url']) : '' ;
    $url = explode('/', $url);

    // Routing
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

    include('views/partials/header.php');
    include("views/pages/$page.php");
    include('views/partials/footer.php');
