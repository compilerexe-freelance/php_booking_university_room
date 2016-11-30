<?php
session_start();
require_once('config.php');

$con = new mysqli($servername, $db_username, $db_password, $dbname);

if ($con->connect_error) {
	echo "Failed to connect to MySQL";
}

$id = $_POST['id'];
$status = $_POST['status'];
$comment = $_POST['comment'];

// $active = 0;
// if ($status == 'อนุมัติ') {
//   $active = 1;
// } else {
//   $sql = "DELETE FROM tb_user WHERE id='$id'";
//   $con->query($sql);
//   exit(0);
// }

$sql = "UPDATE tb_booking SET
        status='$status',
        comment='$comment'
        WHERE id='$id'";

$result = $con->query($sql);

// echo 'process complete.';
echo '{
  "id":"'.$id.'",
  "status":"'.$status.'",
  "comment":"'.$comment.'"
}';


?>
