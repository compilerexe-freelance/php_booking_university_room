<?php
session_start();
require_once('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$con = new mysqli($servername, $db_username, $db_password, $dbname);

if ($con->connect_error) {
	echo "Failed to connect to MySQL";
}

$sql = "SELECT username, password FROM tb_user WHERE username='$username' AND password='$password' ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		//echo "username: ".$row["login"]."<br>"."password: ".$row["pass"];

			if ($username == $row['username'] && $password == $row['password']) {
        $_SESSION['login'] = 'success';
        $_SESSION['username'] = $username;
				header('location: ../place.php');
			}

	}
} else {
	header('location: ../place.php');
}

?>
