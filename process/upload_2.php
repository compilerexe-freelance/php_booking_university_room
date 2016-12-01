<?php

$filename_2 = basename($_FILES["upload_2"]["name"]);
$target_file_2 = $target_dir . basename($_FILES["upload_2"]["name"]);
$uploadOk_2 = 1;
$imageFileType_2 = pathinfo($target_file_2,PATHINFO_EXTENSION);

$random_2 = rand(1000000,9999999);
$random_2 = $random_2.".".pathinfo($target_file_2,PATHINFO_EXTENSION);
$random_path_2 = $target_dir.$random_2;

// Check if image file is a actual image or fake image

$check_2 = getimagesize($_FILES["upload_2"]["tmp_name"]);
if($check_2 !== false) {
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk_2 = 1;
} else {
    // echo "File is not an image.";
    $uploadOk_2 = 0;
}

// Check if file already exists
if (file_exists($target_file_2)) {
    // echo "Sorry, file already exists.";
    $uploadOk_2 = 0;
}
// Check file size
if ($_FILES["upload_2"]["size"] > 500000) {
    // echo "Sorry, your file is too large.";
    $uploadOk_2 = 0;
}
// Allow certain file formats
if($imageFileType_2 != "jpg" && $imageFileType_2 != "png" && $imageFileType_2 != "jpeg"
&& $imageFileType_2 != "gif" ) {
    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk_2 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk_2 == 0) {
    // echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["upload_2"]["tmp_name"], $random_path_2)) {
        // echo "The file ". basename( $_FILES["upload_1"]["name"]). " has been uploaded.";
    } else {
        // echo "Sorry, there was an error uploading your file.";
    }
}

?>
