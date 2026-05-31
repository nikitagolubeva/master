import { isFormValid } from "./validation";
import { sendDataToServer } from "./request.js";

document.addEventListener("DOMContentLoaded", function () {
  $(".feedback-block__btn").on("click", (e) => {
    let form = e.target.closest(".validate-form");

    if (isFormValid(form)) {
      let formData = new FormData(form);
      formData.append("action", "feedback");

      //for (let key of formData.keys()) {
        //console.log(`${key}: ${formData.get(key)}`);
     // }

      sendDataToServer(formData).then((answer) => {
        //console.log(answer);
        if (answer.status == "ok") {
          $(e.target).closest(".feedback-block").addClass("sended");
          setTimeout(() => {
            $(e.target).closest(".feedback-block").removeClass("sended");
          }, 60000);
        }
      });
    }
  });
});
