import Swiper from "swiper/bundle";
import { validateInput } from "./validation";
import { sendDataToServer } from "./request";

document.addEventListener("DOMContentLoaded", function () {
  const stepSlider = new Swiper(".steps-slider", {
    spaceBetween: 24,
    slidesPerView: 1,
    allowTouchMove: false,
    autoHeight: true,
  });

  const checkboxSlider = new Swiper(".size-slider", {
    spaceBetween: 16,
    slidesPerView: "auto",
    allowTouchMove: true,
    autoHeight: true,
    mousewheel: {
      enabled: true,
      sensitivity: 2,
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      dragSize: "auto",
      dragClass: "swiper-scrollbar-drag",
      horizontalClass: "swiper-scrollbar-horizontal",
      hide: false,
    },
    breakpoints: {
      310: {
        slidesPerView: "auto",
        autoHeight: true,
        spaceBetween: 16,
      },
      600: {
        slidesPerView: 3,
        scrollbar: {
          hide: true,
        },
      },
      1400: {
        slidesPerView: 5,
        spaceBetween: 16,
      },
    },
  });

  const packSlider = new Swiper(".pack-slider", {
    direction: "horizontal",
    autoHeight: true,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      dragSize: "auto",
      dragClass: "swiper-scrollbar-drag",
      horizontalClass: "swiper-scrollbar-horizontal",
      hide: false,
    },
    slidesPerView: "auto",
    spaceBetween: 24,
    breakpoints: {
      310: {
        slidesPerView: "auto",
        autoHeight: true,
        spaceBetween: 16,
        freeMode: {
          enabled: false,
          sticky: false,
        },
      },
      600: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1400: {
        slidesPerView: 4,
        spaceBetween: 24,
        autoHeight: true,
      },
      1600: {
        slidesPerView: 5,
        spaceBetween: 24,
        autoHeight: true,
      },
    },

    on: {
      slideChangeTransitionEnd: function () {
        //packSlider.updateAutoHeight(0);
        stepSlider.updateAutoHeight(100);
      },
    },
  });

  const singlePackSlider = new Swiper(".single-pack-slider", {
    direction: "horizontal",
    autoHeight: true,
    observer: true,
    observeSlideChildren: true,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      dragSize: "auto",
      dragClass: "swiper-scrollbar-drag",
      horizontalClass: "swiper-scrollbar-horizontal",
      hide: false,
    },
    slidesPerView: "auto",
    spaceBetween: 24,
    breakpoints: {
      310: {
        slidesPerView: "auto",
        spaceBetween: 16,
        freeMode: {
          enabled: false,
          sticky: false,
        },
      },
      600: {
        slidesPerView: 2,
        spaceBetween: 16,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1400: {
        slidesPerView: 4,
        spaceBetween: 24,
        autoHeight: true,
      },
      1600: {
        slidesPerView: 5,
        spaceBetween: 24,
        autoHeight: true,
      },
    },
  });

  const quizBlock = document.querySelector(".quiz-block");

  if (quizBlock) {
    let currentPage = 1;

    function checkBackBtn() {
      if (currentPage != 1) {
        $(".quiz-block__prev-btn").removeClass("disable");
      } else {
        $(".quiz-block__prev-btn").addClass("disable");
      }

      if ($(window).width() > 600) {
        if (currentPage == 7) {
          $(".quiz-block__next-btn").addClass("hidden");
          $(".mobile-button").removeClass("hidden");
        } else {
          $(".quiz-block__next-btn").removeClass("hidden");
          $(".mobile-button").addClass("hidden");
        }
      } else {
        if (currentPage == 4 || currentPage == 6 || currentPage == 7) {
          $(".mobile-button").removeClass("hidden");
        } else {
          $(".quiz-block__next-btn").addClass("hidden");
          $(".mobile-button").addClass("hidden");
        }
      }
    }

    function checkEnd() {
      if (currentPage == 8) {
        $(".quiz-block__buttons").addClass("hidden");
      } else {
        $(".quiz-block__buttons").removeClass("hidden");
      }
      if (currentPage == 7) {
        if ($(window).width() > 600) {
          $(".quiz-block__next-btn__text").text("узнать стоимость");
        }
      } else {
        $(".quiz-block__next-btn__text").text("вперед");
      }
    }

    function checkPage() {
      $(".quiz-block__next-btn").removeClass("disable");

      if (currentPage == 1) {
        let inputs = quizBlock.querySelectorAll('input[name="service"]');
        for (let input of inputs) {
          if (input.checked == true) {
            $(".quiz-block__next-btn").removeClass("disable");
            break;
          } else {
            $(".quiz-block__next-btn").addClass("disable");
          }
        }
      }

      if (currentPage == 2) {
        let inputs = quizBlock.querySelectorAll('input[name="pack"]');
        for (let input of inputs) {
          if (input.checked == true) {
            $(".quiz-block__next-btn").removeClass("disable");
            break;
          } else {
            $(".quiz-block__next-btn").addClass("disable");
          }
        }
      }

      if (currentPage == 4) {
        if ($("#desc1").val() == "") {
          $(".quiz-block__next-btn").addClass("disable");
        } else {
          $(".quiz-block__next-btn").removeClass("disable");
        }
      }

      if (currentPage == 6) {
        if ($("#address1").val() == "") {
          $(".quiz-block__next-btn").addClass("disable");
        } else {
          $(".quiz-block__next-btn").removeClass("disable");
        }
      }

      if (currentPage == 7) {
        if ($(window).width() > 600) {
          $(".quiz-block__next-btn__text").text("узнать стоимость");
        }
        if (
          validateInput(document.getElementById("name1")) &
          validateInput(document.getElementById("phone1")) &
          validateInput(document.getElementById("email1"))
        ) {
          $(".quiz-block__next-btn").removeClass("disable");
        } else {
          $(".quiz-block__next-btn").addClass("disable");
        }
      } else {
        $(".quiz-block__next-btn__text").text("вперед");
      }
    }

    function nextMainSlide() {
      currentPage++;
      stepSlider.slideNext();
      checkBackBtn();
      checkEnd();
    }

    checkBackBtn();

    $(".pack-item__btn").on("click", (e) => {
      let $self = $(e.target);
      let $card = $self.closest(".pack-item");
      if ($card.hasClass("show")) {
        $card.removeClass("show");
        $self.text("Подробнее");
      } else {
        $card.addClass("show");
        $self.text("свернуть");
      }
      packSlider.updateAutoHeight(0);
      stepSlider.updateAutoHeight(0);
      if (singlePackSlider) {
        singlePackSlider.updateAutoHeight(200);
      }
    });

    $(".quiz-block__next-btn").on("click", (e) => {
      checkPage();

      if (!$(".quiz-block__next-btn").hasClass("disable")) {
        if (currentPage == 7) {
          let form = e.target
            .closest(".quiz-block")
            .querySelector(".quiz-form");
          let formData = new FormData(form);
          formData.append("action", "quiz");

          //for (let key of formData.keys()) {
            //console.log(`${key}: ${formData.get(key)}`);
          //}

          sendDataToServer(formData);
        }
        nextMainSlide();
      }
    });

    $("input[name='service']").on("change", () => {
      checkPage();
      setTimeout(nextMainSlide, 400);
    });

    $("input[name='pack']").on("change", () => {
      checkPage();
      setTimeout(nextMainSlide, 400);
    });

    $("input[name='size']").on("change", () => {
      checkPage();
      setTimeout(nextMainSlide, 400);
    });

    $("input[name='date']").on("change", () => {
      checkPage();
      setTimeout(nextMainSlide, 400);
    });

    $(".quiz-step__input").on("input", () => {
      checkPage();
    });

    $(".quiz-block__prev-btn").on("click", () => {
      if (currentPage > 1) {
        currentPage--;
      }
      stepSlider.slidePrev();
      checkBackBtn();
      checkEnd();
      checkPage();
    });

    $(".quiz-label").on("click", (e) => {
      if (
        e.target.closest(".quiz-label").previousElementSibling.checked == true
      ) {
        checkPage();
        setTimeout(nextMainSlide, 400);
      }
    });

    $(".final-button").on("click", (e) => {
      quizBlock.querySelector(".quiz-form").reset();
      stepSlider.slideTo(0, 300);
      currentPage = 1;
      checkBackBtn();
      checkEnd();
    });
  } else {
    $(".pack-item__btn").on("click", (e) => {
      let $self = $(e.target);
      let $card = $self.closest(".pack-item");
      if ($card.hasClass("show")) {
        $card.removeClass("show");
        $self.text("Подробнее");
      } else {
        $card.addClass("show");
        $self.text("свернуть");
      }
      if (singlePackSlider) {
        singlePackSlider.updateAutoHeight(200);
      }
    });
  }
});
