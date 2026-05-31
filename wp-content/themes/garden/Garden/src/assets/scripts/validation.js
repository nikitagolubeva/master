export function validateInput(input) {
  let inputContainer = input.closest(".input-container");
  const EMAIL_REGEXP =
    /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;
  if (input.dataset.type == "text") {
    if (input.value == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    } else {
      inputContainer.classList.add("success");
      inputContainer.classList.remove("warning");
      return true;
    }
  }

  if (input.dataset.type == "password") {
    let password = input.value;

    //console.log(password);

    if (password == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    } else {
      const length = 8;

      //console.log(password);

      //console.log(
      //   (/[a-z]/.test(password) || /[A-Z]/.test(password)) &&
      //     /\d/.test(password) &&
      //     password.length >= length
      // );

      if (
        (/[a-z]/.test(password) || /[A-Z]/.test(password)) &&
        /\d/.test(password) &&
        password.length >= length
      ) {
        let secondInput =
          inputContainer.nextElementSibling.querySelector(".validate-input");
        inputContainer.classList.add("password-strong");
        return isPasswordEqual(input, secondInput, true);
      } else {
        inputContainer.classList.add("warning");
        inputContainer.classList.remove("success");
        setTimeout(() => {
          inputContainer.classList.remove("warning");
        }, 2000);
        return false;
      }
    }
  }

  if (input.dataset.type == "password-repeat") {
    if (input.value == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    } else {
      let firstInputContainer = inputContainer.previousElementSibling;
      let firstInput =
        inputContainer.previousElementSibling.querySelector(".validate-input");

      //console.log(firstInputContainer);

      //console.log(firstInputContainer.classList.contains("password-strong"));

      if (firstInputContainer.classList.contains("password-strong")) {
        return isPasswordEqual(input, firstInput, true);
      } else {
        inputContainer.classList.add("warning");
        inputContainer.classList.remove("success");
        setTimeout(() => {
          inputContainer.classList.remove("warning");
        }, 2000);
        return false;
      }
    }
  }

  if (input.dataset.type == "telephone") {
    if (input.classList.contains("validate-success")) {
      inputContainer.classList.add("success");
      inputContainer.classList.remove("warning");
      return true;
    } else {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    }
  }

  if (input.dataset.type == "email") {
    if (input.value == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
    } else {
      if (EMAIL_REGEXP.test(input.value)) {
        inputContainer.classList.add("success");
        inputContainer.classList.remove("warning", "wrong-email");
        return true;
      } else {
        inputContainer.classList.add("warning", "wrong-email");
        inputContainer.classList.remove("success");
        setTimeout(() => {
          inputContainer.classList.remove("warning");
        }, 2000);
        setTimeout(() => {
          inputContainer.classList.remove("wrong-email");
        }, 3000);
        return false;
      }
    }
  }

  if (input.dataset.type == "date") {
    if (input.value == "") {
      inputContainer.classList.add("warning");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    } else {
      inputContainer.classList.add("success");
      inputContainer.classList.remove("warning");
      return true;
    }
  }

  if (input.dataset.type == "checkbox") {
    inputContainer = input.closest(".radio-input");
    if (input.checked) {
      inputContainer.classList.remove("warning");
      return true;
    } else {
      inputContainer.classList.add("warning");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      return false;
    }
  }

  if (input.dataset.type == "file") {
    if (input.value == "") {
      inputContainer.classList.add("warning", "wrong-file");
      inputContainer.classList.remove("success");
      setTimeout(() => {
        inputContainer.classList.remove("warning");
      }, 2000);
      setTimeout(() => {
        inputContainer.classList.remove("wrong-file");
      }, 3000);
      return false;
    } else {
      inputContainer.classList.add("success");
      inputContainer.classList.remove("warning", "wrong-file");
      return true;
    }
  }

  if (input.dataset.type == "rating") {
    inputContainer = input.closest(".input-container");
    let stars = input.querySelectorAll(".rating-input-star");

    for (let star of stars) {
      if (star.checked == true) {
        inputContainer.classList.remove("warning");
        return true;
      }
    }
    inputContainer.classList.add("warning");
    setTimeout(() => {
      inputContainer.classList.remove("warning");
    }, 2000);
    return false;
  }
}

export function isPasswordEqual(password1, password2, isShowMessage) {
  let inputContainer1 = password1.closest(".input-container");
  let inputContainer2 = password2.closest(".input-container");
  //console.log(inputContainer1);
  //console.log(inputContainer2);
  //console.log(password1.value);
  //console.log(password2.value);

  if (password1.value == password2.value) {
    inputContainer1.classList.add("success");
    inputContainer2.classList.add("success");
    return true;
  } else {
    inputContainer1.classList.remove("success");
    inputContainer2.classList.remove("success");
    if (isShowMessage) {
      inputContainer1.classList.add("warning", "passwords-not-equal");
      inputContainer2.classList.add("warning", "passwords-not-equal");
      setTimeout(() => {
        inputContainer1.classList.remove("warning");
        inputContainer2.classList.remove("warning");
      }, 2000);
      setTimeout(() => {
        inputContainer1.classList.remove("passwords-not-equal");
        inputContainer2.classList.remove("passwords-not-equal");
      }, 3000);
    }
    return false;
  }
}

export function isFormValid(form) {
  let validateInputs = form.querySelectorAll(".validate-input");
  let validCount = 0;
  validateInputs.forEach((input) => {
    if (validateInput(input)) {
      validCount++;
    }
  });
  if (validCount != validateInputs.length) {
    return false;
  } else {
    return true;
  }
}
