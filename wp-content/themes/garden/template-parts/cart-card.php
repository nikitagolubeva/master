<?php global $_product; global $tt; global $quantity;  ?>
<section class="cart-card" data-id="<?= $_product->get_id() ?>">
    <div class="cart-card__top mobile-top">
        <h4 class="cart-card__name"><?= $_product->get_title() ?></h4>
        <svg class="js-remove-cart-card" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 18L6 6" stroke="#14181F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M18 6L6 18" stroke="#14181F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <div class="cart-card__container">
        <img class="cart-card__img" src="<?= get_the_post_thumbnail_url($_product->get_id()) ?>" alt="product">
        <div class="cart-card__info">
            <div class="cart-card__top desc-top">
                <h4 class="cart-card__name"><?= $_product->get_title() ?></h4>
                <svg class="js-remove-cart-card" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 18L6 6" stroke="#14181F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18 6L6 18" stroke="#14181F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="cart-card__text-info">
                <p class="cart-card__price"><span class="js-single-price"><?= $_product->get_price() ?></span> ₽/шт х <span class="js-amount"><?= $quantity ?></span> = <span class="js-product-full-price"><?= $tt ?></span> ₽</p>
                <div class="cart-card__text-info__subinfo">
                    <p class="cart-card__status"><?php
                    
                     if ($_product->is_on_backorder()) {
                echo  "Предзаказ";
            } else if ($_product->is_in_stock()) {
                echo "В наличии";
            } else  {
                echo "Нет в наличии";
            } 
                    
                    ?></p>
                    <p class="cart-card__variant">Контейнер: <?= get_field('контейнер', $_product->get_id()) ?></p>
                </div>
            </div>
            <div class="amount-block">
                <button class="amount-block__btn minus">
                    <svg class="minus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 12L18 12" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </button>
                <p class="amount-block__amount amount"><?= $quantity ?></p>
                <button class="amount-block__btn plus">
                    <svg class="plus" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 6V18" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M6 12L18 12" stroke="white" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </button>
            </div>
            <p class="cart-card__articul">Артикул: <span><?= $_product->get_sku()  ?></span></p>
            <p class="cart-card__desc"><?= get_the_excerpt($_product->get_id()) ?></p>
        </div>
    </div>
</section>