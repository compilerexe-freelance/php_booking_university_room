<style>
  #calendar_text {
    text-align: right;
  }
  .calendar_result {
    //text-align: left;
  }
</style>

<div class="modal fade bd-example-modal-lg" id="myModalActiveBooking" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <table class="table">
        <thead>
          <tr>
            <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
            <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
            <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
            <th style="border-top: 0px !important; border-bottom: 0px !important;"></th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important; width: 30%;">ผลการรออนุมัติ</td>
            <td class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;">
              <select class="form-control" name="status" id="status" style="width: 70%;">
                <option value="อนุมัติ">อนุมัติ</option>
                <option value="ไม่อนุมัติ">ไม่อนุมัติ</option>
              </select>
            </td>
            <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
          <tr>
            <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            <td id="calendar_text" style="border-top: 0px !important; border-bottom: 0px !important; width: 30%;">หมายเหตุ</td>
            <td class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;">
              <textarea name="comment" id="comment" rows="8" cols="80" style="resize: none; width: 70%;" class="form-control"></textarea>
            </td>
            <td id="user_idcard" class="calendar_result" style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
          <tr>
            <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
            <td style="border-top: 0px !important; border-bottom: 0px !important; text-align: right;">
              <button type="button" class="btn btn-success" name="btn-submit" id="btn-submit">บันทึก</button>
            </td>
            <td style="border-top: 0px !important; border-bottom: 0px !important;"></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
