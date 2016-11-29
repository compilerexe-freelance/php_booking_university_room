<?php
  session_start();
  require_once('process/config.php');
  include('header.php');
  $_SESSION['menu_active'] = 'active_user';

  $con = new mysqli($servername, $db_username, $db_password, $dbname);

  if ($con->connect_error) {
    echo "Failed to connect to MySQL";
  }
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
    <div class="row">
      <div class="col-md" style="padding: 0px 0px 0px 0px;">
        <img src="" alt="" style="width: 100%; height: 250px; background-color: #abc;">
      </div>
    </div>
    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/admin_aside_left.php'); ?>

      <div class="col-md">

        <?php include('components/booking_modal.php'); ?>

        <div class="col-md" style="//border: 1px solid #abc;">
          <div style="text-align: right;">
            <span>สวัสดีคุณ Admin</span><br>
            <a href="logout.php">ออกจากระบบ</a>
          </div>
        </div>

        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="main.php">รายชื่อสมาชิก</a>
          </li>
        </ul>

        <div class="">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>

              <?php

                $sql = "SELECT * FROM tb_user";
                $result = $con->query($sql);

                while ($row = $result->fetch_assoc()) {

                  if ($row['active'] == 0) {
                    echo '
                      <tr>
                        <td>สถานะ</td>
                        <td>รออนุมัติ</td>
                      </tr>
                      <tr>
                        <td>วันที่จอง</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>วันที่ทำรายการ</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>ห้อง/สถานที่</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>อุปกรณ์ที่ต้องการ</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>หมายเหตุ</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>สมาชิก</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td>โทรศัพท์</td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-md-right"><button type="button" class="btn btn-secondary">อนุมัติ/ไม่อนุมัติการจอง</button></td>
                      </tr>
                    ';
                  }

                }

              ?>

            </tbody>
          </table>
        </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
