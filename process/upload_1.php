<?php

$filename_1 = basename($_FILES["upload_1"]["name"]);
$target_file_1 = $target_dir . basename($_FILES["upload_1"]["name"]);
$uploadOk_1 = 1;
$imageFileType_1 = pathinfo($target_file_1,PATHINFO_EXTENSION);

$random_1 = rand(1000000,9999999);
$random_1 = $random_1.".".pathinfo($target_file_1,PATHINFO_EXTENSION);
$random_path_1 = $target_dir.$random_1;

// Check if image file is a actual image or fake image

$check_1 = getimagesize($_FILES["upload_1"]["tmp_name"]);
if($check_1 !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk_1 = 1;
} else {
    // echo "File is not an image.";
    $uploadOk_1 = 0;
}

// Check if file already exists
if (file_exists($target_file_1)) {
    // echo "Sorry, file already exists.";
    $uploadOk_1 = 0;
}
// Check file size
if ($_FILES["upload_1"]["size"] > 500000) {
    // echo "Sorry, your file is too large.";
    $uploadOk_1 = 0;
}
// Allow certain file formats
if($imageFileType_1 != "jpg" && $imageFileType_1 != "png" && $imageFileType_1 != "jpeg"
&& $imageFileType_1 != "gif" ) {
    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk_1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk_1 == 0) {
    // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["upload_1"]["tmp_name"], $random_path_1)) {
        // echo "The file ". basename( $_FILES["upload_1"]["name"]). " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
}

?>
