<?php
session_start();
require_once('config.php');

$title = $_POST['title'];
$detail = $_POST['detail'];
$price = $_POST['price'];

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn,"utf8");

$sql = "INSERT INTO tb_place (title, detail, price)
        VALUES ('$title', '$detail', '$price')";
$conn->query($sql);

$id = mysqli_insert_id($conn);

$target_dir = "uploads/";

require_once('upload_1.php');
require_once('upload_2.php');
require_once('upload_3.php');

// end upload

if ($uploadOk_1 == 1) {
  $sql = "UPDATE tb_place SET
          image1 = '$random_1'
          WHERE id = '$id'
         ";
 $conn->query($sql);
}

if ($uploadOk_2 == 1) {
  $sql = "UPDATE tb_place SET
          image2 = '$random_2'
          WHERE id = '$id'
         ";
 $conn->query($sql);
}

if ($uploadOk_3 == 1) {
  $sql = "UPDATE tb_place SET
          image3 = '$random_3'
          WHERE id = '$id'
         ";
 $conn->query($sql);
}

header('location: ../manage_place.php');
exit(0);

$conn->close();

?>
