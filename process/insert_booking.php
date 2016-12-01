<?php
session_start();
require_once('config.php');

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
$username = $_SESSION['username'];

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_set_charset($conn,"utf8");

/* insert income */

// search price
$sql = "SELECT price FROM tb_place WHERE title = '$title'";
$result = $conn->query($sql);
$search_price = '';

while ($row = $result->fetch_assoc()) {
  $search_price = $row['price'];
}

$sql = "INSERT INTO tb_income (title, income, username, reserve_booking, status) VALUES ('$title', '$search_price', '$username', '$reserve_booking', 0)";
$conn->query($sql);
/* end insert income */


$sql = "INSERT INTO tb_booking (
  title, reserve_booking, start_time, end_time,
  date_booking, number_people, device, ps, name, tel, username, status
) VALUES (
  '$title', '$reserve_booking', '$start_time', '$end_time',
  '$date_booking', '$number_people', '$device', '$ps', '$name', '$tel', '$username', 'รออนุมัติ'
)";

if ($conn->query($sql) === TRUE) {
    header('location: ../list_booking.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
