<?php
  session_start();
  ob_start();
  include('header.php');
  require_once('process/config.php');
  $_SESSION['menu_active'] = 'all_booking';

  if ($_SESSION['login_admin'] != 'success' || empty($_SESSION['login_admin'])) {
    header('location: index.php');
  }

?>

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

        <?php include('components/booking_modal.php'); ?>
        <?php include('components/edit_booking_modal.php'); ?>
        <?php include('components/delete_booking_modal.php'); ?>

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

              $con = new mysqli($servername, $db_username, $db_password, $dbname);

              if ($con->connect_error) {
                echo "Failed to connect to MySQL";
              }

              $sql = "SELECT * FROM tb_booking";
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
                      <td class="align-middle text-md-center"><button type="button" class="btn btn-warning" id="btn-editbooking-'.$row['id'].'">แก้ไข</button></td>
                      <td class="align-middle text-md-center"><button type="button" class="btn btn-danger" id="btn-deletebooking-'.$row['id'].'">ยกเลิก</button></td>
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

                        $("#btn-editbooking-'.$row['id'].'").on("click", function() {
                          $.post("process/ajax_booking.php",
                          {
                            id: '.$row['id'].'
                          },function(data, status) {
                            console.log("Data: " + data + "\nStatus: " + status);
                            if (status == "success") {
                              var obj = jQuery.parseJSON(data);

                              $("#update_id").val('.$row['id'].');
                              $("#edit_booking_title").text(obj.title);
                              $("#my_booking_title").val(obj.title);
                              $("#edit_booking_reserve").val(obj.normal_reserve_booking);
                              $("#edit_booking_start_time").val(obj.normal_start_time);
                              $("#edit_booking_end_time").val(obj.normal_end_time);
                              $("#edit_booking_date").val(obj.date_booking);
                              $("#edit_booking_number_people").val(obj.number_people);
                              $("#edit_booking_device").val(obj.device);
                              $("#edit_booking_ps").val(obj.ps);
                              $("#edit_booking_name").text(obj.name);
                              $("#edit_booking_tel").text(obj.tel);

                              $("#myModalEditBooking").modal("show")
                            }
                          });
                        });

                        $("#btn-deletebooking-'.$row['id'].'").on("click", function() {
                          $.post("process/ajax_booking.php",
                          {
                            id: '.$row['id'].'
                          },function(data, status) {
                            console.log("Data: " + data + "\nStatus: " + status);
                            if (status == "success") {
                              var obj = jQuery.parseJSON(data);

                              $("#link_delete_booking").attr("href", "process/delete_booking.php?id='.$row['id'].'");
                              $("#delete_booking_status").text(obj.status);
                              $("#delete_booking_title").text(obj.title);
                              $("#delete_booking_reserve").text(obj.reserve_booking);
                              $("#delete_booking_date").text(obj.date_booking);
                              $("#delete_booking_device").text(obj.device);
                              $("#delete_booking_ps").text(obj.ps);
                              $("#delete_booking_name").text(obj.name);
                              $("#delete_booking_tel").text(obj.tel);

                              $("#myModalDeleteBooking").modal("show")
                            }
                          });
                        });


                      });
                    </script>
                  ';

              }

            ?>
          </tbody>
        </table>

      </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
