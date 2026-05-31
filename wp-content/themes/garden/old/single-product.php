<?
get_header();
global $post;
$product = wc_get_product($post->ID);

require_once "template-parts/breadcrumb.php";
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
                         
                         <li class="catalog-categories__item" data-category="<?= $product_category->term_id ?>"><?= $product_category->name ?> <span> <?= $product_category->count ?></span></li>
                         
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
                    <section class="main-product product" data-id="<?= $product->get_id() ?>">
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
                                                </div>
                                               <?php
                                               $i = "";
                                                
                                        }
                                    
                                    ?>
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
                            <p class="main-product__price product-price"><?= $product->get_regular_price() ?> ₽/шт</p>
                            <p class="main-product__status product-status"><?php if($product->is_in_stock()) {echo "В наличии";} else {echo "Нет в наличии";} ?></p>
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
                            <p class="main-product__text">Артикул: <span><?= $product->get_sku()  ?></span></p>
                            <p class="main-product__text hidden">Подсорт: <span>medunica</span></p>
                           <!-- <div class="main-product__variants">
                                <div class="variant active">
                                    <p class="variant__name">Контейнер: C2</p>
                                    <p class="variant__price">550 ₽/шт</p>
                                </div>
                            </div>-->
                            <p class="main-product__zone hidden">ЗОНА 5</p>
                            <div class="main-product__icons hidden">
                                <img src="/resourses/sun.svg" alt="conditions">
                                <img src="/resourses/sun.svg" alt="conditions">
                                <img src="/resourses/sun.svg" alt="conditions">
                                <img src="/resourses/sun.svg" alt="conditions">
                                <img src="/resourses/sun.svg" alt="conditions">
                            </div>
                        </div>
                    </section>
                    <section class="tabs">
                        <div class="tabs__header">
                            <div>
                                <div class="tabs__header__container">
                                    <p>Описание</p>
                                    <p>Размер и транспортировка</p>
                                    <p>Условия оплаты и доставки</p>
                                    <p>Условные обозначения</p>
                                </div>
                                <div class="tabs__header__line"></div>
                            </div>
                        </div>
                        <div class="tabs__tab">
                            <?= get_the_content() ?>
<!--                             <h5>Описание:</h5>
<p>Медуница относится к группе низкорослых цветов. Высота растения не превышает 30 сантиметров. Ствол плотный, обильно покрыт мелкими ворсинками. Корневая система хорошо развита. Лиственные пластины двух видов. Нижние — зеленые со светлыми вкраплениями, а верхние – однотонные. Пластины сидячие. С обеих сторон они покрыты ворсинками. </p>
<h5>Листья</h5>
<p>Листья большие длинные, овальные, зеленые с ярко выраженными серебристыми пятнами. Декоративны в течение всего сезона.</p>
<h5>Цветки</h5>
<p>Отличительной чертой медуницы Опал являются голубоватые листики, на одном стебельке можно наблюдать бутоны разного оттенка, но в основном они белые.</p>
<h5>Период цветения</h5>
<p>Апрель-май.</p>
<h5>Требования</h5>
<p>Предпочитает полутень, растение влаголюбиво. Лучше развивается на супесчаных или суглинистых, щелочных или слабокислых богатых почвах.</p> -->
                        </div>
                    </section>
                    <section class="advantages">
                        <div class="advantage-item">
                            <img class="advantage-item__img" src="/resourses/advantage-1.svg" alt="">
                            <div class="advantage-item__info">
                                <p class="advantage-item__header">ПРЕДЗАКАЗ</p>
                                <p class="advantage-item__text">На сезонные растения и поставки под заказ</p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__img" src="/resourses/advantage-2.svg" alt="">
                            <div class="advantage-item__info">
                                <p class="advantage-item__header">оплата онлайн</p>
                                <p class="advantage-item__text">Возможность заказать и оплатить онлайн</p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__img" src="/resourses/advantage-3.svg" alt="">
                            <div class="advantage-item__info">
                                <p class="advantage-item__header">СКИДКИ %</p>
                                <p class="advantage-item__text">На оптовые и комплексные заказы</p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__img" src="/resourses/advantage-4.svg" alt="">
                            <div class="advantage-item__info">
                                <p class="advantage-item__header">рассрочка</p>
                                <p class="advantage-item__text">Для гос.структур и частных клиентов </p>
                            </div>
                        </div>
                    </section>
                    <section class="recommended-goods">
                        <h2>Рекомендуем</h2>
                        <div class="recommended-goods__container">
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">
                                    <?php
                                    $args = ["post_type" => "product", "posts_per_page" => 5];
                                
                                        $query = new WP_Query($args);
                                        
                                        while($query->have_posts()) :
                                            $query->the_post(); ?>
                                            <div class="swiper-slide">
                                               <?php require "template-parts/product-card.php"; ?>
                                            </div>
                                        <?php
                                        endwhile;
                            
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