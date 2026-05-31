document.addEventListener("DOMContentLoaded", function () {
  const bannerBlock = document.querySelector(".banners-container");

  if (bannerBlock) {
    $(".banner-button").on("click", (e) => {
      let self = e.target.closest(".banner-button");
      if (self.classList.contains("js-button-link")) {
        window.location.href = self.dataset.href;
      }
    });
  }
});
