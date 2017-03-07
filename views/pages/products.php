<?php

    // Routing
    switch ($url[1]) {

        case '':
            $page_action = 'list';
            $title_page = 'Products - list';
            break;

        case 'list':
            $page_action = 'list';
            $title_page = 'Products - list';
            break;

        case 'add':
            $page_action = 'add';
            $title_page = 'Products - Add';
            break;

        case 'edit':
            $page_action = 'edit';
            $id   = $url[2];
            $title_page = 'Products - Edit';
            break;

        case 'delete':
            $page_action = 'delete';
            $id   = $url[2];
            $title_page = 'Products - Delete';
            break;

        default:
            break;
    }

    include("includes/handle_products_$page_action.php");
    include('views/partials/header.php');
    include("views/pages/products_$page_action.php");
    include('views/partials/footer.php');
?>
