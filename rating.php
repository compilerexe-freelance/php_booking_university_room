<?php
  include('header.php');
  $_SESSION['menu_active'] = 'rating';
?>

  <div class="container">
    <div class="row">
      <div class="col-md" style="padding: 0px 0px 0px 0px;">
        <img src="" alt="" style="width: 100%; height: 250px; background-color: #abc;">
      </div>
    </div>
    <div class="row" style="margin-top: 20px; margin-bottom: 20px;">

      <?php include('components/aside_left.php'); ?>

      <div class="col-md" style="//border: 1px solid red;">

        <?php include('components/aside_right.php'); ?>

        <div style="text-align: center; margin-bottom: 20px;">
          <span style="font-size: 26px; font-weight: bold;">แบบประเมินความพึ่งพอใจ</span>
        </div>

        <form action="process/insert_rating.php" method="post">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="align-middle text-md-center">รายละเอียด</th>
                <th class="align-middle text-md-center">มากที่สุด</th>
                <th class="align-middle text-md-center">มาก</th>
                <th class="align-middle text-md-center">พอใช้</th>
                <th class="align-middle text-md-center">น้อย</th>
                <th class="align-middle text-md-center">น้อยที่สุด</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>ด้านสถานที่</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>1 ความพร้อมการใช้งานของสถานที่</td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_1" value="มากที่สุด">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_1" value="มาก">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_1" value="พอใช้">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_1" value="น้อย">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_1" value="น้อยที่สุด">
                  </div>
                </td>
              </tr>
              <tr>
                <td>2 สถานที่มีความสะอาดและเป็นระเบียบเรียบร้อย</td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_2" value="มากที่สุด">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_2" value="มาก">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_2" value="พอใช้">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_2" value="น้อย">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_2" value="น้อยที่สุด">
                  </div>
                </td>
              </tr>
              <tr>
                <td>3 เทคโนโลยีที่ทันสมัยและเหมาะสม</td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_3" value="มากที่สุด">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_3" value="มาก">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_3" value="พอใช้">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_3" value="น้อย">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_3" value="น้อยที่สุด">
                  </div>
                </td>
              </tr>
              <tr>
                <td>4 สิ่งอำนวยความสะดวกต่าง ๆ เพียงพอและเหมาะสม</td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_4" value="มากที่สุด">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_4" value="มาก">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_4" value="พอใช้">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_4" value="น้อย">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_4" value="น้อยที่สุด">
                  </div>
                </td>
              </tr>
              <tr>
                <td>5 โดยภาพรวมท่านมีความพึงพอใจด้านสิ่งอำนวยความสะดวก</td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_5" value="มากที่สุด">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_5" value="มาก">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_5" value="พอใช้">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_5" value="น้อย">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_5" value="น้อยที่สุด">
                  </div>
                </td>
              </tr>
              <tr>
                <td>ด้านผู้ดูแล</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>1 การให้บริการสะดวกรวดเร็ว</td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_6" value="มากที่สุด">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_6" value="มาก">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_6" value="พอใช้">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_6" value="น้อย">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_6" value="น้อยที่สุด">
                  </div>
                </td>
              </tr>
              <tr>
                <td>2 มีความกระตือรือร้นที่จะให้บริการ</td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_7" value="มากที่สุด">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_7" value="มาก">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_7" value="พอใช้">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_7" value="น้อย">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_7" value="น้อยที่สุด">
                  </div>
                </td>
              </tr>
              <tr>
                <td>3 กริยามารยาทและการพูดจาสุภาพเรียบร้อย</td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_8" value="มากที่สุด">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_8" value="มาก">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_8" value="พอใช้">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_8" value="น้อย">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_8" value="น้อยที่สุด">
                  </div>
                </td>
              </tr>
              <tr>
                <td>4 โดยภาพรวมท่านมีความพึงพอใจด้านเจ้าหน้าที่ผู้ให้บริการ</td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_9" value="มากที่สุด">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_9" value="มาก">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_9" value="พอใช้">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_9" value="น้อย">
                  </div>
                </td>
                <td class="align-middle">
                  <div class="text-md-center">
                    <input type="radio" name="score_9" value="น้อยที่สุด">
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <div>
            <span style="font-size: 20px; font-weight: bold;">ข้อเสนอแนะ</span>
          </div>

          <textarea name="comment" rows="8" cols="40" style="resize: none;" class="form-control"></textarea>

          <div class="text-md-right" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success" style="width: 15%;">ส่ง</button>
            <button type="reset" class="btn btn-danger" style="width: 15%;">ยกเลิก</button>
          </div>
        </form>

      </div>

    </div>
  </div>

<?php include('footer.php'); ?>
