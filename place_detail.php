<?php
session_start();

if ($_SESSION['login'] == 'fail' || $_SESSION['login'] == null) {
  $_SESSION['status'] = 'คุณต้องเข้าสู่ระบบก่อนถึงจะดูรายละเอียดและจองได้';
  header('location: place.php');
}

?>
