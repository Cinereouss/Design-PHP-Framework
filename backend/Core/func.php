<?php

class func
{
    public static function formatMoney($number, $fractional = false)
    {
        if ($fractional) {
            $number = sprintf('%.2f', $number);
        }
        while (true) {
            $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
            if ($replaced != $number) {
                $number = $replaced;
            } else {
                break;
            }
        }
        return $number;
    }

    public static function uploadFile($file, $target_dir)
    {
        $time = time();
        $filename =  $time.basename($file["fileupload"]["name"]);
        $target_file = $target_dir.$filename;
        $allowUpload = true;
        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        $maxfilesize = 800000;
        $allowtypes = array('jpg', 'png', 'jpeg', 'gif');


        if (isset($file)) {
            $check = getimagesize($file["fileupload"]["tmp_name"]);
            if ($check !== false) {
                $allowUpload = true;
            } else {
                $allowUpload = false;
            }
        }

// Kiểm tra nếu file đã tồn tại thì không cho phép ghi đè
        if (file_exists($target_file)) {
            $allowUpload = false;
        }
// Kiểm tra kích thước file upload cho vượt quá giới hạn cho phép
        if ($_FILES["fileupload"]["size"] > $maxfilesize) {
            $allowUpload = false;
        }


// Kiểm tra kiểu file
        if (!in_array($imageFileType, $allowtypes)) {
            $allowUpload = false;
        }

// Check if $uploadOk is set to 0 by an error
        if ($allowUpload) {
            if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
                return $filename;
            } else {
                return 'false';
            }
        } else {
            return 'false';
        }
    }
}
?>