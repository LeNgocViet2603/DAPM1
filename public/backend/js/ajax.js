$(document).ready(function () {
  // console.log("ready");
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  // onchage
  $("body").on("change", "#time-end", function (e) {
    const timeStart = $("#time-start").val();
    const timeEnd = $("#time-end").val();
    console.log("Change time", timeStart);
    if (timeStart > timeEnd) {
      $("#validation-date").html("Thời hạn không thể bé hơn ngày cấp");
    } else {
      $("#validation-date").html("");
    }
  });
  //Save data into database
  $("body").on("click", "#submit", function (event) {
    event.preventDefault();
    var maGiayPhepATTP = $("#maGiayPhepATTP").val();
    var timeEnd = $("#time-end").val();
    var trangThaiGP = 1;
    if (timeEnd === "") {
      $("#validation-date").html("Thời hạn không được bỏ trống");
    } else {
      console.log({ maGiayPhepATTP, timeEnd, trangThaiGP });

      $.ajax({
        url: store,
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "PUT",
        data: {
          maGiayPhepATTP: maGiayPhepATTP,
          thoiHan: timeEnd,
          trangThaiGP: trangThaiGP,
        },
        dataType: "json",
        success: function (data) {
          console.log("tadaa", data);
        },
        error: function (data) {
          console.log("Error......", data);
          $("#companydata").trigger("reset");
          $("#modal-id").modal("hide");
          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Cập nhật giấy chứng nhận thành công",
            showConfirmButton: false,
            timer: 1500,
          });
        },
      }).done(function (res) {
        console.log("DONE", res);
      });
    }
  });
  //Edit modal window
  $("body").on("click", "#btn-detail", function (event) {
    var id = $(this).data("id");
    // var a = $("#submit").data("button");
    const idButton = $("#submit").attr("data-button", id);

    $.get(store + "/" + id + "/edit", function (data) {
      $("#modal-id").modal("show");
      let trangThaiGP = data.giayphep.trangThaiGP;
      $("#maCSKD").html(data.data.maCSKD);
      $("#name").html(data.info.name);
      $("#nameProvider").html(data.data.tenCSKD);
      $("#address").html(data.data.diaChi);
      $("#typeProduct").html(data.info.nameService);
      $("#time-start").val(data.giayphep.ngayCap);
      $("#time-end").val(data.giayphep.thoiHan);
      $("#maGiayPhepATTP").val(data.giayphep.maGiayPhepATTP);

      console.log("idButton", idButton);
      if (trangThaiGP === 1) {
        $("#submit").prop("disabled", true);
        $("#submit").addClass("btn-dark");
      } else {
        $("#submit").prop("disabled", false);
        $("#submit").removeClass("btn-dark");
      }
    });
  });

  // search
  $("body").on("click", "#submit-search", function (e) {
    // e.preventDefault();

  });
});
