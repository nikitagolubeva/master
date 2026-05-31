<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#242424" media="(prefers-color-scheme: dark)">
    <meta name="format-detection" content="telephone=no">
    <title>Сад</title>
    <link rel="shortcut icon" href="" type="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>

<body class="body" id="body">
    <?php
    $header_color = 'black';
    require_once "assets/views/includes/header.php";
    require_once "assets/views/includes/breadcrumb.php";
    require_once "assets/views/includes/news-popup.php";
    require_once "assets/views/includes/update-popup.php";
    require_once "assets/views/includes/authorization.php"; ?>
    <div class="wrapper">
        <?php get_breadcrumb(["<a href='#'>Каталог</a>", "<p>Цветы</p>"]); ?>
        <main class="product-page">
            <section class="product-page__container">
                <div class="catalog-categories" data-default>
                    <div>
                        <ul>
                            <li class="catalog-categories__item hidden" data-category="">Все</li>
                            <li class="catalog-categories__item" data-category="category">Крупнолиственные и хвойные <span> 7</span></li>
                            <li class="catalog-categories__item" data-category="category">Кустарники <span> 4</span></li>
                            <li class="catalog-categories__item" data-category="category">Многолетние цветы <span> 15</span></li>
                            <li class="catalog-categories__item" data-category="category">Хвойные растения <span> 5</span></li>
                            <li class="catalog-categories__item" data-category="category">Лианы <span> 3</span></li>
                            <li class="catalog-categories__item" data-category="category">Злаки <span> 5</span></li>
                            <li class="catalog-categories__item" data-category="category">Почвопокровные растения <span> 9</span></li>
                            <li class="catalog-categories__item" data-category="category">Почвопокровные растения <span> 9</span></li>
                            <li class="catalog-categories__item" data-category="category">Почвопокровные растения <span> 9</span></li>
                            <li class="catalog-categories__item" data-category="category">Почвопокровные растения <span> 9</span></li>
                            <li class="catalog-categories__item" data-category="category">Почвопокровные растения <span> 9</span></li>
                            <li class="catalog-categories__item" data-category="category">Почвопокровные растения <span> 9</span></li>
                            <li class="catalog-categories__item" data-category="category">Почвопокровные растения <span> 9</span></li>
                        </ul>
                        <button class="catalog-categories__button" type="button">
                            <span class="catalog-categories__button__show">Развернуть каталог</span>
                            <span class="catalog-categories__button__hide">Свернуть каталог</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10L12 15L17 10" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>

                </div>
                <div class="product-page__info">
                    <section class="main-product product discount only-order" data-id="1">
                        <div class="main-product__gallery">
                            <div class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="product-img" src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                        <div class="zoom-img">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                        <div class="zoom-img">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                        <div class="zoom-img">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                        <div class="zoom-img">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                        <div class="zoom-img">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                    </div>
                                </div>
                                <div class="product-favorite heart-btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.612 5.41452C19.1722 4.96607 18.65 4.61034 18.0752 4.36763C17.5005 4.12492 16.8844 4 16.2623 4C15.6401 4 15.0241 4.12492 14.4493 4.36763C13.8746 4.61034 13.3524 4.96607 12.9126 5.41452L11.9998 6.34476L11.087 5.41452C10.1986 4.50912 8.99364 4.00047 7.73725 4.00047C6.48085 4.00047 5.27591 4.50912 4.38751 5.41452C3.4991 6.31992 3 7.5479 3 8.82833C3 10.1088 3.4991 11.3367 4.38751 12.2421L5.30029 13.1724L11.9998 20L18.6992 13.1724L19.612 12.2421C20.0521 11.7939 20.4011 11.2617 20.6393 10.676C20.8774 10.0902 21 9.46237 21 8.82833C21 8.19428 20.8774 7.56645 20.6393 6.9807C20.4011 6.39494 20.0521 5.86275 19.612 5.41452V5.41452Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </div>
                            <div thumbsSlider="" class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-product__info">
                            <h1 class="main-product__name product-name">Медуница гибридная Опал</h1>
                            <div class="main-product__price-container">
                                <div>
                                    <p class="main-product__price product-price">550 ₽/шт</p>
                                    <p class="main-product__old-price">15 000 ₽</p>
                                    <p class="main-product__discount">-15%</p>
                                </div>
                                <p class="main-product__discount-time">Действует до 23.08.2023</p>
                            </div>
                            <div class="product-rating-container">
                                <div class="product-rating" data-rating='1.5'>
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
                                    4.0
                                </p>
                            </div>
                            <p class="main-product__status product-status">В наличии</p>
                            <div class="main-product__buttons">
                                <?php
                                require "assets/views/includes/loading.php";
                                ?>
                                <button class="main-product__buy-now click-to-buy-btn" type="button">купить<span> сейчас</span></button>
                                <button class="main-product__order click-to-buy-btn" type="button">Заказать</button>
                                <button class="main-product__buy add-to-cart-btn">
                                    <span>Заказать</span>
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
                            <p class="main-product__text first">Артикул: <span>medunica-opal</span></p>
                            <!-- <p class="main-product__text">Подсорт: <span>medunica</span></p> -->
                            <div class="main-product__variants">
                                <a href="#" class="variant active">
                                    <p class="variant__name">Контейнер: C2</p>
                                    <p class="variant__price">550 ₽/шт</p>
                                </a>
                                <a href="#" class="variant">
                                    <p class="variant__name">Контейнер: C2</p>
                                    <p class="variant__price">550 ₽/шт</p>
                                </a>
                            </div>
                            <p class="main-product__zone">ЗОНА 5</p>
                            <div class="main-product__icons">
                                <div class="main-product__icon-row">
                                    <div class="icon-item">
                                        <img src="resourses/sun.svg" alt="conditions">
                                        <div>
                                            <p>Неприхотлив в уходе</p>
                                        </div>
                                    </div>
                                    <div class="icon-item">
                                        <img src="resourses/sun.svg" alt="conditions">
                                        <div>
                                            <p>Неприхотлив в уходе</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-product__icon-row">
                                    <div class="icon-item">
                                        <img src="resourses/sun.svg" alt="conditions">
                                        <div>
                                            <p>Неприхотлив в уходе</p>
                                        </div>
                                    </div>
                                    <div class="icon-item">
                                        <img src="resourses/sun.svg" alt="conditions">
                                        <div>
                                            <p>Неприхотлив в уходе</p>
                                        </div>
                                    </div>
                                    <div class="icon-item">
                                        <img src="resourses/sun.svg" alt="conditions">
                                        <div>
                                            <p>Неприхотлив в уходе</p>
                                        </div>
                                    </div>
                                    <div class="icon-item">
                                        <img src="resourses/sun.svg" alt="conditions">
                                        <div>
                                            <p>Лёгкий уход</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-product__icon-row">
                                    <div class="icon-item">
                                        <img src="resourses/sun.svg" alt="conditions">
                                        <div>
                                            <p>Неприхотлив в уходе</p>
                                        </div>
                                    </div>
                                    <div class="icon-item">
                                        <img src="resourses/sun.svg" alt="conditions">
                                        <div>
                                            <p>Только солнечные места при низкой температуре</p>
                                        </div>
                                    </div>
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
                                            <p class="tabs__header__item" data-tab="2">Размер и транспортировка</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <p class="tabs__header__item" data-tab="3">Условия оплаты и доставки</p>
                                        </div>
                                        <div class="swiper-slide">
                                            <p class="tabs__header__item" data-tab="4">Условные обозначения</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="tabs__tab">
                                        <h5>Описание:</h5>
                                        <p>Медуница относится к группе низкорослых цветов. Высота растения не превышает 30 сантиметров. Ствол плотный, обильно покрыт мелкими ворсинками. Корневая система хорошо развита. Лиственные пластины двух видов. Нижние — зеленые со светлыми вкраплениями, а верхние – однотонные. Пластины сидячие. С обеих сторон они покрыты ворсинками. </p>
                                        <h5>Листья</h5>
                                        <p>Листья большие длинные, овальные, зеленые с ярко выраженными серебристыми пятнами. Декоративны в течение всего сезона.</p>
                                        <h5>Цветки</h5>
                                        <p>Отличительной чертой медуницы Опал являются голубоватые листики, на одном стебельке можно наблюдать бутоны разного оттенка, но в основном они белые.</p>
                                        <h5>Период цветения</h5>
                                        <p>Апрель-май.</p>
                                        <h5>Требования</h5>
                                        <p>Предпочитает полутень, растение влаголюбиво. Лучше развивается на супесчаных или суглинистых, щелочных или слабокислых богатых почвах.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tabs__tab">
                                        <h5>Размер растения:</h5>
                                        <p>15-30 см.</p>
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
                                            <div>
                                                <p><span>РП, СП, ОП</span> - это внутренние обозначения.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tabs__tab">
                                        <h5>Доставка:</h5>
                                        <p>Самовывоз. Есть две площадки, с которых можно забрать товар:</p>
                                        <div class="address-item">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2493 25.8682L19.9997 34.1668L11.7501 25.8682C7.19398 21.285 7.19398 13.8541 11.7501 9.2709C16.3062 4.68769 23.6931 4.68769 28.2493 9.2709C32.8054 13.8541 32.8054 21.285 28.2493 25.8682ZM19.9997 23.3335C23.2213 23.3335 25.833 20.7218 25.833 17.5002C25.833 14.2785 23.2213 11.6668 19.9997 11.6668C16.778 11.6668 14.1663 14.2785 14.1663 17.5002C14.1663 20.7218 16.778 23.3335 19.9997 23.3335Z" fill="#3E683A" />
                                                <path d="M19.9997 34.1668L18.9359 35.2243C19.2174 35.5076 19.6003 35.6668 19.9997 35.6668C20.399 35.6668 20.7819 35.5076 21.0635 35.2243L19.9997 34.1668ZM28.2493 25.8682L29.3131 26.9257L28.2493 25.8682ZM11.7501 25.8682L12.8139 24.8107L11.7501 25.8682ZM11.7501 9.2709L10.6863 8.21339V8.21339L11.7501 9.2709ZM28.2493 9.2709L29.3131 8.21339V8.21339L28.2493 9.2709ZM21.0635 35.2243L29.3131 26.9257L27.1855 24.8107L18.9359 33.1093L21.0635 35.2243ZM10.6863 26.9257L18.9359 35.2243L21.0635 33.1093L12.8139 24.8107L10.6863 26.9257ZM10.6863 8.21339C5.54858 13.3817 5.54858 21.7574 10.6863 26.9257L12.8139 24.8107C8.83938 20.8125 8.83938 14.3266 12.8139 10.3284L10.6863 8.21339ZM29.3131 8.21339C24.1704 3.0402 15.8289 3.0402 10.6863 8.21339L12.8139 10.3284C16.7835 6.33519 23.2158 6.33519 27.1855 10.3284L29.3131 8.21339ZM29.3131 26.9257C34.4508 21.7574 34.4508 13.3817 29.3131 8.21339L27.1855 10.3284C31.16 14.3266 31.16 20.8125 27.1855 24.8107L29.3131 26.9257ZM24.333 17.5002C24.333 19.8934 22.3929 21.8335 19.9997 21.8335V24.8335C24.0498 24.8335 27.333 21.5502 27.333 17.5002H24.333ZM19.9997 13.1668C22.3929 13.1668 24.333 15.1069 24.333 17.5002H27.333C27.333 13.4501 24.0498 10.1668 19.9997 10.1668V13.1668ZM15.6663 17.5002C15.6663 15.1069 17.6064 13.1668 19.9997 13.1668V10.1668C15.9496 10.1668 12.6663 13.4501 12.6663 17.5002H15.6663ZM19.9997 21.8335C17.6064 21.8335 15.6663 19.8934 15.6663 17.5002H12.6663C12.6663 21.5502 15.9496 24.8335 19.9997 24.8335V21.8335Z" fill="#3E683A" />
                                            </svg>
                                            <div>
                                                <h5>г. Санкт-Петербург, Всеволожский район, 11 км Новоприозерского шоссе</h5>
                                                <a class="link" href="#">
                                                    <span>Схема проезда</span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 17L15 12L10 7" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2493 25.8682L19.9997 34.1668L11.7501 25.8682C7.19398 21.285 7.19398 13.8541 11.7501 9.2709C16.3062 4.68769 23.6931 4.68769 28.2493 9.2709C32.8054 13.8541 32.8054 21.285 28.2493 25.8682ZM19.9997 23.3335C23.2213 23.3335 25.833 20.7218 25.833 17.5002C25.833 14.2785 23.2213 11.6668 19.9997 11.6668C16.778 11.6668 14.1663 14.2785 14.1663 17.5002C14.1663 20.7218 16.778 23.3335 19.9997 23.3335Z" fill="#3E683A" />
                                                <path d="M19.9997 34.1668L18.9359 35.2243C19.2174 35.5076 19.6003 35.6668 19.9997 35.6668C20.399 35.6668 20.7819 35.5076 21.0635 35.2243L19.9997 34.1668ZM28.2493 25.8682L29.3131 26.9257L28.2493 25.8682ZM11.7501 25.8682L12.8139 24.8107L11.7501 25.8682ZM11.7501 9.2709L10.6863 8.21339V8.21339L11.7501 9.2709ZM28.2493 9.2709L29.3131 8.21339V8.21339L28.2493 9.2709ZM21.0635 35.2243L29.3131 26.9257L27.1855 24.8107L18.9359 33.1093L21.0635 35.2243ZM10.6863 26.9257L18.9359 35.2243L21.0635 33.1093L12.8139 24.8107L10.6863 26.9257ZM10.6863 8.21339C5.54858 13.3817 5.54858 21.7574 10.6863 26.9257L12.8139 24.8107C8.83938 20.8125 8.83938 14.3266 12.8139 10.3284L10.6863 8.21339ZM29.3131 8.21339C24.1704 3.0402 15.8289 3.0402 10.6863 8.21339L12.8139 10.3284C16.7835 6.33519 23.2158 6.33519 27.1855 10.3284L29.3131 8.21339ZM29.3131 26.9257C34.4508 21.7574 34.4508 13.3817 29.3131 8.21339L27.1855 10.3284C31.16 14.3266 31.16 20.8125 27.1855 24.8107L29.3131 26.9257ZM24.333 17.5002C24.333 19.8934 22.3929 21.8335 19.9997 21.8335V24.8335C24.0498 24.8335 27.333 21.5502 27.333 17.5002H24.333ZM19.9997 13.1668C22.3929 13.1668 24.333 15.1069 24.333 17.5002H27.333C27.333 13.4501 24.0498 10.1668 19.9997 10.1668V13.1668ZM15.6663 17.5002C15.6663 15.1069 17.6064 13.1668 19.9997 13.1668V10.1668C15.9496 10.1668 12.6663 13.4501 12.6663 17.5002H15.6663ZM19.9997 21.8335C17.6064 21.8335 15.6663 19.8934 15.6663 17.5002H12.6663C12.6663 21.5502 15.9496 24.8335 19.9997 24.8335V21.8335Z" fill="#3E683A" />
                                            </svg>
                                            <div>
                                                <h5>Сестрорецк, Приморское шоссе, 311</h5>
                                                <a class="link" href="#">
                                                    <span>Схема проезда</span>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 17L15 12L10 7" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="more-indent max-700">Доставка курьером осуществляется посредством выбранной клиентом ТК. Доставка оплачивается клиентом отдельно, или включается в счёт при согласовании заказа.</p>
                                        <h5 class="big-indent">Оплата:</h5>
                                        <ul>
                                            <li>Наличными при самовывозе или покупке офлайн в нашем садовом центре.</li>
                                            <li>Картой онлайн</li>
                                            <li>Оплата по счету для юр. лиц</li>
                                        </ul>
                                        <p class="more-indent black">Условия оплаты для гос.подрядов согласовываются индивидуально.</p>
                                        <a href="#" class="link more-indent">
                                            <span>Раздел доставки и оплаты</span>
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 17L15 12L10 7" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="tabs__tab">
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
                                                <img class="zone-container__img" src="resourses/zone-map.webp" alt="карта зон">
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
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_367_7181)">
                                                                <circle cx="16" cy="16" r="6.5" stroke="#24282E" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M32 16.3532L38.9946 16.5034C38.9982 16.3361 39 16.1682 39 16C39 15.8318 38.9982 15.6639 38.9946 15.4966L32 15.6468V16.3532ZM29 16.2888V15.7112L23.9981 15.8186C23.9993 15.8787 24 15.9391 24 16C24 16.0609 23.9993 16.1213 23.9981 16.1814L29 16.2888ZM32 12.0787L38.3458 10.531C38.2663 10.205 38.1799 9.88175 38.0866 9.56137L32 11.3327V12.0787ZM29 12.2058V12.8104L23.773 14.0853C23.7457 13.9734 23.7161 13.8626 23.6841 13.7528L29 12.2058ZM32 7.22723L36.1686 4.93544C36.0073 4.64195 35.8397 4.35236 35.6661 4.06685L32 6.29615V7.22723ZM29 8.12042V8.87654L23.0241 12.1619C22.9682 12.0602 22.91 11.9597 22.8496 11.8604L29 8.12042ZM32 0.683542L32.6144 0.0952034C32.383 -0.146438 32.1464 -0.38304 31.9048 -0.614424L31.3165 0H32V0.683542ZM28.4438 3H29V3.55619L27.1974 5.28228L21.7804 10.4694C21.6989 10.3843 21.6157 10.3011 21.5306 10.2196L26.7177 4.80261L28.4438 3ZM25.7038 0L27.9331 -3.66607C27.6476 -3.83969 27.358 -4.00726 27.0646 -4.16862L24.7728 0H25.7038ZM23.1235 3H23.8796L20.1396 9.15036C20.0403 9.08997 19.9398 9.03181 19.8381 8.9759L23.1235 3ZM20.6673 0L22.4386 -6.08663C22.1182 -6.17987 21.795 -6.26632 21.469 -6.34583L19.9213 0H20.6673ZM19.1896 3H19.7942L18.2472 8.31586C18.1374 8.28392 18.0266 8.25428 17.9147 8.22699L19.1896 3ZM16.3532 0L16.5034 -6.9946C16.3361 -6.99819 16.1682 -7 16 -7C15.8318 -7 15.6639 -6.99819 15.4966 -6.9946L15.6468 0H16.3532ZM15.7112 3H16.2888L16.1814 8.00194C16.1213 8.00065 16.0609 8 16 8C15.9391 8 15.8787 8.00065 15.8186 8.00194L15.7112 3ZM12.0787 0L10.531 -6.34583C10.205 -6.26632 9.88175 -6.17987 9.56137 -6.08663L11.3327 0H12.0787ZM12.2058 3H12.8104L14.0853 8.22699C13.9734 8.25428 13.8626 8.28392 13.7528 8.31586L12.2058 3ZM7.22723 0L4.93544 -4.16861C4.64195 -4.00726 4.35236 -3.83969 4.06685 -3.66607L6.29615 0H7.22723ZM8.12042 3H8.87654L12.1619 8.9759C12.0602 9.03181 11.9597 9.08997 11.8604 9.15036L8.12042 3ZM0.683542 0L0.0952034 -0.614422C-0.146438 -0.383039 -0.38304 -0.146436 -0.614424 0.0952058L0 0.683547V0H0.683542ZM3 3.55619V3H3.55619L5.28228 4.80261L10.4694 10.2196C10.3843 10.3011 10.3011 10.3843 10.2196 10.4694L4.80261 5.28228L3 3.55619ZM0 6.29615L-3.66607 4.06685C-3.83969 4.35236 -4.00726 4.64195 -4.16862 4.93545L0 7.22723V6.29615ZM3 8.87654V8.12042L9.15036 11.8604C9.08997 11.9597 9.03181 12.0602 8.9759 12.1619L3 8.87654ZM0 11.3327L-6.08663 9.56138C-6.17987 9.88176 -6.26632 10.205 -6.34583 10.531L0 12.0787V11.3327ZM3 12.8104V12.2058L8.31586 13.7528C8.28392 13.8626 8.25428 13.9734 8.22699 14.0853L3 12.8104ZM0 15.6468L-6.9946 15.4966C-6.99819 15.6639 -7 15.8318 -7 16C-7 16.1682 -6.99819 16.3361 -6.9946 16.5034L0 16.3532V15.6468ZM3 16.2888V15.7112L8.00194 15.8186C8.00065 15.8787 8 15.9391 8 16C8 16.0609 8.00065 16.1213 8.00194 16.1814L3 16.2888ZM0 19.9213L-6.34583 21.469C-6.26632 21.795 -6.17986 22.1182 -6.08663 22.4386L0 20.6673V19.9213ZM3 19.7942V19.1896L8.22699 17.9147C8.25428 18.0266 8.28392 18.1374 8.31586 18.2472L3 19.7942ZM0 24.7728L-4.16861 27.0646C-4.00726 27.358 -3.83969 27.6476 -3.66607 27.9331L0 25.7038V24.7728ZM3 23.8796V23.1235L8.9759 19.8381C9.03181 19.9398 9.08997 20.0403 9.15036 20.1396L3 23.8796ZM0 31.3165L-0.614422 31.9048C-0.383039 32.1464 -0.146436 32.383 0.0952053 32.6144L0.683544 32H0V31.3165ZM3.55619 29H3V28.4438L4.80261 26.7177L10.2196 21.5306C10.3011 21.6157 10.3843 21.6989 10.4694 21.7804L5.28228 27.1974L3.55619 29ZM6.29615 32L4.06685 35.6661C4.35236 35.8397 4.64195 36.0073 4.93545 36.1686L7.22723 32H6.29615ZM8.87654 29H8.12042L11.8604 22.8496C11.9597 22.91 12.0602 22.9682 12.1619 23.0241L8.87654 29ZM11.3327 32L9.56138 38.0866C9.88176 38.1799 10.205 38.2663 10.531 38.3458L12.0787 32H11.3327ZM12.8104 29H12.2058L13.7528 23.6841C13.8626 23.7161 13.9734 23.7457 14.0853 23.773L12.8104 29ZM15.6468 32L15.4966 38.9946C15.6639 38.9982 15.8318 39 16 39C16.1682 39 16.3361 38.9982 16.5034 38.9946L16.3532 32H15.6468ZM16.2888 29H15.7112L15.8186 23.9981C15.8787 23.9993 15.9391 24 16 24C16.0609 24 16.1213 23.9993 16.1814 23.9981L16.2888 29ZM19.9213 32L21.469 38.3458C21.795 38.2663 22.1182 38.1799 22.4386 38.0866L20.6673 32H19.9213ZM19.7942 29H19.1896L17.9147 23.773C18.0266 23.7457 18.1374 23.7161 18.2472 23.6841L19.7942 29ZM24.7728 32L27.0646 36.1686C27.358 36.0073 27.6476 35.8397 27.9331 35.6661L25.7038 32H24.7728ZM23.8796 29H23.1235L19.8381 23.0241C19.9398 22.9682 20.0403 22.91 20.1396 22.8496L23.8796 29ZM31.3165 32L31.9048 32.6144C32.1464 32.383 32.383 32.1464 32.6144 31.9048L32 31.3165V32H31.3165ZM29 28.4438V29H28.4438L26.7177 27.1974L21.5306 21.7804C21.6157 21.6989 21.6989 21.6157 21.7804 21.5306L27.1974 26.7177L29 28.4438ZM32 25.7038L35.6661 27.9331C35.8397 27.6476 36.0073 27.358 36.1686 27.0646L32 24.7728V25.7038ZM29 23.1235V23.8796L22.8496 20.1396C22.91 20.0403 22.9682 19.9398 23.0241 19.8381L29 23.1235ZM29 19.7942L23.6841 18.2472C23.7161 18.1374 23.7457 18.0266 23.773 17.9147L29 19.1896V19.7942ZM32 20.6673V19.9213L38.3458 21.469C38.2663 21.795 38.1799 22.1182 38.0866 22.4386L32 20.6673Z" fill="#24282E" />
                                                            </g>
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                            <defs>
                                                                <clipPath id="clip0_367_7181">
                                                                    <rect width="32" height="32" rx="2" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <p class="convention-item__text">В солнечном месте</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4.84 21H4.44C4.44 21.2209 4.61909 21.4 4.84 21.4V21ZM4.84 12.36V11.96C4.61909 11.96 4.44 12.1391 4.44 12.36H4.84ZM6.112 12.36L6.44544 12.1391C6.37135 12.0272 6.24614 11.96 6.112 11.96V12.36ZM10.366 18.78L10.0326 19.0009C10.13 19.1481 10.3124 19.2139 10.4814 19.163C10.6504 19.1121 10.766 18.9565 10.766 18.78H10.366ZM10.366 12.36V11.96C10.1451 11.96 9.966 12.1391 9.966 12.36H10.366ZM11.638 12.36H12.038C12.038 12.1391 11.8589 11.96 11.638 11.96V12.36ZM11.638 21V21.4C11.8589 21.4 12.038 21.2209 12.038 21H11.638ZM10.366 21L10.0325 21.2208C10.1065 21.3327 10.2318 21.4 10.366 21.4V21ZM6.112 14.574L6.44554 14.3532C6.34811 14.206 6.16572 14.1401 5.99671 14.191C5.82769 14.2419 5.712 14.3975 5.712 14.574H6.112ZM6.112 21V21.4C6.33291 21.4 6.512 21.2209 6.512 21H6.112ZM5.24 21V12.36H4.44V21H5.24ZM4.84 12.76H6.112V11.96H4.84V12.76ZM5.77856 12.5809L10.0326 19.0009L10.6994 18.5591L6.44544 12.1391L5.77856 12.5809ZM10.766 18.78V12.36H9.966V18.78H10.766ZM10.366 12.76H11.638V11.96H10.366V12.76ZM11.238 12.36V21H12.038V12.36H11.238ZM11.638 20.6H10.366V21.4H11.638V20.6ZM10.6995 20.7792L6.44554 14.3532L5.77846 14.7948L10.0325 21.2208L10.6995 20.7792ZM5.712 14.574V21H6.512V14.574H5.712ZM6.112 20.6H4.84V21.4H6.112V20.6ZM13.3127 21H12.9127C12.9127 21.2209 13.0917 21.4 13.3127 21.4V21ZM13.3127 12.36V11.96C13.0917 11.96 12.9127 12.1391 12.9127 12.36H13.3127ZM17.1167 12.372L17.0909 12.7714L17.1038 12.7718L17.1167 12.372ZM17.4707 12.408L17.4003 12.8018L17.4081 12.8031L17.4707 12.408ZM18.6707 12.9L18.4232 13.2143L18.4251 13.2157L18.6707 12.9ZM19.3967 13.854L19.7659 13.7002L19.3967 13.854ZM18.6707 17.358L18.4251 17.0423L18.4232 17.0437L18.6707 17.358ZM17.4707 17.85L17.5272 18.246L17.5332 18.2451L17.4707 17.85ZM17.1107 17.886L17.0857 17.4868L17.0849 17.4868L17.1107 17.886ZM14.5667 17.898V17.498C14.3457 17.498 14.1667 17.6771 14.1667 17.898H14.5667ZM14.5667 21V21.4C14.7876 21.4 14.9667 21.2209 14.9667 21H14.5667ZM14.5667 16.71H14.1667C14.1667 16.9309 14.3457 17.11 14.5667 17.11V16.71ZM17.0207 16.698L16.9888 16.2993L16.9874 16.2994L17.0207 16.698ZM17.3027 16.656L17.3913 17.0461L17.3939 17.0454L17.3027 16.656ZM17.9207 16.326L18.2071 16.6053L18.2105 16.6017L17.9207 16.326ZM18.2567 15.762L18.6375 15.8842L18.2567 15.762ZM18.2567 14.496L17.8758 14.6182L17.8765 14.6203L18.2567 14.496ZM17.9207 13.938L17.6308 14.2137L17.6343 14.2172L17.9207 13.938ZM17.3027 13.602L17.1974 13.9879C17.202 13.9892 17.2067 13.9903 17.2114 13.9914L17.3027 13.602ZM17.0207 13.554L16.9874 13.9526L16.9888 13.9527L17.0207 13.554ZM14.5667 13.542V13.142C14.3457 13.142 14.1667 13.3211 14.1667 13.542H14.5667ZM13.7127 21V12.36H12.9127V21H13.7127ZM13.3127 12.76H16.8047V11.96H13.3127V12.76ZM16.8047 12.76C16.8771 12.76 16.9718 12.7635 17.0909 12.7712L17.1424 11.9728C17.0135 11.9645 16.9003 11.96 16.8047 11.96V12.76ZM17.1038 12.7718C17.2102 12.7752 17.3089 12.7854 17.4003 12.8018L17.541 12.0142C17.4084 11.9906 17.2711 11.9768 17.1296 11.9722L17.1038 12.7718ZM17.4081 12.8031C17.8336 12.8705 18.1664 13.012 18.4232 13.2143L18.9181 12.5857C18.5349 12.284 18.0677 12.0975 17.5332 12.0129L17.4081 12.8031ZM18.4251 13.2157C18.6938 13.4248 18.8936 13.6867 19.0274 14.0078L19.7659 13.7002C19.5797 13.2533 19.2955 12.8792 18.9162 12.5843L18.4251 13.2157ZM19.0274 14.0078C19.1649 14.3378 19.2367 14.7087 19.2367 15.126H20.0367C20.0367 14.6153 19.9484 14.1382 19.7659 13.7002L19.0274 14.0078ZM19.2367 15.126C19.2367 15.5478 19.1647 15.9206 19.0274 16.2502L19.7659 16.5578C19.9486 16.1194 20.0367 15.6402 20.0367 15.126H19.2367ZM19.0274 16.2502C18.8936 16.5713 18.6938 16.8332 18.4251 17.0423L18.9162 17.6737C19.2955 17.3788 19.5797 17.0047 19.7659 16.5578L19.0274 16.2502ZM18.4232 17.0437C18.1664 17.246 17.8336 17.3875 17.4081 17.4549L17.5332 18.2451C18.0677 18.1605 18.5349 17.974 18.9181 17.6723L18.4232 17.0437ZM17.4141 17.454C17.3139 17.4683 17.2045 17.4794 17.0857 17.4868L17.1356 18.2852C17.2728 18.2766 17.4035 18.2637 17.5272 18.246L17.4141 17.454ZM17.0849 17.4868C16.9654 17.4945 16.8727 17.498 16.8047 17.498V18.298C16.8966 18.298 17.008 18.2935 17.1364 18.2852L17.0849 17.4868ZM16.8047 17.498H14.5667V18.298H16.8047V17.498ZM14.1667 17.898V21H14.9667V17.898H14.1667ZM14.5667 20.6H13.3127V21.4H14.5667V20.6ZM14.5667 17.11H16.7567V16.31H14.5667V17.11ZM16.7567 17.11C16.8497 17.11 16.949 17.1054 17.0539 17.0966L16.9874 16.2994C16.9003 16.3066 16.8236 16.31 16.7567 16.31V17.11ZM17.0526 17.0967C17.1696 17.0874 17.2827 17.0707 17.3913 17.0461L17.214 16.2659C17.1466 16.2813 17.0717 16.2926 16.9888 16.2993L17.0526 17.0967ZM17.3939 17.0454C17.7108 16.9712 17.989 16.8289 18.2071 16.6052L17.6343 16.0468C17.5403 16.1431 17.4065 16.2208 17.2114 16.2666L17.3939 17.0454ZM18.2105 16.6017C18.4073 16.3948 18.5508 16.1545 18.6375 15.8842L17.8758 15.6398C17.8265 15.7935 17.746 15.9292 17.6308 16.0503L18.2105 16.6017ZM18.6375 15.8842C18.7176 15.6347 18.7587 15.3815 18.7587 15.126H17.9587C17.9587 15.2945 17.9317 15.4653 17.8758 15.6398L18.6375 15.8842ZM18.7587 15.126C18.7587 14.8704 18.7175 14.6185 18.6369 14.3717L17.8765 14.6203C17.9318 14.7895 17.9587 14.9576 17.9587 15.126H18.7587ZM18.6375 14.3738C18.5506 14.1026 18.4061 13.8629 18.2071 13.6588L17.6343 14.2172C17.7472 14.3331 17.8268 14.4654 17.8758 14.6182L18.6375 14.3738ZM18.2105 13.6623C17.9925 13.4332 17.7132 13.2874 17.3939 13.2126L17.2114 13.9914C17.4041 14.0366 17.5368 14.1148 17.6308 14.2137L18.2105 13.6623ZM17.4079 13.2161C17.2937 13.1849 17.1749 13.1651 17.0526 13.1553L16.9888 13.9527C17.0664 13.9589 17.1356 13.9711 17.1974 13.9879L17.4079 13.2161ZM17.0539 13.1554C16.949 13.1466 16.8497 13.142 16.7567 13.142V13.942C16.8236 13.942 16.9003 13.9454 16.9874 13.9526L17.0539 13.1554ZM16.7567 13.142H14.5667V13.942H16.7567V13.142ZM14.1667 13.542V16.71H14.9667V13.542H14.1667ZM20.8361 21H20.4361C20.4361 21.2209 20.6152 21.4 20.8361 21.4V21ZM20.8361 12.36V11.96C20.6152 11.96 20.4361 12.1391 20.4361 12.36H20.8361ZM22.0901 12.36H22.4901C22.4901 12.1391 22.311 11.96 22.0901 11.96V12.36ZM22.0901 16.392H21.6901C21.6901 16.5577 21.7923 16.7063 21.9471 16.7656C22.1018 16.8248 22.2771 16.7825 22.3878 16.6591L22.0901 16.392ZM25.7081 12.36V11.96C25.5945 11.96 25.4862 12.0083 25.4104 12.0929L25.7081 12.36ZM27.2681 12.36L27.5645 12.6286C27.6707 12.5113 27.6979 12.3425 27.6338 12.1979C27.5696 12.0532 27.4263 11.96 27.2681 11.96V12.36ZM23.4461 16.578L23.1497 16.3094C23.0103 16.4632 23.0117 16.698 23.1529 16.8501L23.4461 16.578ZM27.5501 21V21.4C27.7092 21.4 27.8531 21.3057 27.9167 21.1599C27.9803 21.0141 27.9515 20.8445 27.8433 20.7279L27.5501 21ZM25.9421 21L25.6496 21.2729C25.7253 21.354 25.8312 21.4 25.9421 21.4V21ZM22.0901 16.872L22.3825 16.5991C22.2704 16.479 22.0963 16.4396 21.9434 16.4999C21.7906 16.5601 21.6901 16.7077 21.6901 16.872H22.0901ZM22.0901 21V21.4C22.311 21.4 22.4901 21.2209 22.4901 21H22.0901ZM21.2361 21V12.36H20.4361V21H21.2361ZM20.8361 12.76H22.0901V11.96H20.8361V12.76ZM21.6901 12.36V16.392H22.4901V12.36H21.6901ZM22.3878 16.6591L26.0058 12.6271L25.4104 12.0929L21.7924 16.1249L22.3878 16.6591ZM25.7081 12.76H27.2681V11.96H25.7081V12.76ZM26.9717 12.0914L23.1497 16.3094L23.7425 16.8466L27.5645 12.6286L26.9717 12.0914ZM23.1529 16.8501L27.2569 21.2721L27.8433 20.7279L23.7393 16.3059L23.1529 16.8501ZM27.5501 20.6H25.9421V21.4H27.5501V20.6ZM26.2345 20.7271L22.3825 16.5991L21.7976 17.1449L25.6496 21.2729L26.2345 20.7271ZM21.6901 16.872V21H22.4901V16.872H21.6901ZM22.0901 20.6H20.8361V21.4H22.0901V20.6Z" fill="#24282E" />
                                                            <path d="M4 7H28" stroke="#24282E" />
                                                            <path d="M4 25H28" stroke="#24282E" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Требует плодородных почв и подкормок</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_367_7495)">
                                                                <circle cx="16" cy="16" r="6.5" stroke="#24282E" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.9946 16.5034L32 16.3532V15.6468L38.9946 15.4966C38.9982 15.6639 39 15.8318 39 16C39 16.1682 38.9982 16.3361 38.9946 16.5034ZM38.3458 10.531L32 12.0787V11.3327L38.0866 9.56137C38.1799 9.88175 38.2663 10.205 38.3458 10.531ZM36.1686 4.93544L32 7.22723V6.29615L35.6661 4.06685C35.8397 4.35236 36.0073 4.64195 36.1686 4.93544ZM32.6144 0.0952034L32 0.683542V0H31.3165L31.9048 -0.614424C32.1464 -0.38304 32.383 -0.146438 32.6144 0.0952034ZM27.9331 -3.66607L25.7038 0H24.7728L27.0646 -4.16862C27.358 -4.00726 27.6476 -3.83969 27.9331 -3.66607ZM22.4386 -6.08663L20.6673 0H19.9213L21.469 -6.34583C21.795 -6.26632 22.1182 -6.17987 22.4386 -6.08663ZM19.7942 3H19.1896L17.9147 8.22699C18.0266 8.25428 18.1374 8.28392 18.2472 8.31586L19.7942 3ZM16.5034 -6.9946L16.3532 0H15.6468L15.4966 -6.9946C15.6639 -6.99819 15.8318 -7 16 -7C16.1682 -7 16.3361 -6.99819 16.5034 -6.9946ZM16.1814 8.00194L16.2888 3H15.7112L15.8186 8.00194C15.8787 8.00065 15.9391 8 16 8C16.0609 8 16.1213 8.00065 16.1814 8.00194ZM10.531 -6.34583L12.0787 0H11.3327L9.56137 -6.08663C9.88175 -6.17987 10.205 -6.26632 10.531 -6.34583ZM12.8104 3H12.2058L13.7528 8.31586C13.8626 8.28392 13.9734 8.25428 14.0853 8.22699L12.8104 3ZM4.93544 -4.16861L7.22723 0H6.29615L4.06685 -3.66607C4.35236 -3.83969 4.64195 -4.00726 4.93544 -4.16861ZM8.87654 3H8.12042L11.8604 9.15036C11.9597 9.08997 12.0602 9.03181 12.1619 8.9759L8.87654 3ZM0.0952034 -0.614422L0.683542 0H0V0.683547L-0.614424 0.0952058C-0.38304 -0.146436 -0.146438 -0.383039 0.0952034 -0.614422ZM3 3V3.55619L4.80261 5.28228L10.2196 10.4694C10.3011 10.3843 10.3843 10.3011 10.4694 10.2196L5.28228 4.80261L3.55619 3H3ZM-3.66607 4.06685L0 6.29615V7.22723L-4.16862 4.93545C-4.00726 4.64195 -3.83969 4.35236 -3.66607 4.06685ZM3 8.12042V8.87654L8.9759 12.1619C9.03181 12.0602 9.08997 11.9597 9.15036 11.8604L3 8.12042ZM-6.08663 9.56138L0 11.3327V12.0787L-6.34583 10.531C-6.26632 10.205 -6.17987 9.88176 -6.08663 9.56138ZM3 12.2058V12.8104L8.22699 14.0853C8.25428 13.9734 8.28392 13.8626 8.31586 13.7528L3 12.2058ZM-6.9946 15.4966L0 15.6468V16.3532L-6.9946 16.5034C-6.99819 16.3361 -7 16.1682 -7 16C-7 15.8318 -6.99819 15.6639 -6.9946 15.4966ZM8.00194 15.8186L3 15.7112V16.2888L8.00194 16.1814C8.00065 16.1213 8 16.0609 8 16C8 15.9391 8.00065 15.8787 8.00194 15.8186ZM-6.34583 21.469L0 19.9213V20.6673L-6.08663 22.4386C-6.17986 22.1182 -6.26632 21.795 -6.34583 21.469ZM3 19.1896V19.7942L8.31586 18.2472C8.28392 18.1374 8.25428 18.0266 8.22699 17.9147L3 19.1896ZM-4.16861 27.0646L0 24.7728V25.7038L-3.66607 27.9331C-3.83969 27.6476 -4.00726 27.358 -4.16861 27.0646ZM3 23.1235V23.8796L9.15036 20.1396C9.08997 20.0403 9.03181 19.9398 8.9759 19.8381L3 23.1235ZM-0.614422 31.9048L0 31.3165V32H0.683544L0.0952053 32.6144C-0.146436 32.383 -0.383039 32.1464 -0.614422 31.9048ZM3 29H3.55619L5.28228 27.1974L10.4694 21.7804C10.3843 21.6989 10.3011 21.6157 10.2196 21.5306L4.80261 26.7177L3 28.4438V29ZM4.06685 35.6661L6.29615 32H7.22723L4.93545 36.1686C4.64195 36.0073 4.35236 35.8397 4.06685 35.6661ZM8.12042 29H8.87654L12.1619 23.0241C12.0602 22.9682 11.9597 22.91 11.8604 22.8496L8.12042 29ZM9.56138 38.0866L11.3327 32H12.0787L10.531 38.3458C10.205 38.2663 9.88176 38.1799 9.56138 38.0866ZM12.2058 29H12.8104L14.0853 23.773C13.9734 23.7457 13.8626 23.7161 13.7528 23.6841L12.2058 29ZM15.4966 38.9946L15.6468 32H16.3532L16.5034 38.9946C16.3361 38.9982 16.1682 39 16 39C15.8318 39 15.6639 38.9982 15.4966 38.9946ZM15.8186 23.9981L15.7112 29H16.2888L16.1814 23.9981C16.1213 23.9993 16.0609 24 16 24C15.9391 24 15.8787 23.9993 15.8186 23.9981ZM21.469 38.3458L19.9213 32H20.6673L22.4386 38.0866C22.1182 38.1799 21.795 38.2663 21.469 38.3458ZM19.1896 29H19.7942L18.2472 23.6841C18.1374 23.7161 18.0266 23.7457 17.9147 23.773L19.1896 29ZM27.0646 36.1686L24.7728 32H25.7038L27.9331 35.6661C27.6476 35.8397 27.358 36.0073 27.0646 36.1686ZM23.1235 29H23.8796L20.1396 22.8496C20.0403 22.91 19.9398 22.9682 19.8381 23.0241L23.1235 29ZM31.9048 32.6144L31.3165 32H32V31.3165L32.6144 31.9048C32.383 32.1464 32.1464 32.383 31.9048 32.6144ZM29 29V28.4438L27.1974 26.7177L21.7804 21.5306C21.6989 21.6157 21.6157 21.6989 21.5306 21.7804L26.7177 27.1974L28.4438 29H29ZM35.6661 27.9331L32 25.7038V24.7728L36.1686 27.0646C36.0073 27.358 35.8397 27.6476 35.6661 27.9331ZM29 23.8796V23.1235L23.0241 19.8381C22.9682 19.9398 22.91 20.0403 22.8496 20.1396L29 23.8796ZM23.6841 18.2472L29 19.7942V19.1896L23.773 17.9147C23.7457 18.0266 23.7161 18.1374 23.6841 18.2472ZM32 19.9213V20.6673L38.0866 22.4386C38.1799 22.1182 38.2663 21.795 38.3458 21.469L32 19.9213Z" fill="#24282E" />
                                                                <path d="M22 17.6154L16 16L17.75 9.5C20.9383 11.5439 22.1786 13.0927 22 17.6154Z" fill="#24282E" />
                                                                <path d="M19.5 3L17.75 9.5M29 19.5L22 17.6154M22 17.6154L16 16L17.75 9.5M22 17.6154C22.1786 13.0927 20.9383 11.5439 17.75 9.5" stroke="#24282E" stroke-width="0.6" />
                                                            </g>
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                            <defs>
                                                                <clipPath id="clip0_367_7495">
                                                                    <rect width="32" height="32" rx="2" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <p class="convention-item__text">В слегка затемненном месте</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.84 21V12.36H6.728L11.486 19.44V12.36H12.374V21H11.486L6.728 13.914V21H5.84ZM14.0548 21V12.36H17.3908C17.4748 12.36 17.5688 12.364 17.6728 12.372C17.7808 12.376 17.8888 12.388 17.9968 12.408C18.4488 12.476 18.8308 12.634 19.1428 12.882C19.4588 13.126 19.6968 13.434 19.8568 13.806C20.0208 14.178 20.1028 14.59 20.1028 15.042C20.1028 15.49 20.0208 15.9 19.8568 16.272C19.6928 16.644 19.4528 16.954 19.1368 17.202C18.8248 17.446 18.4448 17.602 17.9968 17.67C17.8888 17.686 17.7808 17.698 17.6728 17.706C17.5688 17.714 17.4748 17.718 17.3908 17.718H14.9368V21H14.0548ZM14.9368 16.878H17.3668C17.4388 16.878 17.5228 16.874 17.6188 16.866C17.7148 16.858 17.8088 16.844 17.9008 16.824C18.1968 16.76 18.4388 16.638 18.6268 16.458C18.8188 16.278 18.9608 16.064 19.0528 15.816C19.1488 15.568 19.1968 15.31 19.1968 15.042C19.1968 14.774 19.1488 14.516 19.0528 14.268C18.9608 14.016 18.8188 13.8 18.6268 13.62C18.4388 13.44 18.1968 13.318 17.9008 13.254C17.8088 13.234 17.7148 13.222 17.6188 13.218C17.5228 13.21 17.4388 13.206 17.3668 13.206H14.9368V16.878ZM21.297 21V12.36H22.179V16.44L26.121 12.36H27.249L23.223 16.53L27.579 21H26.427L22.179 16.68V21H21.297Z" fill="#24282E" />
                                                            <path d="M4 7H28" stroke="#24282E" />
                                                            <path d="M4 25H28" stroke="#24282E" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Средние требования к плодородию почв</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_367_7503)">
                                                                <circle cx="16" cy="16" r="6.5" stroke="#24282E" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M38.9946 16.5034L32 16.3532V15.6468L38.9946 15.4966C38.9982 15.6639 39 15.8318 39 16C39 16.1682 38.9982 16.3361 38.9946 16.5034ZM38.3458 10.531L32 12.0787V11.3327L38.0866 9.56137C38.1799 9.88175 38.2663 10.205 38.3458 10.531ZM36.1686 4.93544L32 7.22723V6.29615L35.6661 4.06685C35.8397 4.35236 36.0073 4.64195 36.1686 4.93544ZM32.6144 0.0952034L32 0.683542V0H31.3165L31.9048 -0.614424C32.1464 -0.38304 32.383 -0.146438 32.6144 0.0952034ZM27.9331 -3.66607L25.7038 0H24.7728L27.0646 -4.16862C27.358 -4.00726 27.6476 -3.83969 27.9331 -3.66607ZM22.4386 -6.08663L20.6673 0H19.9213L21.469 -6.34583C21.795 -6.26632 22.1182 -6.17987 22.4386 -6.08663ZM19.7942 3H19.1896L17.9147 8.22699C18.0266 8.25428 18.1374 8.28392 18.2472 8.31586L19.7942 3ZM16.5034 -6.9946L16.3532 0H15.6468L15.4966 -6.9946C15.6639 -6.99819 15.8318 -7 16 -7C16.1682 -7 16.3361 -6.99819 16.5034 -6.9946ZM16.1814 8.00194L16.2888 3H15.7112L15.8186 8.00194C15.8787 8.00065 15.9391 8 16 8C16.0609 8 16.1213 8.00065 16.1814 8.00194ZM10.531 -6.34583L12.0787 0H11.3327L9.56137 -6.08663C9.88175 -6.17987 10.205 -6.26632 10.531 -6.34583ZM12.8104 3H12.2058L13.7528 8.31586C13.8626 8.28392 13.9734 8.25428 14.0853 8.22699L12.8104 3ZM4.93544 -4.16861L7.22723 0H6.29615L4.06685 -3.66607C4.35236 -3.83969 4.64195 -4.00726 4.93544 -4.16861ZM8.87654 3H8.12042L11.8604 9.15036C11.9597 9.08997 12.0602 9.03181 12.1619 8.9759L8.87654 3ZM0.0952034 -0.614422L0.683542 0H0V0.683547L-0.614424 0.0952058C-0.38304 -0.146436 -0.146438 -0.383039 0.0952034 -0.614422ZM3 3V3.55619L4.80261 5.28228L10.2196 10.4694C10.3011 10.3843 10.3843 10.3011 10.4694 10.2196L5.28228 4.80261L3.55619 3H3ZM-3.66607 4.06685L0 6.29615V7.22723L-4.16862 4.93545C-4.00726 4.64195 -3.83969 4.35236 -3.66607 4.06685ZM3 8.12042V8.87654L8.9759 12.1619C9.03181 12.0602 9.08997 11.9597 9.15036 11.8604L3 8.12042ZM-6.08663 9.56138L0 11.3327V12.0787L-6.34583 10.531C-6.26632 10.205 -6.17987 9.88176 -6.08663 9.56138ZM3 12.2058V12.8104L8.22699 14.0853C8.25428 13.9734 8.28392 13.8626 8.31586 13.7528L3 12.2058ZM-6.9946 15.4966L0 15.6468V16.3532L-6.9946 16.5034C-6.99819 16.3361 -7 16.1682 -7 16C-7 15.8318 -6.99819 15.6639 -6.9946 15.4966ZM8.00194 15.8186L3 15.7112V16.2888L8.00194 16.1814C8.00065 16.1213 8 16.0609 8 16C8 15.9391 8.00065 15.8787 8.00194 15.8186ZM-6.34583 21.469L0 19.9213V20.6673L-6.08663 22.4386C-6.17986 22.1182 -6.26632 21.795 -6.34583 21.469ZM3 19.1896V19.7942L8.31586 18.2472C8.28392 18.1374 8.25428 18.0266 8.22699 17.9147L3 19.1896ZM-4.16861 27.0646L0 24.7728V25.7038L-3.66607 27.9331C-3.83969 27.6476 -4.00726 27.358 -4.16861 27.0646ZM3 23.1235V23.8796L9.15036 20.1396C9.08997 20.0403 9.03181 19.9398 8.9759 19.8381L3 23.1235ZM-0.614422 31.9048L0 31.3165V32H0.683544L0.0952053 32.6144C-0.146436 32.383 -0.383039 32.1464 -0.614422 31.9048ZM3 29H3.55619L5.28228 27.1974L10.4694 21.7804C10.3843 21.6989 10.3011 21.6157 10.2196 21.5306L4.80261 26.7177L3 28.4438V29ZM4.06685 35.6661L6.29615 32H7.22723L4.93545 36.1686C4.64195 36.0073 4.35236 35.8397 4.06685 35.6661ZM8.12042 29H8.87654L12.1619 23.0241C12.0602 22.9682 11.9597 22.91 11.8604 22.8496L8.12042 29ZM9.56138 38.0866L11.3327 32H12.0787L10.531 38.3458C10.205 38.2663 9.88176 38.1799 9.56138 38.0866ZM12.2058 29H12.8104L14.0853 23.773C13.9734 23.7457 13.8626 23.7161 13.7528 23.6841L12.2058 29ZM15.4966 38.9946L15.6468 32H16.3532L16.5034 38.9946C16.3361 38.9982 16.1682 39 16 39C15.8318 39 15.6639 38.9982 15.4966 38.9946ZM21.469 38.3458L19.9213 32H20.6673L22.4386 38.0866C22.1182 38.1799 21.795 38.2663 21.469 38.3458ZM27.0646 36.1686L24.7728 32H25.7038L27.9331 35.6661C27.6476 35.8397 27.358 36.0073 27.0646 36.1686ZM31.9048 32.6144L31.3165 32H32V31.3165L32.6144 31.9048C32.383 32.1464 32.1464 32.383 31.9048 32.6144ZM35.6661 27.9331L32 25.7038V24.7728L36.1686 27.0646C36.0073 27.358 35.8397 27.6476 35.6661 27.9331ZM32 19.9213V20.6673L38.0866 22.4386C38.1799 22.1182 38.2663 21.795 38.3458 21.469L32 19.9213Z" fill="#24282E" />
                                                                <path d="M14.25 22.5L17.75 9.5C17.75 9.5 22.5 12 22.5 15C22.5 18 21 23 14.25 22.5Z" fill="#24282E" />
                                                                <path d="M17.75 9.5L19.5 3M17.75 9.5L14.25 22.5M17.75 9.5C17.75 9.5 22.5 12 22.5 15C22.5 18 21 23 14.25 22.5M12.5 29L14.25 22.5" stroke="#24282E" stroke-width="0.6" />
                                                            </g>
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                            <defs>
                                                                <clipPath id="clip0_367_7503">
                                                                    <rect width="32" height="32" rx="2" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <p class="convention-item__text">В частично затемненном месте</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M5.41742 9.95645L7 6L8.58258 9.95645C8.83581 10.5895 8.68739 11.3126 8.20526 11.7947C7.53961 12.4604 6.46039 12.4604 5.79474 11.7947C5.31261 11.3126 5.16419 10.5895 5.41742 9.95645Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M11.4174 16.9565L13 13L14.5826 16.9565C14.8358 17.5895 14.6874 18.3126 14.2053 18.7947C13.5396 19.4604 12.4604 19.4604 11.7947 18.7947C11.3126 18.3126 11.1642 17.5895 11.4174 16.9565Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M17.4174 9.95645L19 6L20.5826 9.95645C20.8358 10.5895 20.6874 11.3126 20.2053 11.7947C19.5396 12.4604 18.4604 12.4604 17.7947 11.7947C17.3126 11.3126 17.1642 10.5895 17.4174 9.95645Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M23.4174 16.9565L25 13L26.5826 16.9565C26.8358 17.5895 26.6874 18.3126 26.2053 18.7947C25.5396 19.4604 24.4604 19.4604 23.7947 18.7947C23.3126 18.3126 23.1642 17.5895 23.4174 16.9565Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M3 24H29" stroke="#24282E" />
                                                            <path d="M3 27C5 29 6 29 8 27C10 29 11 29 13 27C15 29 16 29 18 27C20 29 21 29 23 27C25 29 27 29 29 27" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Предпочитает влажные места</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16" cy="16" r="6.5" fill="#24282E" stroke="#24282E" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">В тенистом месте</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3 27C5 29 6 29 8 27C10 29 11 29 13 27C15 29 16 29 18 27C20 29 21 29 23 27C25 29 27 29 29 27" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M3 23C5 25 6 25 8 23C10 25 11 25 13 23C15 25 16 25 18 23C20 25 21 25 23 23C25 25 27 25 29 23" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M16 24.5V16M10 6.5L16 5V12M16 12L22 8L26 17M16 12V16M16 16L11 11L6 15" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Не выносит переувлажнения</p>
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
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M26.8683 15.5249C26.264 16.4752 26.1313 17.6323 26.2715 18.7063C26.3911 19.6229 26.714 20.523 27.1621 21.2532C26.1753 21.524 25.3161 21.8936 24.6761 22.401C24.0887 22.8668 23.6869 23.4505 23.5448 24.1541C23.1553 23.9961 22.722 23.9017 22.2859 23.8552C21.5977 23.7819 20.8516 23.8223 20.1498 23.9575C19.6972 23.5575 19.1181 23.1663 18.4269 22.9964C17.6805 22.8129 16.8515 22.8993 15.9806 23.4185C15.1562 22.9977 14.436 22.9345 13.7905 23.1162C13.2328 23.2733 12.7782 23.6028 12.4059 23.9187C11.5313 23.6061 10.498 23.6775 9.54461 24.2961C9.19941 23.8938 8.7493 23.5467 8.31348 23.2735C7.87912 23.0013 7.42009 22.7784 7.02463 22.6364C7.0116 22.37 6.94778 22.1034 6.85831 21.853C6.7139 21.4487 6.48778 21.0442 6.22566 20.6762C5.82378 20.1119 5.29274 19.5729 4.76174 19.2467C4.86361 18.9556 4.99308 18.6315 5.13644 18.2821C5.17376 18.1911 5.21198 18.0985 5.25068 18.0047C5.42636 17.5792 5.61214 17.1291 5.77054 16.693C5.96301 16.163 6.12815 15.6193 6.1876 15.126C6.23134 14.7629 6.22492 14.3701 6.08255 14.0207C6.61314 13.1776 6.88622 12.4996 6.93509 11.8963C6.97417 11.4139 6.86726 11.0163 6.69465 10.6639C6.87103 10.5582 7.04253 10.4625 7.21097 10.3685C7.23834 10.3533 7.26564 10.338 7.29286 10.3228C7.5999 10.1512 7.91535 9.97153 8.18415 9.74867C8.46361 9.51699 8.70045 9.23331 8.85761 8.84812C8.95521 8.6089 9.01696 8.3431 9.04585 8.04408C10.1995 8.03592 11.0567 7.31234 11.7213 6.39038C13.2187 6.69063 14.7614 6.53406 16.162 5.50508C16.7428 5.54229 17.1511 5.77987 17.6765 6.08565C17.8195 6.16887 17.9712 6.25715 18.1374 6.34781C18.5375 6.56605 18.9981 6.77502 19.5734 6.87285C20.0452 6.95308 20.5751 6.95546 21.1943 6.84612C21.6525 7.91979 22.1888 8.70903 22.8134 9.18219C23.3798 9.61119 23.9986 9.76379 24.6277 9.65958C24.8672 10.6854 25.1918 11.8344 25.5699 12.8787C25.9376 13.8942 26.3763 14.8704 26.8683 15.5249Z" stroke="#24282E" />
                                                            <path d="M13 28C13.4731 26.3443 13.6677 25.9034 13 24.0001L16 23.5L19 24C18.4065 26.6476 18.6189 26.4897 18.9946 27.9787L19 28H13Z" fill="#24282E" stroke="#24282E" />
                                                            <path d="M3 28H29" stroke="#24282E" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Декоративная крона</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_367_7285)">
                                                                <path d="M6.90023 25.6984L11.85 20.7487M11.85 20.7487C11.85 22.1629 11.85 23.5771 11.85 24.9913C13.2642 24.9913 14.6784 27.8197 16.4462 28.8804C17.1533 27.4662 17.5153 25.0943 16.4462 23.9306C17.5068 23.5771 18.2139 24.2842 19.2746 25.3449C19.8646 24.2396 24.6879 25.3153 26.6992 25.6984C25.4368 24.4455 24.0206 21.8133 23.8708 20.0415C21.7495 19.3344 21.7495 19.3344 21.0424 17.2131C23.6711 16.5328 25.9854 16.1817 27.4063 13.6776C25.6287 13.7284 24.9736 13.4757 23.8708 12.9705C24.1421 11.847 24.5849 11.3671 25.9921 10.8492C25.6405 9.48947 26.4759 7.74511 26.6992 5.89941L18.921 13.6776M11.85 20.7487L18.921 13.6776M18.921 13.6776C19.1567 14.149 20.1231 15.0211 22.103 14.7382" stroke="#24282E" stroke-linejoin="round" />
                                                                <path d="M15.3847 17.213C17.506 19.3343 18.9202 20.7485 21.7487 22.1627M13.2634 19.3343C13.2634 21.4556 13.6169 23.2234 15.0311 24.6376" stroke="#24282E" />
                                                                <path d="M6.90023 25.6984L11.85 20.7487M11.85 20.7487C10.4358 20.7487 9.02155 20.7487 7.60734 20.7487C7.60734 19.3344 4.77891 17.9202 3.71825 16.1525C5.13246 15.4454 7.50435 15.0833 8.668 16.1525C9.02155 15.0918 8.31444 14.3847 7.25378 13.324C8.35903 12.7341 7.28335 7.91075 6.90023 5.89941C8.15317 7.16186 10.7853 8.57804 12.5571 8.72784C13.2642 10.8492 13.2642 10.8492 15.3855 11.5563C16.0659 8.92757 16.4169 6.61327 18.921 5.19231C18.8702 6.96998 19.123 7.62502 19.6282 8.72784C20.7516 8.45653 21.2316 8.01375 21.7495 6.60652C23.1092 6.95809 24.8535 6.12274 26.6992 5.89941L18.921 13.6776M11.85 20.7487L18.921 13.6776M18.921 13.6776C18.4496 13.4419 17.5775 12.4755 17.8604 10.4956" stroke="#24282E" stroke-linejoin="round" />
                                                                <path d="M15.3847 17.213C13.2634 15.0916 11.8492 13.6774 10.4349 10.849M13.2634 19.3343C11.142 19.3343 9.37428 18.9807 7.96007 17.5665" stroke="#24282E" />
                                                            </g>
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                            <defs>
                                                                <clipPath id="clip0_367_7285">
                                                                    <rect width="32" height="32" rx="2" fill="white" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <p class="convention-item__text">Декоративные листья</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M16 17.2793C15 19.6126 12 24.4793 8 25.2793" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M15.829 17.3796C15.467 19.8923 13.8288 25.3696 10.1721 27.1776" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M16.1817 17.279C16.312 19.8143 15.7631 25.5049 12.5247 27.9854" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M15.8804 16.9998C16.5993 19.4345 17.3948 25.0959 14.8254 28.2642" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M15.2413 16.8904C12.7027 16.8964 7.04982 17.7502 4.7468 21.1171" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M15.0806 17.0089C12.627 16.3577 6.9457 15.7193 3.84974 18.3754" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M15.3122 16.7232C13.0306 15.6102 7.57975 13.886 4.0289 15.8939" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M15.4495 17.1096C13.4911 15.4944 8.59375 12.5448 4.67213 13.6676" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M21.4581 13.7862C21.2897 16.6921 21.502 23.3213 23.6985 26.5917" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M21.4098 13.799C21.6589 16.6991 22.8175 23.2297 25.4594 26.1522" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M21.2841 13.8173C22.1867 16.5846 24.8013 22.6801 28.0389 24.9246" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M21.5001 13.5006C22.9458 16.0269 25.5002 20.5005 28.5001 21.5007" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M21.3071 14.1408C20.3706 16.8967 18.8091 23.3429 20.055 27.0803" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M20.5143 13.4774C17.7298 12.6298 11.5836 10.1364 9.27545 6.94385" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M20.4862 13.5205C17.8516 12.2832 12.1255 8.93601 10.2978 5.44604" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M20.4243 13.6313C18.1405 11.8269 13.3264 7.26428 12.3411 3.44995" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M20.7761 13.1812C18.4923 11.3767 16.0009 6.49979 16.001 2.99976" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M20.1288 13.4981C17.219 13.4229 10.6308 12.657 7.55549 10.1947" stroke="#24282E" stroke-width="0.7" />
                                                            <path d="M9.5 21.5L15.5 17C18.1667 16.1667 22.1 14.4 22.5 10" stroke="#24282E" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Декоративная хвоя</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7 28V4H25V28H7Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M13 8V14" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M13 4V5" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M10 15V21" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M22 15V21" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M10 6V12" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M22 6V12" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M10 24V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M22 24V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M13 17V23" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M13 26V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M16 19V25" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M19 21V27" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M16 10V16" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M19 12V18" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M16 4V7" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M19 4V9" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Декоративная кора</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3 28H29" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M9 4C9 4 9 18 8 19C7 20 3.5 10.5 3.5 10.5C7 21.5 8.5 19 9 28H10.5C7.5 18 9.5 11.5 9 4Z" fill="#24282E" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M24.5 19C21.5 19.5 22 4 22 4C21.5 15 23.5 17 21 28H22.5C22.0423 17.9302 24.5176 21.6878 28.0081 16.6417C28.6694 15.7714 29 15 29 15C28.6617 15.6343 28.3306 16.1755 28.0081 16.6417C27.2609 17.6251 26.0916 18.7347 24.5 19Z" fill="#24282E" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M10.5 9C12 20 13 11 12.5 28H14C11.5 13.5 15.5 11 15.5 5C15 9.5 13.8022 13.2643 12.5 13.5C11.1978 13.7357 10.5 9 10.5 9Z" fill="#24282E" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M16.0002 28C14.3148 21.2583 16.1802 13.8064 17.1079 6.8413C17.3086 4.66104 17.5002 3 17.5002 3C17.4216 4.25829 17.2811 5.54132 17.1079 6.8413C16.7473 10.7605 16.3577 16.3575 17.0002 17C18.0002 18 20.5002 14 20.5002 14C18.5002 18.5 13.5002 18.5 18.0002 28H16.0002Z" fill="#24282E" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Декоративные побеги</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <circle cx="16.5" cy="17.5" r="3" stroke="#24282E" />
                                                            <circle cx="22" cy="22" r="3.5" stroke="#24282E" />
                                                            <circle cx="24.5" cy="15.5" r="3" stroke="#24282E" />
                                                            <circle cx="6.5" cy="18.5" r="3" stroke="#24282E" />
                                                            <circle cx="12" cy="23" r="3.5" stroke="#24282E" />
                                                            <path d="M15 3V5.25M15 12L17 14.5M15 12V7.5M15 12L13 15M15 7.5L19.5 11.5M15 7.5V5.25M19.5 11.5L24 12.5M19.5 11.5C19.5 12.1691 19.5 13.3554 19.5 14.5M15 5.25L10.5 12.5M10.5 12.5L6.5 15.5M10.5 12.5L11.5 15M19.5 17.5C19.5 17.2784 19.5 15.9214 19.5 14.5M19.5 14.5L21.5 15.5" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M25.5 21.5C27 22 30 19.5 27 17" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M9 17.0003C9.33333 15.8337 11.5 14.0005 14 15.5003" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M14.5 25.5C15.5 26.5 18 27.8 20 25" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M15 21.4995C15.5 20.9995 16.9 20.1995 18.5 20.9995" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Декоративные плоды</p>
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
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3 28H29" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M12.5 24H19M12.5 16.5L12 14.5L14 11.5L15 9.5L14.5 7.5L16 5.5L16.5 3.5L18.5 3L19.5 5V7.5C19 7.83333 20 10.1 20 10.5C20 11 20.5 11.5 20.5 12C20.5 12.5 21 15 21 15.5C21 15.9 22 17.8333 22 19" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M5 16.5L4 21V22L6.5 23.5L11.5 24.5L15.5 22.5L15 19L11.5 15.5H8.5L5 16.5Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M19 21L19.5 24.5L23.5 26L27 25L27.5 22L26 19H22L19 21Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M9 24V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M15 24V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M22 25.5V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M11.5 24.5V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M17.5 24.5V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M25 25.5V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Для посадок в композиции</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <mask id="mask0_367_7206" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="4" y="3" width="24" height="26">
                                                                <rect x="4" y="3" width="24" height="26" fill="#D9D9D9" />
                                                            </mask>
                                                            <g mask="url(#mask0_367_7206)">
                                                                <circle cx="28" cy="27" r="23.5" stroke="#24282E" />
                                                                <circle cx="28" cy="27" r="21.5" stroke="#24282E" />
                                                                <circle cx="28" cy="27" r="19.5" stroke="#24282E" />
                                                                <circle cx="28.5" cy="27.5" r="18" stroke="#24282E" />
                                                                <path d="M17.6172 21.3201L17.888 23.2159C17.9599 23.7196 18.2212 24.1769 18.6185 24.4948L19.9522 25.5617C20.3068 25.8454 20.7474 26 21.2016 26H24.6716C25.202 26 25.7107 25.7893 26.0858 25.4142L26.7929 24.7071C27.238 24.262 27.4476 23.6332 27.3586 23.0101L27.0554 20.8878C27.0188 20.6317 27.0323 20.3709 27.095 20.1199L27.3787 18.9851C27.4584 18.6666 27.4584 18.3334 27.3787 18.0149L27.111 16.9438C27.0379 16.6517 26.8999 16.3799 26.7071 16.1485L25.3337 14.5004C24.8269 13.8923 24.009 13.6403 23.2478 13.8578L21.3002 14.4142C21.1013 14.4711 20.9124 14.5584 20.7402 14.6732L20.2209 15.0194C19.761 15.326 19.4484 15.8094 19.3576 16.3547L19.0802 18.0189C19.0275 18.335 18.8996 18.6338 18.7074 18.8902L17.9971 19.8373C17.6788 20.2616 17.5421 20.795 17.6172 21.3201Z" stroke="#24282E" stroke-linejoin="round" />
                                                                <path d="M21.5 25.5V29" stroke="#24282E" stroke-linejoin="round" />
                                                                <path d="M24 25.5V29" stroke="#24282E" stroke-linejoin="round" />
                                                            </g>
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Для цветовых групп</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M4 28L23 12H26M29 12H26M26 12V28" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M5.50003 5.5C4.00003 5.5 3.50003 7.99958 3.50003 11.9996C3.50003 15.9996 3 23.9995 4 24.5C5 25.0005 10 21.9993 10 19.9993C9.86756 17.6519 7.00003 5.5 5.50003 5.5Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M8 10.9998C8 8.49973 8.5 6.82082 9.5 5.9997C10.5 5.17859 11.5 7.49984 12 9.49975C12.5 11.4996 13.5 16.9998 13 17.9998C12.5 18.9998 10 19.9997 10 19.9997" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M12 9.5C12 9.5 12 6 13.5 6C15 6 15.5 9 15.5 9C15.5 9 17 13.5 16.5 15C16 16.5 13 17.5 13 17.5" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M15.4999 9.0001C15.4999 9.0001 14.9999 6.5 16.4999 6.5C17.9999 6.5 18.9999 12.0001 19 13C19.0001 13.9999 16.4999 15.0001 16.4999 15.0001" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M18 8.50007C18 8.50007 18 6.50025 19.5 7.00014C21 7.50004 21.5 10.0004 21.5 11.0002C21.5 12.0001 19 13.0001 19 13.0001" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Для живых изгородей</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M3.5 20.4998C3.5 20.4998 12.5 20.9998 16 17.4998C19.5 13.9998 13.5 11.4998 16 8.49979C18.5 5.49979 25.5 6.49987 25.5 6.49987C25.5 6.49987 23.5 5.8803 20 8.49979C16.5 11.1193 20.42 11.4998 21 17.4998C21.58 23.4999 5.48748 25.7259 3.5 25.4998V20.4998Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M3.5 25.5V29C10 28.5 16.5 27.5 21 23V18" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M19.5 12.5C19.7041 10.7599 20.5615 9.57502 25.5 6.5" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M25 6.5H29.5C29.5 6.5 26.5 8 24.5 11.5C22.5 15 29 17 29 21.5C29 26 23 29 23 29H3" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M7 13V17H9V13.5" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M3.29396 8.14828L3.15004 9.29967C3.05283 10.0774 3.21913 10.8652 3.62237 11.5373C4.17638 12.4606 5.12414 13.078 6.19264 13.2116L7.87521 13.4219C8.28988 13.4737 8.70962 13.4701 9.12333 13.411L10.0618 13.2769C11.2497 13.1072 12.2397 12.2809 12.6191 11.1426C12.8645 10.4066 12.8312 9.60608 12.5256 8.89296L12.2903 8.34404C11.8109 7.22534 10.7109 6.5 9.49374 6.5C9.16672 6.5 8.84184 6.44728 8.5316 6.34387L6.97854 5.82618C6.34671 5.61557 5.66068 5.63573 5.0423 5.88308C4.09072 6.26371 3.42109 7.13131 3.29396 8.14828Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Для бордюров</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M28 27H4L28 11V27Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M19.2889 10.5777L18.4374 8.8749C18.1614 8.32288 17.646 7.9292 17.0408 7.80817L16.1729 7.63458C15.7368 7.54735 15.284 7.60799 14.8862 7.80688L14.1138 8.19312C13.716 8.39201 13.2632 8.45264 12.8271 8.36542L12.0496 8.20992C11.3939 8.07877 10.716 8.28402 10.2431 8.75686L10.1005 8.89949C10.0336 8.96641 9.962 9.0285 9.88629 9.08528L8.8 9.9C8.29639 10.2777 8 10.8705 8 11.5V12V13.6716C8 14.202 8.21071 14.7107 8.58579 15.0858L8.85997 15.36C8.95309 15.4531 9.0368 15.5552 9.10985 15.6648L9.62527 16.4379C9.86814 16.8022 10.2255 17.0752 10.6409 17.2136C11.1862 17.3954 11.7837 17.3298 12.2765 17.0341L13.525 16.285C13.8358 16.0985 14.1915 16 14.554 16H16.8676C17.5701 16 18.2212 15.6314 18.5826 15.029L19.215 13.975C19.4015 13.6642 19.5 13.3085 19.5 12.946V11.4721C19.5 11.1616 19.4277 10.8554 19.2889 10.5777Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M13.5 16.5V20.5" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M16 16V19" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M20.4174 10.471L19.8978 11.337C19.6418 11.7636 19.5541 12.2703 19.6516 12.7582L19.8288 13.6442C19.9347 14.1734 20.316 14.6053 20.828 14.776C21.2536 14.9179 21.7203 14.8623 22.1007 14.6246L24.6955 13.0028C25.1516 12.7177 25.3163 12.1326 25.0757 11.6514C25.0256 11.5511 24.9596 11.4596 24.8803 11.3803L23.5858 10.0858C23.2107 9.71071 22.702 9.5 22.1716 9.5H22.1324C21.4299 9.5 20.7788 9.8686 20.4174 10.471Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M8.00004 14.5H6.69425C5.71658 14.5 4.89526 15.2126 4.61116 16.1481C4.42683 16.7551 4.20887 17.2911 4 17.5C3.78155 17.7184 3.80171 18.593 3.86502 19.5048C3.94152 20.6067 4.89547 21.5 6.00004 21.5H6.58953C6.86038 21.5 7.12841 21.445 7.37737 21.3383L9.82666 20.2886C10.2615 20.1023 10.6161 19.7678 10.8277 19.3447L11.0528 18.8944C11.3344 18.3314 11.3344 17.6686 11.0528 17.1056L11 17" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M7.5 21.5V24.5" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M9.5 20.5V23.5" stroke="#24282E" stroke-linejoin="round" />
                                                            <path d="M22 9.5V8.82843C22 8.29799 22.2107 7.78929 22.5858 7.41421L23.2722 6.72778C23.7289 6.27106 24.3781 6.06302 25.0152 6.16921L25.9954 6.33257C26.6266 6.43776 27.1693 6.83861 27.4555 7.41093L27.5983 7.69669C27.8538 8.20765 27.8786 8.80348 27.6664 9.33389L27.2307 10.4232C27.0804 10.7989 26.8198 11.1201 26.4831 11.3446L25.5 12" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">На склонах</p>
                                                    </div>
                                                    <div class="convention-item">
                                                        <svg class="convention-item__img" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M8.5 7L4 28H27L24 20.5L21.5 25L16.6 15.8205L13.5 20L8.5 7Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <circle cx="22.5" cy="9.5" r="1" stroke="#24282E" />
                                                            <path d="M23.6481 6.90696C24.405 3.39058 20.2423 2.68736 21.3776 6.90696C17.9718 3.03902 15.7012 5.50045 19.8639 8.31349C13.8091 7.61024 15.7012 11.1266 19.8639 10.4233C15.3228 11.8298 18.7286 15.3462 21.3776 11.8298C20.6207 16.4011 24.405 15.6978 23.6481 11.8298C25.1618 15.3462 27.4324 13.2364 25.1618 10.7749C28.9461 11.1266 28.9461 8.31349 25.1618 8.31349C28.1892 6.20371 25.5402 3.39065 23.6481 6.90696Z" stroke="#24282E" stroke-linejoin="round" />
                                                            <rect x="0.5" y="0.5" width="31" height="31" rx="1.5" stroke="#24282E" />
                                                        </svg>
                                                        <p class="convention-item__text">Для альпинариев</p>
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
                        <div class="advantage-item">
                            <img class="advantage-item__img" src="resourses/advantage-1.svg" alt="">
                            <div class="advantage-item__info">
                                <p class="advantage-item__header">ПРЕДЗАКАЗ</p>
                                <!-- <p class="advantage-item__text">На сезонные растения и поставки под заказ</p> -->
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__img" src="resourses/advantage-2.svg" alt="">
                            <div class="advantage-item__info">
                                <p class="advantage-item__header">оплата онлайн</p>
                                <!-- <p class="advantage-item__text">Возможность заказать и оплатить онлайн</p> -->
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__img" src="resourses/advantage-3.svg" alt="">
                            <div class="advantage-item__info">
                                <p class="advantage-item__header">СКИДКИ %</p>
                                <!-- <p class="advantage-item__text">На оптовые и комплексные заказы</p> -->
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__img" src="resourses/advantage-4.svg" alt="">
                            <div class="advantage-item__info">
                                <p class="advantage-item__header">рассрочка</p>
                                <!-- <p class="advantage-item__text">Для гос.структур и частных клиентов </p> -->
                            </div>
                        </div>
                    </section>
                    <section class="recommended-goods">
                        <h2>Рекомендуем</h2>
                        <div class="recommended-goods__container">
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <?php
                                        require "assets/views/includes/product-card.php";
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        require "assets/views/includes/product-card.php";
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        require "assets/views/includes/product-card.php";
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        require "assets/views/includes/product-card.php";
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        require "assets/views/includes/product-card.php";
                                        ?>
                                    </div>
                                    <div class="swiper-slide">
                                        <?php
                                        require "assets/views/includes/product-card.php";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </main>
    </div>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>