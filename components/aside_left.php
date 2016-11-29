<div class="col-md-3" style="//border: 1px solid #abc;">

  <?php
    if ($_SESSION['menu_active'] == 'index') {
      echo '<a href="index.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-top: 10px; margin-bottom: 5px;">ปฏิทินการจอง</button></a>';
    } else {
      echo '<a href="index.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-top: 10px; margin-bottom: 5px;">ปฏิทินการจอง</button></a>';
    }

    if ($_SESSION['menu_active'] == 'place_detail') {
      echo '<a href="place.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">รายละเอียดสถานที่</button></a>';
    } else {
      echo '<a href="place.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">รายละเอียดสถานที่</button></a>';
    }

    if ($_SESSION['menu_active'] == 'list_booking') {
      echo '<a href="list_booking.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">รายการจองสถานที่</button></a>';
    } else {
      echo '<a href="list_booking.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">รายการจองสถานที่</button></a>';
    }

    if ($_SESSION['menu_active'] == 'rating') {
      echo '<a href="rating.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">แบบประเมินความพึ่งพอใจ</button></a>';
    } else {
      echo '<a href="rating.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">แบบประเมินความพึ่งพอใจ</button></a>';
    }

    if ($_SESSION['menu_active'] == 'register') {
      echo '<a href="register.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">สมัครสมาชิก</button></a>';
    } else {
      echo '<a href="register.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">สมัครสมาชิก</button></a>';
    }

  ?>

  <hr>

  <div style="text-align: center; margin-top: 10px;">
    <span style="font-size: 20px; font-weight: bold;">ผู้ดูแลระบบ</span>
  </div>

  <form action="process/check_admin.php" method="post">
    <table class="table">
      <thead>
        <tr>
          <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
          <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important;">Username</td>
          <td style="border-top: 0px !important; border-bottom: 0px !important;"><input type="text" name="txt_username" class="form-control"></td>
        </tr>
        <tr>
          <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important;">Password</td>
          <td style="border-top: 0px !important; border-bottom: 0px !important;"><input type="password" name="txt_password" class="form-control"></td>
        </tr>
        <tr>
          <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          <td style="border-top: 0px !important; border-bottom: 0px !important;"><button type="submit" class="btn btn-success" style="width: 100%;">เข้าสู่ระบบ</button></td>
        </tr>
      </tbody>
    </table>
  </form>

  <hr>
</div>
