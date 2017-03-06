<?php

    // Routing
    switch ($url[1]) {

        case '':
            $page = 'list';
            $title_page = 'Categories - list';
            break;

        case 'list':
            $page = 'list';
            $title_page = 'Categories - list';
            break;

        case 'add':
            $page = 'add';
            $title_page = 'Categories - Add';
            break;

        case 'edit':
            $page = 'edit';
            $id   = $url[2];
            $title_page = 'Categories - Edit';
            break;

        default:
            break;
    }

    include("includes/handle_categories_$page.php");
    include("views/pages/categories_$page.php");
