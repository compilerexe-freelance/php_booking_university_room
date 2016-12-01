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

    <?php include('banner.php'); ?>

    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/aside_left.php'); ?>

      <div class="col-md">

        <div class="card card-block">

        <span style="font-size: 24px; font-weight: bold;">สมัครสมาชิก</span>

        <form action="process/insert_register.php" method="post">
          <table class="table">
            <thead>
              <tr>
                <th style="width: 20%;"></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>รหัสบัตรประชาชน</span></td>
                <td><input type="text" class="form-control" name="idcard"></td>

              </tr>
              <tr>
                <td><span>ชื่อ</span></td>
                <td><input type="text" class="form-control" name="firstname"></td>
                <td>นามสกุล</td>
                <td><input type="text" class="form-control" name="lastname"></td>
              </tr>
              <tr>
                <td><span>หน่วยงาน</span></td>
                <td><input type="text" class="form-control" name="department"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><span>อาชีพ</span></td>
                <td><input type="text" class="form-control" name="career"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><span>ตำแหน่ง</span></td>
                <td><input type="text" class="form-control" name="position"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><span>ที่อยู่</span></td>
                <td><textarea name="address" rows="8" cols="40" class="form-control" style="resize: none;"></textarea></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><span>เบอร์โทรศัพท์</span></td>
                <td><input type="text" class="form-control" name="tel"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><span>ชื่อเข้าใช้งาน</span></td>
                <td><input type="text" class="form-control" name="username"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td><span>รหัสผ่าน</span></td>
                <td><input type="password" class="form-control" name="password"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: right;">
                  <button type="submit" class="btn btn-success">ตกลง</button>
                  <button type="reset" class="btn btn-danger">ยกเลิก</button>
                </td>
              </tr>
            </tbody>
          </table>
        </form>

      </div>

      </div>
    </div>
  </div>

<?php include('footer.php'); ?>
