import Swiper from "swiper/bundle";
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".mySwiper", {
    direction: "horizontal",
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      dragSize: "auto",
      dragClass: "swiper-scrollbar-drag",
      horizontalClass: "swiper-scrollbar-horizontal",
      hide: false,
    },
    slidesPerView: 4,
    spaceBetween: 32,
    breakpoints: {
      310: {
        slidesPerView: "auto",
        spaceBetween: 16,
        freeMode: {
          enabled: true,
          sticky: false,
        },
      },
      600: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1200: {
        slidesPerView: 4,
        spaceBetween: 16,
      },
      1400: {
        slidesPerView: 4,
        spaceBetween: 32,
      },
    },
  });
});
