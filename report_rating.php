<?php
  session_start();
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
          <span style="font-size: 20px; font-weight: bold;">รายงานผลสรุปการประเมินความพึงพอใจ</span>
        </div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <th class="align-middle text-md-center">ลำดับที่</th>
              <th class="align-middle text-md-center">วันที่</th>
              <th class="align-middle text-md-center">ชื่อผู้ประเมิน</th>
              <th class="align-middle text-md-center">ระดับการประเมิน</th>
              <th class="align-middle text-md-center">หมายเหตุ</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $sql = "SELECT * FROM tb_question";
              $result = $con->query($sql);
              $i = 1;

              while ($row = $result->fetch_assoc()) {

                echo '
                  <tr>
                    <td class="align-middle text-md-center">'.$i.'</td>
                    <td class="align-middle text-md-center">'.$row['created_at'].'</td>
                    <td class="align-middle text-md-center">'.$row['username'].'</td>
                    <td class="align-middle text-md-center">'.$row['average'].'</td>
                    <td class="align-middle text-md-center">'.$row['comment'].'</td>
                  </tr>
                ';

                $i++;

              }

            ?>
          </tbody>
        </table>

        </div>

        </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
