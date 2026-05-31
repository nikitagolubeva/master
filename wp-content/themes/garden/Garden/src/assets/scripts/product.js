import Swiper from "swiper/bundle";
import { Fancybox } from "@fancyapps/ui";

document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".product-page")) {
    const tabHeaderSlider = new Swiper(".tab-header-slider", {
      slidesPerView: "auto",
      autoHeight: false,
      spaceBetween: 0,
      allowTouchMove: true,
      freeMode: false,
      watchSlidesProgress: true,
    });

    const tabsSlider = new Swiper(".tabs-slider", {
      slidesPerView: 1,
      autoHeight: true,
      spaceBetween: 30,
      allowTouchMove: false,
      effect: "fade",
      speed: 700,
      fadeEffect: {
        crossFade: true,
      },
    });

    let $activeItem = $(".tabs__header__item.active");

    //console.log($activeItem);

    $(".tabs__header__item").on("click", (e) => {
      let $self = $(e.target);

      $activeItem.removeClass("active");

      $activeItem = $self;

      $activeItem.addClass("active");

      let index = $self.data("tab") - 1;

      //console.log("index");

      tabsSlider.slideTo(index);
    });

    $(".column-header").on("click", (e) => {
      let $self = $(e.target);
      $self.closest(".conventions-block__column").toggleClass("show");
      tabsSlider.updateAutoHeight(300);
    });

    $(".catalog-categories__item").on("click", (e) => {
      let self = e.target.closest(".catalog-categories__item");
      e.preventDefault();

      sessionStorage.removeItem("isHistory");

      window.location.href = self.firstElementChild.href;
    });

    $(".catalog-categories__button").on("click", (e) => {
      $(".catalog-categories").toggleClass("show-all");
    });

    $(".zoom-img").on("click", (e) => {
      //console.log(e.target.closest(".swiper-slide").firstElementChild);
      let src = e.target.closest(".swiper-slide").firstElementChild.src;
      //console.log(src);

      Fancybox.show([
        {
          src: src,
          thumb: src,
        },
      ]);
    });
  }
});
