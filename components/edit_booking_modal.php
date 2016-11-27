<style>
  #calendar_text {
    text-align: right;
  }
  .calendar_result {
    text-align: center;
  }
</style>

<div class="modal fade bd-example-modal-lg" id="myModalEditBooking" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <form action="process/update_booking.php" method="post">

        <input type="text" name="id" id="update_id" hidden>

        <table class="table">
          <thead>
            <tr>
              <th style="width: 30%; border-top: 0px !important; border-bottom: 0px !important;"></th>
              <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
              <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
              <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">ห้อง/สถานที่</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;">
                <span id="edit_booking_title"></span>
                <input type="text" name="title" id="my_booking_title" hidden>
              </td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>
            <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">วันที่จอง</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"><input type="text" id="edit_booking_reserve" name="reserve_booking" class="form-control reserve_datepicker"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>
            <!-- <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">จากเวลา</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"><input type="text" class="form-control" name="start_time"></td>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important;">ถึง</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"><input type="text" class="form-control" name="end_time"></td>
            </tr> -->
            <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">จากเวลา</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;">
                <div class="form-inline" style="//border: 1px solid red; //text-align: center;">
                  <div class="form-group">
                    <input type="text" class="form-control" name="start_time" id="edit_booking_start_time">
                  </div>
                  <div class="form-group">
                    &ensp;ถึงเวลา&ensp;
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="end_time" id="edit_booking_end_time">
                  </div>
                </div>
              </td>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>

            <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">วันที่ทำรายการ</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;">
                <?php //echo date('d/m/'); echo date('Y')+543; ?>
                <input type="text" id="edit_booking_date" name="date_booking" class="form-control current_datepicker">
              </td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>
            <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">จำนวนผู้เข้าประชุม</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"><input type="text" class="form-control" name="number_people" id="edit_booking_number_people"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>
            <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">อุปกรณ์ที่ต้องการ</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"><textarea name="device" id="edit_booking_device" rows="8" cols="40" class="form-control" style="resize: none;"></textarea></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>
            <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">หมายเหตุ</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"><textarea name="ps" id="edit_booking_ps" rows="8" cols="40" class="form-control" style="resize: none;"></textarea></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>
            <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">ผู้ติดต่อ</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;">
                <?php echo $_SESSION['name']; ?>
              </td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>
            <tr>
              <td class="align-middle" style="border-top: 0px !important; border-bottom: 0px !important; text-align: center;">โทรศัพท์</td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;">
                <?php echo $_SESSION['tel']; ?>
              </td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>
            <tr>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important; text-align: right;">
                <button type="submit" class="btn btn-success" style="width: 30%;">บันทึก</button>
                <button type="reset" class="btn btn-danger">ล้างข้อมูล</button>
              </td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
              <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            </tr>
          </tbody>
        </table>

      </form>

    </div>
  </div>
</div>

<script>
  $(function() {
    $( ".reserve_datepicker" ).datepicker();
    $( ".current_datepicker" ).datepicker();
  });
</script>
