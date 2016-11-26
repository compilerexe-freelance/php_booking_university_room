<?php
session_start();
require_once('process/config.php');

if ($_SESSION['login'] == 'fail' || $_SESSION['login'] == null) {
  $_SESSION['status'] = 'คุณต้องเข้าสู่ระบบก่อนถึงจะดูรายละเอียดและจองได้';
  header('location: place.php');
} else {
  include('header.php');
  $_SESSION['menu_active'] = 'place_detail';
}

$id = $_GET['id'];
$title = '';

$con = new mysqli($servername, $db_username, $db_password, $dbname);

if ($con->connect_error) {
  echo "Failed to connect to MySQL";
}

$sql = "SELECT title FROM tb_place WHERE id='$id'";
$result = $con->query($sql);

while ($row = $result->fetch_assoc()) {
  $title = $row['title'];
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

        <?php include('components/aside_right.php'); ?>

        <form action="process/insert_booking.php" method="post">

          <table class="table">
            <thead>
              <tr>
                <th style="width: 30%"></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle">ห้อง/สถานที่</td>
                <td>
                  <?php echo $title; ?>
                  <input type="text" name="title" value="<?php echo $title; ?>" hidden>
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="align-middle">วันที่จอง</td>
                <td><input type="text" id="reserve_datepicker" name="reserve_booking" class="form-control"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="align-middle">จากเวลา</td>
                <td><input type="text" class="form-control" name="start_time"></td>
                <td class="align-middle">ถึง</td>
                <td><input type="text" class="form-control" name="end_time"></td>
              </tr>
              <tr>
                <td class="align-middle">วันที่ทำรายการ</td>
                <td>
                  <?php //echo date('d/m/'); echo date('Y')+543; ?>
                  <input type="text" id="current_datepicker" name="date_booking" class="form-control">
                </td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="align-middle">จำนวนผู้เข้าประชุม</td>
                <td><input type="text" class="form-control" name="number_people"></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="align-middle">อุปกรณ์ที่ต้องการ</td>
                <td><textarea name="device" rows="8" cols="40" class="form-control" style="resize: none;"></textarea></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="align-middle">หมายเหตุ</td>
                <td><textarea name="ps" rows="8" cols="40" class="form-control" style="resize: none;"></textarea></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td class="align-middle">ผู้ติดต่อ</td>
                <td>
                  <?php echo $_SESSION['name']; ?>
                  <input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" hidden>
                </td>
                <td></td>
                <td></td>
              </tr>
              <!-- <tr> -->
                <td class="align-middle">โทรศัพท์</td>
                <td>
                  <?php echo $_SESSION['tel']; ?>
                  <input type="text" name="tel" value="<?php echo $_SESSION['tel']; ?>" hidden>
                </td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>

          <div style="text-align: right;">
            <button type="submit" class="btn btn-success">บันทึกการจอง</button>
            <button type="reset" class="btn btn-danger">ล้างข้อมูล</button>
          </div>

        </form>

      </div>

    </div>
  </div>

  <script>
    $(function() {
      $( "#reserve_datepicker" ).datepicker();
      $( "#current_datepicker" ).datepicker();
    });
  </script>

<?php include('footer.php'); ?>
