<?php
  require_once('process/config.php');
  include('header.php');
  $_SESSION['menu_active'] = 'index';

  if ($_SESSION['status'] == 'สมัครสมาชิกสำเร็จ') {
    echo "<script>swal('','สมัครสมาชิกสำเร็จ')</script>";
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
      /*border-top: 0px !important;
      border-bottom: 0px !important;*/
    }
    table, tr, td {
      /*border-top: 0px !important;
      border-bottom: 0px !important;*/
    }
    #calendar_text {
      text-align: right;
    }
    #calendar_result {
      text-align: center;
    }
  </style>

  <div class="container">

    <?php include('banner.php'); ?>

    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/aside_left.php'); ?>

      <div class="col-md">

        <div class="card card-block">

        <span style="color: red;">* หมายเหตุ</span>&ensp;
        <img style="width: 15px; height:15px; background-color: #59b300;">&ensp;
        <span>รายการจองที่ผ่านการอนุมัติ</span>&ensp;
        <img style="width: 15px; height:15px; background-color: #ffff33;">&ensp;
        <span>รายการจองที่รอการอนุมัติ</span>

        <div id='calendar' style="margin-top: 20px;"></div>

        <?php include('components/calendar_modal.php'); ?>

      </div>

      </div>
    </div>
  </div>

  <script>

      $(document).ready(function() {

        $('#calendar').fullCalendar({
            locale: 'th',
            events: [
                // {
                //     id: 'test1',
                //     start: '2016-11-04'
                // }
                <?php

                  $sql = "SELECT * FROM tb_booking";
                  $result = $con->query($sql);

                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      if ($row['status'] == 'อนุมัติ') {
                        echo "
                          {
                            id: \"".$row['id']."\",
                            start: \"".$row['reserve_booking']."\",
                            backgroundColor: '#59b300'
                          },
                        ";
                      } else {
                        echo "
                          {
                            id: \"".$row['id']."\",
                            start: \"".$row['reserve_booking']."\",
                            backgroundColor: '#ffff33'
                          },
                        ";
                      }
                    }
                  }

                ?>

            ],
            eventClick: function(calEvent, jsEvent, view) {
                console.log('id : ' + calEvent.id);

                $.post("process/ajax_calendar.php",
                {
                  id: calEvent.id
                },function(data, status) {
                  console.log("Data: " + data + "\nStatus: " + status);
                  if (status == "success") {
                    var obj = jQuery.parseJSON(data);

                    $("#calendar_status").text(obj.status);
                    $("#calendar_reserve").text(obj.reserve_booking);
                    $("#calendar_start").text(obj.date_booking);
                    $("#calendar_title").text(obj.title);
                    $("#calendar_device").text(obj.device);
                    $("#calendar_ps").text(obj.ps);
                    $("#calendar_username").text(obj.username);
                    $("#calendar_tel").text(obj.tel);

                    $('#myModalCalendar').modal('show');
                  }
                });

            },
            // eventColor: '#59b300'
        })



      });
  </script>
<?php include('footer.php'); ?>
