<?php

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
