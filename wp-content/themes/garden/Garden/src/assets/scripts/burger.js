document.addEventListener("DOMContentLoaded", function () {
  $(".side-bar-open").on("click", () => {
    //console.log("side bar");

    $(".side-bar").toggleClass("active");
    if ($(window).width() < 1000) {
      $(".body").toggleClass("menu-active");
    }
  });

  $(".side-bar-close").on("click", () => {
    $(".side-bar").removeClass("active");
    if ($(window).width() < 1000) {
      $(".body").removeClass("menu-active");
    }
  });

  window.addEventListener("click", (e) => {
    const target = e.target;
    if (
      !target.closest(".side-bar") &&
      !target.closest(".side-bar-open") &&
      !target.closest(".authorization-wrapper")
    ) {
      $(".side-bar").removeClass("active");
      if ($(window).width() < 1000) {
        $(".body").removeClass("menu-active");
      }
    }
  });
});
