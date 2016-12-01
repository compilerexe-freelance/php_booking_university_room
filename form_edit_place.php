<?php
session_start();
require_once('process/config.php');
include('header.php');
$_SESSION['menu_active'] = 'manage_place';

$con = new mysqli($servername, $db_username, $db_password, $dbname);

if ($con->connect_error) {
  echo "Failed to connect to MySQL";
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
    <div class="row">
      <div class="col-md" style="padding: 0px 0px 0px 0px;">
        <img src="" alt="" style="width: 100%; height: 250px; background-color: #abc;">
      </div>
    </div>
    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/admin_aside_left.php'); ?>

      <div class="col-md">

        <div class="col-md" style="//border: 1px solid #abc;">
          <div style="text-align: right;">
            <span>สวัสดีคุณ Admin</span><br>
            <a href="logout.php">ออกจากระบบ</a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px; margin-top: 20px;">

          <div class="col-md">

            <form action="process/update_place.php" method="post" enctype="multipart/form-data">

              <?php

                $id = $_GET['id'];

                $sql = "SELECT image1, image2, image3, detail, price FROM tb_place WHERE id = '$id'";
                $result = $con->query($sql);

                while ($row = $result->fetch_assoc()) {

                    echo '
                    <div class="col-md-4" style="padding: 0px 0px 0px 0px;">
                      <img src="process/uploads/'.$row['image1'].'" alt="" class="rounded" style="width: 90%; height: 150px; margin-bottom: 10px;">
                      <input type="file" name="upload_1">
                    </div>
                    <div class="col-md-4" style="padding: 0px 0px 0px 0px;">
                      <img src="process/uploads/'.$row['image2'].'" alt="" class="rounded" style="width: 90%; height: 150px; margin-bottom: 10px;">
                      <input type="file" name="upload_2">
                    </div>
                    <div class="col-md-4" style="padding: 0px 0px 0px 0px; margin-bottom: 20px;">
                      <img src="process/uploads/'.$row['image3'].'" alt="" class="rounded" style="width: 90%; height: 150px; margin-bottom: 10px;">
                      <input type="file" name="upload_3">
                    </div>
                    ';

                    echo '
                      <input type="hidden" name="id" value="'.$id.'">
                      <textarea name="detail" rows="15" cols="80" class="form-control">'.$row['detail'].'</textarea>
                    ';

              			echo '<br>
                      <div style="text-align: left;">
                        ค่าบริการ/วัน <input type="text" name="price" class="form-control" value="'.$row['price'].'">
                      </div>

                    ';

              	}

              ?>

              <div style="text-align: right; margin-top: 20px;">
                <button type="submit" class="btn btn-success" style="width: 20%;">บันทึก</button>
                <a href="manage_place.php"><button type="button" class="btn btn-danger" style="width: 20%;">ยกเลิก</button></a>
              </div>

            </form>

          </div>

        </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
