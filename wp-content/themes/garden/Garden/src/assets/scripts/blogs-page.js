import { sendDataToServer } from "./request";

document.addEventListener("DOMContentLoaded", function () {
  const blogPage = document.querySelector(".blog-page");

  if (blogPage) {
    const blogsList = blogPage.querySelector(".blog-page__blog-container");
    const paginationBlock = blogPage.querySelector(
      ".blog-pagination-container"
    );
    const pagNav = blogPage.querySelector(".blog-pagination-page");
    const prevArrow = blogPage.querySelector(".blog-left-arrow");
    const nextArrow = blogPage.querySelector(".blog-right-arrow");

    let currentPage = 1;
    let allPages = 0;
    let maxNavItems = 6;
    let nextOverflow = null;
    let activeNavPage = null;

    let items_per_page = 10;
    if ($(window).width() < 1200 && $(window).width() > 1000) {
      items_per_page = 7;
    }
    if ($(window).width() < 1000) {
      items_per_page = 9;
    }

    const editAddedGoods = () => {
      //sessionStorage.setItem("added-items", JSON.stringify(addedGoods));
    };

    const editFavoriteGoods = () => {
      //sessionStorage.setItem("favorite-items", JSON.stringify(favoriteGoods));
    };

    function navItemsHandler() {
      pagNav
        .querySelectorAll(".pagination__pages__item")
        .forEach((navElement) => {
          navElement.addEventListener("click", (e) => {
            changePage(parseInt(e.target.textContent));
          });
        });
    }

    function navOverflowHandler(page) {
      let navItemLength = pagNav.children.length;
      let currentNavNumber = currentPage - 1;

      if (navItemLength > maxNavItems) {
        for (let i = 0; i < pagNav.children.length; i++) {
          if (
            i < currentNavNumber - maxNavItems / 2 + 1 ||
            i > currentNavNumber + maxNavItems / 2 + 1
          ) {
            if (i < navItemLength - 1) {
              pagNav.children[i].classList.add("hidden");
            }
          } else {
            pagNav.children[i].classList.remove("hidden");

            if (nextOverflow) {
              nextOverflow.classList.remove("overflow");
            }

            if (
              i == currentNavNumber + maxNavItems / 2 + 1 &&
              i != navItemLength - 1
            ) {
              nextOverflow = pagNav.children[i];
              nextOverflow.classList.add("overflow");
            }
          }
        }
      }

      if (currentPage == 1) {
        prevArrow.classList.add("disabled");
      } else {
        prevArrow.classList.remove("disabled");
      }

      if (currentPage == allPages) {
        nextArrow.classList.add("disabled");
      } else {
        nextArrow.classList.remove("disabled");
      }

      if (activeNavPage != null) {
        activeNavPage.classList.remove("active");
      }
      activeNavPage = pagNav.querySelectorAll(".pagination__pages__item")[
        page - 1
      ];
      activeNavPage.classList.add("active");
    }

    function createNav() {
      while (pagNav.firstChild) {
        pagNav.removeChild(pagNav.firstChild);
      }
      for (let i = 0; i < allPages; i++) {
        let newNavItem = document.createElement("li");
        newNavItem.classList.add("pagination__pages__item");
        newNavItem.textContent = i + 1;
        pagNav.appendChild(newNavItem);
      }
      navItemsHandler();
    }

    function generateBlog(name, image, link) {
      return `
          <a href="${link}" class="blog-item">
            <img class="blog-item__img" src="${image}" alt="картинки блога">
            <div class="blog-item__text-wrapper">
              <p class="blog-item__text">${name}</p>
            </div>
          </a>
      `;
    }

    function getPages(page) {
      //console.log("запрос страниц");
      let formData = new FormData();

      formData.append("action", "get_blog_pages");
      formData.append("items_per_page", items_per_page);

      sendDataToServer(formData).then((answer) => {
        //console.log(answer);

        if (answer.status == "ok") {
          allPages = answer.pages;
          if (allPages > 1) {
            paginationBlock.classList.remove("hidden");
            createNav();
            navOverflowHandler(page);
          } else {
            paginationBlock.classList.add("hidden");
          }
        }
      });
    }

    function getBlogs(page) {
      blogPage.classList.add("loading");

      let formData = new FormData();

      formData.append("action", "get_blogs");
      formData.append("page", page);
      formData.append("items_per_page", items_per_page);

      for (let [name, value] of formData) {
        //console.log(`${name} = ${value}`);
      }

      sendDataToServer(formData).then((answer) => {
        //console.log("запрос блогов");
        //console.log(answer);

        if (answer.status == "ok") {
          while (blogsList.firstChild) {
            blogsList.removeChild(blogsList.firstChild);
          }
          for (let blog of answer.blogs) {
            blogsList.insertAdjacentHTML(
              "beforeend",
              generateBlog(blog.name, blog.image, blog.link)
            );
          }
          blogPage.classList.remove("loading");
        }
      });
    }

    function changePage(page) {
      currentPage = page;
      getBlogs(currentPage);
    }

    getPages(currentPage);
    changePage(currentPage);

    prevArrow.addEventListener("click", () => {
      changePage(currentPage - 1);
    });

    nextArrow.addEventListener("click", () => {
      changePage(currentPage + 1);
    });

    if ($(window).width() < 1000) {
      maxNavItems = 4;
    }
  }
});
