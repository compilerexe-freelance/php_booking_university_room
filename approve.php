<?php
  session_start();
  require_once('process/config.php');
  include('header.php');
  $_SESSION['menu_active'] = 'main';

  $con = new mysqli($servername, $db_username, $db_password, $dbname);

  if ($con->connect_error) {
    echo "Failed to connect to MySQL";
  }
?>

  <style>
    table, tr, th {
      border-top: 0px !important;
      border-bottom: 0px !important;
      text-align: center;
    }
    table, tr, td {
      border-top: 0px !important;
      border-bottom: 0px !important;
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

      <?php include('components/admin_aside_left.php'); ?>

      <div class="col-md">

        <?php include('components/booking_modal.php'); ?>

        <div class="col-md" style="//border: 1px solid #abc;">
          <div style="text-align: right;">
            <span>สวัสดีคุณ Admin</span><br>
            <a href="logout.php">ออกจากระบบ</a>
          </div>
        </div>

        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" href="main.php">รายชื่อสมาชิก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="approve.php">เพิ่ม/แก้ไข/แสดงรายละเอียด</a>
          </li>
        </ul>

        <div class="">

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

                <?php

                  $sql = "SELECT * FROM tb_user WHERE active = '0'";
                  $result = $con->query($sql);

                  while ($row = $result->fetch_assoc()) {
                    echo '
                      <tr>
                        <td class="align-middle">สถานะ</td>
                        <td>
                          <select class="form-control" name="status_'.$row['id'].'" id="status_'.$row['id'].'">
                            <option value="อนุมัติ">อนุมัติ</option>
                            <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle"><span>รหัสบัตรประชาชน</span></td>
                        <td><input type="text" class="form-control" name="idcard_'.$row['id'].'" id="idcard_'.$row['id'].'" value="'.$row['idcard'].'"></td>
                      </tr>
                      <tr>
                        <td class="align-middle"><span>ชื่อ</span></td>
                        <td><input type="text" class="form-control" name="firstname_'.$row['id'].'" id="firstname_'.$row['id'].'" value="'.$row['firstname'].'"></td>
                        <td class="align-middle">นามสกุล</td>
                        <td><input type="text" class="form-control" name="lastname_'.$row['id'].'" id="lastname_'.$row['id'].'" value="'.$row['lastname'].'"></td>
                      </tr>
                      <tr>
                        <td class="align-middle"><span>หน่วยงาน</span></td>
                        <td><input type="text" class="form-control" name="department_'.$row['id'].'" id="department_'.$row['id'].'" value="'.$row['department'].'"></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="align-middle"><span>อาชีพ</span></td>
                        <td><input type="text" class="form-control" name="career_'.$row['id'].'" id="career_'.$row['id'].'" value="'.$row['career'].'"></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="align-middle"><span>ตำแหน่ง</span></td>
                        <td><input type="text" class="form-control" name="position_'.$row['id'].'" id="position_'.$row['id'].'" value="'.$row['position'].'"></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="align-middle"><span>ที่อยู่</span></td>
                        <td><textarea name="address_'.$row['id'].'" id="address_'.$row['id'].'" rows="8" cols="40" class="form-control" style="resize: none;">'.$row['address'].'</textarea></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="align-middle"><span>เบอร์โทรศัพท์</span></td>
                        <td><input type="text" class="form-control" name="tel_'.$row['id'].'" id="tel_'.$row['id'].'" value="'.$row['tel'].'"></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="align-middle"><span>ชื่อเข้าใช้งาน</span></td>
                        <td><input type="text" class="form-control" name="username_'.$row['id'].'" id="username_'.$row['id'].'" value="'.$row['username'].'"></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="align-middle"><span>รหัสผ่าน</span></td>
                        <td><input type="text" class="form-control" name="password_'.$row['id'].'" id="password_'.$row['id'].'" value="'.$row['password'].'"></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td style="text-align: right;">
                          <button type="button" id="btn-submit-'.$row['id'].'" class="btn btn-success">ตกลง</button>
                          <button type="button" id="btn-cancel-'.$row['id'].'" class="btn btn-danger">ยกเลิก</button>
                        </td>
                      </tr>
                      <tr>
                        <td colspan="4"><hr></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    ';

                    echo '
                      <script>
                        $(document).ready(function() {

                          $("#btn-submit-'.$row['id'].'").on("click", function() {

                            $.post("process/ajax_approve.php",
                            {
                              id: '.$row['id'].',
                              status: $("#status_'.$row['id'].'").val(),
                              idcard: $("#idcard_'.$row['id'].'").val(),
                              firstname: $("#firstname_'.$row['id'].'").val(),
                              lastname: $("#lastname_'.$row['id'].'").val(),
                              department: $("#department_'.$row['id'].'").val(),
                              career: $("#career_'.$row['id'].'").val(),
                              position: $("#position_'.$row['id'].'").val(),
                              address: $("#address_'.$row['id'].'").val(),
                              tel: $("#tel_'.$row['id'].'").val(),
                              username: $("#username_'.$row['id'].'").val(),
                              password: $("#password_'.$row['id'].'").val()

                            },function(data, status) {
                              console.log("Data: " + data + "\nStatus: " + status);
                              if (status == "success") {
                                location.reload();
                              }
                            });

                          }); // end submit

                          $("#btn-cancel-'.$row['id'].'").on("click", function() {

                            $.post("process/ajax_approve.php",
                            {
                              id: '.$row['id'].',
                              status: "ไม่อนุมัติ"

                            },function(data, status) {
                              console.log("Data: " + data + "\nStatus: " + status);
                              if (status == "success") {
                                location.reload();
                              }
                            });

                          }); // end cancel

                        });
                      </script>
                    ';
                  }

                ?>

                <!-- <tr>
                  <td class="align-middle">สถานะ</td>
                  <td>
                    <select class="form-control" name="status">
                      <option value="อนุมัติ">อนุมัติ</option>
                      <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td class="align-middle"><span>รหัสบัตรประชาชน</span></td>
                  <td><input type="text" class="form-control" name="idcard"></td>
                </tr>
                <tr>
                  <td class="align-middle"><span>ชื่อ</span></td>
                  <td><input type="text" class="form-control" name="firstname"></td>
                  <td class="align-middle">นามสกุล</td>
                  <td><input type="text" class="form-control" name="lastname"></td>
                </tr>
                <tr>
                  <td class="align-middle"><span>หน่วยงาน</span></td>
                  <td><input type="text" class="form-control" name="department"></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="align-middle"><span>อาชีพ</span></td>
                  <td><input type="text" class="form-control" name="career"></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="align-middle"><span>ตำแหน่ง</span></td>
                  <td><input type="text" class="form-control" name="position"></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="align-middle"><span>ที่อยู่</span></td>
                  <td><textarea name="address" rows="8" cols="40" class="form-control" style="resize: none;"></textarea></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="align-middle"><span>เบอร์โทรศัพท์</span></td>
                  <td><input type="text" class="form-control" name="tel"></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="align-middle"><span>ชื่อเข้าใช้งาน</span></td>
                  <td><input type="text" class="form-control" name="username"></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td class="align-middle"><span>รหัสผ่าน</span></td>
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
                </tr> -->
              </tbody>
            </table>
          </form>

        </div>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
