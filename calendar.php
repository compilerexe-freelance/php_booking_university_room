<?php
  session_start();
  require_once('process/config.php');
  include('header.php');
  $_SESSION['menu_active'] = 'calendar';

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

        <span style="color: red;">* หมายเหตุ</span>&ensp;
        <img style="width: 15px; height:15px; background-color: #59b300;">&ensp;
        <span>รายการจองที่ผ่านการอนุมัติ</span>&ensp;
        <img style="width: 15px; height:15px; background-color: #ffff33;">&ensp;
        <span>รายการจองที่รอการอนุมัติ</span>
        
        <div class="">
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
                {
                    id: 'test1',
                    start: '2016-11-04'
                }
            ],
            eventClick: function(calEvent, jsEvent, view) {
                console.log('id : ' + calEvent.id);
                $('#myModal').modal('show')
            },
            eventColor: '#59b300'
        })



      });
  </script>

<?php include('footer.php'); ?>