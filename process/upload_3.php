<?php

$filename_3 = basename($_FILES["upload_3"]["name"]);
$target_file_3 = $target_dir . basename($_FILES["upload_3"]["name"]);
$uploadOk_3 = 1;
$imageFileType_3 = pathinfo($target_file_3,PATHINFO_EXTENSION);

$random_3 = rand(1000000,9999999);
$random_3 = $random_3.".".pathinfo($target_file_3,PATHINFO_EXTENSION);
$random_path_3 = $target_dir.$random_3;

// Check if image file is a actual image or fake image

$check_3 = getimagesize($_FILES["upload_3"]["tmp_name"]);
if($check_3 !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk_3 = 1;
} else {
    // echo "File is not an image.";
    $uploadOk_3 = 0;
}

// Check if file already exists
if (file_exists($target_file_3)) {
    // echo "Sorry, file already exists.";
    $uploadOk_3 = 0;
}
// Check file size
if ($_FILES["upload_3"]["size"] > 500000) {
    // echo "Sorry, your file is too large.";
    $uploadOk_3 = 0;
}
// Allow certain file formats
if($imageFileType_3 != "jpg" && $imageFileType_3 != "png" && $imageFileType_3 != "jpeg"
&& $imageFileType_3 != "gif" ) {
    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk_3 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk_3 == 0) {
    // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["upload_3"]["tmp_name"], $random_path_3)) {
        // echo "The file ". basename( $_FILES["upload_1"]["name"]). " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
}

?>
