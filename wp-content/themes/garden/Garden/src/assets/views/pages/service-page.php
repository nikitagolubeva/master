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
    <link rel="stylesheet" href="main.css">
</head>

<body class="body" id="body">
    <?php
    $header_color = 'black';
    $page = 'service';
    require_once "assets/views/includes/header.php"; ?>
    <main class="service-page">
        <div class="wrapper">
            <h1 class="service-page__name">проектирование</h1>
        </div>
        <img class="service-page__img" src="resourses/feedback-background.webp" alt="изображение услуги">
        <div class="wrapper">
            <div class="service-info">
                <p class="service-info__text">Проектирование садов на крышах любых типов. Посадка растений, устройство газонов, вертикальное озеленение. Создайте прекрасное и функциональное место отдыха для сотрудников и посетителей, мы разберемся со всеми техническими нюансами.</p>
                <div class="service-info__links">
                    <a class="service-info__download-link" href="#">
                        <span class="desc">СКАЧАТЬ пример проекта</span>
                        <span class="mobile">СКАЧАТЬ проект</span>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 12L12.5 17M12.5 17L17.5 12M12.5 17L12.5 4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.5 20H18.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a class="service-info__download-link" href="#">
                        <span class="desc">скачать полный прайс-лист</span>
                        <span class="mobile">СКАЧАТЬ проект</span>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 12L12.5 17M12.5 17L17.5 12M12.5 17L12.5 4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.5 20H18.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <section class="choose-pack-section">
            <h2 class="choose-pack-section__header">Выберите пакет проектирования:</h2>
            <div class="single-pack-slider swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="pack-item">
                            <input type="radio" name="pack" id="pack1" value="экспресс" disabled>
                            <label for="pack1">
                                <p class="pack-item__header">экспресс</p>
                                <p class="pack-item__price">от 40 000 ₽</p>
                                <button class="pack-item__btn" type="button">Подробнее</button>
                                <ul class="pack-item__list">
                                    <li>Разработка ТЗ</li>
                                    <li>План благоустройства</li>
                                    <li>Стилистические решения, подбор МАФ</li>
                                </ul>
                            </label>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pack-item">
                            <input type="radio" name="pack" id="pack2" value="стандарт" disabled>
                            <label for="pack2">
                                <p class="pack-item__header">стандарт</p>
                                <p class="pack-item__price">от 80 000 ₽</p>
                                <button class="pack-item__btn" type="button">Подробнее</button>
                                <ul class="pack-item__list">
                                    <li>Разработка ТЗ</li>
                                    <li>План благоустройства</li>
                                    <li>Стилистические решения, подбор МАФ</li>
                                </ul>
                            </label>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pack-item">
                            <input type="radio" name="pack" id="pack3" value="безлимитный" disabled>
                            <label for="pack3">
                                <p class="pack-item__header">безлимитный</p>
                                <p class="pack-item__price">от 1 000 000 ₽</p>
                                <button class="pack-item__btn" type="button">Подробнее</button>
                                <ul class="pack-item__list">
                                    <li>Разработка ТЗ</li>
                                    <li>План благоустройства</li>
                                    <li>Стилистические решения, подбор МАФ</li>
                                </ul>
                            </label>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pack-item">
                            <input type="radio" name="pack" id="pack4" value="3D визуализация" disabled>
                            <label for="pack4">
                                <p class="pack-item__header">3D визуализация </p>
                                <p class="pack-item__price">от 45 000 ₽</p>
                                <button class="pack-item__btn" type="button">Подробнее</button>
                                <ul class="pack-item__list">
                                    <li>Разработка ТЗ</li>
                                    <li>План благоустройства</li>
                                    <li>Стилистические решения, подбор МАФ</li>
                                </ul>
                            </label>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="pack-item">
                            <input type="radio" name="pack" id="pack5" value="премиум" disabled>
                            <label for="pack5">
                                <p class="pack-item__header">премиум</p>
                                <p class="pack-item__price">от 120 000 ₽</p>
                                <button class="pack-item__btn" type="button">Подробнее</button>
                                <ul class="pack-item__list">
                                    <li>Разработка ТЗ</li>
                                    <li>План благоустройства</li>
                                    <li>Стилистические решения, подбор МАФ</li>
                                </ul>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="swiper-scrollbar">
                </div>
            </div>
        </section>
        <section class="prices-section">
            <h2 class="prices-section__header">расценка проектных работ</h2>
            <div class="prices-section__container">
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Генеральный план</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Топографический план</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Топографический план</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">План вертикальной планировки</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Дендроплан с ассортиментной ведомостью</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Разбивочный план</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Разбивочный план</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">План ландшафтного освещения</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">План систем дренажа и водоотведения</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">План системы полива</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Разбивочный план</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Посадочный план</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Земляные работы</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">Детальная схема разбивки цветников, альпинариев и рокариев</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name">План системы полива</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="prices-section">
            <h2 class="prices-section__header">Дизайн-проект малых архитектурных форм (беседки, настилы, шпалеры, перголы, качели, скамейки, мостики и прочее)</h2>
            <div class="prices-section__container">
                <div class="price-item big">
                    <div class="price-item__info">
                        <p class="price-item__name">Эскизный проект МАФ</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                    </ul>
                </div>
                <div class="price-item big">
                    <div class="price-item__info">
                        <p class="price-item__name">Ведомость малых архитектурных форм с указанием поставщиков и изготовителей</p>
                        <p class="price-item__price">от 2000/100м2</p>
                    </div>
                    <ul class="price-item__list">
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                        <li>черновая планировка территории</li>
                        <li>вертикальная планировка участка</li>
                        <li>террасирование</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>