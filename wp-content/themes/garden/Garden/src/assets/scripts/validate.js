import { validateInput } from "./validation.js";
import { isFormValid } from "./validation.js";
import { sendDataToServer } from "./request.js";
import "../jplugins/mask";

$(function () {
  if (document.querySelector(".telephone-input")) {
    var options = {
      onComplete: function () {
        $(".telephone-input").addClass("validate-success");
      },
      onKeyPress: function () {
        $(".telephone-input").removeClass("validate-success");
      },
      clearIfNotMatch: true,
      placeholder: "+7 (___) ___-__-__",
    };

    $(".telephone-input").mask("+7 (000) 000-00-00", options);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const validateButtons = document.querySelectorAll(".validate-form-btn");
  const AllValidateInputs = document.querySelectorAll(".validate-input");

  function hidePopup($popup) {
    $popup.removeClass("popup-shown");
    $(".header").removeClass("hidden");
    $(".main").removeClass("hidden");
    $(".footer").removeClass("hidden");
    $(window).scrollTop(scroll);
  }

  if (AllValidateInputs) {
    AllValidateInputs.forEach((input) => {
      input.addEventListener("blur", (e) => {
        if (
          e.target.dataset.type != "file" &&
          e.target.dataset.type != "date"
        ) {
          validateInput(e.target);
        }
      });
    });
  }

  if (validateButtons) {
    validateButtons.forEach((button) => {
      button.addEventListener("click", function (e) {
        let form = this.closest(".validate-form");
        let validateInputs = form.querySelectorAll(".validate-input");
        let validCount = 0;
        validateInputs.forEach((input) => {
          if (validateInput(input)) {
            validCount++;
          }
        });
        if (validCount != validateInputs.length) {
          e.preventDefault();
        } else {
          let code = form.querySelector(".phone-code");
          let phone = form.querySelector(".telephone-input");
          let name = form.querySelector(".name-input");
          let project = form.querySelector(".project-input");
          let sphere = form.querySelector(".sphere");

          let formData = new FormData();
          formData.append("action", "new_request");
          formData.append("name", name.value);
          formData.append("telephone", code.value + " " + phone.value);
          if (project) {
            formData.append("project", project.value);
            formData.append("sphere", sphere.value);
          }

          //for (let key of formData.keys()) {
            //console.log(`${key}: ${formData.get(key)}`);
          //}

          sendDataToServer(formData);
          //console.log("send");

          form.reset();
          validateInputs.forEach((input) => {
            $(input).closest(".input-container").removeClass("success");
          });

          if ($(e.target).hasClass("form-send-btn")) {
            hidePopup($(e.target).closest(".popup-wrapper"));
          }
        }
      });
    });
  }
});
