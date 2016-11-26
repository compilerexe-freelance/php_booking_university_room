<?php
  include('header.php');
  require_once('process/config.php');
  $_SESSION['menu_active'] = 'list_booking';
?>

  <div class="container">
    <div class="row">
      <div class="col-md" style="padding: 0px 0px 0px 0px;">
        <img src="" alt="" style="width: 100%; height: 250px; background-color: #abc;">
      </div>
    </div>
    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/aside_left.php'); ?>

      <div class="col-md">

        <?php include('components/aside_right.php'); ?>

        <table class="table table-bordered" style="margin-top: 20px;">
          <thead>
            <tr>
              <th style="text-align: center;">สถานะ</th>
              <th style="text-align: center;">วันที่จอง</th>
              <th style="text-align: center;">วันที่ทำการจอง</th>
              <th style="text-align: center;">สถานที่</th>
              <th style="text-align: center;">รายละเอียด</th>
              <th style="text-align: center;">แก้ไข</th>
              <th style="text-align: center;">ยกเลิกการจอง</th>
            </tr>
          </thead>
          <tbody>
            <?php

              $myname = $_SESSION['name'];

              $con = new mysqli($servername, $db_username, $db_password, $dbname);

              if ($con->connect_error) {
                echo "Failed to connect to MySQL";
              }

              $sql = "SELECT * FROM tb_booking WHERE name='$myname'";
              $result = $con->query($sql);

              while ($row = $result->fetch_assoc()) {

                  echo '
                    <tr>
                      <td class="align-middle text-md-center">'.$row['status'].'</td>
                      <td class="align-middle text-md-center">
                        '.$row['reserve_booking'].'<br>
                        '.$row['start_time'].'-'.$row['end_time'].'
                      </td>
                      <td class="align-middle text-md-center">'.$row['date_booking'].'</td>
                      <td class="align-middle text-md-center">'.$row['title'].'</td>
                      <td class="align-middle text-md-center"><button type="button" class="btn btn-success">แสดง</button></td>
                      <td class="align-middle text-md-center"><button type="button" class="btn btn-warning">แก้ไข</button></td>
                      <td class="align-middle text-md-center"><button type="button" class="btn btn-danger">ยกเลิก</button></td>
                    </tr>
                  ';

              }

            ?>
          </tbody>
        </table>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
