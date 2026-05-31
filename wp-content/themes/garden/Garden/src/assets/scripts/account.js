import { isFormValid, validateInput } from "./validation.js";
import { sendDataToServer } from "./request.js";

function showBlock(block) {
  block.classList.add("active");
}

function hideBlock(block) {
  block.classList.remove("active");
}

document.addEventListener("DOMContentLoaded", function () {
  const dataChangerPopup = document.querySelector(".data-changer-wrapper");

  if (dataChangerPopup) {
    let email = "";
    let emailChanged = false;

    function openDataChanger() {
      $("#account-name").val($(".js-account-name").text());
      $("#account-phone").val($(".js-account-phone").text());
      $("#account-email").val($(".js-account-email").text());

      let phoneInput = document.getElementById("account-phone");
      phoneInput.classList.add("validate-success");

      $(".data-changer-wrapper").addClass("popup-shown");
      $(".body").addClass("fixed");
    }

    function changeBlock(activeBlock, blockNumber) {
      let currentBlock = dataChangerPopup.querySelector(
        `.authorization-page-${blockNumber}`
      );
      hideBlock(activeBlock);
      activeBlock = currentBlock;
      showBlock(activeBlock);

      if (blockNumber == 2) {
        pinInputs[0].focus();
        backBtn.classList.remove("hidden");
      } else {
        backBtn.classList.add("hidden");
      }

      backBtn.dataset.page = blockNumber - 1;

      return activeBlock;
    }

    function checkPin() {
      let codeFilled = 0;
      let codeValue = "";
      pinInputs.forEach((input) => {
        if (input.value.length > 0) {
          codeFilled++;
        }
      });

      if (codeFilled > 1) {
        pinContainer.classList.remove("error");
      }

      if (codeFilled === 4) {
        pinInputs.forEach((input) => {
          codeValue += input.value;
        });

        //console.log(codeValue);

        let formData = new FormData();
        formData.append("action", "account_data_change_with_code");
        formData.append("email", email);
        formData.append("code", codeValue);
        formData.append("name", $("#account-name").val());
        if ($("#account-phone").val().length > 1) {
          formData.append("account-phone", $("#account-phone").val());
        }

        // for (let [name, value] of formData) {
        //console.log(`${name} = ${value}`);
        // }

        sendDataToServer(formData).then((answer) => {
          if (answer.status == "ok") {
            dataChanged = true;

            $(".js-account-name").text($("#account-name").val());
            $(".js-account-phone").text($("#account-phone").val());
            $(".js-account-email").text($("#account-email").val());
            activeBlock = changeBlock(activeBlock, 3);
          } else {
            pinInputs.forEach((input) => {
              input.value = "";
            });
            pinInputs[0].focus();

            pinContainer.classList.add("error");
          }
        });
      }
    }

    const backBtn = dataChangerPopup.querySelector(
      ".popup-container__back-btn"
    );

    const pinContainer = dataChangerPopup.querySelector(".pin-code");
    let pinInputs = dataChangerPopup.querySelectorAll(".js-pin-input");

    let activeBlock = dataChangerPopup.querySelector(".active");
    let dataChanged = false;

    function closeDataChanger() {
      if (dataChanged) {
        activeBlock = changeBlock(activeBlock, 1);
        pinInputs.forEach((input) => {
          input.value = "";
        });

        dataChanged = false;
      }
      $(".data-changer-wrapper").removeClass("popup-shown");
      $(".body").removeClass("fixed");
    }

    pinContainer.addEventListener(
      "keyup",
      function (event) {
        var target = event.target;

        var maxLength = parseInt(target.attributes["maxlength"].value, 10);
        var myLength = target.value.length;

        if (myLength >= maxLength) {
          var next = target;
          while ((next = next.nextElementSibling)) {
            if (next == null) break;
            if (next.tagName.toLowerCase() == "input") {
              next.focus();
              break;
            }
          }
        }

        if (myLength === 0) {
          var next = target;
          while ((next = next.previousElementSibling)) {
            if (next == null) break;
            if (next.tagName.toLowerCase() == "input") {
              next.focus();
              break;
            }
          }
        }

        checkPin();
      },
      false
    );

    pinContainer.addEventListener(
      "keydown",
      function (event) {
        var target = event.target;
        target.value = "";
      },
      false
    );

    $(backBtn).on("click", (e) => {
      let page = e.target.closest(".popup-container__back-btn").dataset.page;

      if (page) {
        activeBlock = changeBlock(activeBlock, page);
      }
    });

    $(".date-changer-btn").on("click", (e) => {
      openDataChanger();
    });

    $(".js-close-changer").on("click", (e) => {
      closeDataChanger();
    });

    $(".confirmation-btn").on("click", (e) => {
      let button = e.target;
      let form = button.closest(".validate-form");

      if (isFormValid(form)) {
        let formData = new FormData();

        //console.log($("#account-email").val());
        //console.log($(".js-account-email").text());

        //console.log($("#account-email").val() != $(".js-account-email").text());

        if ($("#account-email").val() != $(".js-account-email").text()) {
          //console.log("email was changed");

          email = $("#account-email").val();

          formData.append("action", "send_email_code");
          formData.append("email", email);

          sendDataToServer(formData).then((answer) => {
            if (answer.status == "ok") {
              //console.log("Код ", answer.code);

              activeBlock = changeBlock(activeBlock, 2);
            }
          });
        } else {
          formData.append("action", "account_data_change");
          formData.append("account-name", $("#account-name").val());
          if ($("#account-phone").val().length > 1) {
            formData.append("account-phone", $("#account-phone").val());
          }
          let page = 3;

          for (let [name, value] of formData) {
            //console.log(`${name} = ${value}`);
          }

          sendDataToServer(formData).then((answer) => {
            if (answer.status == "ok") {
              dataChanged = true;
              $(".js-account-name").text($("#account-name").val());
              $(".js-account-phone").text($("#account-phone").val());
              activeBlock = changeBlock(activeBlock, page);
            }
          });
        }
      }
    });
  }

  $(".password-change__btn").on("click", (e) => {
    let form = e.target.closest(".validate-form");
    if (isFormValid(form)) {
      let formData = new FormData();
      formData.append("action", "change_user_password");
      formData.append("old_password", $("#account-old-password").val());
      formData.append("new_password", $("#account-new-password").val());

      sendDataToServer(formData).then((answer) => {
        if (answer.status == "ok") {
          $(".password-change").addClass("success");
        } else {
          $(".password-change").removeClass("success");
          $(".password-change").addClass("error");
        }
      });
    }
  });
});
