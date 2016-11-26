<?php
session_start();
require_once('config.php');

$idcard = $_POST['idcard'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$department = $_POST['department'];
$career = $_POST['career'];
$position = $_POST['position'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$username = $_POST['username'];
$password = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tb_user (
  idcard, firstname, lastname, department,
  career, position, address, tel, username, password
) VALUES (
  '$idcard', '$firstname', '$lastname', '$department',
  '$career', '$position', '$address', '$tel', '$username', '$password'
)";

if ($conn->query($sql) === TRUE) {
    $_SESSION['status'] = 'สมัครสมาชิกสำเร็จ';
    header('location: ../index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
