document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".main")) {
    $(".categories-section__btn").on("click", (e) => {
      $(".categories-section").toggleClass("show-all");
    });

    $(".categories-item").on("click", (e) => {
      let self = e.target.closest(".categories-item");
      e.preventDefault();

      sessionStorage.removeItem("isHistory");

      window.location.href = self.href;
    });
  }
});
