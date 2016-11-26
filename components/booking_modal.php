<style>
  #calendar_text {
    text-align: right;
  }
  .calendar_result {
    text-align: center;
  }
</style>

<div class="modal fade bd-example-modal-lg" id="myModalBooking" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <table class="table">
        <thead>
          <tr>
            <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
            <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important;">สถานะ : </td>
            <td id="booking_status" class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
          <tr>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important;">วันที่จอง : </td>
            <td id="booking_reserve" class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
          <tr>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important;">วันที่ทำรายการ : </td>
            <td id="booking_date" class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
          <tr>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important;">ห้อง/สถานที่ : </td>
            <td id="booking_title" class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
          <tr>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important;">อุปกรณ์ที่ต้องการ : </td>
            <td id="booking_device" class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
          <tr>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important;">หมายเหตุ : </td>
            <td id="booking_ps" class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
          <tr>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important;">สมาชิก : </td>
            <td id="booking_name" class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
          <tr>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important;">โทรศัพท์ : </td>
            <td id="booking_tel" class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
