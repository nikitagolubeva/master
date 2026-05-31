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
        <?php get_breadcrumb(["<a href='/blog'>Блог</a>", "<p>Статья</p>"]); ?>
    </div>
    <main class="single-blog-page">
        <div class="wrapper">
            <h1 class="single-blog-page__header">Статья</h1>
            <a class="single-blog-page__back-btn hover-color" href="/blog">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 7L9 12L14 17" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Ко всем статьям</span>
            </a>
            <div class="single-blog-page__container">
                <div class="single-blog-page__content">
                    <img class="single-blog-page__content__img" src="resourses/blog-image.webp" alt="картинка статьи">
                    <h2 class="single-blog-page__content__header">Растения и климат. Что выбрать для участка?</h2>
                    <p class="single-blog-page__content__text">Чтобы понять, какие растения подойдут именно вам, нужно разбираться в основных понятиях, связанных с возможностью растений переносить низкую температуру. Это понятия морозостойкости и зимостойкости.
                        Морозостойкость — это возможность растениями переносить очень низкую температуру на протяжении долгого времени. Бывает такое, что только отдельные части растений не обладают морозостойкостью. Например, корневая система, почки или молодые побеги могут быть очень чувствительными к минусовым температурам.
                        Для того чтобы избежать проблем с болезнями и выживанием растений на участке в суровых зимах, выбирайте те, которые легко переносят морозы. Не боясь, можно использовать березу пушистую, ель обыкновенную, лиственницу, сосну кедровую. Из кустарников — боярышники, дерен белый, сосну горную. Эти растения устойчивы к температуре -35͒ С — -45͒ С и пригодны к озеленению самых холодных областей.
                        Есть чуть менее морозостойкие растения, которые без проблем переносят температуру до -25͒ С — -35͒ С. Это ива, вязы, дубы, клены, липа, некоторые орехи, рябины, ясень. И кустарники: калина, сирень обыкновенная или венгерская.
                        Выше мы говорили о морозостойких растениях. Теперь поговорим о зимостойких. Зимостойкость — способность растения в течение зимы переносить колебания температур: оттепель, резкое похолодание после нее, отсутствие снега в зимнее время и т.д. Для некоторых растений такие изменения губительны, а для некоторых абсолютно нормальны. Легко приспосабливаются к таким условиям пихта бальзамическая, сосна обыкновенная, лиственница сибирская, туя западная, ель энгельмана, черемуха, груша уссурийская, некоторые декоративные яблони, например, ягодные, клен татарский, рябина обыкновенная и промежуточная, черемуха. Из кустарников зимостойкими будут горная сосна, кедровая сосна, можжевельник обыкновенный, карагана древовидная, жимолость татарская, вишня песчаная, рододендроны, смородина золотистая, калина, роза морщинистая, разные чубушники. Из лиан — виноград девичий и амурский, гортензия черешковая.</p>
                </div>
                <div class="single-blog-page__blogs">
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog1.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Растения и климат. Что выбрать для учаdasdas da sddasdasdasd as das dстка?</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog1.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Растения и климат. Что выбрать для участка?</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog1.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Растения и климат. Что выбрать для участка?</p>
                        </div>
                    </a>
                </div>
            </div>
            <section class="recommended-goods">
                <div class="recommended-goods__container">
                    <div class="swiper blog-product-slider">
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
    </main>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>