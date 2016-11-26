<?php include('header.php'); ?>

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

      <div class="col-md-3" style="border: 1px solid #abc;">
        <button type="button" class="btn btn-secondary" style="width: 100%; margin-top: 10px; margin-bottom: 5px;">ปฏิทินการจอง</button>
        <button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">รายละเอียดสถานที่</button>
        <button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">รายละเอียดสถานที่</button>
        <button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">แบบประเมินความพึ่งพอใจ</button>
        <button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">สมัครสมาชิก</button>
        <button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 10px;">ลืมรหัสผ่าน</button>

        <hr>

        <div style="text-align: center; margin-top: 10px;">
          <span style="font-size: 20px; font-weight: bold;">ผู้ดูแลระบบ</span>
        </div>

        <table class="table">
          <thead>
            <tr>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle">Username</td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td class="align-middle">Password</td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="button" class="btn btn-success" style="width: 100%;">เข้าสู่ระบบ</button></td>
            </tr>
          </tbody>
        </table>

        <hr>

      </div>

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
