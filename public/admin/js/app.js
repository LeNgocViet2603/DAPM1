let btnCreateSlug = document.querySelector("#create-slug");
if (btnCreateSlug) {
  let titleInput = document.querySelector("#title");
  let slugInput = document.querySelector("#slug");

  btnCreateSlug.onclick = (e) => {
    e.preventDefault();
    let titleText = titleInput.value;
    titleText = titleText
      .normalize("NFD")
      .replace(/[\u0300-\u036f]/g, "")
      .replace(/đ/g, "d")
      .replace(/Đ/g, "D");
    let slug = titleText.toLowerCase().replaceAll(" ", "-");
    slugInput.value = slug;
  };
}
setTimeout(() => {
  let districtInput = document.querySelector("#district");
  let wardInput = document.querySelector("#ward");
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const wardParam = urlParams.get("ward");
  $.ajax({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    url: "/ajax/getWard",
    dataType: "json",
    method: "POST",
    data: { districtId: districtInput.value },
    success: function (wards) {
      let innerWardInput = '  <option value="0">Tất cả</option>';
      wards.forEach((ward) => {
        innerWardInput += `<option value="${ward.maPhuongXa}" ${
          wardParam == ward.maPhuongXa ? "selected" : ""
        }>${ward.tenPhuongXa}</option>`;
      });

      wardInput.innerHTML = innerWardInput;
    },
  });
  districtInput.addEventListener("change", () => {
    $.ajax({
      headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
      },
      url: "/ajax/getWard",
      dataType: "json",
      method: "POST",
      data: { districtId: districtInput.value },
      success: function (wards) {
        let innerWardInput = '  <option value="0">Tất cả</option>';
        wards.forEach((ward) => {
          innerWardInput += `<option value="${ward.maPhuongXa}">${ward.tenPhuongXa}</option>`;
        });

        wardInput.innerHTML = innerWardInput;
      },
    });
  });
}, 500);
