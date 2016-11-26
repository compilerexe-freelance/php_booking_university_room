<?php include('header.php'); ?>

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
            <span>รายละเอียด</span>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span>รายละเอียด</span>
          </div>
        </div>

        <div class="col-md-12" style="padding: 0 0 0 0; //border: 1px solid red; margin-bottom: 20px;">
          <div class="col-md-5" style="padding: 0px 0px 0px 0px;">
            <img src="" alt="" class="rounded" style="width: 100%; height: 150px;">
          </div>
          <div class="col-md-7">
            <span>รายละเอียด</span>
          </div>
        </div>

      </div>

      <?php include('components/aside_right.php'); ?>

    </div>
  </div>

<?php include('footer.php'); ?>
