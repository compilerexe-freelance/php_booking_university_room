<?php
  session_start();
  ob_start();
  require_once('process/config.php');
  include('header.php');
  $_SESSION['menu_active'] = 'main';

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

        <?php include('components/user_modal.php'); ?>

        <div class="col-md" style="//border: 1px solid #abc;">
          <div style="text-align: right;">
            <span>สวัสดีคุณ Admin</span><br>
            <a href="logout.php">ออกจากระบบ</a>
          </div>
        </div>

        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" href="main.php">รายชื่อสมาชิก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="approve.php">เพิ่ม/แก้ไข/แสดงรายละเอียด</a>
          </li>
        </ul>

        <div class="">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>สถานะ</th>
                <th>ชื่อเข้าใช้งาน</th>
                <th>ชื่อ-สกุล</th>
                <th>รายละเอียด</th>
              </tr>
            </thead>
            <tbody>

              <?php

                $sql = "SELECT * FROM tb_user";
                $result = $con->query($sql);

                while ($row = $result->fetch_assoc()) {

                  if ($row['active'] == '0') {

                    $id = $row['id'];
                    $status = 'รออนุมัติ';
                    $username = $row['username'];


                    echo '
                      <tr>
                        <td class="align-middle">'.$status.'</td>
                        <td class="align-middle">'.$row['username'].'</td>
                        <td class="align-middle">'.$row['firstname'].' '.$row['lastname'].'</td>
                        <td><button type="button" class="btn btn-info" style="width: 100%;" id="btn-user-'.$id.'">แสดง</button></td>
                      </tr>
                    ';

                    echo '
                      <script>
                        $(document).ready(function() {
                          $("#btn-user-'.$id.'").on("click", function() {
                              $.post("process/ajax_user.php",
                              {
                                id: '.$id.'
                              },function(data, status) {
                                console.log("Data: " + data + "\nStatus: " + status);
                                if (status == "success") {
                                  var obj = jQuery.parseJSON(data);

                                  $("#user_idcard").text(obj.idcard);
                                  $("#user_fullname").text(obj.fullname);
                                  $("#user_department").text(obj.department);
                                  $("#user_career").text(obj.career);
                                  $("#user_position").text(obj.position);
                                  $("#user_address").text(obj.address);
                                  $("#user_tel").text(obj.tel);
                                  $("#user_username").text(obj.username);

                                  $("#myModalUser").modal("show")
                                }
                              });
                            });
                          });
                        </script>
                      ';


                  }

                }

              ?>

            </tbody>
          </table>
        </div>

        </div> <!-- end card -->

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
