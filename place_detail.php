<?php
session_start();
require_once('process/config.php');

if ($_SESSION['login'] == 'fail' || $_SESSION['login'] == null) {
  $_SESSION['status'] = 'คุณต้องเข้าสู่ระบบก่อนถึงจะดูรายละเอียดและจองได้';
  header('location: place.php');
} else {
  include('header.php');
  $_SESSION['menu_active'] = 'place_detail';
}

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

        <?php include('components/aside_right.php'); ?>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px; margin-top: 20px;">

          <div class="col-md">
            <?php

              $id = $_GET['id'];

              $con = new mysqli($servername, $db_username, $db_password, $dbname);

              if ($con->connect_error) {
                echo "Failed to connect to MySQL";
              }

              $sql = "SELECT title, image1, image2, image3, detail, price FROM tb_place WHERE id='$id'";
              $result = $con->query($sql);

              while ($row = $result->fetch_assoc()) {

                  echo '
                    <div class="col-md-12" style="padding: 0 0 0 0; font-weight: bold; margin-bottom: 10px;">
                      <span>'.$row['title'].'</span>
                    </div>

                    <div class="col-md-4" style="padding: 0px 0px 0px 0px;">
                      <img src="process/uploads/'.$row['image1'].'" alt="" class="rounded" style="width: 90%; height: 150px;">
                    </div>
                    <div class="col-md-4" style="padding: 0px 0px 0px 0px;">
                      <img src="process/uploads/'.$row['image2'].'" alt="" class="rounded" style="width: 90%; height: 150px;">
                    </div>
                    <div class="col-md-4" style="padding: 0px 0px 0px 0px; margin-bottom: 20px;">
                      <img src="process/uploads/'.$row['image3'].'" alt="" class="rounded" style="width: 90%; height: 150px;">
                    </div>
                  ';

            			echo $row['detail'].'<br><div style="text-align: right;">ค่าบริการ/วัน '.number_format($row['price']).' บาท</div>';

            	}

            ?>

            <div style="text-align: right; margin-top: 20px;">
              <a href="preview.php?id=<?php echo $id; ?>"><button type="button" class="btn btn-success" style="width: 20%;">จอง</button></a>
            </div>

          </div>

        </div>

      </div>

      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
