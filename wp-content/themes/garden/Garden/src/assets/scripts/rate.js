document.addEventListener("DOMContentLoaded", function () {
  const ratingArea = document.querySelector(".rating-area");
  const productRating = document.querySelector(".product-rating");

  if (productRating) {
    const productRatings = document.querySelectorAll(".product-rating");

    let starWidth = 30;
    let gap = 5;

    if ($(window).width() < 600) {
      starWidth = 24;
    }

    productRatings.forEach((rating) => {
      let activeRating = rating.querySelector(".active-rating");
      let ratingFull = parseFloat(rating.dataset.rating);
      let number = Math.floor(ratingFull);
      let fractional = ratingFull - number;

      let activeRatingWidth =
        starWidth * number + starWidth * fractional + gap * number;

      //console.log(parseFloat(activeRatingWidth));

      activeRating.style.width = `${activeRatingWidth}px`;
    });
  }
});
