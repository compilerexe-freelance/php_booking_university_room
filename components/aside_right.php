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
                <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
                <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important;">Username</td>
                <td style="border-top: 0px !important; border-bottom: 0px !important;"><input type="text" class="form-control" name="username"></td>
              </tr>
              <tr>
                <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important;">Password</td>
                <td style="border-top: 0px !important; border-bottom: 0px !important;"><input type="password" class="form-control" name="password"></td>
              </tr>
              <tr>
                <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
                <td style="border-top: 0px !important; border-bottom: 0px !important;"><button type="submit" class="btn btn-success" style="width: 100%;">เข้าสู่ระบบ</button></td>
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
