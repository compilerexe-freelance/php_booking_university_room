<?php
require_once('config.php');

$id = $_GET['id'];

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM tb_booking WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    header('location: ../list_booking.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
