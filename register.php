<?php
  include('header.php');
  $_SESSION['menu_active'] = 'register';
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

      <?php include('components/aside_left.php'); ?>

      <div class="col-md">
        <table class="table">
          <thead>
            <tr>
              <th><span style="font-size: 24px; font-weight: bold;">สมัครสมาชิก</span></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span>รหัสบัตรประชาชน</span></td>
              <td><input type="text" class="form-control"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><span>ชื่อ</span></td>
              <td><input type="text" class="form-control"></td>
              <td>นามสกุล</td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td><span>หน่วยงาน</span></td>
              <td><input type="text" class="form-control"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><span>อาชีพ</span></td>
              <td><input type="text" class="form-control"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><span>ตำแหน่ง</span></td>
              <td><input type="text" class="form-control"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><span>ที่อยู่</span></td>
              <td><textarea name="name" rows="8" cols="40" class="form-control" style="resize: none;"></textarea></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><span>เบอร์โทรศัพท์</span></td>
              <td><input type="text" class="form-control"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><span>ชื่อเข้าใช้งาน</span></td>
              <td><input type="text" class="form-control"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><span>รหัสผ่าน</span></td>
              <td><input type="text" class="form-control"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td style="text-align: right;">
                <button type="button" class="btn btn-success">ตกลง</button>
                <button type="button" class="btn btn-danger">ยกเลิก</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
