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
