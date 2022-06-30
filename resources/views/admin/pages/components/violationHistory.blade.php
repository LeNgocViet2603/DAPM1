<div class="modal fade" id="modal-id">
   <div class="modal-dialog" style="width: 800px;">
      <div class="modal-content">

         <div class="modal-header">
            <h2 style="text-align: center">Lịch sử vi phạm</h2>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         </div>

         <div class="modal-body">
            <form id="companydata">

               <input type="hidden" id="maGiayPhepATTP" value="">
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
                        <span class="title">Dịch vụ kinh doanh: </span>
                        <span id="typeProduct"></span>
                     </span>
                  </li>
                  <!-- <li class="info-sup__list-item">
                     <div class="box-time-licence">
                        <div class="box-time-item">
                           Ngày cấp:
                           <span class="title" id="time-start" name="trip-start" value="" required>
                        </div>
                        <div>
                           Thời hạn:
                           <span class="title" id="time-end" name="trip-end" value="" required>
                        </div>
                        <div>
                           Ngày thu hồi:
                           <span class="title" id="time-end" name="trip-end" value="" required>
                        </div>
                     </div>
                  </li> -->
               </ul>

            </form>

            <table class="table table-bordered emp history">
                <thead class="table-header">
                    <tr>
                        <th scope="col" class="row-stt">STT</th>
                        <th scope="col" class="row-address">Số CN ATTP</th>
                        <th scope="col" class="row-address">Ngày cấp</th>
                        <th scope="col" class="row-address">Thời hạn</th>
                        <th scope="col" class="row-address">Ngày thu hồi</th>
                    </tr>
                </thead>
                <tbody class="history-body">
                    <?php $stt = 1; ?>
                    @foreach ($data['history'] as $item)
                    <tr>
                        <th scope="row">{{$stt++}}</th>
                        <td>{{$item->maGiayPhepATTP}}</td>
                        <td>{{$item->ngayCap}}</td>
                        <td>{{$item->thoiHan}}</td>
                        <td>{{$item->ngayThuHoi}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
         </div>
      </div>
   </div>
</div>