import { sendDataToServer } from "./request.js";
import { openAuthorization } from "./authorization.js";

document.addEventListener("DOMContentLoaded", function () {
  const productsBtn = document.querySelectorAll(".add-to-cart-btn");
  const buyByClickBtn = document.querySelectorAll(".click-to-buy-btn");
  const productsHearts = document.querySelectorAll(".heart-btn");
  const productAmountBlocks = document.querySelectorAll(
    ".product .amount-block"
  );
  const catalogContainer = document.querySelector(".catalog__goods__container");
  //const fullPrice = document.getElementById("header-cart-sum");

  let price = 0;

  let addedGoods = [];
  let favoriteGoods = [];

  const editAddedGoods = () => {
    //console.log(addedGoods);
  };

  const editFavoriteGoods = () => {
    sessionStorage.setItem("favorite-items", JSON.stringify(favoriteGoods));
  };

  function openPopup(popupWrapper) {
    $(popupWrapper).addClass("popup-shown");
    $(".body").addClass("fixed");
  }

  function editGoods(id, amount) {
    amount = parseInt(amount);
    id = parseInt(id);
    let index = addedGoods.findIndex((n) => n.id === id);
    if (index !== -1) {
      if (amount == 0) {
        addedGoods.splice(index, 1);
      } else {
        addedGoods[index].amount = amount;
      }
    } else {
      let newItem = {
        id: id,
        amount: 1,
      };
      addedGoods.push(newItem);
    }

    //console.log("Добавленные");
    //console.log(addedGoods);
  }

  async function serverRequest(id, quantity) {
    //console.log(id);
    //console.log(quantity);

    let formData = new FormData();
    formData.append("action", "set_quantity");
    formData.append("id", id);
    formData.append("quantity", quantity);
    let response = await fetch(window.myajax.url, {
      method: "POST",
      body: formData,
    });
    let data = await response.json();

    if (data.status == "ok") {
      if (document.querySelector(".cart-page")) {
        document.querySelector(".js-cart-sum").textContent = data.price;
      }
      return true;
    } else {
      return false;
    }
  }

  const generateCartProduct = (
    img,
    title,
    price,
    id,
    amount,
    value,
    weight
  ) => {
    return `
    <section class="cart-item" data-value="${value}" data-weight="${weight}" data-id="${id}">
      <div class="cart-item__main-info">
          <img class="cart-item__img" src="${img}" alt="product">
          <div class="cart-item__text-block">
              <div class="cart-item__text-block__name">
                  <p>${title}</p>
              </div>
              <div><span class="cart-item__text-block__price">${price}</span><span class="cart-item__text-block__rubles"> ₽</span><span class="cart-item__text-block__text">цена за штуку</span></div>
          </div>
      </div>
      <div class="cart-item__amount-block">
          <span class="cart-item__amount-block__btn minus">-</span>
          <div class="cart-item__amount-block__content"><span class="cart-item__amount-block__text amount">${amount}</span><span class="cart-item__amount-block__text"> шт</span></div>
          <span class="cart-item__amount-block__btn plus">+</span>
      </div>
      <div class="cart-item__full-price">
          <div class="cart-item__full-price__content">
              <span class="cart-item__full-price__price">${price}</span>
              <span class="cart-item__full-price__rubles"> ₽</span>
          </div>
      </div>
    </section>  
    `;
  };

  const priceWithoutSpaces = (str) => {
    return str.replace(/\s/g, "");
  };

  const plusFullPrice = (currentPrice) => {
    return (price += currentPrice);
  };

  const minusFullPrice = (currentPrice) => {
    return (price -= currentPrice);
  };

  const printFullPrice = () => {
    //fullPrice.textContent = `${price}`;
  };

  const printQuantity = () => {
    //let length = goodsContainer.children.length;
    //goodsCounter.textContent = length;
  };

  const checkProducts = () => {
    let products = document.querySelectorAll(".product");
    //console.log(products);
    //console.log(addedGoods);
    for (let product of products) {
      let addedGood = addedGoods.find((good) => good.id == product.dataset.id);

      //console.log("Товар");
      //console.log(addedGood);

      if (addedGood != undefined) {
        let amount = addedGood.amount;
        //console.log(amount);

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
        product.querySelector(".product-status").textContent == "Нет в наличии"
      ) {
        product.classList.add("empty");
      } else {
        product.classList.remove("empty");
      }

      if (product.querySelector(".product-status").textContent == "Предзаказ") {
        product.classList.add("only-order");
      } else {
        product.classList.remove("only-order");
      }
    }

    if (addedGoods.length > 0) {
      $(".element-with-mark").addClass("marked");
    } else {
      $(".element-with-mark").removeClass("marked");
    }
  };

  async function clearCart() {
    let goods = document.querySelectorAll(".cart-card");

    for (let good of goods) {
      let id = good.dataset.id;
      editGoods(id, 0);
      if (await serverRequest(id, 0)) {
        good.remove();
      }
    }
    editAddedGoods();
  }

  function cartLoading(option) {
    const cart = document.querySelector(".cart-page");
    if (option == "start") {
      cart.classList.add("loading");
    } else {
      cart.classList.remove("loading");
    }
  }

  function printCartGoodsInfo() {
    let goods = document.querySelectorAll(".cart-card");
    let fullPrice = 0;

    if (goods.length == 0) {
      document
        .querySelector(".cart-page__goods-container")
        .classList.add("empty");
      document
        .querySelector(".cart-page__info__order-btn")
        .classList.add("disabled");
    }
    $(".js-cart-goods-counter").text(goods.length);

    for (let good of goods) {
      fullPrice += parseInt(
        good.querySelector(".js-product-full-price").textContent
      );
    }
    //$(".js-cart-sum").text(fullPrice);
  }

  async function buyBtnHanlder(e) {
    let self = e.target;
    let parent = self.closest(".product");

    if (parent.classList.contains("empty")) {
      openPopup($(".news-popup"));
      return;
    }

    let id = parent.dataset.id;
    let img = parent.querySelector(".product-img").getAttribute("src");
    let title = parent.querySelector(".product-name").textContent;
    let amount = 1;
    let productPrice = parseInt(
      priceWithoutSpaces(parent.querySelector(".product-price").textContent)
    );
    parent.classList.add("loading");

    if (parent.classList.contains("added")) {
      if (await serverRequest(id, 0)) {
        minusFullPrice(productPrice * 1);
        printFullPrice();
        printQuantity();

        parent.classList.remove("added");
        editGoods(id, 0);
        editAddedGoods();

        parent.classList.remove("loading");
      } else {
        parent.classList.remove("loading");
      }
    } else {
      if (await serverRequest(id, 1)) {
        plusFullPrice(productPrice * 1);
        printFullPrice();
        printQuantity();
        parent.classList.add("added");
        editGoods(id, 1);
        editAddedGoods();

        if (document.querySelector(".cart-container__goods__container")) {
          document
            .querySelector(".cart-container__goods__container")
            .insertAdjacentHTML(
              "afterbegin",
              generateCartProduct(
                img,
                title,
                productPrice,
                id,
                amount,
                value,
                weight
              )
            );
          //printCartGoodsInfo();
        }

        parent.classList.remove("loading");
      } else {
        parent.classList.remove("loading");
      }
    }
    checkProducts();
  }

  async function buyClickBtnHandler(e) {
    let self = e.target;
    let parent = self.closest(".product");

    if (parent.classList.contains("empty")) {
      openPopup($(".news-popup"));
      return;
    }

    let id = parent.dataset.id;
    let img = parent.querySelector(".product-img").getAttribute("src");
    let title = parent.querySelector(".product-name").textContent;
    let amount = 1;
    let productPrice = parseInt(
      priceWithoutSpaces(parent.querySelector(".product-price").textContent)
    );
    parent.classList.add("loading");

    //console.log(parent);

    if (await serverRequest(id, 1)) {
      editGoods(id, 1);
      editAddedGoods();

      window.location.href = "/cart";
    } else {
      parent.classList.remove("loading");
    }
    checkProducts();
  }

  async function amountBlockHandler(e) {
    //console.log("amount block click");

    if (
      e.target.classList.contains("minus") ||
      e.target.classList.contains("plus")
    ) {
      let product = e.target.closest(".product");
      let amount = product.querySelector(".amount");
      let id = product.dataset.id;
      let productPrice = parseInt(
        product.querySelector(".product-price").textContent
      );
      product.classList.add("loading");

      if (e.target.classList.contains("minus")) {
        if (await serverRequest(id, parseInt(amount.textContent) - 1)) {
          if (parseInt(amount.textContent) == 1) {
            product.classList.remove("added");
            editGoods(id, 0);
            editAddedGoods();
          } else {
            amount.textContent = parseInt(amount.textContent) - 1;
            editGoods(id, parseInt(amount.textContent));
          }

          minusFullPrice(productPrice * 1);
          checkProducts();
        }
      }

      if (e.target.classList.contains("plus")) {
        if (await serverRequest(id, parseInt(amount.textContent) + 1)) {
          amount.textContent = parseInt(amount.textContent) + 1;
          editGoods(id, parseInt(amount.textContent));
          plusFullPrice(productPrice * 1);
          checkProducts();
        }
      }
      product.classList.remove("loading");
      printFullPrice();
      //printCartGoodsInfo();
    }
  }

  async function heartsBtnHandler(e) {
    //console.log("добавление в избранное");
    //console.log(sessionStorage.getItem("authorized"));
    //console.log(sessionStorage.getItem("authorized") == "true");

    if (sessionStorage.getItem("authorized") == "true") {
      //console.log(e.target);

      let self = e.target;
      let parent = self.closest(".product");
      let id = parent.dataset.id;
      let formData = new FormData();
      if (parent.classList.contains("favorite")) {
        parent.classList.remove("favorite");
        favoriteGoods.splice(favoriteGoods.indexOf(parseInt(id)), 1);

        formData.append("action", "remove_from_favorite");
        formData.append("id", id);
      } else {
        parent.classList.add("favorite");
        favoriteGoods.push(parseInt(id));

        formData.append("action", "add_to_favorite");
        formData.append("id", id);
      }

      sendDataToServer(formData);
      checkProducts();
    } else {
      openAuthorization();
    }
  }

  function btnProductHandler() {
    //console.log(productsBtn);
    //console.log(productAmountBlocks);
    productsBtn.forEach((el) => {
      el.addEventListener("click", async (e) => {
        buyBtnHanlder(e);
      });
    });

    buyByClickBtn.forEach((el) => {
      el.addEventListener("click", async (e) => {
        buyClickBtnHandler(e);
      });
    });

    productAmountBlocks.forEach((button) => {
      button.addEventListener("click", async (e) => {
        //console.log("amount click");

        amountBlockHandler(e);
      });
    });

    productsHearts.forEach((el) => {
      el.addEventListener("click", (e) => {
        heartsBtnHandler(e);
      });
    });
  }

  function btnCartHandler() {
    const cartContainer = document.querySelector(".cart-page__goods-container");
    //const promocodeInput = document.querySelector(".promocode-block__input");
    //const promocodeBlock = document.querySelector(".promocode-block");
    //const promocodeButton = document.querySelector(".promocode-block__btn");

    printCartGoodsInfo();

    cartContainer.addEventListener("click", async (e) => {
      if (
        e.target.closest(".minus") != null ||
        e.target.closest(".plus") != null
      ) {
        let cartItem = e.target.closest(".cart-card");
        let amount = cartItem.querySelector(".amount");
        let textAmount = cartItem.querySelector(".js-amount");
        let id = cartItem.dataset.id;
        let productPrice = parseInt(
          cartItem.querySelector(".js-single-price").textContent
        );
        let productFullPrice = cartItem.querySelector(".js-product-full-price");

        cartLoading("start");

        if (e.target.closest(".minus") != null) {
          if (await serverRequest(id, parseInt(amount.textContent) - 1)) {
            if (parseInt(amount.textContent) == 1) {
              editGoods(id, 0);
              editAddedGoods();
              cartItem.remove();
            } else {
              amount.textContent = parseInt(amount.textContent) - 1;
              editGoods(id, parseInt(amount.textContent));
              productFullPrice.textContent =
                parseInt(productFullPrice.textContent) - productPrice;
              $(textAmount).text(parseInt(amount.textContent));
              minusFullPrice(productPrice * 1);
            }
          }
          cartLoading("end");
        }

        if (e.target.closest(".plus") != null) {
          if (await serverRequest(id, parseInt(amount.textContent) + 1)) {
            amount.textContent = parseInt(amount.textContent) + 1;
            $(textAmount).text(parseInt(amount.textContent));
            productFullPrice.textContent =
              parseInt(productFullPrice.textContent) + productPrice;
            plusFullPrice(productPrice * 1);
            editGoods(id, parseInt(amount.textContent));
          }
          cartLoading("end");
        }

        printFullPrice();
        printCartGoodsInfo();
        checkProducts();
      }

      if (e.target.closest(".js-remove-cart-card") != null) {
        //console.log("remove");

        let cartItem = e.target.closest(".cart-card");
        let amount = cartItem.querySelector(".js-amount");
        let id = cartItem.dataset.id;
        let productPrice = parseInt(
          cartItem.querySelector(".js-single-price").textContent
        );
        let productFullPrice = cartItem.querySelector(".js-product-full-price");

        if (await serverRequest(id, 0)) {
          editGoods(id, 0);
          cartItem.remove();
        }
        printCartGoodsInfo();
        checkProducts();
      }
    });

    $(".cart-page__goods-container__clear-btn").on("click", () => {
      clearCart().then(() => {
        printCartGoodsInfo();
        printFullPrice();
        checkProducts();
      });
    });

    // promocodeButton.addEventListener("click", async () => {
    //   if (promocodeInput.value == "") {
    //     promocodeBlock.classList.add("promo-empty");
    //     setTimeout(() => {
    //       promocodeBlock.classList.remove("promo-empty");
    //     }, 1500);
    //   } else {
    //     cartLoading("start");

    //     let formData = new FormData();
    //     formData.append("action", "promocode");
    //     formData.append("value", promocodeInput.value);
    //     let response = await fetch(window.myajax.url, {
    //       method: "POST",
    //       body: formData,
    //     });
    //     let data = await response.json();

    //     if (data.status == "ok") {
    //       if (data.promocode == "good") {
    //         if (document.querySelector(".cart-main")) {
    //           document.querySelector(".cart-final-price").textContent =
    //             data.price;
    //         }
    //         promocodeBlock.classList.add("promo-good");
    //         setTimeout(() => {
    //           promocodeBlock.classList.remove("promo-good");
    //         }, 1500);
    //       } else {
    //         promocodeBlock.classList.add("promo-wrong");
    //         setTimeout(() => {
    //           promocodeBlock.classList.remove("promo-wrong");
    //         }, 1500);
    //       }

    //       cartLoading("end");
    //     } else {
    //       cartLoading("end");
    //     }
    //   }
    // });
  }

  //price = parseInt(fullPrice.textContent);
  // if (
  //   sessionStorage.getItem("added-items") == null ||
  //   sessionStorage.getItem("added-items") == "undefined"
  // ) {
  // } else {
  //   addedGoods = JSON.parse(sessionStorage.getItem("added-items"));
  // }

  // if (
  //   sessionStorage.getItem("favorite-items") == null ||
  //   sessionStorage.getItem("favorite-items") == "undefined"
  // ) {
  //   let formData = new FormData();
  //   formData.append("action", "get_favorite_goods");
  //   sendDataToServer(formData).then((answer) => {
  //     favoriteGoods = answer.favoriteGoodsArr;
  //     editFavoriteGoods();
  //     checkProducts();
  //   });
  // } else {
  //   favoriteGoods = JSON.parse(sessionStorage.getItem("favorite-items"));
  // }

  $(".popup-buy-btn").on("click", (e) => {
    //console.log("popup-buy");

    buyBtnHanlder(e);
  });

  if (catalogContainer) {
    let formData = new FormData();
    formData.append("action", "get_added_goods");
    sendDataToServer(formData).then((answer) => {
      //console.log(answer);
      addedGoods = answer.addedGoodsArr;
    });

    formData.set("action", "get_favorite_goods");
    sendDataToServer(formData).then((answer) => {
      //console.log(answer);
      favoriteGoods = answer.favoriteGoodsArr;
    });

    $(".product-popup .amount-block").on("click", (e) => {
      amountBlockHandler(e);
    });

    $(".product-popup .heart-btn").on("click", (e) => {
      heartsBtnHandler(e);
    });

    catalogContainer.addEventListener("click", (e) => {
      if (e.target.closest(".add-to-cart-btn") != null) {
        buyBtnHanlder(e);
      }
      if (e.target.closest(".click-to-buy-btn") != null) {
        buyClickBtnHandler(e);
      }
      if (e.target.closest(".product-card .amount-block") != null) {
        amountBlockHandler(e);
      }
      if (e.target.closest(".heart-btn") != null) {
        heartsBtnHandler(e);
      }
    });
  } else {
    let formData = new FormData();
    formData.append("action", "get_added_goods");
    sendDataToServer(formData).then((answer) => {
      //console.log(answer);

      addedGoods = answer.addedGoodsArr;
    });

    formData.set("action", "get_favorite_goods");
    sendDataToServer(formData).then((answer) => {
      //console.log(answer);
      favoriteGoods = answer.favoriteGoodsArr;
      checkProducts();
    });

    btnProductHandler();
  }

  if (document.querySelector(".cart-page")) {
    btnCartHandler();
  }
});
