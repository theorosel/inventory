<?php

// Routing
switch ($url[1]) {

    case '':
        $page_action = 'list';
        $title_page = 'Reports - list';
        break;

    case 'list':
        $page_action = 'list';
        $title_page = 'Reports - list';
        break;

    case 'add':
        $page_action = 'add';
        $title_page = 'Reports - Add';
        break;

    case 'delete':
        $page_action = 'delete';
        $id   = $url[2];
        $title_page = 'Reports - Delete';
        break;

    default:
        break;
}

include("includes/handle_reports_$page_action.php");
include('views/partials/header.php');
include("views/pages/reports_$page_action.php");
include('views/partials/footer.php');
?>
