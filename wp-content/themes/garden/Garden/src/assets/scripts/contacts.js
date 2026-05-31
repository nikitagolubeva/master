document.addEventListener("DOMContentLoaded", function () {
  $(".js-show-contacts").on("click", (e) => {
    $(e.target.closest(".address-item")).addClass("show-contacts");
  });
  $(".js-hide-contacts").on("click", (e) => {
    $(e.target.closest(".address-item")).removeClass("show-contacts");
  });
});
