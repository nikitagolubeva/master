import Swiper from "swiper/bundle";
import { Fancybox } from "@fancyapps/ui";

let nowOffset = 0;

function openPopup(popupWrapper) {
  $(popupWrapper).addClass("popup-shown");
  if ($(window).width() < 600) {
    //console.log($(window).height());

    nowOffset = $(window).scrollTop() - $(window).height() - 200;
    $(".body").addClass(" product-popup-shown");

    if (nowOffset < 0) {
      nowOffset = 0;
    }

    $("body, html").animate({ scrollTop: 0 }, 300);
  } else {
    $(".body").addClass("fixed");
  }
}

function closePopup(popupWrapper) {
  $(popupWrapper).removeClass("popup-shown");
  if ($(window).width() < 600) {
    $(".body").removeClass(" product-popup-shown");
    $("body, html").animate({ scrollTop: nowOffset }, 0);
  } else {
    $(".body").removeClass("fixed");
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const productPopup = document.querySelector(".product-popup");

  if (productPopup) {
    const imageSlider = new Swiper(".image-slider", {
      spaceBetween: 12,
      slidesPerView: 5,
      freeMode: true,
      watchSlidesProgress: true,
    });

    const imagesSlider = new Swiper(".images-slider", {
      spaceBetween: 10,
      thumbs: {
        swiper: imageSlider,
      },
    });

    const variantsSlider = new Swiper(".product-popup__variants", {
      spaceBetween: 12,
      slidesPerView: "auto",
    });

    $(".product-popup__cross").on("click", () => {
      closePopup(productPopup);
    });

    const priceWithoutSpaces = (str) => {
      return str.replace(/\s/g, "");
    };

    const variantsBlock = productPopup.querySelector(".variants-container");
    const iconRow1 = productPopup.querySelector(".icon-row-1");
    const iconRow2 = productPopup.querySelector(".icon-row-2");
    const iconRow3 = productPopup.querySelector(".icon-row-3");
    const mainImagesContainer =
      productPopup.querySelector(".popup-main-images");
    const catalogContainer = document.querySelector(
      ".catalog__goods__container"
    );
    const thumbImagesContainer = productPopup.querySelector(
      ".popup-thumb-images"
    );

    function popupOpenHandler(e) {
      let productInPopup = document.querySelector(".popup-block.product");

      let self = e.target.closest(".product-card");
      let id = self.dataset.id;
      let category = self.dataset.category;
      let name = self.querySelector(".product-name").textContent;
      let price = priceWithoutSpaces(
        self.querySelector(".product-price").textContent
      );
      let status = self.querySelector(".product-status").textContent;
      let articul = self.querySelector(".product-articul").textContent;
      let subgrade = self.querySelector(".product-subgrade").textContent;
      let zone = self.querySelector(".product-zone").textContent;
      let link = self.querySelector(".product-link").textContent;
      let amount = self.querySelector(".amount-block").textContent;

      let variants = self.querySelectorAll(".container-item");
      let icons1 = self.querySelectorAll(".icon-type-1");
      let icons2 = self.querySelectorAll(".icon-type-2");
      let icons3 = self.querySelectorAll(".icon-type-3");
      let images = self.querySelectorAll(".images");

      if ($(self).hasClass("empty")) {
        productInPopup.classList.add("empty");
      } else {
        productInPopup.classList.remove("empty");
      }

      if ($(self).hasClass("added")) {
        productInPopup.classList.add("added");
      } else {
        productInPopup.classList.remove("added");
      }

      if ($(self).hasClass("favorite")) {
        productInPopup.classList.add("favorite");
      } else {
        productInPopup.classList.remove("favorite");
      }

      productInPopup.dataset.id = id;
      $(".breadcrumb-category").text(category);
      $(".breadcrumb-name").text(name);
      $(".product-popup__name").text(name);
      $(".product-popup-price").text(price);
      $(".product-popup__status").text(status);
      $(".popup-articul").text(articul);
      $(".popup-subgrade").text(subgrade);
      $(".popup-zone").text(zone);
      $(".product-popup__link").attr("href", link);
      $(".product-popup .amount").text(amount);

      while (variantsBlock.firstChild) {
        variantsBlock.removeChild(variantsBlock.firstChild);
      }

      while (iconRow1.firstChild) {
        iconRow1.removeChild(iconRow1.firstChild);
      }

      while (iconRow2.firstChild) {
        iconRow2.removeChild(iconRow2.firstChild);
      }

      while (iconRow3.firstChild) {
        iconRow3.removeChild(iconRow3.firstChild);
      }

      while (mainImagesContainer.firstChild) {
        mainImagesContainer.removeChild(mainImagesContainer.firstChild);
      }

      while (thumbImagesContainer.firstChild) {
        thumbImagesContainer.removeChild(thumbImagesContainer.firstChild);
      }

      let first = true;

      for (let variant of variants) {
        let link = variant.querySelector(".container-link").textContent;
        let name = variant.querySelector(".container-name").textContent;
        let price = variant.querySelector(".container-price").textContent;

        if (first) {
          variantsBlock.insertAdjacentHTML(
            "beforeend",
            `
          <div class="swiper-slide">
            <a href="${link}" class="variant active">
              <p class="variant__name">Контейнер: ${name}</p>
              <p class="variant__price">${price} ₽/шт</p>
            </a>
          </div>`
          );
          first = false;
        } else {
          variantsBlock.insertAdjacentHTML(
            "beforeend",
            `<div class="swiper-slide">
          <a href="${link}" class="variant">
            <p class="variant__name">Контейнер: ${name}</p>
            <p class="variant__price">${price} ₽/шт</p>
          </a>
        </div>`
          );
        }
      }

      for (let icon of icons1) {
        let number = icon.textContent;

        iconRow1.insertAdjacentHTML(
          "beforeend",
          `<img src="/resourses/${number}.svg" alt="conditions">`
        );
      }

      for (let icon of icons2) {
        let number = icon.textContent;

        iconRow2.insertAdjacentHTML(
          "beforeend",
          `<img src="/resourses/${number}.svg" alt="conditions">`
        );
      }

      for (let icon of icons3) {
        let number = icon.textContent;

        iconRow3.insertAdjacentHTML(
          "beforeend",
          `<img src="/resourses/${number}.svg" alt="conditions">`
        );
      }

      first = true;

      for (let image of images) {
        let src = image.textContent;

        if (first) {
          mainImagesContainer.insertAdjacentHTML(
            "beforeend",
            `<div class="swiper-slide">
          <img class="product-img" src="${src}" />
          <div class="zoom-img">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
        </div>`
          );
          first = false;
        } else {
          mainImagesContainer.insertAdjacentHTML(
            "beforeend",
            `<div class="swiper-slide">
          <img src="${src}" />
          <div class="zoom-img">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
        </div>`
          );
        }

        thumbImagesContainer.insertAdjacentHTML(
          "beforeend",
          `<div class="swiper-slide">
        <img src="${src}" />
      </div>`
        );
      }

      imageSlider.update();
      imagesSlider.update();
      variantsSlider.update();

      openPopup(productPopup);
    }

    if (catalogContainer) {
      catalogContainer.addEventListener("click", (e) => {
        if (e.target.closest(".open-product-popup") != null) {
          //console.log("click to preview");

          popupOpenHandler(e);
        }
      });
      //console.log(";ids");
      $(".product-popup__link").on("click", (e) => {
        let self = e.target;
        e.preventDefault();

        let searchValue = "";

        if ($(window).width() < 800) {
          searchValue = $(".js-mobile-search").val();
        } else {
          searchValue = $(".js-desc-search").val();
        }

        let page = document
          .querySelector(".catalog-pagination-pages")
          .querySelector(".active");

        if (page) {
          page = page.textContent;
        } else {
          page = "";
        }

        let category = document
          .querySelector(".catalog-categories")
          .querySelector(".active");

        if (category) {
          category = category.dataset.category;
        } else {
          category = "";
        }

        let scroll = $(window).scrollTop();

        if (scroll < 0) {
          scroll = 0;
        }

        //console.log(searchValue);
        //console.log(category);
        //console.log(page);
        //console.log(scroll);

        sessionStorage.setItem("isHistory", "true");
        sessionStorage.setItem("page", page);
        sessionStorage.setItem("searchValue", searchValue);
        sessionStorage.setItem("category", category);
        sessionStorage.setItem("scroll", scroll);

        window.location.href = self.href;
      });
    } else {
      $(".open-product-popup").on("click", (e) => {
        //console.log("click to preview");

        popupOpenHandler(e);
      });
    }

    $(".product-popup__gallery").on("click", (e) => {
      if (e.target.closest(".zoom-img")) {
        let src = e.target.closest(".swiper-slide").firstElementChild.src;
        //console.log(src);

        Fancybox.show([
          {
            src: src,
            thumb: src,
          },
        ]);
      }
    });
  }
});
