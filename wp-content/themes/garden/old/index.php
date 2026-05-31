<?php
global $header_color;
$header_color = 'white';
get_header();
require_once "template-parts/feedback-popup.php";
require_once "template-parts/news-popup.php";
?>


    <main class="main">
        <section class="first-block">
            <img class="first-block__title" src="<?= get_template_directory_uri() ?>/resourses/title.svg" alt="Ландшафт как образ жизни">
            <img class="first-block__bg-img" src="<?= get_template_directory_uri() ?>/resourses/first-block-bg.webp" alt="задний фон">
            <div class="first-block__shadow"></div>
            <div class="wrapper">
                <h2 class="first-block__text">Создаем красоту и гармонию вокруг вас: ландшафтный дизайн, комлексное озеленение и уход за садом!</h2>
                <h2 class="first-block__mobile-text">Ландшафтный дизайн, о&nbsp;котором вы мечтали</h2>
                <button class="first-block__button js-feedback-popup" type="button">
                    <span>Заказать дизайн</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="first-block__bottom">
                <div class="wrapper">
                    <div class="first-block__bottom__container">
                        <div class="advantage-item">
                            <img class="advantage-item__icon" src="<?= get_template_directory_uri() ?>/resourses/main-icon-1.svg" alt="advantage1">
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header">ПРЕДЗАКАЗ</h5>
                                <p class="advantage-item__desc">На сезонные растения и поставки под заказ</p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__icon" src="<?= get_template_directory_uri() ?>/resourses/main-icon-2.svg" alt="advantage1">
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header">СКИДКИ %</h5>
                                <p class="advantage-item__desc">На оптовые и комплексные заказы</p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__icon" src="<?= get_template_directory_uri() ?>/resourses/main-icon-3.svg" alt="advantage1">
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header">оплата онлайн</h5>
                                <p class="advantage-item__desc">Возможность заказать и оплатить онлайн</p>
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__icon" src="<?= get_template_directory_uri() ?>/resourses/main-icon-4.svg" alt="advantage1">
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header">рассрочка</h5>
                                <p class="advantage-item__desc">Для гос.структур и частных клиентов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="offers-block">
            <div class="left-offer offer-block">
                <img class="offer-block__bg-img" src="<?= get_template_directory_uri() ?>/resourses/banner-new.webp" alt="bg">
            </div>
            <div class="banners-container">
                <div class="swiper banner-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="offer-block slider-offer">
                                <div class="slider-offer__bottom">
                                    <p>Большой выбор роз по 1200 рублей</p>
                                    <button type="button" class="js-feedback-popup">
                                        <span>заказать</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img class="offer-block__bg-img" src="<?= get_template_directory_uri() ?>/resourses/roses.webp" alt="bg">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="offer-block slider-offer">
                                <div class="slider-offer__bottom">
                                    <p>Вакансии в нашей компании</p>
                                    <button type="button" class="js-feedback-popup">
                                        <span>на собеседование</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img class="offer-block__bg-img" src="<?= get_template_directory_uri() ?>/resourses/banner-1.webp" alt="bg">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="offer-block slider-offer">
                                <div class="slider-offer__bottom">
                                    <p>Требуется менеджер по продажам</p>
                                    <button type="button" class="js-feedback-popup">
                                        <span>на собеседование</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img class="offer-block__bg-img" src="<?= get_template_directory_uri() ?>/resourses/banner-2.webp" alt="bg">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="offer-block slider-offer">
                                <div class="slider-offer__bottom">
                                    <p>Рододендроны в наличии</p>
                                    <button type="button" class="js-feedback-popup">
                                        <span>заказать</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img class="offer-block__bg-img" src="<?= get_template_directory_uri() ?>/resourses/banner-3.webp" alt="bg">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="offer-block slider-offer">
                                <div class="slider-offer__bottom">
                                    <p>Подарочный сертификат от 5 000 до 500 000 ₽</p>
                                    <button type="button" class="js-feedback-popup">
                                        <span>заказать</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img class="offer-block__bg-img" src="<?= get_template_directory_uri() ?>/resourses/banner-4.webp" alt="bg">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="banner-slider__arrow banner-slider__next">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" rx="24" fill="#24282E" fill-opacity="0.4" />
                        <path d="M20 13L30 23.5L20 34" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="banner-slider__arrow banner-slider__prev">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="48" height="48" rx="24" fill="#24282E" fill-opacity="0.4" />
                        <path d="M20 13L30 23.5L20 34" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </section>
        <!-- <div class="wrapper">
            <section class="categories-section">
                <h2 class="categories-section__header">Широкий ассортимент растений в нашем каталоге</h2>
                <div class="categories-section__container">
                    <a href="/catalog?category=21" class="categories-item">
                        <p class="categories-item__name">Хвойные<br>растения</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-1.webp" alt="category">
                    </a>
                    <a href="/catalog?category=19" class="categories-item big-item">
                        <p class="categories-item__name">Плодово-ягодные деревья, кустарники и лианы</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-2.webp" alt="category">
                    </a>
                    <a href="/catalog?category=18" class="categories-item">
                        <p class="categories-item__name">Кустарники</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-3.webp" alt="category">
                    </a>
                    <a href="/catalog?category=23" class="categories-item">
                        <p class="categories-item__name">Злаки</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-4.webp" alt="category">
                    </a>
                    <a href="/catalog?category=17" class="categories-item">
                        <p class="categories-item__name">Деревья</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-5.webp" alt="category">
                    </a>
                    <a href="/catalog?category=26" class="categories-item big-item">
                        <p class="categories-item__name">Растения для прудов<br>и водоемов</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-6.webp" alt="category">
                    </a>
                    <a href="/catalog?category=25" class="categories-item big-item">
                        <p class="categories-item__name">Пряно-ароматические<br>растения</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-1.webp" alt="category">
                    </a>
                    <a href="/catalog?category=24" class="categories-item">
                        <p class="categories-item__name">Почвопокровные<br>растения</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-2.webp" alt="category">
                    </a>
                    <a href="/catalog?category=28" class="categories-item ">
                        <p class="categories-item__name">Услуги</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-3.webp" alt="category">
                    </a>
                    <a href="/catalog?category=20" class="categories-item ">
                        <p class="categories-item__name">Многолетние<br>цветы</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-4.webp" alt="category">
                    </a>
                    <a href="/catalog?category=27" class="categories-item big-item">
                        <p class="categories-item__name">Сопутствующие товары<br>для сада</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-5.webp" alt="category">
                    </a>
                    <a href="/catalog?category=22" class="categories-item">
                        <p class="categories-item__name">Лианы</p>
                        <img class="categories-item__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/categories-6.webp" alt="category">
                    </a>
                </div>
                <button class="categories-section__btn" type="button">
                    <span class="show-catalog">развернуть каталог</span>
                    <span class="hide-catalog">свернуть каталог</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 10L12 15L17 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </section>
        </div>
        <section class="recommended-goods-block">
            <h2 class="recommended-goods-block__header">Рекомендуем эти товары</h2>
            <div class="borderless-product-slider swiper">
                <div class="swiper-wrapper">
                    <?php
                        $args = ["post_type" => "product", "posts_per_page" => 12];
                                
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
                <div class="swiper-scrollbar">
                </div>
            </div>
        </section>
        <section class="landscape-section">
            <div class="landscape-section__main">
                <div class="wrapper">
                    <h2 class="landscape-section__main__header">Ландшафтный дизайн, комлексное озеленение, уход за&nbsp;садом и многое другое...</h2>
                    <a href="#" class="landscape-section__main__link js-feedback-popup" onclick="return false;" class="landscape-section__main__link">
                        <span class="desc">узнать больше</span>
                        <span class="mobile">Подробнее</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <img class="landscape-section__main__img" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/first-block-bg.webp" alt="landscape image">
                </div>
            </div>
            <div class="landscape-section__container">
                <img src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/first-block-bg.webp" alt="landscape image">
                <img src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/first-block-bg.webp" alt="landscape image">
                <img src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/first-block-bg.webp" alt="landscape image">
            </div>
        </section> -->
    </main>

<?php
get_footer();