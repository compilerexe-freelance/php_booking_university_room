<?php
  session_start();
  ob_start();
  require_once('process/config.php');
  include('header.php');
  $_SESSION['menu_active'] = 'active_user';

  if ($_SESSION['login_admin'] != 'success' || empty($_SESSION['login_admin'])) {
    header('location: index.php');
  }

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

  <script>
    var id_booking = 0;
  </script>

  <div class="container">
    <div class="row">
      <div class="col-md" style="padding: 0px 0px 0px 0px;">
        <img src="" alt="" style="width: 100%; height: 250px; background-color: #abc;">
      </div>
    </div>
    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/admin_aside_left.php'); ?>

      <div class="col-md">

        <?php include('components/active_booking_modal.php'); ?>

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

                $sql = "SELECT * FROM tb_booking WHERE status='รออนุมัติ'";
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
                        <td>'.$row['reserve_booking'].'</td>
                      </tr>
                      <tr>
                        <td>วันที่ทำรายการ</td>
                        <td>'.$row['date_booking'].'</td>
                      </tr>
                      <tr>
                        <td>ห้อง/สถานที่</td>
                        <td>'.$row['title'].'</td>
                      </tr>
                      <tr>
                        <td>อุปกรณ์ที่ต้องการ</td>
                        <td>'.$row['device'].'</td>
                      </tr>
                      <tr>
                        <td>หมายเหตุ</td>
                        <td>'.$row['ps'].'</td>
                      </tr>
                      <tr>
                        <td>สมาชิก</td>
                        <td>'.$row['username'].'</td>
                      </tr>
                      <tr>
                        <td>โทรศัพท์</td>
                        <td>'.$row['tel'].'</td>
                      </tr>
                      <tr>
                        <td></td>
                        <td class="text-md-right"><button type="button" class="btn btn-primary" id="btn-modal-'.$row['id'].'">อนุมัติ/ไม่อนุมัติการจอง</button></td>
                      </tr>
                    ';

                    echo '
                      <script>
                        $(document).ready(function() {

                          $("#btn-modal-'.$row['id'].'").on("click", function() {

                            id_booking = '.$row['id'].';
                            $("#status").val("อนุมัติ");
                            $("#comment").val(null);
                            $("#myModalActiveBooking").modal("show");

                          }); // end submit

                        });
                      </script>
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

  <script>
    $(document).ready(function() {

      $("#btn-submit").on("click", function() {

        $.post("process/ajax_active_booking.php",
        {
          id: id_booking,
          status: $("#status").val(),
          comment: $("#comment").val()

        },function(data, status) {
          console.log("Data: " + data + "\nStatus: " + status);
          if (status == "success") {
            location.reload();
          }
        });

      }); // end submit

    });
  </script>

<?php include('footer.php'); ?>
