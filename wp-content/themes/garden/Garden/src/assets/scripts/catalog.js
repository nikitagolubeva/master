import { sendDataToServer } from "./request";

document.addEventListener("DOMContentLoaded", function () {
  const catalog = document.querySelector(".catalog");

  if (catalog) {
    const goodsList = catalog.querySelector(".catalog__goods__container");
    const paginationBlock = catalog.querySelector(
      ".catalog-pagination-container"
    );
    const pagNav = catalog.querySelector(".catalog-pagination-pages");
    const prevArrow = catalog.querySelector(".catalog-left-arrow");
    const nextArrow = catalog.querySelector(".catalog-right-arrow");
    const filterBtns = catalog.querySelectorAll(".catalog-categories__item");
    const filterContainer = catalog.querySelector(".catalog-categories");

    let url = new URL(window.location.href);

    const subcategoryBlock = catalog.querySelector(".catalog-subcategories");
    const subcategoryList = catalog.querySelector(".catalog-subcategories__list");

    let currentPage = 1;
    let currentFilter = filterContainer.dataset.default;
    let currentSort = "none";
    let currentSubcategory = "";
    let oldFilter = "old";
    let allPages = 0;
    let maxNavItems = 6;
    let nextOverflow = null;
    let activeNavPage = null;
    let activeFilter = null;
    let firstLoad = true;

    let searchValue = "";
    let oldSearchValue = "";

    let searched = false;

    const editAddedGoods = () => {
      //sessionStorage.setItem("added-items", JSON.stringify(addedGoods));
    };

    const editFavoriteGoods = () => {
      //sessionStorage.setItem("favorite-items", JSON.stringify(favoriteGoods));
    };

    function loadSubcategories(categoryId) {
      if (!categoryId || categoryId === "none" || categoryId === "") {
        subcategoryBlock.classList.add("hidden");
        while (subcategoryList.firstChild) subcategoryList.removeChild(subcategoryList.firstChild);
        return;
      }

      fetch(myajax.rest_url + "subcategories?category_id=" + encodeURIComponent(categoryId))
        .then((r) => r.json())
        .then((data) => {
          while (subcategoryList.firstChild) subcategoryList.removeChild(subcategoryList.firstChild);

          if (!data.subcategories || data.subcategories.length === 0) {
            subcategoryBlock.classList.add("hidden");
            return;
          }

          const allItem = document.createElement("li");
          allItem.classList.add("catalog-subcategory__item");
          allItem.dataset.subcategory = "";
          allItem.textContent = "Все";
          if (currentSubcategory === "") allItem.classList.add("active");
          subcategoryList.appendChild(allItem);

          for (const sub of data.subcategories) {
            const li = document.createElement("li");
            li.classList.add("catalog-subcategory__item");
            li.dataset.subcategory = sub;
            li.textContent = sub;
            if (currentSubcategory === sub) li.classList.add("active");
            subcategoryList.appendChild(li);
          }

          subcategoryBlock.classList.remove("hidden");
        })
        .catch(() => {
          subcategoryBlock.classList.add("hidden");
        });
    }

    function checkProducts() {
      let products = document.querySelectorAll(".product");
      let addedGoods = [];
      let favoriteGoods = [];

      let formData = new FormData();
      formData.append("action", "get_added_goods");
      sendDataToServer(formData).then((answer) => {
        addedGoods = answer.addedGoodsArr;
      });

      formData.append("action", "get_favorite_goods");
      sendDataToServer(formData).then((answer) => {
        favoriteGoods = answer.favoriteGoodsArr;

        for (let product of products) {
          let addedGood = addedGoods.find(
            (good) => good.id == product.dataset.id
          );

          if (addedGood != undefined) {
            let amount = addedGood.amount;
            product.classList.add("added");
            product.querySelector(".amount").textContent = amount;
          } else {
            product.classList.remove("added");
          }

          if (favoriteGoods.indexOf(parseInt(product.dataset.id)) != -1) {
            product.classList.add("favorite");
          } else {
            product.classList.remove("favorite");
          }

          if (
            product.querySelector(".product-status").textContent ==
            "Нет в наличии"
          ) {
            product.classList.add("empty");
          } else {
            product.classList.remove("empty");
          }

          if (
            product.querySelector(".product-status").textContent == "Предзаказ"
          ) {
            product.classList.add("only-order");
          } else {
            product.classList.remove("only-order");
          }
        }
      });
    }

    function applyFilter(button, page) {
      let tempFilter = currentFilter;
      currentPage = page;
      if (activeFilter) {
        activeFilter.classList.remove("active");
      }
      activeFilter = button;
      activeFilter.classList.add("active");
      currentFilter = button.dataset.category;
      if (!firstLoad) {
        oldFilter = tempFilter;
        currentSubcategory = "";
      }
      firstLoad = true;

      url.searchParams.set("category", encodeURIComponent(currentFilter));
      url.searchParams.delete("subcategory");
      url.searchParams.set("search", encodeURIComponent(""));

      loadSubcategories(currentFilter);

      if ($(window).width() < 600) {
        $(".js-mobile-search").val("");
      } else {
        $(".js-desc-search").val("");
      }

      updateURL();

      changePage(currentPage);
      $("body, html").animate({ scrollTop: 0 }, 300);
    }

    function navItemsHandler() {
      pagNav
        .querySelectorAll(".pagination__pages__item")
        .forEach((navElement) => {
          navElement.addEventListener("click", (e) => {
            $("body, html").animate({ scrollTop: 0 }, 300);
            changePage(parseInt(e.target.textContent));
          });
        });
    }

    function navOverflowHandler(page) {
      let navItemLength = pagNav.children.length;
      let currentNavNumber = currentPage - 1;

      if (navItemLength > maxNavItems) {
        for (let i = 0; i < pagNav.children.length; i++) {
          if (
            i < currentNavNumber - maxNavItems / 2 + 1 ||
            i > currentNavNumber + maxNavItems / 2 + 1
          ) {
            if (i < navItemLength - 1) {
              pagNav.children[i].classList.add("hidden");
            }
          } else {
            pagNav.children[i].classList.remove("hidden");

            if (nextOverflow) {
              nextOverflow.classList.remove("overflow");
            }

            if (
              i == currentNavNumber + maxNavItems / 2 + 1 &&
              i != navItemLength - 1
            ) {
              nextOverflow = pagNav.children[i];
              nextOverflow.classList.add("overflow");
            }
          }
        }
      }

      if (currentPage == 1) {
        prevArrow.classList.add("disabled");
      } else {
        prevArrow.classList.remove("disabled");
      }

      if (currentPage == allPages) {
        nextArrow.classList.add("disabled");
      } else {
        nextArrow.classList.remove("disabled");
      }

      if (activeNavPage != null) {
        activeNavPage.classList.remove("active");
      }
      activeNavPage = pagNav.querySelectorAll(".pagination__pages__item")[
        page - 1
      ];
      activeNavPage.classList.add("active");
    }

    function checkPages() {
      if (searched) {
        if (searchValue != oldSearchValue) {
          getPages(currentFilter, currentPage);
        } else {
          if (allPages > 1) {
            navOverflowHandler(currentPage);
          }
        }
      } else {
        if (oldFilter != currentFilter) {
          getPages(currentFilter, currentPage);
        } else {
          if (allPages > 1) {
            navOverflowHandler(currentPage);
          }
        }
      }
    }

    function createNav() {
      while (pagNav.firstChild) {
        pagNav.removeChild(pagNav.firstChild);
      }
      for (let i = 0; i < allPages; i++) {
        let newNavItem = document.createElement("li");
        newNavItem.classList.add("pagination__pages__item");
        newNavItem.textContent = i + 1;
        pagNav.appendChild(newNavItem);
      }
      navItemsHandler();
    }

    function generateGood(
      name,
      id,
      price,
      status,
      link,
      images,
      category,
      articul,
      subgrade,
      zone,
      variants,
      cult_icons,
      decor_icons,
      use_icons,
      rating,
      old_price
    ) {
      let discount = ((old_price - price) / old_price).toFixed(2) * 100;

      if (zone == null || zone == "null") {
        zone = 0;
      }
      if (articul == null || articul == "null") {
        articul = "-";
      }
      if (subgrade == null || subgrade == "null") {
        subgrade = "-";
      }

      const section = document.createElement("section");
      section.dataset.id = id;
      section.dataset.category = category;
      section.classList.add("product-card", "product");

      if (old_price != price) {
        section.classList.add("discount");
      }

      section.innerHTML = `
                        <div class="product-card__img-container">
                            <a href="${link}">
                                <img class="product-card__img product-img" src="${images[0]}" alt="product image">
                            </a>
                            <div class="product-card__favorite-btn heart-btn">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.612 5.41452C19.1722 4.96607 18.65 4.61034 18.0752 4.36763C17.5005 4.12492 16.8844 4 16.2623 4C15.6401 4 15.0241 4.12492 14.4493 4.36763C13.8746 4.61034 13.3524 4.96607 12.9126 5.41452L11.9998 6.34476L11.087 5.41452C10.1986 4.50912 8.99364 4.00047 7.73725 4.00047C6.48085 4.00047 5.27591 4.50912 4.38751 5.41452C3.4991 6.31992 3 7.5479 3 8.82833C3 10.1088 3.4991 11.3367 4.38751 12.2421L5.30029 13.1724L11.9998 20L18.6992 13.1724L19.612 12.2421C20.0521 11.7939 20.4011 11.2617 20.6393 10.676C20.8774 10.0902 21 9.46237 21 8.82833C21 8.19428 20.8774 7.56645 20.6393 6.9807C20.4011 6.39494 20.0521 5.86275 19.612 5.41452V5.41452Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <a href="${link}" class="product-card__name product-name">${name}</a>
                        <a href="${link}" class="product-card__price-container">
                            <div>
                                <p class="product-card__price product-price">${price} ₽</p>
                                <p class="product-card__old-price">${old_price} ₽</p>
                            </div>
                            <p class="product-card__discount">-${discount}%</p>
                        </a>
                        <p class="product-card__status product-status">${status}</p>
                        <div class="product-rating" data-rating='${rating}'>
                            <div class="active-rating">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="stars-container">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="product-card__buttons">
                            <div class="loading-container">
                                <div class="loading-block">
                                    <span class="bg-line"></span>
                                </div>
                            </div>
                            <button class="product-card__order click-to-buy-btn" type="button">
                            заказать
                            </button>
                            <button class="product-card__buy-now click-to-buy-btn" type="button">
                                купить<span> сейчас</span>
                            </button>
                            <button class="product-card__buy add-to-cart-btn" type="button">
                                <span>Заказать</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.2282 12.4029C20.095 13.3349 19.3299 14.0479 18.3908 14.1149L7.95668 14.8602C6.86996 14.9379 5.92104 14.1314 5.8224 13.0464L5.27273 7H21L20.2282 12.4029Z" fill="white" />
                                    <path d="M3 4H5L5.27273 7M5.27273 7L5.8224 13.0464C5.92104 14.1314 6.86996 14.9379 7.95668 14.8602L18.3908 14.1149C19.3299 14.0479 20.095 13.3349 20.2282 12.4029L21 7H5.27273Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M8.5 21C9.32843 21 10 20.3284 10 19.5C10 18.6716 9.32843 18 8.5 18C7.67157 18 7 18.6716 7 19.5C7 20.3284 7.67157 21 8.5 21Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16.5 21C17.3284 21 18 20.3284 18 19.5C18 18.6716 17.3284 18 16.5 18C15.6716 18 15 18.6716 15 19.5C15 20.3284 15.6716 21 16.5 21Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                            <div class="amount-block">
                                <button class="amount-block__btn minus">
                                    <svg class="minus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 12L18 12" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </button>
                                <p class="amount-block__amount amount">1</p>
                                <button class="amount-block__btn plus">
                                    <svg class="plus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 6V18" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                        <path d="M6 12L18 12" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <p class="hidden product-articul">${articul}</p>
                        <p class="hidden product-subgrade">${subgrade}</p>
                        <p class="hidden product-zone">${zone}</p>
                        <p class="hidden product-link">${link}</p>
      `;

      // let ul = document.createElement("ul");

      // ul.classList.add("hidden");

      // //console.log(variants);
      // //console.log(variants != null && variants != "null");

      // if (variants != null && variants != "null") {
      //   for (let variant of variants) {
      //     ul.insertAdjacentHTML(
      //       "beforeend",
      //       `<li class="container-item">
      //         <p class="container-link">${variant.link}</p>
      //         <p class="container-name">${variant.name}</p>
      //         <p class="container-price">${variant.price}</p>
      //     </li>`
      //     );
      //   }
      // }

      // section.appendChild(ul);

      // let cult_icons_list = document.createElement("ul");

      // cult_icons_list.classList.add("hidden");

      // if (cult_icons != null && cult_icons != "null") {
      //   for (let icon of cult_icons) {
      //     cult_icons_list.insertAdjacentHTML(
      //       "beforeend",
      //       `<li class="icon-type-1">${icon}</li>`
      //     );
      //   }
      // }

      // section.appendChild(cult_icons_list);

      // let decor_icons_list = document.createElement("ul");

      // decor_icons_list.classList.add("hidden");

      // if (decor_icons != null && decor_icons != "null") {
      //   for (let icon of decor_icons) {
      //     decor_icons_list.insertAdjacentHTML(
      //       "beforeend",
      //       `<li class="icon-type-2">${icon}</li>`
      //     );
      //   }
      // }

      // section.appendChild(decor_icons_list);

      // let use_icons_list = document.createElement("ul");

      // use_icons_list.classList.add("hidden");

      // if (use_icons != null && use_icons != "null") {
      //   for (let icon of use_icons) {
      //     use_icons_list.insertAdjacentHTML(
      //       "beforeend",
      //       `<li class="icon-type-3">${icon}</li>`
      //     );
      //   }
      // }

      // section.appendChild(use_icons_list);

      // let image_list = document.createElement("ul");

      // image_list.classList.add("hidden");

      // for (let image of images) {
      //   image_list.insertAdjacentHTML(
      //     "beforeend",
      //     `<li class="images">${image}</li>`
      //   );
      // }

      // section.appendChild(image_list);

      return section;
    }

    function getPages(filter, page) {
      //console.log("запрос страниц");
      let formData = new FormData();

      if (searched) {
        formData.append("action", "get_search_pages");
        if ($(window).width() < 600) {
          formData.append("search_value", $(".js-mobile-search").val());
        } else {
          formData.append("search_value", $(".js-desc-search").val());
        }
      } else {
        formData.append("action", "get_goods_pages");
        formData.append("category", filter);
        formData.append("subcategory", currentSubcategory);
      }

      sendDataToServer(formData).then((answer) => {
        if (answer.status == "ok") {
          allPages = answer.pages;
          if (allPages > 1) {
            paginationBlock.classList.remove("hidden");
            createNav();
            navOverflowHandler(page);
          } else {
            paginationBlock.classList.add("hidden");
          }
        }
      });
    }

    function getGoods(page, filter) {
      catalog.classList.add("loading");

      let formData = new FormData();

      if (searched) {
        formData.append("action", "search_goods");
        if ($(window).width() < 600) {
          formData.append("search_value", $(".js-mobile-search").val());
        } else {
          formData.append("search_value", $(".js-desc-search").val());
        }
        formData.append("page", page);
        formData.append("sort", currentSort);
      } else {
        formData.append("action", "get_goods");
        formData.append("page", page);
        if (filter == "") {
          filter = "none";
        }
        formData.append("category", filter);
        formData.append("sort", currentSort);
        formData.append("subcategory", currentSubcategory);
      }

      for (let [name, value] of formData) {
        //console.log(`${name} = ${value}`);
      }

      sendDataToServer(formData).then((answer) => {
        //console.log("запрос товаров");
        //console.log(answer);

        if (answer.status == "ok") {
          while (goodsList.firstChild) {
            goodsList.removeChild(goodsList.firstChild);
          }
          for (let good of answer.goods) {
            goodsList.appendChild(
              generateGood(
                good.name,
                good.id,
                good.price,
                good.status,
                good.link,
                good.images,
                good.category,
                good.articul,
                good.subgrade,
                good.zone,
                good.variations,
                good.cult_icons,
                good.decor_icons,
                good.use_icons,
                good.rating,
                good.old_price
              )
            );
          }
          checkProducts();

          if (answer.goods.length == 0) {
            $(".catalog__goods__text").addClass("show");
          } else {
            $(".catalog__goods__text").removeClass("show");
          }

          catalog.classList.remove("loading");
        }
      });
    }

    function changePage(page) {
      currentPage = page;

      url.searchParams.set("current_page", encodeURIComponent(currentPage));
      url.searchParams.set("sort", encodeURIComponent(currentSort));
      if (currentSubcategory) {
        url.searchParams.set("subcategory", encodeURIComponent(currentSubcategory));
      } else {
        url.searchParams.delete("subcategory");
      }
      updateURL();

      getGoods(currentPage, currentFilter);
      checkPages();
    }

    function searchItems(page) {
      currentFilter = "";
      if (activeFilter) {
        activeFilter.classList.remove("active");
      }
      activeFilter = filterContainer.querySelector(".all-category");
      activeFilter.classList.add("active");

      if ($(window).width() < 1000) {
        $(".js-mobile-category-name").text(activeFilter.textContent);
      } else {
        $(".catalog__header-category").text(" — " + activeFilter.textContent);
      }

      if ($(window).width() < 600) {
        searchValue = $(".js-mobile-search").val();
      } else {
        searchValue = $(".js-desc-search").val();
      }
      searched = true;
      currentPage = page;

      url.searchParams.delete("category");
      url.searchParams.set("search", encodeURIComponent(searchValue));

      updateURL();

      changePage(currentPage);

      oldSearchValue = searchValue;
    }

    function updateURL() {
      if (history.pushState) {
        history.pushState(null, null, url);
      } else {
        //console.log("History API не поддерживается");
      }
    }

    $(".sort-select").each(function () {
      const _this = $(this),
        selectOption = _this.find("option"),
        selectOptionLength = selectOption.length,
        selectedOption = selectOption.filter(":selected"),
        duration = 450;

      _this.hide();
      _this.wrap('<div class="select"></div>');
      $("<div>", {
        class: "new-select",
        text: _this.children("option:disabled").text(),
      }).insertAfter(_this);

      const selectHead = _this.next(".new-select");
      $("<div>", {
        class: "new-select__list",
      }).insertAfter(selectHead);

      const selectList = selectHead.next(".new-select__list");
      for (let i = 1; i < selectOptionLength; i++) {
        $("<div>", {
          class: "new-select__item",
          html: $("<span>", {
            text: selectOption.eq(i).text(),
          }),
        })
          .attr("data-value", selectOption.eq(i).val())
          .appendTo(selectList);
      }

      const selectItem = selectList.find(".new-select__item");
      selectList.slideUp(0);
      selectHead.on("click", function () {
        if (!$(this).hasClass("on")) {
          $(this).addClass("on");
          selectList.slideDown(duration);

          selectItem.on("click", function () {
            let chooseItem = $(this).data("value");

            _this.val(chooseItem).attr("selected", "selected");

            selectHead.text($(this).find("span").text());

            selectList.slideUp(duration);
            selectHead.removeClass("on");
          });
        } else {
          $(this).removeClass("on");
          selectList.slideUp(duration);
        }
      });
    });

    if (url.searchParams.get("sort") !== null) {
      currentSort = decodeURIComponent(url.searchParams.get("sort"));

      if ($(window).width() < 1000 && $(window).width() > 600) {
        $(".js-mobile-sort-select").find(".sort-select").val(currentSort);

        if (currentSort !== "none") {
          $(".js-mobile-sort-select")
            .find(".new-select")
            .text(
              $(".js-mobile-sort-select")
                .find(".sort-select")
                .find("option:selected")
                .text()
            );
        }
      } else {
        $(".js-desc-sort-select").find(".sort-select").val(currentSort);

        if (currentSort !== "none") {
          $(".js-desc-sort-select")
            .find(".new-select")
            .text($(".js-desc-sort-select").find("option:selected").text());
        }
      }
    }

    if (url.searchParams.get("current_page") !== null) {
      currentPage = url.searchParams.get("current_page");
    }

    if (url.searchParams.get("subcategory") !== null) {
      currentSubcategory = decodeURIComponent(url.searchParams.get("subcategory"));
    }

    if (
      url.searchParams.get("search") === null ||
      url.searchParams.get("search") === ""
    ) {
      if (url.searchParams.get("category") !== null) {
        currentFilter = decodeURIComponent(url.searchParams.get("category"));
      }

      for (let filter of filterBtns) {
        if (filter.dataset.category == currentFilter) {
          if ($(window).width() < 1000) {
            $(".js-mobile-category-name").text(filter.textContent);
          } else {
            $(".catalog__header-category").text(" — " + filter.textContent);
          }
          applyFilter(filter, currentPage);
          break;
        }
      }
    } else {
      let historySearch = decodeURIComponent(url.searchParams.get("search"));

      if ($(window).width() < 600) {
        $(".js-mobile-search").val(historySearch);
      } else {
        $(".js-desc-search").val(historySearch);
      }

      for (let filter of filterBtns) {
        if (filter.dataset.category == currentFilter) {
          if ($(window).width() < 1000) {
            $(".js-mobile-category-name").text(filter.textContent);
          } else {
            $(".catalog__header-category").text(" — " + filter.textContent);
          }
          break;
        }
      }

      searchItems(currentPage);
    }

    prevArrow.addEventListener("click", () => {
      $("body, html").animate({ scrollTop: 0 }, 300);
      changePage(currentPage - 1);
    });

    nextArrow.addEventListener("click", () => {
      $("body, html").animate({ scrollTop: 0 }, 300);
      changePage(currentPage + 1);
    });

    $(".sort-select-container").on("click", (e) => {
      let self = e.target.closest(".new-select__item");
      if (self) {
        if (
          currentSort !=
          $(self).closest(".select-container").find(".sort-select").val()
        ) {
          currentSort = $(self)
            .closest(".select-container")
            .find(".sort-select")
            .val();
          changePage(1);
        }
      }
    });

    if ($(window).width() < 1000) {
      maxNavItems = 4;

      $(".catalog-categories").css("display", "none");

      $(".category-button").on("click", (e) => {
        //$(".catalog-categories").toggleClass("show-all");
        $(".catalog__mobile-search").toggleClass("category-showed");
        $(".catalog-categories").slideToggle();
      });
      $(".catalog-categories__button").on("click", (e) => {
        //$(".catalog-categories").removeClass("show-all");
        $(".catalog-categories").slideUp();
        $("body, html").animate({ scrollTop: 0 }, 300);
        $(".catalog__mobile-search").removeClass("category-showed");
      });
      $(".search-icon").on("click", (e) => {
        //$(".catalog-categories").removeClass("show-all");
        $(".catalog-categories").slideUp();
        $("body, html").animate({ scrollTop: 0 }, 300);
        $(".catalog__mobile-search").toggleClass("search-showed");
        if ($(".catalog__mobile-search").hasClass("search-showed")) {
          //console.log("focus");
          $(".js-mobile-search").trigger("focus");
        } else {
          $(".js-mobile-search").trigger("blur");
        }
      });
    } else {
      $(".catalog-categories__button").on("click", (e) => {
        $(".catalog-categories").toggleClass("show-all");
      });
    }

    $(".catalog-categories__item").on("click", (e) => {
      searched = false;
      oldSearchValue = "";
      if ($(window).width() < 1000) {
        //$(".catalog-categories").removeClass("show-all");
        $(".catalog-categories").slideUp();

        // let copyItem = document.createElement("li");
        // copyItem.innerHTML = e.target.closest(
        //   ".catalog-categories__item"
        // ).innerHTML;
        // copyItem.firstElementChild.remove();
        // //console.log(copyItem.textContent);

        // $(".js-mobile-category-name").text(copyItem.textContent);
        // copyItem.remove();

        $(".js-mobile-category-name").text(
          e.target.closest(".catalog-categories__item").textContent
        );
      } else {
        $(".catalog__header-category").text(
          " — " + e.target.closest(".catalog-categories__item").textContent
        );
      }
      applyFilter(e.target.closest(".catalog-categories__item"), 1);
    });

    $(".js-search-goods").on("click", (e) => {
      searchItems(1);
    });

    $(".search-input").on("keypress", (e) => {
      if (e.key === "Enter") {
        searchItems(1);
      }
    });

    catalog.addEventListener("click", (e) => {
      const subItem = e.target.closest(".catalog-subcategory__item");
      if (!subItem) return;

      subcategoryList.querySelectorAll(".catalog-subcategory__item").forEach((el) => {
        el.classList.remove("active");
      });
      subItem.classList.add("active");

      currentSubcategory = subItem.dataset.subcategory;
      url.searchParams.set("subcategory", encodeURIComponent(currentSubcategory));
      updateURL();

      changePage(1);
    });
  }
});
