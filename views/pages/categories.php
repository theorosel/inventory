<?php

    // Routing
    switch ($url[1]) {

        case '':
            $page_action = 'list';
            $title_page = 'Categories - list';
            break;

        case 'list':
            $page_action = 'list';
            $title_page = 'Categories - list';
            break;

        case 'add':
            $page_action = 'add';
            $title_page = 'Categories - Add';
            break;

        case 'edit':
            $page_action = 'edit';
            $id   = $url[2];
            $title_page = 'Categories - Edit';
            break;

        case 'delete':
            $page_action = 'delete';
            $id   = $url[2];
            $title_page = 'Categories - Delete';
            break;

        default:
            break;
    }

    include("includes/handle_categories_$page_action.php");
    include('views/partials/header.php');
    include("views/pages/categories_$page_action.php");
    include('views/partials/footer.php');
