<?php
session_start();
require_once('config.php');

$username = $_POST['txt_username'];
$password = $_POST['txt_password'];

$con = new mysqli($servername, $db_username, $db_password, $dbname);

if ($con->connect_error) {
	echo "Failed to connect to MySQL";
}

$sql = "SELECT username, password FROM tb_admin WHERE username='$username' AND password='$password' ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		//echo "username: ".$row["login"]."<br>"."password: ".$row["pass"];

			if ($username == $row['username'] && $password == $row['password']) {
        $_SESSION['login_admin'] = 'success';
				header('location: ../main.php');
			}

	}
} else {
	header('location: ../index.php');
}

?>
