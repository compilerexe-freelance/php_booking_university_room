<?php
session_start();
require_once('config.php');

$id = $_POST['id'];

$con = new mysqli($servername, $db_username, $db_password, $dbname);

if ($con->connect_error) {
	echo "Failed to connect to MySQL";
}

$sql = "SELECT * FROM tb_booking WHERE id='$id'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {

    // $_SESSION['ajax_title'] = $row['title'];
    // echo $_SESSION['ajax_title'];

    $title = $row['title'];
    $reserve_booking = $row['reserve_booking'];
    $start_time = $row['start_time'];
    $end_time = $row['end_time'];
    $date_booking = $row['date_booking'];
    $number_people = $row['number_people'];
    $device = $row['device'];
    $ps = $row['ps'];
    $name = $row['name'];
    $tel = $row['tel'];
    $status = $row['status'];

    echo '{
      "title":"'.$title.'",
      "reserve_booking":"'.$reserve_booking.' '.$start_time.'-'.$end_time.'",
      "date_booking":"'.$date_booking.'",
      "number_people":"'.$number_people.'",
      "device":"'.$device.'",
      "ps":"'.$ps.'",
      "name":"'.$name.'",
      "tel":"'.$tel.'",
      "status":"'.$status.'"
    }';

    // echo '{
    //   "title":"'.$title.'",
    //   "reserve_booking":"'.$reserve_booking.'",
    //   "start_time":"'.$start_time.'",
    //   "end_time":"'.$end_time.'",
    //   "date_booking":"'.$date_booking.'",
    //   "number_people":"'.$number_people.'",
    //   "device":"'.$device.'",
    //   "ps":"'.$ps.'",
    //   "name":"'.$name.'",
    //   "tel":"'.$tel.'"
    // }';

    // echo "{'title':'$title','reserve_booking':'$reserve_booking','start_time':'$start_time','end_time':'$end_time','date_booking':'$date_booking','number_people':'$number_people','device':'$device','ps':'$ps','name':'$name','tel':'$tel','status':'$status'}";

	}
}

?>
