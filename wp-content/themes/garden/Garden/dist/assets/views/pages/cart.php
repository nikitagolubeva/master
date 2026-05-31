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
        <?php get_breadcrumb(["<p>Корзина</p>"]); ?>
        <main class="cart-page">
            <h1 class="cart-page__header">корзина</h1>
            <section class="cart-page__container">
                <div class="cart-page__goods-container">
                    <?php
                    require "assets/views/includes/loading.php";
                    ?>
                    <?php
                    require "assets/views/includes/cart-card.php";
                    ?>
                    <?php
                    require "assets/views/includes/cart-card.php";
                    ?>
                    <p class="empty-text">Корзина пуста.</p>
                    <button class="cart-page__goods-container__clear-btn" type="button">Очистить корзину</button>
                </div>
                <div class="cart-page__info">
                    <?php
                    require "assets/views/includes/loading.php";
                    ?>
                    <div class="cart-page__info__sum">
                        <p>Сумма заказа (<span class="js-cart-goods-counter">2</span>):</p>
                        <p class="sum"><span class="js-cart-sum">1100</span> ₽</p>
                    </div>
                    <a class="cart-page__info__order-btn" href="#">оформить заказ</a>
                    <a class="cart-page__info__back-btn" href="#">ВЕРНУТЬСЯ К ПОКУПКАМ</a>
                    <p class="cart-page__info__subtext">Доставка осуществляется при заказе более чем на 5000 ₽, подробнее об условиях можно узнать в разделе</p>
                </div>
            </section>
        </main>
    </div>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>