<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#242424" media="(prefers-color-scheme: dark)">
    <meta name="format-detection" content="telephone=no">
    <title>404</title>
    <link rel="shortcut icon" href="" type="">
    <link rel="stylesheet" href="main.css">
</head>

<body class="body" id="body">
    <?php
    $header_color = 'white';
    require_once "assets/views/includes/header.php";
    require_once "assets/views/includes/authorization.php";
    require_once "assets/views/includes/side-bar.php"; ?>
    <main class="not-found-page">
        <img class="not-found-page__bg" src="resourses/404_bg.webp" alt="bg">
        <div class="not-found-page__container">
            <h1 class="not-found-page__title">404</h1>
            <h5 class="not-found-page__text">Страница, которую вы ищете, не&nbsp;существует</h5>
            <a class="not-found-page__link" href="/">вернуться назад</a>
        </div>
    </main>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>