<?php global $product;
$regular_price = (float) $product->get_regular_price();
            $sale_price = (float) $product->get_price();
            $precision = 1;
            $saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 0);
             

?>
<section class="product-card product <?php if ($saving_percentage > 0): echo "discount"; endif; ?>" data-id="<?= $product->get_id() ?>" data-category="<?= get_the_terms($product->get_id(), 'product_cat')[0]->name ?>">
    <div class="product-card__img-container">
        <a href="<?= $product->get_permalink() ?>">
            <img loading="lazy" class="product-card__img product-img" src="<?= get_the_post_thumbnail_url($product->get_id()) ?>" alt="product image">
        </a>
        <div class="product-card__favorite-btn heart-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.612 5.41452C19.1722 4.96607 18.65 4.61034 18.0752 4.36763C17.5005 4.12492 16.8844 4 16.2623 4C15.6401 4 15.0241 4.12492 14.4493 4.36763C13.8746 4.61034 13.3524 4.96607 12.9126 5.41452L11.9998 6.34476L11.087 5.41452C10.1986 4.50912 8.99364 4.00047 7.73725 4.00047C6.48085 4.00047 5.27591 4.50912 4.38751 5.41452C3.4991 6.31992 3 7.5479 3 8.82833C3 10.1088 3.4991 11.3367 4.38751 12.2421L5.30029 13.1724L11.9998 20L18.6992 13.1724L19.612 12.2421C20.0521 11.7939 20.4011 11.2617 20.6393 10.676C20.8774 10.0902 21 9.46237 21 8.82833C21 8.19428 20.8774 7.56645 20.6393 6.9807C20.4011 6.39494 20.0521 5.86275 19.612 5.41452V5.41452Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
    </div>
    <a href="<?= $product->get_permalink() ?>" class="product-card__name product-name"><?= $product->get_title() ?></a>
    <!-- <a href="<?= $product->get_permalink() ?>" class="product-card__subgrade">
        <?php
        if (get_field('подсорт', $product->get_id()) == ""){
            echo '-';
        }
        else{
            echo get_field('подсорт', $product->get_id());
        }
        ?>
        </a> -->
    <a href="<?= $product->get_permalink() ?>" class="product-card__price-container">
        <div>
            <p class="product-card__price product-price"><?= $product->get_price() ?> ₽</p>
            <p class="product-card__old-price"><?= $product->get_regular_price() ?> ₽</p>
        </div>
        
        <p class="product-card__discount">-<?= $saving_percentage ?>%</p>
    </a>
    <p class="product-card__status product-status"><?php
            if ($product->is_on_backorder()) {
                $status = "Предзаказ";
            } else if ($product->is_in_stock()) {
                $status = "В наличии";
            } else {
                $status = "Нет в наличии";
            } echo $status; ?></p>
    <div class="product-rating" data-rating='<?= get_field('рейтинг', $product->get_id()) ?>'>
        <div class="active-rating">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="stars-container">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="product-card__buttons">
        <?php
            require "loading.php";
        ?>
        <button class="product-card__order click-to-buy-btn" type="button">
            заказать
        </button>
        <button class="product-card__buy-now click-to-buy-btn">
          купить<span> сейчас</span> 
        </button>
        <button class="product-card__buy add-to-cart-btn" type="button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.2282 12.4029C20.095 13.3349 19.3299 14.0479 18.3908 14.1149L7.95668 14.8602C6.86996 14.9379 5.92104 14.1314 5.8224 13.0464L5.27273 7H21L20.2282 12.4029Z" fill="white" />
                <path d="M3 4H5L5.27273 7M5.27273 7L5.8224 13.0464C5.92104 14.1314 6.86996 14.9379 7.95668 14.8602L18.3908 14.1149C19.3299 14.0479 20.095 13.3349 20.2282 12.4029L21 7H5.27273Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M8.5 21C9.32843 21 10 20.3284 10 19.5C10 18.6716 9.32843 18 8.5 18C7.67157 18 7 18.6716 7 19.5C7 20.3284 7.67157 21 8.5 21Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M16.5 21C17.3284 21 18 20.3284 18 19.5C18 18.6716 17.3284 18 16.5 18C15.6716 18 15 18.6716 15 19.5C15 20.3284 15.6716 21 16.5 21Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
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
    <!-- <p class="hidden product-articul">articul</p>
    <p class="hidden product-subgrade">subgrade</p>
    <p class="hidden product-zone">1</p>
    <p class="hidden product-link"><?= $product->get_permalink() ?></p>
    <ul class="hidden">
        <li class="container-item">
            <p class="container-link">/product</p>
            <p class="container-name">C1</p>
            <p class="container-price">550</p>
        </li>
        <li class="container-item">
            <p class="container-link">/product</p>
            <p class="container-name">C2</p>
            <p class="container-price">550</p>
        </li>
        <li class="container-item">
            <p class="container-link">/product</p>
            <p class="container-name">C3</p>
            <p class="container-price">550</p>
        </li>
    </ul>
    <ul class="hidden">
        <li class="icon-type-1">1</li>
        <li class="icon-type-1">2</li>
    </ul>
    <ul class="hidden">
        <li class="icon-type-2">1</li>
        <li class="icon-type-2">4</li>
        <li class="icon-type-2">5</li>
    </ul>
    <ul class="hidden">
        <li class="icon-type-3">1</li>
        <li class="icon-type-3">2</li>
    </ul>
    <ul class="hidden">
       
    </ul> -->
</section>