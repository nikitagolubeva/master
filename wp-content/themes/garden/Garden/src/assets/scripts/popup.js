import { isFormValid } from "./validation";
import { sendDataToServer } from "./request.js";

function openPopup(popupWrapper) {
  $(popupWrapper).addClass("popup-shown");
  $(".body").addClass("fixed");
}

function closePopup(popupWrapper) {
  $(popupWrapper).removeClass("popup-shown");
  $(".body").removeClass("fixed");
}

$(".popup-wrapper").on("click", (e) => {
  if (
    $(e.target).hasClass("popup-wrapper") &&
    !$(e.target).hasClass("order-popup")
  ) {
    closePopup($(e.target));
  }
});

$(".bg-img").on("click", (e) => {
  closePopup($(".march-popup"));
});

$(".js-close-popup").on("click", (e) => {
  closePopup(e.target.closest(".popup-wrapper"));
});

$(".js-feedback-popup").on("click", (e) => {
  openPopup($(".feedback-popup"));
});

$(".js-send-feedback-form").on("click", (e) => {
  let form = e.target.closest(".validate-form");
  if (isFormValid(form)) {
    let formData = new FormData(form);
    formData.append("action", "feedback");

    //for (let key of formData.keys()) {
    //console.log(`${key}: ${formData.get(key)}`);
    //}

    sendDataToServer(formData).then((answer) => {
      if (answer.status == "ok") {
        $(".feedback-form-block").addClass("hidden");
        $(".sended-block").removeClass("hidden");
      }
    });
  }
});

if (document.querySelector(".march-popup")) {
  setTimeout(() => {
    // if (sessionStorage.getItem("march-popup") != "shown") {
    //   sessionStorage.setItem("march-popup", "shown");
    //   openPopup($(".march-popup"));
    // }
    openPopup($(".march-popup"));
  }, 2000);
}
