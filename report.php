<?php
  require_once('process/config.php');
  include('header.php');
  $_SESSION['menu_active'] = 'report';

  if ($_SESSION['login_admin'] != 'success' || empty($_SESSION['login_admin'])) {
    header('location: index.php');
  }

  $con = new mysqli($servername, $db_username, $db_password, $dbname);

  if ($con->connect_error) {
    echo "Failed to connect to MySQL";
  }

  mysqli_set_charset($con,"utf8");
?>

  <style>
    table, tr, th {
      /*border-top: 0px !important;
      border-bottom: 0px !important;*/
      text-align: center;
    }
    table, tr, td {
      /*border-top: 0px !important;
      border-bottom: 0px !important;*/
      text-align: center;
    }
  </style>

  <div class="container">

    <?php include('banner.php'); ?>

    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/admin_aside_left.php'); ?>

      <div class="col-md">

        <div class="card card-block">

        <?php include('components/booking_modal.php'); ?>

        <div class="col-md" style="//border: 1px solid #abc;">
          <div style="text-align: right;">
            <span>สวัสดีคุณ Admin</span><br>
            <a href="logout.php">ออกจากระบบ</a>
          </div>
        </div>

        <div class="">
          <a href="report_place.php"><span>รายงานผลสรุปการขอใช้สถานที่</span></a><br>
          <a href="report_user.php"><span>รายงานผลสรุปจำนวนผู้ใช้งาน</span></a><br>
          <a href="report_rating.php"><span>รายงานผลสรุปการประเมินความพึ่งพอใจ</span></a><br>
          <a href="report_income.php"><span>รายงานผลสรุปรายรับ</span></a>
        </div>

        </div>

        </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
