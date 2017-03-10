<?php

    //Product query with id param
    $reports = $db->prepare('SELECT * FROM reports WHERE reports.id = ?');

    $reports->execute(array($id));
    $report = $reports->fetch();


    // Variables declaration
    $delete = $_POST['delete'];
    $file   = $report->file;


    if (!empty($delete)) {

        $file = report_delete($file);

        $prepare = $db->prepare('DELETE FROM reports WHERE id = ?');
        $prepare->execute(array($id));

        $redirection = URL;

        header("location: $redirection/reports");
        exit;
    }
