<div class="modal fade" id="modal-id">
   <div class="modal-dialog">
      <div class="modal-content">

         <div class="modal-header">
            <h2 style="text-align: center">Thông tin cơ sở kinh doanh</h2>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>

         <div class="modal-body">
            <form id="companydata">

               <ul class="info-sup__list pt-2">
                  <li class="info-sup__list-item">
                     <span>
                        <span class="title">Mã cơ sở: </span>
                        <span id="maCSKD"></span>
                     </span>
                  </li>
                  <li class="info-sup__list-item">
                     <span>
                        <span class="title">Tên chủ cơ sở: </span>
                        <span id="name"></span>
                     </span>

                  </li>
                  <li class="info-sup__list-item">
                     <span>
                        <span class="title">Tên cơ sở: </span>
                        <span id="nameProvider"></span>
                     </span>
                  </li>
                  <li class="info-sup__list-item">
                     <span>
                        <span class="title">Địa chỉ: </span>
                        <span id="address"></span>
                     </span>
                  </li>

                  <li class="info-sup__list-item">
                     <span>
                        <span class="title">Dịch vụ kinh doanh: </sơam>
                           <span id="typeProduct"></span>
                        </span>
                  </li>
                  <li class="info-sup__list-item">
                     <div class="box-time-licence">
                        <div>
                           Từ ngày:
                           <input type="date" id="time-start" name="trip-start" value="">
                        </div>
                        <div>
                           Từ ngày:
                           <input type="date" id="time-end" name="trip-end" value="">
                        </div>
                     </div>
                  </li>
                  <i>*Chứng nhập đạt yêu cầu vệ sinh an toàn thực phẩm</i>
                  <div class="pt-4">
                     <button type="button" class="btn btn-primary">Cấp giấy chứng nhận
                     </button>
                     <button type="button" class="btn btn-danger">Đóng</button>
                  </div>
               </ul>

            </form>
         </div>

      </div>
   </div>
</div>