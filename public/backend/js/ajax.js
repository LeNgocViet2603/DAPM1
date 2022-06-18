$(document).ready(function () {
  function getDateTime(year, month, day) {
    if (day < 10) {
      day = "0" + day;
    }
    if (month < 10) {
      month = "0" + month;
    }
    const dateInApiFormat = year + "-" + month + "-" + day;
    return dateInApiFormat;
  }
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

  $("body").on("change", "#time-start", function (e) {
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
    var maGiayPhepATTP = "GPKD" + $("#maCSKD").html();
    const timeStart = $("#time-start").val();
    var timeEnd = $("#time-end").val();
    var trangThaiGP = 1;
    if (timeEnd === "") {
      $("#validation-date").html("Thời hạn không được bỏ trống");
    } else if (timeStart < timeEnd) {
      console.log({ maGiayPhepATTP, timeEnd, timeStart });
      console.log($("#maCSKD").html());
      $.ajax({
        url: store,
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "POST",
        data: {
          maGiayPhepATTP: maGiayPhepATTP,
          maCSKD: $("#maCSKD").html(),
          maVanBan: 1,
          ngayCap: timeStart,
          thoiHan: timeEnd,
          trangThai: 1,
        },
        dataType: "json",
        success: function (data) {
          console.log("tadaa", data);
          $("#companydata").trigger("reset");
          $("#modal-id").modal("hide");
          Swal.fire({
            position: "top-end",
            icon: "success",
            title:
              "Cập nhật giấy chứng nhận thành công" +
              " " +
              $("#nameProvider").html(),
            showConfirmButton: false,
            timer: 1500,
          });
        },
        error: function (data) {
          console.log("Error......", location.href);
        },
      }).done(function (res) {
        console.log("DONE", res);
      });

      $.ajax({
        url: store,
        headers: {
          "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
        type: "PUT",
        data: {
          maCSKD: $("#maCSKD").html(),
          trangThai: 2,
        },
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
      var today = new Date();

      console.log(
        getDateTime(today.getFullYear(), today.getMonth() + 1, today.getDate())
      );
      $("#modal-id").modal("show");
      $("#maCSKD").html(data.data[0].maCSKD);
      $("#name").html(data.data[0].ho + " " + data.data[0].ten);
      $("#nameProvider").html(data.data[0].tenCSKD);
      $("#address").html(data.data[0].diaChi);
      $("#time-start").val(
        getDateTime(today.getFullYear(), today.getMonth() + 1, today.getDate())
      );
      $("#typeProduct").html(data.data[0].tenLoaiCSKD);
    });
  });
  console.log("ready");

  // thu hoi
  $("body").on("click", "#block-detail", function (e) {
    var id = $(this).data("iddetail");
    console.log("id", id);
    var makehoach = $(this).data("makehoach");
    $.get(block + "/" + id + "/edit/" + makehoach + "", function (data) {
      console.log("Data: ", data);
      $("#box-list").removeClass("col-12");
      $("#box-list").addClass("col-7");
      $("#info-premises").css("display", "block");

      $("#tenChu").html(data.data[0].ho + " " + data.data[0].ten);
      $("#tenCS").html(data.data[0].tenCSKD);
      $("#diachi").html(data.data[0].diaChi);
      $("#dichvu").html(data.data[0].tenLoaiCSKD);

      $("#tungay").html(data.data[0].ngayCap);
      $("#magp").html(data.data[0].maGiayPhepATTP);
      $("#denngay").html(data.data[0].thoiHan);
      $("#ketqua").html(data.ketqua[0].ketQuaThanhTra);
      $("#ngaythanhtra").html(data.ketqua[0].thoiGianThanhTra);

      var elements = "";
      $.each(data.canbott, function (key, value) {
        elements +=
          "<li>Cán bộ: <b>" + value.ho + " " + value.ten + "</b></b></li>";
      });
      $("#list-people").html(elements);

      if (data.data[0].trangThai === 2) {
        $("#submit-block").prop("disabled", true);
        $("#submit-block").addClass("btn-dark");
      } else {
        $("#submit-block").prop("disabled", false);
        $("#submit-block").removeClass("btn-dark");
      }
    });
  });

  // save server block
  $("body").on("click", "#submit-block", function (e) {
    var today = new Date();
    $.ajax({
      url: block,
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
      type: "PUT",
      data: {
        maGiayPhepATTP: $("#magp").html(),
        ngayThuHoi: getDateTime(
          today.getFullYear(),
          today.getMonth() + 1,
          today.getDate()
        ),
        trangThai: 2,
      },
      dataType: "json",
      success: function (data) {
        console.log("tadaa", data);
        $("#companydata").trigger("reset");
        $("#modal-id").modal("hide");
        Swal.fire({
          position: "top-end",
          icon: "success",
          title:
            "Thu hồi giấy chứng nhận của" +
            " " +
            $("#tenChu").html() +
            " thành công",
          showConfirmButton: false,
          timer: 2000,
        });
      },
      error: function (data) {
        console.log("Error......", location.href);
      },
    }).done(function (res) {
      console.log("DONE", res);
    });
    location.href = location.href;
  });
  // active link details
  $(".btn-link-detail").click(function () {
    $(".btn-link-detail").removeClass("active"); // it remove all the active links
    $(this).addClass("active"); // it adds active class to the current link you have opened
  });
});
