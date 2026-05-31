document.addEventListener("DOMContentLoaded", function () {
  function search(value) {
    //console.log(value);

    let url = new URL(window.location.href);
    let newUrl = new URL(url.protocol + url.host + "/catalog");

    newUrl.searchParams.set("search", encodeURIComponent(value));
    newUrl.searchParams.set("current_page", encodeURIComponent(1));

    window.location.href = newUrl;
  }

  if ($(window).width() < 1000) {
    $(".hover-search").on("click", (e) => {
      $(e.target).closest(".hover-search").addClass("showed");
      setTimeout(() => {
        $(e.target)
          .closest(".hover-search")
          .find(".hover-search__input")
          .trigger("focus");
      }, 400);
    });

    window.addEventListener("click", (e) => {
      const target = e.target;
      if (!target.closest(".hover-search")) {
        $(".hover-search").removeClass("showed");
        $(".hover-search").find(".hover-search__input").trigger("blur");
      }
    });
  } else {
    $(".hover-search").on("mouseenter", (e) => {
      $(e.target).closest(".hover-search").addClass("showed");
      setTimeout(() => {
        $(e.target)
          .closest(".hover-search")
          .find(".hover-search__input")
          .trigger("focus");
      }, 400);
    });
    $(".hover-search").on("mouseleave", (e) => {
      if (
        e.target.closest(".hover-search").querySelector(".hover-search__input")
          .value == ""
      ) {
        $(e.target).closest(".hover-search").removeClass("showed");
        setTimeout(() => {
          $(e.target)
            .closest(".hover-search")
            .find(".hover-search__input")
            .trigger("blur");
        }, 400);
      }
    });
  }

  $(".js-all-search-input").on("keypress", (e) => {
    if (e.key === "Enter") {
      if (e.target.value != "") {
        search(e.target.value);
      }
    }
  });

  $(".js-all-search-icon").on("click", (e) => {
    let value = e.target
      .closest(".js-all-search-container")
      .querySelector(".js-all-search-input").value;
    if (value != "") {
      search(value);
    }
  });
});
