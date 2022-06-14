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
          $("#companydata").trigger("reset");
          $("#modal-id").modal("hide");

          Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Cập nhật giấy chứng nhận thành công",
            showConfirmButton: false,
            timer: 1500,
          });
          console.log("Error......", location.href);
        },
      }).done(function (res) {
        console.log("DONE", res);
      });
      location.href = location.href;
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
  console.log("ready");
  // thu hoi
  $("body").on("click", "#block-detail", function (e) {
    console.log("ha");
    var id = $(this).data("iddetail");
    var makehoach = $(this).data("makehoach");
    $(this).css("color", "red");
    $.get(block + "/" + id + "/edit/" + makehoach + "", function (data) {
      console.log("Data: ", data);
      $("#box-list").removeClass("col-12");
      $("#box-list").addClass("col-7");
      $("#info-premises").css("display", "block");

      let trangThaiGP = data.giayphep.trangThaiGP;
      $("#tenChu").html(data.info.name);
      $("#tenCS").html(data.data.tenCSKD);
      $("#diachi").html(data.data.diaChi);
      $("#dichvu").html(data.info.nameService);

      $("#tungay").html(data.giayphep.ngayCap);
      $("#magp").html(data.giayphep.maGiayPhepATTP);
      $("#denngay").html(data.giayphep.thoiHan);
      $("#ketqua").html(data.ketquathanhtra.ketqua);
      $("#ngaythanhtra").html(data.ketquathanhtra.thoigian);

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
});
