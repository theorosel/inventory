<?php


    function is_logged() {
        return isset($_SESSION['user']);
    }

    /*
     * image_check($image : object)
     * Called in handle_product_add.php
     * Check if the image respect some parameters before upload
     */
    function image_check($image) {

        if (empty($image['type'])) {
            return 'Error : Please give a file';
        }

        if (!exif_imagetype($image['tmp_name'])) {
            return 'Error : Please give an image';
        }

        // $image_dimensions = getimagesize($image['tmp_name']);
        // if ($image_dimensions[0] != $image_dimensions[1]) {
        //     return 'Error : Please give a square';
        // }

        if ($image['size'] > 1000000) {
            return 'Error : Your picture is too big (> 1Mo)';
        }

        return true;
    }


    /*
     * excerpt($text : string)
     * Called in handle_products_list.php
     * Return xx characters of the string
     */
    function excerpt($text) {

        $text = trim($text);
        $text_length = strlen($text);

        if ($text_length >= 110) {

            $text = substr($text, 0, 110) . ' ...';

            return $text;
        }

        return $text;
    }


    /*
     * image_upload($image : object)
     * Called in handle_product_add.php
     * Upload image in URL/uploads
     */
    function image_upload($image) {

        $directory  = __DIR__ . '/../uploads/';
        $temp_name  = explode('.', $image['name']);
        $file       = round(microtime(true)) . '.' . end($temp_name);

        $target_file = $directory . $file;

        if (move_uploaded_file($image['tmp_name'], $target_file)) {
            return $file;
        }
        else {
            echo "Error : Couldn't upload the image";
            die;
        }
    }


    /*
     * image_delete($image : string)
     * Called in handle_product_delete.php
     * Remove image in uploads folder according to the path
     */
    function image_delete($image) {

        $directory      = __DIR__ . '/../uploads/';
        $filename       = $image;
        $file           = $directory . $filename;

        if ($file = unlink($file)) {
            return $file;
        }

        else {
            echo "Error : Couldn't delete the image";
            die;
        }
    }


    /*
     * report_upload($query : object)
     * Called in handle_reports_add.php
     * Upload report in URL/uploads
     */
    function report_upload($items) {

        $name           = round(microtime(true)) . '.csv';
        $directory      = __DIR__ . '/../uploads/'. $name;
        $delimiter      = ',';
        $file           = fopen($directory, 'w+');

        $columns_titles = [
            'id',
            'title',
            'description',
            'price',
            'quantity',
            'file',
            'category'
        ];

        foreach ($items as $key => $item) {
            $items[$key] = (array)$items[$key];
        }

        fprintf($file, chr(0xEF).chr(0xBB).chr(0xBF));
        fputcsv($file, $columns_titles, $delimiter);

        foreach($items as $item){
	       fputcsv($file, $item, $delimiter);
        }

        fclose($file);

        return $name;
    }


    /*
     * report_delete($query : object)
     * Called in handle_reports_add.php
     * Upload report in URL/uploads
     */
    function report_delete($file) {

        $directory      = __DIR__ . '/../uploads/';
        $filename       = $file;
        $file           = $directory . $filename;

        if ($file = unlink($file)) {
            return $file;
        }

        else {
            echo "Error : Couldn't delete the report";
            die;
        }
    }
