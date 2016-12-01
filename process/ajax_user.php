<?php
session_start();
require_once('config.php');

$id = $_POST['id'];

$con = new mysqli($servername, $db_username, $db_password, $dbname);

if ($con->connect_error) {
	echo "Failed to connect to MySQL";
}

mysqli_set_charset($con,"utf8");

$sql = "SELECT * FROM tb_user WHERE id='$id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {

    $idcard = $row['idcard'];
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $department = $row['department'];
    $career = $row['career'];
    $position = $row['position'];
    $address = $row['address'];
    $tel = $row['tel'];
    $username = $row['username'];

    echo '{
      "idcard":"'.$idcard.'",
      "fullname":"'.$firstname.' '.$lastname.'",
			"department":"'.$department.'",
			"career":"'.$career.'",
			"position":"'.$position.'",
      "address":"'.$address.'",
      "tel":"'.$tel.'",
      "username":"'.$username.'"
    }';

	}
}

?>
