<?
get_header();
global $post;
$product = wc_get_product($post->ID);

require_once "template-parts/breadcrumb.php";
$regular_price = (float) $product->get_regular_price();
            $sale_price = (float) $product->get_price();
            $precision = 1;
            $saving_percentage = round( 100 - ( $sale_price / $regular_price * 100 ), 0);
             
?>



  <div class="wrapper">
        <?php get_breadcrumb(["<a href='/catalog'>Каталог</a>", "<p>$post->post_title</p>"]); ?>
        <main class="product-page">
            <section class="product-page__container">
                <div class="catalog-categories" data-default="none">
                    <ul>
                        <li class="catalog-categories__item hidden" data-category="none">Все</li>
                        <?php
                        
                         $args = array(
                        "taxonomy" => "product_cat",
                        "exclude" => "16",
                        'hide_empty' => false
                        );
    
                    $product_categories = get_terms($args);
                    
                     foreach ($product_categories as $product_category) {
                          ?>
                         
                         <li class="catalog-categories__item" data-category="<?= $product_category->term_id ?>">
                             <a href="/catalog?category=<?= $product_category->term_id ?>"><?= $product_category->name ?></a></li>
                         
                   <?php  }
                        
                        ?>
                    <button class="catalog-categories__button" type="button">
                            <span class="catalog-categories__button__show">Развернуть каталог</span>
                            <span class="catalog-categories__button__hide">Свернуть каталог</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10L12 15L17 10" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                  </ul>
                </div>
                <div class="product-page__info">
                    <section class="main-product product <?php if ($saving_percentage > 0) { echo "discount"; } ?>" data-id="<?= $product->get_id() ?>">
                        <div class="main-product__gallery">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <?php
                                
                                    $attachment_ids = $product->get_gallery_image_ids();
                                        $i = "active product-img";
                                        foreach( $attachment_ids as $attachment_id ) 
                                            {
                                              // Display the image URL
                                               $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>
                                                <!-- <img class="main-product__gallery__photo js-gallery-image <?= $i ?>" src="<?= $Original_image_url ?>" alt="product"> -->
                                                <div class="swiper-slide">
                                                    <img src="<?= $Original_image_url ?>" class="<?= $i ?>" alt="product" />
                                                    <div class="zoom-img">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </div>
                                                </div>
                                               <?php
                                               $i = "";
                                                
                                        }
                                    
                                    ?>
                                </div>
                                <div class="product-favorite heart-btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.612 5.41452C19.1722 4.96607 18.65 4.61034 18.0752 4.36763C17.5005 4.12492 16.8844 4 16.2623 4C15.6401 4 15.0241 4.12492 14.4493 4.36763C13.8746 4.61034 13.3524 4.96607 12.9126 5.41452L11.9998 6.34476L11.087 5.41452C10.1986 4.50912 8.99364 4.00047 7.73725 4.00047C6.48085 4.00047 5.27591 4.50912 4.38751 5.41452C3.4991 6.31992 3 7.5479 3 8.82833C3 10.1088 3.4991 11.3367 4.38751 12.2421L5.30029 13.1724L11.9998 20L18.6992 13.1724L19.612 12.2421C20.0521 11.7939 20.4011 11.2617 20.6393 10.676C20.8774 10.0902 21 9.46237 21 8.82833C21 8.19428 20.8774 7.56645 20.6393 6.9807C20.4011 6.39494 20.0521 5.86275 19.612 5.41452V5.41452Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div thumbsSlider="" class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <?php
                                
                                    $attachment_ids = $product->get_gallery_image_ids();
                                        $i = "active";
                                        foreach( $attachment_ids as $attachment_id ) 
                                            {
                                              // Display the image URL
                                               $Original_image_url = wp_get_attachment_url( $attachment_id ); ?>
                                                <!-- <img class="main-product__gallery__photo js-gallery-image <?= $i ?>" src="<?= $Original_image_url ?>" alt="product"> -->
                                                <div class="swiper-slide">
                                                    <img src="<?= $Original_image_url ?>" class="<?= $i ?>" alt="product" />
                                                </div>
                                               <?php
                                               $i = "";
                                                
                                        }
                                    
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="main-product__info">
                            <h1 class="main-product__name product-name"><?= $product->get_title() ?></h1>
                            <div class="main-product__price-container">
                                <div>
                                    <p class="main-product__price product-price"><?= $product->get_price() ?> ₽/шт</p>
                                    <p class="main-product__old-price"><?= $product->get_regular_price() ?> ₽</p>
                                    <p class="main-product__discount">-<?= $saving_percentage ?>%</p>
                                </div>
                                <p class="main-product__discount-time">Действует до <?php if (!empty($product->get_date_on_sale_to())): echo $product->get_date_on_sale_to()->date( "d.m.Y"); endif; ?></p>
                            </div>
                            <div class="product-rating-container">
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
                                <p class="main-product__rating-text">
                                    <?= get_field('рейтинг', $product->get_id()) ?>
                                </p>
                            </div>
                            <p class="main-product__status product-status"><?php 
                            if ($product->is_on_backorder()) {
                echo  "Предзаказ";
            } else if ($product->is_in_stock()) {
                echo "В наличии";
            } else  {
                echo "Нет в наличии";
            } ?></p>
                            <div class="main-product__buttons">
                                <?php
                                require "template-parts/loading.php";
                                ?>
                                <button class="main-product__buy-now click-to-buy-btn" type="button">купить<span> сейчас</span></button>
                                <button class="main-product__buy add-to-cart-btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.2282 12.4029C20.095 13.3349 19.3299 14.0479 18.3908 14.1149L7.95668 14.8602C6.86996 14.9379 5.92104 14.1314 5.8224 13.0464L5.27273 7H21L20.2282 12.4029Z" fill="white" />
                                        <path d="M3 4H5L5.27273 7M5.27273 7L5.8224 13.0464C5.92104 14.1314 6.86996 14.9379 7.95668 14.8602L18.3908 14.1149C19.3299 14.0479 20.095 13.3349 20.2282 12.4029L21 7H5.27273Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M8.5 21C9.32843 21 10 20.3284 10 19.5C10 18.6716 9.32843 18 8.5 18C7.67157 18 7 18.6716 7 19.5C7 20.3284 7.67157 21 8.5 21Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M16.5 21C17.3284 21 18 20.3284 18 19.5C18 18.6716 17.3284 18 16.5 18C15.6716 18 15 18.6716 15 19.5C15 20.3284 15.6716 21 16.5 21Z" fill="white" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                                 <button class="main-product__order click-to-buy-btn" type="button">
                                    заказать
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
                            <p class="main-product__text first">Артикул: <span><?= $product->get_sku()  ?></span></p>
                            <!-- <p class="main-product__text">Подсорт: <span><?= get_field('подсорт', $product->get_id()); ?></span></p> -->
                           <div class="main-product__variants">
                                 <a href="<?= get_the_permalink() ?>" class="variant active">
                                                <p class="variant__name">Контейнер: <?= get_field('контейнер', $post->ID) ?></p>
                                                <p class="variant__price"><?= $product->get_price() ?> ₽/шт</p>
                                </a>
                               <?php
                               $variations = get_field('вариации');
                               if ($variations != null) {
                                    foreach($variations as $variation) {
                                        $pr = new WC_Product($variation->ID);
                                        ?>
                                             <a href="<?= get_the_permalink($variation->ID) ?>" class="variant">
                                                <p class="variant__name">Контейнер: <?= get_field('контейнер', $variation->ID) ?></p>
                                                <p class="variant__price"><?= $pr->get_price() ?> ₽/шт</p>
                                            </a>
                                <?php  } 
                                } ?>
                            </div>
                            <p class="main-product__zone">ЗОНА <?= get_field('зона', $product->get_id()); ?></p>
                            <div class="main-product__icons">
                                <div class="main-product__icon-row">
                                    <?php
                                    $icons = get_field("особенности_культивирования", $product->get_id());
                                    if (!empty($icons)) :
                                    foreach($icons as $icon) { ?>
                                        <div class="icon-item">
                                            <img src="/resourses/<?= $icon['value'] ?>.svg" alt="conditions">
                                            <div>
                                                <p>
                                                    <?php
                                                     if (strlen($icon['label']) == 1) {
                                                         echo "Смотрите в условных обозначениях";
                                                     }
                                                     else{
                                                         echo $icon['label'];
                                                     }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php } 
                                    endif;
                                    ?>
                                </div>
                                <div class="main-product__icon-row">
                                      <?php
                                    $icons =  get_field("декоративность", $product->get_id());
                                      if (!empty($icons)) :
                                    foreach($icons as $icon) { ?>
                                         <div class="icon-item">
                                           <img src="/resourses/<?= $icon['value'] ?>.svg" alt="conditions">
                                            <div>
                                                <p>
                                                    <?php
                                                     if (strlen($icon['label']) == 1) {
                                                         echo "Смотрите в условных обозначениях";
                                                     }
                                                     else{
                                                         echo $icon['label'];
                                                     }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php }
                                    endif; ?>
                                </div>
                                <div class="main-product__icon-row">
                                       <?php
                                    $icons = get_field("использование", $product->get_id());
                                      if (!empty($icons)) :
                                    foreach($icons as $icon) { ?>
                                        <div class="icon-item">
                                            <img src="/resourses/<?= $icon['value'] ?>.svg" alt="conditions">
                                            <div>
                                                <p>
                                                    <?php
                                                     if (strlen($icon['label']) == 1) {
                                                         echo "Смотрите в условных обозначениях";
                                                     }
                                                     else{
                                                         echo $icon['label'];
                                                     }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    <?php }  
                                    endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="tabs">
                        <div class="tabs__header">
                            <div>
                                <div class="tabs__header__container swiper tab-header-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <p class="tabs__header__item active" data-tab="1">Описание</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <p class="tabs__header__item" data-tab="2">Условия оплаты и доставки</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <p class="tabs__header__item" data-tab="3">Условные обозначения</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tabs__tab">
                                        <?= get_the_content() ?>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tabs__tab">
                                        <h5>Доставка:</h5>
                                        <p><?= get_field("самовывоз", "option") ?></p>
                                         <?php while(have_rows('самовывоз', 4569)): the_row(); ?>
                                        <div class="address-item">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2493 25.8682L19.9997 34.1668L11.7501 25.8682C7.19398 21.285 7.19398 13.8541 11.7501 9.2709C16.3062 4.68769 23.6931 4.68769 28.2493 9.2709C32.8054 13.8541 32.8054 21.285 28.2493 25.8682ZM19.9997 23.3335C23.2213 23.3335 25.833 20.7218 25.833 17.5002C25.833 14.2785 23.2213 11.6668 19.9997 11.6668C16.778 11.6668 14.1663 14.2785 14.1663 17.5002C14.1663 20.7218 16.778 23.3335 19.9997 23.3335Z" fill="#3E683A" />
                                                <path d="M19.9997 34.1668L18.9359 35.2243C19.2174 35.5076 19.6003 35.6668 19.9997 35.6668C20.399 35.6668 20.7819 35.5076 21.0635 35.2243L19.9997 34.1668ZM28.2493 25.8682L29.3131 26.9257L28.2493 25.8682ZM11.7501 25.8682L12.8139 24.8107L11.7501 25.8682ZM11.7501 9.2709L10.6863 8.21339V8.21339L11.7501 9.2709ZM28.2493 9.2709L29.3131 8.21339V8.21339L28.2493 9.2709ZM21.0635 35.2243L29.3131 26.9257L27.1855 24.8107L18.9359 33.1093L21.0635 35.2243ZM10.6863 26.9257L18.9359 35.2243L21.0635 33.1093L12.8139 24.8107L10.6863 26.9257ZM10.6863 8.21339C5.54858 13.3817 5.54858 21.7574 10.6863 26.9257L12.8139 24.8107C8.83938 20.8125 8.83938 14.3266 12.8139 10.3284L10.6863 8.21339ZM29.3131 8.21339C24.1704 3.0402 15.8289 3.0402 10.6863 8.21339L12.8139 10.3284C16.7835 6.33519 23.2158 6.33519 27.1855 10.3284L29.3131 8.21339ZM29.3131 26.9257C34.4508 21.7574 34.4508 13.3817 29.3131 8.21339L27.1855 10.3284C31.16 14.3266 31.16 20.8125 27.1855 24.8107L29.3131 26.9257ZM24.333 17.5002C24.333 19.8934 22.3929 21.8335 19.9997 21.8335V24.8335C24.0498 24.8335 27.333 21.5502 27.333 17.5002H24.333ZM19.9997 13.1668C22.3929 13.1668 24.333 15.1069 24.333 17.5002H27.333C27.333 13.4501 24.0498 10.1668 19.9997 10.1668V13.1668ZM15.6663 17.5002C15.6663 15.1069 17.6064 13.1668 19.9997 13.1668V10.1668C15.9496 10.1668 12.6663 13.4501 12.6663 17.5002H15.6663ZM19.9997 21.8335C17.6064 21.8335 15.6663 19.8934 15.6663 17.5002H12.6663C12.6663 21.5502 15.9496 24.8335 19.9997 24.8335V21.8335Z" fill="#3E683A" />
                                            </svg>
                                            <div>
                                                <h5><?= get_sub_field('адрес') ?></h5>
                                                <a class="link" href="<?php echo 'https' . '://' . $_SERVER['SERVER_NAME'] . "/contacts/"?>">
                                                    <span>Схема проезда</span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 17L15 12L10 7" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                         <?php endwhile; ?>
                                        <p class="more-indent max-700"><?= get_field("доставка", "option") ?></p>
                                        <h5 class="big-indent">Оплата:</h5>
                                        <ul>
                                            <?php while(have_rows("способы_оплаты_2","option")): ?>
                                            <li><?php the_row(); echo get_sub_field("оплата"); ?></li>
                                            <?php endwhile; ?>
                                        </ul>
                                        <p class="more-indent black"><?= get_field("условия_оплаты","option") ?></p>
                                        <a href="/payment-delivery" class="link more-indent">
                                            <span>Раздел доставки и оплаты</span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 17L15 12L10 7" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tabs__tab">
                                        <h5>Расшифровка условных обозначений контейнеров:</h5>
                                        <div class="info-box">
                                            <div>
                                                <p><span>C5</span></p>
                                                <p>С - обозначение круглого контейнера; 5 - объем в литрах (5 л).</p>
                                            </div>
                                            <div>
                                                <p><span>P9</span></p>
                                                <p>Р - обозначение квадратного контейнера; 9 - диаметр в сантиметрах (9 см).</p>
                                            </div>
                                            <div>
                                                <p><span>RB-50</span></p>
                                                <p>RB - земляной ком в мешковине; 50 - диаметр кома в см (50 см).</p>
                                            </div>
                                            <div>
                                                <p><span>WRB-60</span></p>
                                                <p>WRB - ком в мешковине и металлической сетке; 60 - диаметр кома в см (60 см).</p>
                                            </div>
                                            
                                        </div>
                                        <h5 class="desc">Зоны морозоустойчивости растений:</h5>
                                        <div class="zone-container">
                                            <div class="zone-container__info">
                                                <h5 class="mobile">Зоны морозоустойчивости растений:</h5>
                                                <div class="zone-container__header">
                                                    <p>Зона</p>
                                                    <p>Минимальная температура, ℃</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">1</p>
                                                    <div class="temp-item__color color-1"></div>
                                                    <p class="temp-item__desc">
                                                        < -45,6</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">2</p>
                                                    <div class="temp-item__color color-2"></div>
                                                    <p class="temp-item__desc">-40,0 до -45,5</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">3</p>
                                                    <div class="temp-item__color color-3"></div>
                                                    <p class="temp-item__desc">-34,5 до -39,9</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">4</p>
                                                    <div class="temp-item__color color-4"></div>
                                                    <p class="temp-item__desc">-28,9 до -34,4</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">5</p>
                                                    <div class="temp-item__color color-5"></div>
                                                    <p class="temp-item__desc">-23,4 до -28,8</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">6</p>
                                                    <div class="temp-item__color color-6"></div>
                                                    <p class="temp-item__desc">-17,8 до -23,3</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">7</p>
                                                    <div class="temp-item__color color-7"></div>
                                                    <p class="temp-item__desc">-12,3 до -17,7</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">8</p>
                                                    <div class="temp-item__color color-8"></div>
                                                    <p class="temp-item__desc">-6,7 до -12,2</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">9</p>
                                                    <div class="temp-item__color color-9"></div>
                                                    <p class="temp-item__desc">-1,2 до -6,6</p>
                                                </div>
                                                <div class="temp-item">
                                                    <p class="temp-item__number">10</p>
                                                    <div class="temp-item__color color-10"></div>
                                                    <p class="temp-item__desc">-1,1 до +4,4</p>
                                                </div>
                                            </div>
                                            <div class="zone-container__img-container">
                                                <img class="zone-container__img" src="/resourses/zone-map.webp" alt="карта зон">
                                            </div>
                                        </div>
                                        <div class="conventions-block">
                                            <div class="conventions-block__column conventions-block__big-column">
                                                <h5 class="column-header">
                                                    <p>Особенности культивирования<span class="desc">:</span></p> <svg class="mobile" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 11L12 14L9 11" stroke="#7E899A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </h5>
                                                <div class="conventions-block__container conventions-block__big-container">
                                                    <div class="convention-item">
                                                        <img src="/resourses/1.svg" alt="conditions">
                                                        <p class="convention-item__text">В солнечном месте</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/13.svg" alt="conditions">
                                                        <p class="convention-item__text">Требует плодородных почв и подкормок</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/2.svg" alt="conditions">
                                                        <p class="convention-item__text">В слегка затемненном месте</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/14.svg" alt="conditions">
                                                        <p class="convention-item__text">Средние требования к плодородию почв</p>
                                                    </div>
                                                    <div class="convention-item">
                                                       <img src="/resourses/3.svg" alt="conditions">
                                                        <p class="convention-item__text">В частично затемненном месте</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/15.svg" alt="conditions">
                                                        <p class="convention-item__text">Предпочитает влажные места</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/4.svg" alt="conditions">
                                                        <p class="convention-item__text">В тенистом месте</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/16.svg" alt="conditions">
                                                        <p class="convention-item__text">Не выносит переувлажнения</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/5.svg" alt="conditions">
                                                        <p class="convention-item__text">Устойчив к заморозкам и морозам</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/17.svg" alt="conditions">
                                                        <p class="convention-item__text">Чувствителен к пересыханию почв</p>
                                                    </div><div class="convention-item">
                                                        <img src="/resourses/6.svg" alt="conditions">
                                                        <p class="convention-item__text">Предпочитает теплые и закрытые места</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/18.svg" alt="conditions">
                                                        <p class="convention-item__text">Устойчив к временному пересыханию почв</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/7.svg" alt="conditions">
                                                        <p class="convention-item__text">Требует укрытия на зиму</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/19.svg" alt="conditions">
                                                        <p class="convention-item__text">Устойчив к временной засухе</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/8.svg" alt="conditions">
                                                        <p class="convention-item__text">Молодые требуют притенения весной</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/20.svg" alt="conditions">
                                                        <p class="convention-item__text">Неприхотлив в уходе</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/9.svg" alt="conditions">
                                                        <p class="convention-item__text">Предпочитает слабокислые почвы</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/21.svg" alt="conditions">
                                                        <p class="convention-item__text">Капризен, требователен к уходу</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/10.svg" alt="conditions">
                                                        <p class="convention-item__text">Предпочитает слабощелочные почвы</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/22.svg" alt="conditions">
                                                        <p class="convention-item__text">Устойчив к вредителям и болезням</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/11.svg" alt="conditions">
                                                        <p class="convention-item__text">Предпочитает нейтральные почвы</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/23.svg" alt="conditions">
                                                        <p class="convention-item__text">Уязвим для вредителей и болезней</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/12.svg" alt="conditions">
                                                        <p class="convention-item__text">Толерантен к кислотности почвы</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/24.svg" alt="conditions">
                                                        <p class="convention-item__text">Хорошо переносит стрижку</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conventions-block__column">
                                                <h5 class="column-header">
                                                    <p>Декоративность<span class="desc">:</span></p> <svg class="mobile" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 11L12 14L9 11" stroke="#7E899A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </h5>
                                                <div class="conventions-block__container">
                                                    <div class="convention-item">
                                                        <img src="/resourses/25.svg" alt="conditions">
                                                        <p class="convention-item__text">Декоративная крона</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/26.svg" alt="conditions">
                                                        <p class="convention-item__text">Декоративные листья</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/27.svg" alt="conditions">
                                                        <p class="convention-item__text">Декоративная хвоя</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/28.svg" alt="conditions">
                                                        <p class="convention-item__text">Декоративная кора</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/29.svg" alt="conditions">
                                                        <p class="convention-item__text">Декоративные побеги</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/30.svg" alt="conditions">
                                                        <p class="convention-item__text">Декоративные плоды</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/31.svg" alt="conditions">
                                                        <p class="convention-item__text">Декоративные шишки</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/32.svg" alt="conditions">
                                                        <p class="convention-item__text">Съедобные плоды</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/33.svg" alt="conditions">
                                                        <p class="convention-item__text">Красиво цветущий</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/34.svg" alt="conditions">
                                                        <p class="convention-item__text">Душистый</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/35.svg" alt="conditions">
                                                        <p class="convention-item__text">Декоративен осенью</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/36.svg" alt="conditions">
                                                        <p class="convention-item__text">Колючий</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="conventions-block__column">
                                                <h5 class="column-header">
                                                    <p>Использование<span class="desc">:</span></p> <svg class="mobile" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M15 11L12 14L9 11" stroke="#7E899A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </h5>
                                                <div class="conventions-block__container">
                                                    <div class="convention-item">
                                                       <img src="/resourses/37.svg" alt="conditions">
                                                        <p class="convention-item__text">Для посадок в композиции</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/38.svg" alt="conditions">
                                                        <p class="convention-item__text">Для цветовых групп</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/39.svg" alt="conditions">
                                                        <p class="convention-item__text">Для живых изгородей</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/40.svg" alt="conditions">
                                                        <p class="convention-item__text">Для бордюров</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/41.svg" alt="conditions">
                                                        <p class="convention-item__text">На склонах</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/42.svg" alt="conditions">
                                                        <p class="convention-item__text">Для альпинариев</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/43.svg" alt="conditions">
                                                        <p class="convention-item__text">Возле водоемов</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/44.svg" alt="conditions">
                                                        <p class="convention-item__text">В качестве солитера</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/45.svg" alt="conditions">
                                                        <p class="convention-item__text">Устойчив к загрязнению воздуха</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/46.svg" alt="conditions">
                                                        <p class="convention-item__text">Для парков и больших садов</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/47.svg" alt="conditions">
                                                        <p class="convention-item__text">Для малых садов</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <img src="/resourses/48.svg" alt="conditions">
                                                        <p class="convention-item__text">Как рождественское дерево</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="advantages">
                         <?php while(have_rows("преимущества",get_option('page_on_front'))): the_row(); ?>
                        <div class="advantage-item">
                            <div class="advantage-item__img">
                               <img src="<?= get_sub_field("иконка_темная") ?>" alt="advantage1"> 
                            </div>
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header"><?= get_sub_field("название") ?></h5>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </section>
                    <section class="recommended-goods">
                        <h2>Рекомендуем</h2>
                        <div class="recommended-goods__container">
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">
                                     <?php
                        //$args = ["post_type" => "product", "posts_per_page" => 12];
                        $goods = get_field("рекомендованные_товары",4566);
                        //print_r($goods);
                        global $product;
                        foreach($goods as $good) {
                        $product = wc_get_product($good->ID);
                        ?>
                            
                             <div class="swiper-slide">
                                   <?php require "template-parts/product-card.php"; ?>
                                </div>
                            
                        <?php }
                        wp_reset_postdata();
                    ?>
                                </div>
                            </div> 
                        
                        </div>
                    </section>
                </div>
            </section>
        </main>
    </div>



<?php
get_footer();