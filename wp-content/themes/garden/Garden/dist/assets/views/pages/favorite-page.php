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
    require_once "assets/views/includes/breadcrumb.php";
    require_once "assets/views/includes/header.php";
    //require_once "assets/views/includes/order-popup.php";
    require_once "assets/views/includes/product-popup.php";
    ?>
    <div class="wrapper favorite-page-wrapper">
        <?php get_breadcrumb(["<p>избранное</p>"]); ?>
        <main class="favorite-page">
            <h1 class="catalog__header">ИЗБРАННОЕ</h1>
            <p class="favorite-page__text">
                Нет товаров в избранном
            </p>
            <section class="favorite-page__container">
                <?php
                require "assets/views/includes/product-card.php";
                ?>
                <?php
                require "assets/views/includes/product-card.php";
                ?>
                <?php
                require "assets/views/includes/product-card.php";
                ?>
                <?php
                require "assets/views/includes/product-card.php";
                ?>
                <?php
                require "assets/views/includes/product-card.php";
                ?>
                <?php
                require "assets/views/includes/product-card.php";
                ?>
                <?php
                require "assets/views/includes/product-card.php";
                ?>
                <?php
                require "assets/views/includes/product-card.php";
                ?>
                <?php
                require "assets/views/includes/product-card.php";
                ?>
            </section>
        </main>
    </div>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>