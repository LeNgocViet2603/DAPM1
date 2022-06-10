$(document).ready(function () {
  console.log("ready");
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  //Edit modal window
  $("body").on("click", "#btn-detail", function (event) {
    var id = $(this).data("id");

    $.get(store + "/" + id + "/edit", function (data) {
      $("#modal-id").modal("show");
      console.log("data, ", data);
      $("#maCSKD").html(data.data.maCSKD);
      $("#name").html(data.info.name);
      $("#nameProvider").html(data.data.tenCSKD);
      $("#address").html(data.data.diaChi);
      $("#typeProduct").html(data.info.nameService);
      $("#time-start").val(data.giayphep.ngayCap);
      $("#time-end").val(data.giayphep.thoiHan);
      // $("#company_id").val(data.data.id);
      // $("#name").val(data.data.name);
      // $("#address").val(data.data.address);
    });
  });
});
