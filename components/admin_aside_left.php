<div class="col-md-3" style="//border: 1px solid #abc;">

  <?php
    if ($_SESSION['menu_active'] == 'main') {
      echo '<a href="main.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-top: 10px; margin-bottom: 5px;">รายการสมาชิกรออนุมัติ</button></a>';
    } else {
      echo '<a href="main.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-top: 10px; margin-bottom: 5px;">รายการสมาชิกรออนุมัติ</button></a>';
    }

    if ($_SESSION['menu_active'] == 'active_user') {
      echo '<a href="active_booking.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">รายการจองรออนุมัติ</button></a>';
    } else {
      echo '<a href="active_booking.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">รายการจองรออนุมัติ</button></a>';
    }

    if ($_SESSION['menu_active'] == 'calendar') {
      echo '<a href="calendar.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">ปฏิทินการจอง</button></a>';
    } else {
      echo '<a href="calendar.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">ปฏิทินการจอง</button></a>';
    }

    if ($_SESSION['menu_active'] == 'all_booking') {
      echo '<a href="all_booking.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">รายการจองสถานที่</button></a>';
    } else {
      echo '<a href="all_booking.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">รายการจองสถานที่</button></a>';
    }

    // if ($_SESSION['menu_active'] == 'register') {
    //   echo '<a href="register.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">แบบประเมินความพึ่งพอใจ</button></a>';
    // } else {
    //   echo '<a href="register.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">แบบประเมินความพึ่งพอใจ</button></a>';
    // }

    if ($_SESSION['menu_active'] == 'manage_place') {
      echo '<a href="manage_place.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">รายละเอียดสถานที่</button></a>';
    } else {
      echo '<a href="manage_place.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">รายละเอียดสถานที่</button></a>';
    }

    if ($_SESSION['menu_active'] == 'list_user') {
      echo '<a href="list_user.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">ข้อมูลสมาชิก</button></a>';
    } else {
      echo '<a href="list_user.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">ข้อมูลสมาชิก</button></a>';
    }

    if ($_SESSION['menu_active'] == 'report') {
      echo '<a href="report.php"><button type="button" class="btn btn-warning" style="width: 100%; margin-bottom: 5px;">รายงาน</button></a>';
    } else {
      echo '<a href="report.php"><button type="button" class="btn btn-secondary" style="width: 100%; margin-bottom: 5px;">รายงาน</button></a>';
    }
  ?>

</div>
