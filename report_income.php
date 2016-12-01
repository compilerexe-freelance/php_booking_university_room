<?php
  require_once('process/config.php');
  include('header.php');
  $_SESSION['menu_active'] = 'report';

  if ($_SESSION['login_admin'] != 'success' || empty($_SESSION['login_admin'])) {
    header('location: index.php');
  }

  $con = new mysqli($servername, $db_username, $db_password, $dbname);

  if ($con->connect_error) {
    echo "Failed to connect to MySQL";
  }

  mysqli_set_charset($con,"utf8");

  $sql = "SELECT * FROM tb_booking WHERE status = 'อนุมัติ'";
  $result = $con->query($sql);

  while ($row = $result->fetch_assoc()) {
    $found_username = $row['username'];
    $found_title = $row['title'];
    $sql2 = "UPDATE tb_income SET status = '1' WHERE username = '$found_username' AND title = '$found_title'";
    $con->query($sql2);
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

    <?php include('banner.php'); ?>

    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/admin_aside_left.php'); ?>

      <div class="col-md">

        <div class="card card-block">

        <?php include('components/booking_modal.php'); ?>

        <div class="col-md" style="//border: 1px solid #abc;">
          <div style="text-align: right;">
            <span>สวัสดีคุณ Admin</span><br>
            <a href="logout.php">ออกจากระบบ</a>
          </div>
        </div>

        <div class="" style="margin-bottom: 20px;">
          <span style="font-size: 20px; font-weight: bold;">รายงานผลรายรับการใช้สถานที่</span>
        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="align-middle text-md-center">ลำดับที่</th>
              <th class="align-middle text-md-center">วันที่</th>
              <th class="align-middle text-md-center">ชื่อสถานที่</th>
              <th class="align-middle text-md-center">รายรับ</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM tb_income WHERE status = '1'";
              $result = $con->query($sql);
              $i = 1;
              $total = 0;

              while ($row = $result->fetch_assoc()) {

                echo '
                  <tr>
                    <td class="align-middle text-md-center">'.$i.'</td>
                    <td class="align-middle text-md-center">'.$row['reserve_booking'].'</td>
                    <td class="align-middle text-md-center">'.$row['title'].'</td>
                    <td class="align-middle text-md-center">'.number_format($row['income']).'</td>
                  </tr>
                ';

                $total = $total + $row['income'];

                $i++;

              }

            ?>

            <tr>
              <td class="align-middle text-md-center"></td>
              <td class="align-middle text-md-center"></td>
              <td class="align-middle text-md-right">รวมทั้งสิ้น</td>
              <td class="align-middle text-md-center"><?php echo number_format($total); ?></td>
            </tr>
          </tbody>
        </table>

        </div>

        </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
