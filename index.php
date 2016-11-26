<?php
  include('header.php');
  $_SESSION['menu_active'] = 'index';

  if ($_SESSION['status'] == 'สมัครสมาชิกสำเร็จ') {
    echo "<script>alert('สมัครสมาชิกสำเร็จ');</script>";
    $_SESSION['status'] = null;
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
    #calendar_text {
      text-align: right;
    }
    #calendar_result {
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

      <?php include('components/aside_left.php'); ?>

      <div class="col-md">
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
