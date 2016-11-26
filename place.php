<?php
  include('header.php');
  $_SESSION['menu_active'] = 'place_detail';

  if ($_SESSION['status'] == 'คุณต้องเข้าสู่ระบบก่อนถึงจะดูรายละเอียดและจองได้') {
    echo "<script>swal('','คุณต้องเข้าสู่ระบบก่อนถึงจะดูรายละเอียดและจองได้')</script>";
    $_SESSION['status'] = null;
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
    #calendar_text {
      text-align: right;
    }
    #calendar_result {
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

      <?php include('components/aside_left.php'); ?>

      <div class="col-md">

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องประชุมใหญ่ศรีสักทอง</span><br><br>
            <a href="place_detail.php?id=1"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องประชุมอาคารวิจัยและประกันคุณภาพการศึกษา</span><br><br>
            <a href="place_detail.php?id=2"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องคอมพิวเตอร์ ศูนย์การเรียนรู้ ICT</span><br><br>
            <a href="place_detail.php?id=3"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องคอมพิวเตอร์ 1,2 และ 3</span><br><br>
            <a href="place_detail.php?id=4"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องบริการอินเตอร์เน็ต อาคารสิรินธร</span><br><br>
            <a href="place_detail.php?id=5"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องประชุมอาคารสิรินธรชั้น 4</span><br><br>
            <a href="place_detail.php?id=6"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องปฏิบัติการด้านการวิเคราะห์อัญมณี (ห้องแลป)</span><br><br>
            <a href="place_detail.php?id=7"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องจัดนิทรรศการและแสดงผลงานชั้น 1 อาคารศูนย์ศึกษาและพัฒนาอัญมณี</span><br><br>
            <a href="place_detail.php?id=8"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องประชุมอาคารศูนย์ศึกษาและพัฒนาอัญมณีชั้น 2 และชั้น 3 (ห้องด้านขวามือ)</span><br><br>
            <a href="place_detail.php?id=9"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องประชุมอาคารศูนย์ศึกษาและพัฒนาอัญมณีชั้น 2 และชั้น 3 (ห้องด้านในทางไปห้องน้ำ)</span><br><br>
            <a href="place_detail.php?id=10"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องพักอาจารย์</span><br><br>
            <a href="place_detail.php?id=11"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องบุษราคัม ชั้น 1 อาคารเฉลิมพระเกียรติฯ (ตึก 5)</span><br><br>
            <a href="place_detail.php?id=12"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องรตนมณีชั้น 2 อาคารเฉลิมพระเกียรติฯ (ตึก 5)</span><br><br>
            <a href="place_detail.php?id=13"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>ห้องทับทิม ชั้น 2 อาคารเฉลิมพระเกียรติฯ (ตึก 5)</span><br><br>
            <a href="place_detail.php?id=14"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>สระว่ายน้ำ (อาคารยิมเนเซียม)</span><br><br>
            <a href="place_detail.php?id=15"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span style="font-size: 18px; font-weight: bold;">รายละเอียด</span><br><br>
            <span>สนามกีฬาในอาคารยิมเนเซียม</span><br><br>
            <a href="place_detail.php?id=16"><span>รายละเอียดเพิ่มเติมคลิก</span></a>
          </div>
        </div>

      </div>

      <?php include('components/aside_right.php'); ?>

    </div>
  </div>

<?php include('footer.php'); ?>
