<?php
session_start();
require_once('config.php');

$con = new mysqli($servername, $db_username, $db_password, $dbname);

if ($con->connect_error) {
	echo "Failed to connect to MySQL";
}

$id = $_POST['id'];
$status = $_POST['status'];
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

$active = 0;
if ($status == 'อนุมัติ') {
  $active = 1;
} else {
  $sql = "DELETE FROM tb_user WHERE id='$id'";
  $con->query($sql);
  exit(0);
}

$sql = "UPDATE tb_user SET
        idcard='$idcard',
        firstname='$firstname',
        lastname='$lastname',
        department='$department',
        career='$career',
        position='$position',
        address='$address',
        tel='$tel',
        username='$username',
        password='$password',
        active='$active'
        WHERE id='$id'";

$result = $con->query($sql);

// echo 'process complete.';
echo '{
  "status":"'.$status.'",
  "idcard":"'.$idcard.'",
  "fullname":"'.$firstname.' '.$lastname.'",
  "department":"'.$department.'",
  "career":"'.$career.'",
  "position":"'.$position.'",
  "address":"'.$address.'",
  "tel":"'.$tel.'",
  "username":"'.$username.'",
  "password":"'.$password.'"
}';


?>
