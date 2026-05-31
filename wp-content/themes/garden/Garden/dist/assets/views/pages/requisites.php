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
    require_once "assets/views/includes/breadcrumb.php"; ?>
    <div class="wrapper">
        <?php get_breadcrumb(["<a href='/contacts'>Контакты</a>", "<p>Реквизиты</p>"]); ?>
        <main class="contacts-page requisites-page">
            <h1 class="contacts-page__header">Наши реквизиты</h1>
            <section class="requisites-grid">
                <div class="requisites-item">
                    <p class="requisites-item__label">Наименование организации</p>
                    <p class="requisites-item__text">ИП Голубева Никита Андреевна</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">ИНН</p>
                    <p class="requisites-item__text">781717946668</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Полное наименование организации</p>
                    <p class="requisites-item__text">Индивидуальный предприниматель Голубева Никита Андреевна</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">ОГРНИП</p>
                    <p class="requisites-item__text">319784700166307</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Сфера деятельности ОКВЭД</p>
                    <p class="requisites-item__text">46.22 Торговля оптовая цветами и растениями</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">ОКПО</p>
                    <p class="requisites-item__text">155490842</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Юридический адрес</p>
                    <p class="requisites-item__text">196643 , г.Санкт-Петербург,  п. Понтонный,
                        ул. Варвары Петровой , д. 8, кв. 89</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">E-mail</p>
                    <p class="requisites-item__text">nikitagolubeva@mail.ru</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Фактический адрес</p>
                    <p class="requisites-item__text">Г. Сестрорецк, Приморское шоссе, 311<br>
                        Г. Санкт – Петербург, Всеволожский район 11 км.
                        Новоприозерского шоссе, дер.Скотное</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Сайт</p>
                    <p class="requisites-item__text">https://www.nikitagolubeva.ru</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Телефоны</p>
                    <p class="requisites-item__text">+79697167133 – отдел благоустройства, проектирование, опт.<br>
                        +79218099959 - площадка 1<br>
                        +79215555884 - площадка 2</p>
                </div>
            </section>
            <h2 class="contacts-page__header second-header">Банковские реквизиты</h2>
            <section class="requisites-grid">
                <div class="requisites-item">
                    <p class="requisites-item__label">Банк</p>
                    <p class="requisites-item__text">СЕВЕРО-ЗАПАДНЫЙ БАНК ПАО СБЕРБАНК</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Р/счет</p>
                    <p class="requisites-item__text">40802810255000042139</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">ИНН</p>
                    <p class="requisites-item__text">7707083893</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Кор/счет</p>
                    <p class="requisites-item__text">30101810500000000653</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">КПП</p>
                    <p class="requisites-item__text">784243001</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">БИК</p>
                    <p class="requisites-item__text">044030653</p>
                </div>
            </section>
            <a class="requisites-button" href="#" download="">
                <span>СКАЧАТЬ реквизиты</span>
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 12L12.5 17M12.5 17L17.5 12M12.5 17L12.5 4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.5 20H18.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </main>
    </div>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>