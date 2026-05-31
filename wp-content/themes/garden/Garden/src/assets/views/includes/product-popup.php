<div class="popup-wrapper product-popup">
    <div class="popup-container">
        <section class="popup-block product" data-id="">
            <div class="product-popup__top">
                <nav class="breadcrumb">
                    <a>Главная</a>-<a>Каталог</a>-<a class="breadcrumb-category"></a>-<p class="breadcrumb-name"></p>
                </nav>
                <svg class="product-popup__cross" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 18L6 6" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18 6L6 18" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="product-popup__container">
                <div class="product-popup__gallery">
                    <div thumbsSlider="" class="swiper images-slider">
                        <div class="swiper-wrapper popup-main-images">

                        </div>
                        <div class="product-favorite heart-btn">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.612 5.41452C19.1722 4.96607 18.65 4.61034 18.0752 4.36763C17.5005 4.12492 16.8844 4 16.2623 4C15.6401 4 15.0241 4.12492 14.4493 4.36763C13.8746 4.61034 13.3524 4.96607 12.9126 5.41452L11.9998 6.34476L11.087 5.41452C10.1986 4.50912 8.99364 4.00047 7.73725 4.00047C6.48085 4.00047 5.27591 4.50912 4.38751 5.41452C3.4991 6.31992 3 7.5479 3 8.82833C3 10.1088 3.4991 11.3367 4.38751 12.2421L5.30029 13.1724L11.9998 20L18.6992 13.1724L19.612 12.2421C20.0521 11.7939 20.4011 11.2617 20.6393 10.676C20.8774 10.0902 21 9.46237 21 8.82833C21 8.19428 20.8774 7.56645 20.6393 6.9807C20.4011 6.39494 20.0521 5.86275 19.612 5.41452V5.41452Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <div class="swiper image-slider">
                        <div class="swiper-wrapper popup-thumb-images">

                        </div>
                    </div>
                </div>
                <div class="product-popup__info">
                    <h5 class="product-popup__name product-name"></h5>
                    <div class="product-popup__row">
                        <p class="product-popup__price product-price"><span class="product-popup-price"></span> ₽/шт</p>
                        <p class="product-popup__status product-status"></p>
                    </div>
                    <div class="product-popup__buttons">
                        <?php
                        require "assets/views/includes/loading.php";
                        ?>
                        <button class="product-popup__buy add-to-cart-btn popup-buy-btn" type="button">
                            КУПИТЬ
                        </button>
                        <div class="amount-block">
                            <button class="amount-block__btn minus">
                                <svg class="minus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 12L18 12" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </button>
                            <p class="amount-block__amount amount">1</p>
                            <button class="amount-block__btn plus">
                                <svg class="plus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 6V18" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                    <path d="M6 12L18 12" stroke="black" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <p class="product-popup__text">Артикул: <span class="popup-articul"></span></p>
                    <p class="product-popup__text">Подсорт: <span class="popup-subgrade"></span></p>
                    <div class="product-popup__variants swiper">
                        <div class="swiper-wrapper variants-container">
                        </div>
                    </div>
                    <p class="product-popup__zone">ЗОНА <span class="popup-zone"></span></p>
                    <div class="product-popup__icons">
                        <div class="product-popup__icon-row icon-row-1">
                        </div>
                        <div class="product-popup__icon-row icon-row-2">
                        </div>
                        <div class="product-popup__icon-row icon-row-3">
                        </div>
                    </div>
                </div>
            </div>
            <a class="product-popup__link" href="#">перейти к товару</a>
        </section>
    </div>
</div>