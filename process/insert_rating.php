<?php
session_start();
require_once('config.php');

$score_1 = $_POST['score_1'];
$score_2 = $_POST['score_2'];
$score_3 = $_POST['score_3'];
$score_4 = $_POST['score_4'];
$score_5 = $_POST['score_5'];
$score_6 = $_POST['score_6'];
$score_7 = $_POST['score_7'];
$score_8 = $_POST['score_8'];
$score_9 = $_POST['score_9'];
$comment = $_POST['comment'];

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tb_question (
  question_one, question_two, question_three, question_four,
  question_five, question_six, question_seven, question_eight,
  question_nine, comment
) VALUES (
  '$score_1', '$score_2', '$score_3', '$score_4',
  '$score_5', '$score_6', '$score_7', '$score_8',
  '$score_9', '$comment'
)";

if ($conn->query($sql) === TRUE) {
    header('location: ../rating.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
