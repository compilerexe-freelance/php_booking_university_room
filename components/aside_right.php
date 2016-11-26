<?php

  if ($_SESSION['login'] != 'success') {
    echo '
      <div class="col-md-3" style="//border: 1px solid #abc;">
        <div style="text-align: center; margin-top: 10px;">
          <span style="font-size: 20px; font-weight: bold;">สำหรับสมาชิก</span>
        </div>

        <form action="process/check_login.php" method="post">
          <table class="table">
            <thead>
              <tr>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle">Username</td>
                <td><input type="text" class="form-control" name="username"></td>
              </tr>
              <tr>
                <td class="align-middle">Password</td>
                <td><input type="password" class="form-control" name="password"></td>
              </tr>
              <tr>
                <td></td>
                <td><button type="submit" class="btn btn-success" style="width: 100%;">เข้าสู่ระบบ</button></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    ';
  } else {
    echo '
      <div class="col-md-2" style="//border: 1px solid #abc;">
        <div style="text-align: right;">
          <span>สวัสดีคุณ '.$_SESSION['username'].'</span><br>
          <a href="logout.php">ออกจากระบบ</a>
        </div>
      </div>
    ';
  }

?>
