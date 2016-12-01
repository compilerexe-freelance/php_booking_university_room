<?php
session_start();
require_once('config.php');

$id = $_POST['id'];
$title = $_POST['title'];
$reserve_booking = $_POST['reserve_booking'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$date_booking = $_POST['date_booking'];
$number_people = $_POST['number_people'];
$device = $_POST['device'];
$ps = $_POST['ps'];
$name = $_POST['name'];
$tel = $_POST['tel'];

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn,"utf8");

$sql = "UPDATE tb_booking SET
  title = '$title', reserve_booking = '$reserve_booking',
  start_time = '$start_time', end_time = '$end_time',
  date_booking = '$date_booking', number_people = '$number_people',
  device = '$device', ps = '$ps' WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    header('location: ../list_booking.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
