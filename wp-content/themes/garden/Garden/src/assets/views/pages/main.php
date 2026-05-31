<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-scheme" content="light dark">
    <meta name="theme-color" content="#242424" media="(prefers-color-scheme: dark)">
    <meta name="format-detection" content="telephone=no">
    <title>Сад</title>
    <link rel="shortcut icon" href="" type="">
    <link rel="stylesheet" href="main.css">
</head>

<body class="body" id="body">
    <?php
    $header_color = 'white';
    require_once "assets/views/includes/header.php";
    require_once "assets/views/includes/feedback-popup.php";
    require_once "assets/views/includes/march-popup.php";
    require_once "assets/views/includes/news-popup.php";
    require_once "assets/views/includes/side-bar.php";
    require_once "assets/views/includes/product-popup.php";
    require_once "assets/views/includes/authorization.php"; ?>
    <main class="main">
        <section class="first-block">
            <img class="first-block__title" src="resourses/title.svg" alt="Ландшафт как образ жизни">
            <img class="first-block__bg-img" src="resourses/first-block-bg.webp" alt="задний фон">
            <div class="first-block__shadow"></div>
            <div class="wrapper">
                <h2 class="first-block__text">Создаем красоту и гармонию вокруг вас: ландшафтный дизайн, комлексное озеленение и уход за садом!</h2>
                <h2 class="first-block__mobile-text">Ландшафтный дизайн, о&nbsp;котором вы мечтали</h2>
                <div class="first-block__search js-all-search-container">
                    <input class="first-block__search__input js-all-search-input" type="text" placeholder="Поиск">
                    <svg class="js-all-search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <button class="first-block__button banner-button arrow-hover-right" data-href="/">
                    <span>Заказать дизайн</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="wrapper">
                <div class="first-block__media">
                    <a class="first-block__media__link" href="#">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="white" fill-opacity="0.3" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M24 36C30.6274 36 36 30.6274 36 24C36 17.3726 30.6274 12 24 12C17.3726 12 12 17.3726 12 24C12 26.4535 12.7363 28.735 14 30.6356L12.5837 35.3779C12.3458 36.1746 13.1275 36.8968 13.9029 36.5966L18.6667 34.7526C20.2733 35.5511 22.0842 36 24 36ZM28.0405 31.5063C22.3853 30.0666 17.9334 25.6147 16.4937 19.9595C15.9487 17.8187 17.7909 16 20 16C21.1046 16 21.9791 16.9042 22.1974 17.9869C22.2259 18.1281 22.2573 18.2682 22.2916 18.4072C22.4825 19.1795 22.3251 20.0181 21.7626 20.5806L21.1695 21.1737C22.352 23.6447 24.3553 25.648 26.8263 26.8305L27.4194 26.2374C27.9819 25.6749 28.8205 25.5175 29.5928 25.7084C29.7318 25.7427 29.8719 25.7741 30.0131 25.8026C31.0958 26.0209 32 26.8954 32 28C32 30.2091 30.1813 32.0513 28.0405 31.5063Z" fill="white" />
                        </svg>
                    </a>
                    <a class="first-block__media__link" href="#">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="white" fill-opacity="0.3" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M32.7203 13.5377C34.0802 12.9651 35.5381 14.1151 35.298 15.5709L32.4618 32.7668C31.7487 35.5007 30.4987 35.5007 28.8462 34.5499C27.5733 33.8586 25.6848 32.7944 23.9828 31.6823C23.133 31.1269 20.5306 29.3462 20.8505 28.0786C21.124 26.9947 25.4988 22.9223 27.9988 20.5004C28.9808 19.5491 28.5336 18.9995 27.3738 19.8754C24.4968 22.0483 19.8779 25.3519 18.3504 26.2817C17.0027 27.1019 16.2991 27.2419 15.4598 27.1019C13.9271 26.8466 12.5062 26.4511 11.3461 25.9702C9.03393 25.0118 9.24867 23.6257 11.345 22.5379L32.7203 13.5377Z" fill="white" />
                        </svg>
                    </a>
                    <a class="first-block__media__link" href="#">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="white" fill-opacity="0.3" />
                            <g clip-path="url(#clip0_2043_52876)">
                                <path d="M26.0616 23.7497C25.5616 23.5617 25.5616 22.8437 25.5306 22.3437C25.4056 20.5627 26.0306 17.8437 25.2806 16.6877C24.7496 15.9997 22.1866 16.0627 20.6246 16.1567C20.1866 16.2197 19.5162 16.1567 19.2806 16.5007C18.7838 17.226 19.4686 17.6257 19.8116 18.1567C20.1866 18.7197 20.1866 19.9377 20.1866 20.9377C20.1866 22.0937 19.9986 23.6257 19.5306 23.6877C18.8116 23.7187 18.4056 22.9997 18.0306 22.4687C17.2806 21.4377 16.5306 20.1557 15.9676 18.9057C15.6866 18.2497 15.5296 17.5307 15.1236 17.2497C14.4986 16.8117 13.3736 16.7807 12.2796 16.8117C11.2796 16.8427 9.84158 16.7177 9.56058 17.3117C9.34158 17.9677 9.81058 18.5927 10.0606 19.1247C11.3416 21.9057 12.7166 24.3437 14.4046 26.6557C15.9676 28.8117 17.4356 30.5307 20.3106 31.4367C21.1236 31.6867 24.6856 32.4057 25.4046 31.4367C25.6546 31.0617 25.5926 30.2177 25.7176 29.5927C25.8426 28.9677 25.9986 28.3427 26.5926 28.3117C27.0926 28.2807 27.3736 28.7177 27.6866 29.0307C28.0306 29.3747 28.3116 29.6557 28.5616 29.9687C29.1556 30.5627 29.4199 30.8749 30.332 31.3333C31.244 31.7917 33.1556 32.0007 34.6556 31.9377C35.8746 31.9067 36.7496 31.6567 36.8436 30.9377C36.9066 30.3747 36.2806 29.5627 35.9056 29.0937C34.9676 27.9377 34.5306 27.5937 33.4676 26.5307C32.9986 26.0617 32.4046 25.5617 32.4046 24.9997C32.3736 24.6557 32.6546 24.3437 32.9046 23.9997C33.9986 22.3747 35.0926 21.2187 36.0926 19.5307C36.3736 19.0307 36.582 17.8963 36.332 17.3333C36.1971 17.0297 34.9366 16.8737 33.9676 16.8737C32.7176 16.8737 31.0926 16.7797 30.7796 17.0297C30.1856 17.4357 29.9356 18.0927 29.6546 18.7177C29.0296 20.1557 28.1856 21.6237 27.3106 22.7177C26.9976 23.0927 26.4046 23.8737 26.0606 23.7487L26.0616 23.7497Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2043_52876">
                                    <rect width="32" height="32" fill="white" transform="translate(8 8)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="first-block__bottom">
                <div class="wrapper">
                    <div class="first-block__bottom__container">
                        <div class="advantage-item">
                            <img class="advantage-item__icon" src="resourses/main-icon-1.svg" alt="advantage1">
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header">ПРЕДЗАКАЗ</h5>
                                <!-- <p class="advantage-item__desc">На сезонные растения и поставки под заказ</p> -->
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__icon" src="resourses/main-icon-2.svg" alt="advantage1">
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header">СКИДКИ %</h5>
                                <!-- <p class="advantage-item__desc">На оптовые и комплексные заказы</p> -->
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__icon" src="resourses/main-icon-3.svg" alt="advantage1">
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header">оплата онлайн</h5>
                                <!-- <p class="advantage-item__desc">Возможность заказать и оплатить онлайн</p> -->
                            </div>
                        </div>
                        <div class="advantage-item">
                            <img class="advantage-item__icon" src="resourses/main-icon-4.svg" alt="advantage1">
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header">РАССРОЧКА И ГИБКИЕ УСЛОВИЯ ПОСТАВКИ</h5>
                                <!-- <p class="advantage-item__desc">Для гос.структур и частных клиентов</p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="offers-block">
            <!-- <div class="left-offer offer-block">
                <img class="offer-block__bg-img" src="resourses/banner-new.webp" alt="bg">
            </div> -->
            <div class="banners-container">
                <!-- <div class="swiper banner-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="offer-block slider-offer">
                                <div class="slider-offer__bottom">
                                    <p>Большой выбор роз по 1200 рублей</p>
                                    <button type="button" class="banner-button js-feedback-popup arrow-hover-right" data-href="/catalog">
                                        <span>заказать</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img class="offer-block__bg-img" src="resourses/roses.webp" alt="bg">
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
                                <img class="offer-block__bg-img" src="resourses/banner-1.webp" alt="bg">
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
                                <img class="offer-block__bg-img" src="resourses/banner-2.webp" alt="bg">
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
                                <img class="offer-block__bg-img" src="resourses/banner-3.webp" alt="bg">
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
                                <img class="offer-block__bg-img" src="resourses/banner-4.webp" alt="bg">
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
                </div> -->
                <div class="borderless-banners-slider swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="offer-block slider-offer">
                                <div class="slider-offer__bottom">
                                    <p>Большой выбор роз по 1200 рублей</p>
                                    <button type="button" class="banner-button js-feedback-popup arrow-hover-right" data-href="/catalog">
                                        <span>заказать</span>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img class="offer-block__bg-img" src="resourses/roses.webp" alt="bg">
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
                                <img class="offer-block__bg-img" src="resourses/banner-1.webp" alt="bg">
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
                                <img class="offer-block__bg-img" src="resourses/banner-2.webp" alt="bg">
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
                                <img class="offer-block__bg-img" src="resourses/banner-3.webp" alt="bg">
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
                                <img class="offer-block__bg-img" src="resourses/banner-4.webp" alt="bg">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-scrollbar">
                    </div>
                </div>
            </div>
        </section>
        <section class="categories-section">
            <div class="wrapper">
                <h2 class="categories-section__header">Широкий ассортимент растений в нашем каталоге</h2>
                <div class="categories-section__container">
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Хвойные<br>растения</p>
                        <img class="categories-item__img" src="resourses/categories-1.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item big-item">
                        <p class="categories-item__name">Плодово-ягодные деревья, кустарники и лианы</p>
                        <img class="categories-item__img" src="resourses/categories-2.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Кустарники</p>
                        <img class="categories-item__img" src="resourses/categories-3.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Злаки</p>
                        <img class="categories-item__img" src="resourses/categories-3.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Деревья</p>
                        <img class="categories-item__img" src="resourses/categories-5.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item big-item">
                        <p class="categories-item__name">Растения для прудов<br>и водоемов</p>
                        <img class="categories-item__img" src="resourses/categories-6.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item big-item">
                        <p class="categories-item__name">Пряно-ароматические<br>растения</p>
                        <img class="categories-item__img" src="resourses/пряные.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Почвопокровные<br>растения</p>
                        <img class="categories-item__img" src="resourses/Почвопокровные.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item ">
                        <p class="categories-item__name">Услуги</p>
                        <img class="categories-item__img" src="resourses/услуги.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item ">
                        <p class="categories-item__name">Многолетние<br>цветы</p>
                        <img class="categories-item__img" src="resourses/многолетние.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item big-item">
                        <p class="categories-item__name">Сопутствующие товары<br>для сада</p>
                        <img class="categories-item__img" src="resourses/сопуствующие.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Лианы</p>
                        <img class="categories-item__img" src="resourses/лианы.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Вересковые</p>
                        <img class="categories-item__img" src="resourses/вереск.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Однолетние цветы</p>
                        <img class="categories-item__img" src="resourses/однолетние.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item big-item">
                        <p class="categories-item__name">Ниваки - садовый бонсай</p>
                        <img class="categories-item__img" src="resourses/ниваки.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item big-item">
                        <p class="categories-item__name">Крупномеры лиственные<br>и хвойные</p>
                        <img class="categories-item__img" src="resourses/крупномеры.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Оливковые деревья</p>
                        <img class="categories-item__img" src="resourses/оливковые.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Луковичные</p>
                        <img class="categories-item__img" src="resourses/луковичные.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Комнатые<br>растения</p>
                        <img class="categories-item__img" src="resourses/комнатные.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item big-item">
                        <p class="categories-item__name">Рододендроны</p>
                        <img class="categories-item__img" src="resourses/рододендроны.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Товары для декора интерьера</p>
                        <img class="categories-item__img" src="resourses/декор.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Товары для бани и сауны</p>
                        <img class="categories-item__img" src="resourses/баня.webp" alt="category">
                    </a>
                    <a href="#" class="categories-item">
                        <p class="categories-item__name">Розы</p>
                        <img class="categories-item__img" src="resourses/розы.webp" alt="category">
                    </a>
                </div>
                <button class="categories-section__btn" type="button">
                    <span class="show-catalog">развернуть каталог</span>
                    <span class="hide-catalog">свернуть каталог</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 10L12 15L17 10" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </section>
        <section class="recommended-goods-block">
            <h2 class="recommended-goods-block__header">Рекомендуем эти товары</h2>
            <div class="borderless-product-slider swiper">
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
                    <div class="swiper-slide">
                        <?php
                        require "assets/views/includes/product-card.php";
                        ?>
                    </div>
                </div>
                <div class="swiper-scrollbar">
                </div>
            </div>
        </section>
        <section class="landscape-section">
            <div class="landscape-section__main">
                <div class="wrapper">
                    <h2 class="landscape-section__main__header">Ландшафтный дизайн, комлексное озеленение, уход за&nbsp;садом и многое другое...</h2>
                    <a href="/landscape" class="landscape-section__main__link arrow-hover-right">
                        <span class="desc">узнать больше</span>
                        <span class="mobile">Подробнее</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <img class="landscape-section__main__img" src="resourses/first-block-bg.webp" alt="landscape image">
                </div>
            </div>
            <div class="landscape-section__container">
                <div class="hover-scale">
                    <img src="resourses/first-block-bg.webp" alt="landscape image">
                </div>
                <div class="hover-scale">
                    <img src="resourses/first-block-bg.webp" alt="landscape image">
                </div>
                <div class="hover-scale">
                    <img src="resourses/first-block-bg.webp" alt="landscape image">
                </div>
            </div>
        </section>
        <!-- <?php
                require "assets/views/includes/quiz.php";
                ?> -->
        <?php
        require "assets/views/includes/partners.php";
        ?>
        <section class="feedback-block">
            <img class="feedback-block__bg" src="resourses/feedback-background.webp" alt="feedback background">
            <div class="wrapper">
                <div class="feedback-block__container">
                    <div class="feedback-block__left">
                        <h3>Нужна помощь
                            или&nbsp;консультация?</h3>
                        <p>Оставьте свои контакты и мы с вами свяжемся</p>
                    </div>
                    <div class="feedback-block__right">
                        <form class="validate-form">
                            <div class="input-container">
                                <label for="feedback-phone">Номер телефона</label>
                                <input class="telephone-input validate-input" name="feedback-phone" data-type="telephone" type="text" id="feedback-phone">
                            </div>
                            <div class="input-container">
                                <label for="feedback-mail">E-mail</label>
                                <input class="validate-input" type="text" name="feedback-email" data-type="email" id="feedback-mail" placeholder="E-mail">
                            </div>
                            <button class="feedback-block__btn" type="button">оставить заявку</button>
                        </form>
                        <div class="status-sended">
                            <div class="status-sended__container">
                                <svg class="status-sended__icon" width="126" height="125" viewBox="0 0 126 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="63" cy="62.5" r="46" stroke="white" stroke-width="3" />
                                    <path d="M33 64.5L52.5 84L91.5 45" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="status-sended__text">Ваша заявка принята!
                                    Менеджер свяжется
                                    с вами в течении дня</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-block">
            <div class="wrapper about-block__container">
                <div class="about-block__info">
                    <h2 class="about-block__header">О нас</h2>
                    <p class="about-block__desc">Торговая площадка, где представлены растения и широкий спектр сопутствующих товаров- средства профилактики и борьбы с болезнями и вредителями растений, удобрения, почвогрунты и др. Окажем услуги по озеленению и благоустройству Вашего участка.</p>
                    <div class="about-block__img mobile">
                        <img src="resourses/about-img.webp" alt="Никита Голубева">
                    </div>
                    <div class="about-block__grid">
                        <div class="about-item">
                            <span class="about-item__number">2</span>
                            <span class="about-item__text">торговых площадки</span>
                        </div>
                        <div class="about-item">
                            <span class="about-item__number">20+</span>
                            <span class="about-item__text">облагороженных участков</span>
                        </div>
                        <div class="about-item">
                            <span class="about-item__number">9</span>
                            <span class="about-item__text">лет на рынке</span>
                        </div>
                        <div class="about-item">
                            <span class="about-item__number">100+</span>
                            <span class="about-item__text">уложенных газонов</span>
                        </div>
                        <div class="about-item">
                            <span class="about-item__number">500+</span>
                            <span class="about-item__text">растений в ассортименте</span>
                        </div>
                        <div class="about-item">
                            <span class="about-item__number">10000000+</span>
                            <span class="about-item__text">посаженных деревьев</span>
                        </div>
                    </div>
                </div>
                <div class="about-block__img desc">
                    <img src="resourses/about-img.webp" alt="Никита Голубева">
                </div>
            </div>
            <img class="about-block__bg-img stick" src="resourses/stick.png" alt="веточка">
            <img class="about-block__bg-img wine" src="resourses/wine.png" alt="виноград">
            <img class="about-block__bg-img berries" src="resourses/berries.png" alt="малина">
            <img class="about-block__bg-img currant" src="resourses/currant.png" alt="смородина">
        </section>
        <section class="comment-block">
            <div class="comment-block__left">
                <img class="comment-block__img" src="resourses/comment-image.webp" alt="природа для комментариев">
            </div>
            <div class="comment-block__right">
                <h1 class="comment-block__header">Отзывы</h1>
                <img class="comment-block__quotes" src="resourses/quotes.png" alt="кавычки">
                <div class="comment-block__comments">
                    <div class="swiper comment-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="comment-item">
                                    <p class="comment-item__header">Все отлично! Все вовремя, все соответствует заказу.</p>
                                    <p class="comment-item__text">Очень доволен опытом покупки в этом магазине. Буду рекомендовать знакомым. Особенно порадовала досткавка. Всё на достойном уровне. Цены адекватные. Спасибо девочке за консультацию.
                                        Все отлично! Все вовремя, все соответствует заказу. Спасибо большое!</p>
                                    <p class="comment-item__author">Владимир Антонов</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="comment-item">
                                    <p class="comment-item__header">Все отлично! Все вовремя, все соответствует заказу.</p>
                                    <p class="comment-item__text">Очень доволен опытом покупки в этом магазине. Буду рекомендовать знакомым. Особенно порадовала досткавка. Всё на достойном уровне. Цены адекватные. Спасибо девочке за консультацию.
                                        Все отлично! Все вовремя!</p>
                                    <p class="comment-item__author">Владимир Антонов</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment-block__buttons">
                    <div class="comment-block__buttons__btn comment-slider-prev">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="white" fill-opacity="0.3" />
                            <path d="M28 34L18 23.5L28 13" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="comment-block__buttons__btn comment-slider-next">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="48" height="48" rx="24" fill="white" fill-opacity="0.3" />
                            <path d="M20 13L30 23.5L20 34" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-block">
            <a href="/blog" class="blog-item">
                <img class="blog-item__img" src="resourses/blog1.webp" alt="картинки блога">
                <div class="blog-item__text-wrapper">
                    <p class="blog-item__text">Растения и климат. Что выбрать для участка?</p>
                </div>
            </a>
            <a href="/blog" class="blog-item">
                <img class="blog-item__img" src="resourses/blog2.webp" alt="картинки блога">
                <div class="blog-item__text-wrapper">
                    <p class="blog-item__text">Роза в ландшафтном дизайне.</p>
                </div>
            </a>
            <a href="/blog" class="blog-item">
                <img class="blog-item__img" src="resourses/blog3.webp" alt="картинки блога">
                <div class="blog-item__text-wrapper">
                    <p class="blog-item__text">Цветник в саду. С чего начать?</p>
                </div>
            </a>
            <a class="blog-block__link" href="/blog">
                <span>Перейти в</span> блог
            </a>
        </section>
    </main>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>