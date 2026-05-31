import { isFormValid } from "./validation.js";
import { sendDataToServer } from "./request.js";
import { validateInput } from "./validation.js";

document.addEventListener("DOMContentLoaded", function () {
  if (document.querySelector(".order-page")) {
    const orderBtn = document.querySelector(".order-page__info__btn");

    function printOrderGoodsInfo() {
      let goods = document.querySelectorAll(".order-item");
      let price = 0;
      document.querySelector(".goods-counter").textContent = goods.length;

      // for (let good of goods) {
      //   weight +=
      //     parseInt(good.dataset.weight) *
      //     parseInt(good.querySelector(".amount").textContent);
      //   value +=
      //     parseInt(good.dataset.value) *
      //     parseInt(good.querySelector(".amount").textContent);
      //   price +=
      //     parseInt(good.querySelector(".order-item__price").textContent) *
      //     parseInt(good.querySelector(".amount").textContent);
      // }
    }

    //printOrderGoodsInfo();

    //console.log($(".order-sum").text());

    if (parseInt($(".order-sum").text()) < 5000) {
      //console.log("less");

      $(".js-address-delivery-option").addClass("hidden");
      $(".js-pickup-option").prop("checked", true);
      $(".js-address-delivery-input").prop("checked", false);
      $(".delivery-page").addClass("hidden");
      $(".pickup-page").removeClass("hidden");
      $("#address").removeClass("validate-input");
    } else {
      $(".js-address-delivery-input").prop("checked", true);
      $(".js-address-delivery-option").removeClass("hidden");
    }

    orderBtn.addEventListener("click", (e) => {
      let form = document.querySelector(".order-page__form");
      if (!isFormValid(form)) {
        e.preventDefault();
      } else {
        $(".order-page").addClass("loading");

        let formData = new FormData(form);
        formData.append("action", "order");

        //for (let key of formData.keys()) {
          //console.log(`${key}: ${formData.get(key)}`);
        //}

        sendDataToServer(formData).then((answer) => {
          //console.log(answer);
          if (answer.status == "ok") {
            $(".js-order-number").text(answer.order_id);
            $(".order-popup").addClass("popup-shown");
            $(".body").addClass("fixed");
            $(".order-page").removeClass("loading");
          }
        });
      }
    });

    $(".js-order-popup-btn").on("click", () => {
      window.location.href = "/catalog";
    });

    //console.log(document.querySelectorAll("[name=delivery]"));

    $("[name=delivery]").on("click", (e) => {
      e.stopPropagation();
    });

    $(".payment-choice").on("click", (e) => {
      let self = e.target.closest(".payment-choice");

      let tabs = document.querySelectorAll(".payment-method");

      tabs.forEach((tab) => {
        let inputs = tab.querySelectorAll(".input-container");
        if (tab.dataset.tab == self.dataset.tab) {
          tab.classList.remove("hidden");
          inputs.forEach((input) => {
            input
              .querySelector("input[type=text]")
              .classList.add("validate-input");
          });
        } else {
          tab.classList.add("hidden");
          inputs.forEach((input) => {
            input
              .querySelector("input[type=text]")
              .classList.remove("validate-input");
          });
        }
      });
    });

    $(".delivery-choice").on("change", (e) => {
      if (e.target.closest(".delivery-choice").dataset.tab == "delivery") {
        $(".delivery-page").removeClass("hidden");
        $(".pickup-page").addClass("hidden");
        $("#address").addClass("validate-input");
      }
      if (e.target.closest(".delivery-choice").dataset.tab == "pickup") {
        $(".delivery-page").addClass("hidden");
        $(".pickup-page").removeClass("hidden");
        $("#address").removeClass("validate-input");
      }
    });

    //console.log($(".new-select__item"));

    $(".credit-select-container").on("click", (e) => {
      let self = e.target.closest(".new-select__item");
      if (self) {
        let period = $(".credit-select").val().split(",")[0];
        let procent = $(".credit-select").val().split(",")[1] / 100 + 1;
        let sum = $(".order-sum").text();

        //console.log(period);
        //console.log(procent);
        //console.log(sum);

        $(".credit-value").text(((sum * procent) / period).toFixed(1));
      }
    });
  }
});
