import { isFormValid } from "./validation.js";
import { sendDataToServer } from "./request.js";

function showBlock(block) {
  block.classList.add("active");
}

function hideBlock(block) {
  block.classList.remove("active");
}

export function openAuthorization() {
  $(".authorization-popup").addClass("popup-shown");
  $(".body").addClass("fixed");
}

function closeAuthorization() {
  $(".authorization-popup").removeClass("popup-shown");
  $(".body").removeClass("fixed");
}

document.addEventListener("DOMContentLoaded", function () {
  const authorizationPopup = document.querySelector(".authorization-popup");
  if (document.querySelector(".authorization-wrapper")) {
    function changeBlock(activeBlock, blockNumber) {
      let currentBlock = authorizationPopup.querySelector(
        `.authorization-page-${blockNumber}`
      );
      hideBlock(activeBlock);
      activeBlock = currentBlock;
      showBlock(activeBlock);

      if (blockNumber == 3 || blockNumber == 6) {
        if (blockNumber == 3) {
          pinInputs[0].focus();
          backBtn.dataset.page = blockNumber - 1;
        }
        if (blockNumber == 6) {
          backBtn.dataset.page = 1;
        }
        backBtn.classList.remove("hidden");
      } else {
        backBtn.classList.add("hidden");
      }

      return activeBlock;
    }

    const authorizationWrapper = document.querySelector(
      ".authorization-wrapper"
    );
    const showAuthorizedBtns = document.querySelectorAll(
      ".authorization-button"
    );
    const closeAuthorizedBtns = document.querySelector(
      ".popup-container__cross-block"
    );
    const backBtn = authorizationWrapper.querySelector(
      ".popup-container__back-btn"
    );
    const pinContainer = authorizationWrapper.querySelector(".pin-code");

    let activeBlock = authorizationWrapper.querySelector(".active");

    let pinInputs = authorizationWrapper.querySelectorAll(".js-pin-input");

    let email = "";

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
        formData.append("action", "check_code");
        formData.append("email", email);
        formData.append("code", codeValue);

        //for (let [name, value] of formData) {
          //console.log(`${name} = ${value}`);
        //}

        sendDataToServer(formData).then((answer) => {
          if (answer.status == "ok") {
            activeBlock = changeBlock(activeBlock, 5);
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

    showAuthorizedBtns.forEach((button) => {
      button.addEventListener("click", () => {
        openAuthorization();
      });
    });

    closeAuthorizedBtns.addEventListener("click", () => {
      closeAuthorization();
    });

    authorizationWrapper.addEventListener("click", (e) => {
      if (e.target == authorizationWrapper) {
        closeAuthorization();
      }
    });

    $(backBtn).on("click", (e) => {
      let page = e.target.closest(".popup-container__back-btn").dataset.page;

      if (page) {
        activeBlock = changeBlock(activeBlock, page);
      }
    });

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

    $(".show-password").on("click", (e) => {
      let $icon = $(e.target.closest(".show-password"));

      if ($icon.hasClass("password-shown")) {
        $icon.prev().attr("type", "password");
        $icon.removeClass("password-shown");
      } else {
        $icon.prev().attr("type", "text");
        $icon.addClass("password-shown");
      }
    });

    $(".registration-btn").on("click", (e) => {
      let button = e.target;
      let form = button.closest(".validate-form");
      let page = e.target.closest(".change-btn").dataset.page;
      if (isFormValid(form)) {
        let formData = new FormData(form);
        formData.append("action", "send_email_code");

        email = $("#registration-email").val();

        sendDataToServer(formData).then((answer) => {
          if (answer.status == "ok") {
            //console.log("Отправленный код" + answer.code);

            $(".password-block").attr("data-action", "registration");
            activeBlock = changeBlock(activeBlock, page);
          } else if (answer.status == "error") {
            $("#registration-email")
              .closest(".input-container")
              .removeClass("success");
            $("#registration-email")
              .closest(".input-container")
              .addClass("warning email-exist show-text");
            setTimeout(() => {
              $("#registration-email")
                .closest(".input-container")
                .removeClass("warning show-text");
            }, 2000);
            setTimeout(() => {
              $("#registration-email")
                .closest(".input-container")
                .removeClass("email-exist");
            }, 3000);
          }
        });
      }
    });

    $(".final-registration-btn").on("click", (e) => {
      let button = e.target;
      let form = button.closest(".validate-form");
      let page = e.target.closest(".change-btn").dataset.page;
      if (isFormValid(form)) {
        let action =
          authorizationPopup.querySelector(".password-block").dataset.action;
        //console.log(action);

        let formData = new FormData();
        formData.append("action", action);

        if (action == "registration") {
          formData.append("registration-email", $("#registration-email").val());
          formData.append("registration-name", $("#registration-name").val());
          formData.append(
            "registration-password",
            $("#registration-password").val()
          );
        }
        if (action == "recovery") {
          formData.append("recovery-email", $("#recovery-email").val());
          formData.append(
            "recovery-password",
            $("#registration-password").val()
          );
        }

        //for (let [name, value] of formData) {
          //console.log(`${name} = ${value}`);
        //}

        sendDataToServer(formData).then((answer) => {
          if (answer.status == "ok") {
            sessionStorage.setItem("authorized", true);
            closeAuthorization();
            activeBlock = changeBlock(activeBlock, 1);
            window.location.href = "/account";
          }
        });
      }
    });

    $(".login-btn").on("click", (e) => {
      let button = e.target;
      let form = button.closest(".validate-form");

      if (isFormValid(form)) {
        let formData = new FormData(form);
        formData.append("action", "login");

        sendDataToServer(formData).then((answer) => {
          if (answer.status == "ok") {
            closeAuthorization();
            sessionStorage.setItem("authorized", true);

            $(".authorization-button").addClass("hidden");
            $(".profile-link").removeClass("hidden");
            window.location.href = "/account";
          } else {
            let passContainer = form
              .querySelector('input[name="login-password"]')
              .closest(".input-container");
            passContainer.classList.add("warning", "wrong-login", "show-text");
            passContainer.classList.remove("success");
            setTimeout(() => {
              passContainer.classList.remove("warning", "show-text");
            }, 2000);
            setTimeout(() => {
              passContainer.classList.remove("wrong-login");
            }, 3000);
          }
        });
      }
    });

    $(".send-mail-btn").on("click", (e) => {
      let button = e.target;
      let form = button.closest(".validate-form");
      let page = e.target.closest(".change-btn").dataset.page;

      if (isFormValid(form)) {
        email = $("#recovery-email").val();
        let formData = new FormData();
        formData.append("action", "send_recovery_code");
        formData.append("recovery-email", email);

        sendDataToServer(formData).then((answer) => {
          //console.log(answer);

          if (answer.status == "ok") {
            //console.log("Отправленный код" + answer.code);
            $(".password-block").attr("data-action", "recovery");
            activeBlock = changeBlock(activeBlock, page);
          } else if (answer.status == "error") {
            $("#recovery-email")
              .closest(".input-container")
              .removeClass("success");
            $("#recovery-email")
              .closest(".input-container")
              .addClass("warning email-not-exist show-text");
            setTimeout(() => {
              $("#recovery-email")
                .closest(".input-container")
                .removeClass("warning show-text");
            }, 2000);
            setTimeout(() => {
              $("#recovery-email")
                .closest(".input-container")
                .removeClass("email-not-exist");
            }, 3000);
          }
        });
      }
    });

    $(".new-password-btn").on("click", (e) => {
      let button = e.target;
      let form = button.closest(".validate-form");

      if (isFormValid(form)) {
        let formData = new FormData(form);
        formData.append("action", "new-password");

        sendDataToServer(formData).then((answer) => {
          if (answer.status == "ok") {
            activeBlock = changeBlock(activeBlock, 1);
            closeAuthorization();
          }
        });
      }
    });

    $(".to-login-btn").on("click", () => {
      activeBlock = changeBlock(activeBlock, 1);
    });

    $(".to-registration-btn").on("click", () => {
      activeBlock = changeBlock(activeBlock, 2);
    });

    $(".to-recovery-btn").on("click", (e) => {
      let page = e.target.closest(".change-btn").dataset.page;
      activeBlock = changeBlock(activeBlock, page);
    });
  }

  const accountPage = document.querySelector(".account");
  const favPage = document.querySelector(".favorite-page");

  //console.log(sessionStorage.getItem("authorized"));

  if (
    sessionStorage.getItem("authorized") == null ||
    sessionStorage.getItem("authorized") == "undefined" ||
    sessionStorage.getItem("authorized") == "null"
  ) {
    //console.log("пользователь не авторизован");

    let formData = new FormData();
    formData.append("action", "is_user_authorized");

    sendDataToServer(formData).then((answer) => {
      if (answer.status == "ok") {
        //console.log("authorized");
        //console.log(answer.authorized);

        if (answer.authorized == true) {
          sessionStorage.setItem("authorized", true);

          $(".authorization-button").addClass("hidden");
          $(".profile-link").removeClass("hidden");
        } else {
          sessionStorage.setItem("authorized", false);

          $(".authorization-button").removeClass("hidden");
          $(".profile-link").addClass("hidden");

          if (accountPage || favPage) {
            window.location.href = "/";
          }
        }
      }
    });
  } else {
    if (sessionStorage.getItem("authorized") == "true") {
      //console.log("пользователь авторизован");

      $(".authorization-button").addClass("hidden");
      $(".profile-link").removeClass("hidden");
    }
    if (sessionStorage.getItem("authorized") == "false") {
      //console.log("пользователь не авторизован");

      $(".authorization-button").removeClass("hidden");
      $(".profile-link").addClass("hidden");

      if (accountPage || favPage) {
        window.location.href = "/";
      }
    }
  }

  if (document.querySelector(".exit-profile-btn")) {
    document
      .querySelector(".exit-profile-btn")
      .addEventListener("click", (e) => {
        let formData = new FormData();
        formData.append("action", "logout");

        sendDataToServer(formData).then((answer) => {
          if (answer.status == "ok") {
            sessionStorage.removeItem("authorized");
            window.location.href = "/";
          }
        });
      });
  }
});
