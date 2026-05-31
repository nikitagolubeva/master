import "swiper/css/bundle";

import "./main.scss";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

import "ICONS/check.svg";
import "ICONS/select-arrow.svg";
import "ICONS/select-arrow-white.svg";
import "ICONS/logo.svg";
import "ICONS/clock.svg";
import "ICONS/map.svg";
import "ICONS/logo.svg";
import "ICONS/phone.svg";
import "ICONS/whatsapp.svg";
import "ICONS/heart.svg";
import "ICONS/cart.svg";
import "ICONS/user.svg";
import "ICONS/orders.svg";
import "ICONS/security.svg";
import "ICONS/logo-white.svg";
import "ICONS/sun.svg";
import "ICONS/advantage-1.svg";
import "ICONS/advantage-2.svg";
import "ICONS/advantage-3.svg";
import "ICONS/advantage-4.svg";
import "ICONS/main-icon-1.svg";
import "ICONS/main-icon-2.svg";
import "ICONS/main-icon-3.svg";
import "ICONS/main-icon-4.svg";
import "ICONS/title.svg";
import "ICONS/star_rate.svg";
import "ICONS/star_rate_full.svg";
import "ICONS/envelope.svg";
import "ICONS/pink-heart.svg";

import "ICONS/1.svg";
import "ICONS/2.svg";
import "ICONS/3.svg";
import "ICONS/4.svg";
import "ICONS/5.svg";

import "IMAGES/product.jpg";
import "IMAGES/bg.webp";
import "IMAGES/main-title.png";
import "IMAGES/first-block-bg.webp";
import "IMAGES/offer-bg-1.webp";
import "IMAGES/offer-bg-2.webp";
import "IMAGES/roses.webp";
import "IMAGES/banner-1.webp";
import "IMAGES/banner-2.webp";
import "IMAGES/banner-3.webp";
import "IMAGES/banner-4.webp";
import "IMAGES/categories-1.webp";
import "IMAGES/categories-2.webp";
import "IMAGES/categories-3.webp";
import "IMAGES/categories-4.webp";
import "IMAGES/categories-5.webp";
import "IMAGES/categories-6.webp";
import "IMAGES/service-1.webp";
import "IMAGES/service-2.webp";
import "IMAGES/service-3.webp";
import "IMAGES/service-4.webp";
import "IMAGES/service-5.webp";
import "IMAGES/service-6.webp";
import "IMAGES/service-7.webp";
import "IMAGES/service-8.webp";
import "IMAGES/service-9.webp";
import "IMAGES/feedback-background.webp";
import "IMAGES/about-img.webp";
import "IMAGES/comment-image.webp";
import "IMAGES/quotes.png";
import "IMAGES/blog1.webp";
import "IMAGES/blog2.webp";
import "IMAGES/blog3.webp";
import "IMAGES/banner-new.webp";
import "IMAGES/zone-map.webp";
import "IMAGES/service-bg-1.webp";
import "IMAGES/service-bg-2.webp";
import "IMAGES/service-bg-3.webp";
import "IMAGES/service-bg-4.webp";
import "IMAGES/service-bg-5.webp";
import "IMAGES/service-bg-6.webp";
import "IMAGES/service-bg-7.webp";
import "IMAGES/service-bg-8.webp";
import "IMAGES/service-bg-9.webp";
import "IMAGES/prework-img-1.webp";
import "IMAGES/prework-img-2.webp";
import "IMAGES/dellin.webp";
import "IMAGES/gruzov.webp";
import "IMAGES/gazelkin.webp";
import "IMAGES/розы.webp";
import "IMAGES/вереск.webp";
import "IMAGES/злаки.webp";
import "IMAGES/комнатные.webp";
import "IMAGES/крупномеры.webp";
import "IMAGES/лианы.webp";
import "IMAGES/луковичные.webp";
import "IMAGES/многолетние.webp";
import "IMAGES/ниваки.webp";
import "IMAGES/однолетние.webp";
import "IMAGES/оливковые.webp";
import "IMAGES/Почвопокровные.webp";
import "IMAGES/пряные.webp";
import "IMAGES/рододендроны.webp";
import "IMAGES/сопуствующие.webp";
import "IMAGES/услуги.webp";
import "IMAGES/ландшафтный.webp";
import "IMAGES/декор.webp";
import "IMAGES/баня.webp";
import "IMAGES/vk.webp";
import "IMAGES/blog-image.webp";
import "IMAGES/404_bg.webp";
import "IMAGES/stick.png";
import "IMAGES/berries.png";
import "IMAGES/currant.png";
import "IMAGES/wine.png";
import "IMAGES/march-title.png";
import "IMAGES/march-bg.png";

import "SCRIPTS/select.js";
import "SCRIPTS/burger.js";
import "SCRIPTS/popup.js";
import "SCRIPTS/product.js";
import "SCRIPTS/validate.js";
import "SCRIPTS/cart.js";
import "SCRIPTS/order.js";
import "SCRIPTS/catalog.js";
import "SCRIPTS/slider.js";
import "SCRIPTS/contacts.js";
import "SCRIPTS/main-page.js";
import "SCRIPTS/quiz.js";
import "SCRIPTS/feedback.js";
import "SCRIPTS/product-popup.js";
import "SCRIPTS/blogs-page.js";
import "SCRIPTS/authorization.js";
import "SCRIPTS/account.js";
import "SCRIPTS/banners.js";
import "SCRIPTS/rate.js";
import "SCRIPTS/search.js";

document.addEventListener("DOMContentLoaded", function () {
  $(".js-show-form").on("click", () => {
    showPopup($(".form-wrapper"));
  });

  $(".price-item").on("click", (e) => {
    let $self = $(e.target);
    $self.closest(".price-item").toggleClass("show");
  });

  $(".show-prices-btn").on("click", (e) => {
    let $self = $(e.target);
    $(".prework-item__prices").toggleClass("show");
    if ($(".prework-item__prices").hasClass("show")) {
      $self.text("Cпрятать цены");
    } else {
      $self.text("Смотреть цены");
    }
  });

  $(".footer__color-changer").on("click", (e) => {
    $(".body").toggleClass("white");
  });

  const favoritePage = document.querySelector(".favorite-page");
  const orderHistory = document.querySelector(".order-section");

  if (favoritePage) {
    if ($(".favorite-page__container").children().length == 0) {
      favoritePage.classList.add("empty");
    } else {
      favoritePage.classList.remove("empty");
    }
  }

  if (orderHistory) {
    if ($(".order-section__container").children().length == 0) {
      orderHistory.classList.add("empty");
    } else {
      orderHistory.classList.remove("empty");
    }
  }
});
