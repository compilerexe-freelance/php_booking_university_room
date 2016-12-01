<?php
  ob_start();
  session_start();
  include('header.php');
  require_once('process/config.php');
  $_SESSION['menu_active'] = 'list_user';

  if ($_SESSION['login_admin'] != 'success' || empty($_SESSION['login_admin'])) {
    header('location: index.php');
  }
?>

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

        <table class="table table-bordered" style="margin-top: 20px;">
          <thead>
            <tr>
              <th style="text-align: center;">ชื่อ</th>
              <th style="text-align: center;">สกุล</th>
              <th style="text-align: center;">ชื่อผู้ใช้งาน</th>
              <th style="text-align: center;"></th>
            </tr>
          </thead>
          <tbody>
            <?php

                $con = new mysqli($servername, $db_username, $db_password, $dbname);

                if ($con->connect_error) {
                  echo "Failed to connect to MySQL";
                }

                $sql = "SELECT * FROM tb_user";
                $result = $con->query($sql);

                while ($row = $result->fetch_assoc()) {

                    echo '
                      <tr>
                        <td class="align-middle text-md-center" >'.$row['firstname'].'</td>
                        <td class="align-middle text-md-center" >'.$row['lastname'].'</td>
                        <td class="align-middle text-md-center" >'.$row['username'].'</td>
                        <td class="align-middle text-md-center" ><button type="button" class="btn btn-info" style="width: 100%;" id="btn-user-'.$row['id'].'">แสดง</button></td>
                      </tr>
                    ';

                    echo '
                      <script>
                        $(document).ready(function() {

                          $("#btn-user-'.$row['id'].'").on("click", function() {
                            $.post("process/ajax_user.php",
                            {
                              id: '.$row['id'].'
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


            ?>
          </tbody>
        </table>

      </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
