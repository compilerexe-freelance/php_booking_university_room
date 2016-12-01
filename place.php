<?php
  include('header.php');
  require_once('process/config.php');
  $_SESSION['menu_active'] = 'place_detail';

  if ($_SESSION['status'] == 'คุณต้องเข้าสู่ระบบก่อนถึงจะดูรายละเอียดและจองได้') {
    echo "<script>swal('','คุณต้องเข้าสู่ระบบก่อนถึงจะดูรายละเอียดและจองได้')</script>";
    $_SESSION['status'] = null;
  }

  if ($_SESSION['status'] == 'คุณต้องเข้าสู่ระบบก่อนถึงจะประเมินความพึ่งพอใจได้') {
    echo "<script>swal('','คุณต้องเข้าสู่ระบบก่อนถึงจะประเมินความพึ่งพอใจได้')</script>";
    $_SESSION['status'] = null;
  }

  $con = new mysqli($servername, $db_username, $db_password, $dbname);

  if ($con->connect_error) {
    echo "Failed to connect to MySQL";
  }

  mysqli_set_charset($con,"utf8");
?>

  <style>
    table, tr, th {
      border-top: 0px !important;
      border-bottom: 0px !important;
    }
    table, tr, td {
      border-top: 0px !important;
      border-bottom: 0px !important;
    }
  </style>

  <div class="container">

    <?php include('banner.php'); ?>

    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/aside_left.php'); ?>

      <div class="col-md">

        <div class="card card-block">

        <div class="col-md-8" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
        <?php

          $sql = "SELECT id, title, image1 FROM tb_place";
          $result = $con->query($sql);

          while ($row = $result->fetch_assoc()) {
            echo '
                <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
                  <div class="col-md-4" style="//padding: 0px 0px 0px 0px;">
                    <img src="process/uploads/'.$row['image1'].'" alt="" class="rounded" style="width: 100%; height: 150px;">
                  </div>
                  <div class="col-md-8" style="//border: 1px solid red;">
                    <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
                    <span>'.$row['title'].'</span><br><br>
                    <a href="place_detail.php?id='.$row['id'].'"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
                  </div>
                </div>
            ';
          }

        ?>
        </div>

        <?php include('components/aside_right.php'); ?>

      </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
