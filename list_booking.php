<?php
  ob_start();
  include('header.php');
  require_once('process/config.php');
  $_SESSION['menu_active'] = 'list_booking';

  if ($_SESSION['login'] == 'fail' || $_SESSION['login'] == null) {
    $_SESSION['status'] = 'คุณต้องเข้าสู่ระบบก่อนถึงจะดูรายละเอียดและจองได้';
    header('location: place.php');
  }

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

        <?php include('components/booking_modal.php'); ?>

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

              if ($_SESSION['login'] == 'success') {

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
                        <td class="align-middle text-md-center"><button type="button" class="btn btn-success" id="btn-booking-'.$row['id'].'">แสดง</button></td>
                        <td class="align-middle text-md-center"><button type="button" class="btn btn-warning">แก้ไข</button></td>
                        <td class="align-middle text-md-center"><button type="button" class="btn btn-danger">ยกเลิก</button></td>
                      </tr>
                    ';

                    echo '
                      <script>
                        $(document).ready(function() {
                          $("#btn-booking-'.$row['id'].'").on("click", function() {
                            $.post("process/ajax_booking.php",
                            {
                              id: '.$row['id'].'
                            },function(data, status) {
                              console.log("Data: " + data + "\nStatus: " + status);
                              if (status == "success") {
                                var obj = jQuery.parseJSON(data);

                                $("#booking_status").text(obj.status);
                                $("#booking_title").text(obj.title);
                                $("#booking_reserve").text(obj.reserve_booking);
                                $("#booking_date").text(obj.date_booking);
                                $("#booking_device").text(obj.device);
                                $("#booking_ps").text(obj.ps);
                                $("#booking_name").text(obj.name);
                                $("#booking_tel").text(obj.tel);

                                $("#myModalBooking").modal("show")
                              }
                            });
                          });
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

<?php include('footer.php'); ?>
