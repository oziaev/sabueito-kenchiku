$(function () {

  // --------------------------------
  // ヘッダー
  // --------------------------------
  const header = document.querySelector("header");
  const toggle = document.querySelector(".toggle");

  toggle.addEventListener("click", (e) => {
    e.stopPropagation();
    header.classList.toggle("active");
    document.body.classList.toggle("no-scroll");
  });

  const closeMenu = () => {
    header.classList.remove("active");
    document.body.classList.remove("no-scroll");
  };

  document.addEventListener("click", () => {
    if (header.classList.contains("active")) {
      closeMenu();
    }
  });

});