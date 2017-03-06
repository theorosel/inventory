<?php

    // Routing
    switch ($url[1]) {

        case '':
            $page = 'list';
            $title_page = 'Products - list';
            break;

        case 'list':
            $page = 'list';
            $title_page = 'Products - list';
            break;

        case 'add':
            $page = 'add';
            $title_page = 'Products - Add';
            break;

        case 'edit':
            $page = 'edit';
            $id   = $url[2];
            $title_page = 'Products - Edit';
            break;

        default:
            break;
    }

    include("includes/handle_products_$page.php");
    include("views/pages/products_$page.php");
?>
