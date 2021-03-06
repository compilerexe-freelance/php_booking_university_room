<?php
require_once('process/config.php');
include('header.php');
$_SESSION['menu_active'] = 'manage_place';

if ($_SESSION['login_admin'] != 'success' || empty($_SESSION['login_admin'])) {
  header('location: index.php');
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

      <?php include('components/admin_aside_left.php'); ?>

      <div class="col-md">

        <div class="card card-block">

        <div class="col-md" style="//border: 1px solid #abc;">
          <div style="text-align: right;">
            <span>สวัสดีคุณ Admin</span><br>
            <a href="logout.php">ออกจากระบบ</a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px; margin-top: 20px;">

          <div class="col-md">

            <div class="col-md-12" style="padding: 0 0 0 0;">
              <a href="add_place.php"><button type="button" class="btn btn-success">เพิ่มสถานที่</button></a>
              <hr>
            </div>

            <?php

              $id = $_GET['id'];

              $con = new mysqli($servername, $db_username, $db_password, $dbname);

              if ($con->connect_error) {
                echo "Failed to connect to MySQL";
              }

              mysqli_set_charset($con,"utf8");

              $sql = "SELECT id, title, image1, image2, image3, detail, price FROM tb_place";
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

            			echo $row['detail'];

                  echo '
                    <br>
                    <div style="text-align: right;">
                      ค่าบริการ/วัน '.number_format($row['price']).' บาท
                    </div>

                    <div style="text-align: left;">
                      <a href="form_edit_place.php?id='.$row['id'].'"><button type="button" class="btn btn-info" style="width: 10%;">แก้ไข</button></a>
                      <a href="process/delete_place.php?id='.$row['id'].'"><button type="button" class="btn btn-danger" style="width: 10%;">ลบ</button></a>
                    </div>
                  ';

                  echo '<hr>';
            	}

            ?>

          </div>

        </div>

      </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
