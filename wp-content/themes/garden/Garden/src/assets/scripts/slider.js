import Swiper from "swiper/bundle";
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".mySwiper", {
    spaceBetween: 12,
    slidesPerView: 5,
    freeMode: true,
    watchSlidesProgress: true,
  });
  const swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    thumbs: {
      swiper: swiper,
    },
  });
  const productSlider = new Swiper(".product-slider", {
    direction: "horizontal",
    spaceBetween: 16,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    mousewheel: {
      enabled: true,
      sensitivity: 2,
    },
    breakpoints: {
      310: {
        slidesPerView: "auto",
        spaceBetween: 10,
      },
      1400: {
        slidesPerView: 4,
        spaceBetween: 16,
      },
    },
  });

  const productBlogSlider = new Swiper(".blog-product-slider", {
    direction: "horizontal",
    spaceBetween: 16,
    slidesPerView: 5,
    mousewheel: {
      enabled: true,
      sensitivity: 2,
    },
    breakpoints: {
      310: {
        slidesPerView: "auto",
        spaceBetween: 12,
      },
      600: {
        slidesPerView: 3,
        spaceBetween: 8,
      },
      1000: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
      1400: {
        slidesPerView: 5,
        spaceBetween: 30,
      },
    },
  });

  const projectSlider = new Swiper(".project-slider", {
    direction: "horizontal",
    spaceBetween: 12,
    slidesPerView: "auto",
    speed: 700,
    mousewheel: {
      enabled: true,
      sensitivity: 2,
    },
  });

  if (document.querySelector(".project-slider-reverse")) {
    if ($(window).width() > 1000) {
      const projectSliderReverse = new Swiper(".project-slider-reverse", {
        direction: "horizontal",
        spaceBetween: 12,
        slidesPerView: "auto",
        speed: 700,
        mousewheel: {
          enabled: true,
          sensitivity: 2,
        },
        initialSlide: this.querySelector(".swiper-wrapper").children.length + 1,
      });
    } else {
      const projectSliderReverse = new Swiper(".project-slider-reverse", {
        direction: "horizontal",
        spaceBetween: 12,
        slidesPerView: "auto",
        speed: 700,
        mousewheel: {
          enabled: true,
          sensitivity: 2,
        },
      });
    }
  }

  const bannerSlider = new Swiper(".banner-slider", {
    direction: "horizontal",
    spaceBetween: 12,
    navigation: {
      nextEl: ".banner-slider__next",
      prevEl: ".banner-slider__prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    breakpoints: {
      310: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
      1400: {
        slidesPerView: 1,
        spaceBetween: 16,
      },
    },
  });

  const borderlessGoods = new Swiper(".borderless-product-slider", {
    direction: "horizontal",
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
    slidesPerView: "auto",
    spaceBetween: 32,
    breakpoints: {
      310: {
        slidesPerView: "auto",
        spaceBetween: 16,
        freeMode: {
          enabled: true,
          sticky: false,
        },
      },
      600: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
      1000: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
      1200: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
      1400: {
        slidesPerView: "auto",
        spaceBetween: 32,
      },
    },
  });

  const borderlessBanners = new Swiper(".borderless-banners-slider", {
    direction: "horizontal",
    // mousewheel: {
    //   enabled: true,
    //   sensitivity: 2,
    // },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      dragSize: "auto",
      dragClass: "swiper-scrollbar-drag",
      horizontalClass: "swiper-scrollbar-horizontal",
      hide: false,
    },
    slidesPerView: "auto",
    spaceBetween: 32,
    breakpoints: {
      310: {
        slidesPerView: "auto",
        spaceBetween: 12,
        freeMode: {
          enabled: false,
        },
      },
      600: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
      1000: {
        slidesPerView: "auto",
        spaceBetween: 16,
        freeMode: {
          enabled: true,
          sticky: false,
        },
      },
      1200: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
      1400: {
        slidesPerView: "auto",
        spaceBetween: 32,
      },
    },
  });

  const serviceSlider = new Swiper(".service-slider", {
    direction: "horizontal",
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
      dragSize: "auto",
      dragClass: "swiper-scrollbar-drag",
      horizontalClass: "swiper-scrollbar-horizontal",
      hide: false,
    },
    mousewheel: {
      enabled: true,
      sensitivity: 2,
    },
    slidesPerView: "auto",
    spaceBetween: 32,
    breakpoints: {
      310: {
        slidesPerView: "auto",
        spaceBetween: 16,
        freeMode: {
          enabled: true,
          sticky: false,
        },
      },
      600: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
      1000: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
      1200: {
        slidesPerView: "auto",
        spaceBetween: 16,
      },
      1400: {
        slidesPerView: "auto",
        spaceBetween: 32,
      },
    },
  });

  const commentSlider = new Swiper(".comment-slider", {
    spaceBetween: 30,
    allowTouchMove: false,
    effect: "fade",
    speed: 700,
    fadeEffect: {
      crossFade: true,
    },
    navigation: {
      nextEl: ".comment-slider-next",
      prevEl: ".comment-slider-prev",
    },
  });
});
