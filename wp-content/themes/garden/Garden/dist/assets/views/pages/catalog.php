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
    require_once "assets/views/includes/side-bar.php";
    require_once "assets/views/includes/update-popup.php";
    //require_once "assets/views/includes/order-popup.php";
    //require_once "assets/views/includes/product-popup.php";
    ?>
    <div class="wrapper">
        <?php get_breadcrumb(["<p>Каталог</p>"]); ?>
        <main class="catalog">
            <div class="catalog__header-container">
                <h1 class="catalog__header">Каталог</h1>
                <h3 class="catalog__header-category"></h3>
            </div>
            <section class="catalog__container">
                <div class="catalog__mobile-search">
                    <div class="search-input-container">
                        <input class="search-input js-mobile-search" type="text" placeholder="Поиск">
                        <svg class="js-search-goods" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#7E899A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <button class="category-button">
                        <span class="js-mobile-category-name">категории</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 11L12 14L9 11" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="search-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18 18L6 6" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M18 6L6 18" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="select-container sort-select-container js-mobile-sort-select">
                        <select class="select sort-select" id="sort-select" name="sort">
                            <option disabled>Сортировать по</option>
                            <option value="popularity">По популярности</option>
                            <option value="update">По обновлению</option>
                            <option value="rating">По рейтингу</option>
                            <option value="price_top">Цена выше</option>
                            <option value="price_bottom">Цена ниже</option>
                        </select>
                    </div>
                </div>
                <div class="catalog-categories" data-default>
                    <div>
                        <ul>
                            <li class="catalog-categories__item all-category" data-category="">Все</li>
                            <li class="catalog-categories__item" data-category="category">Крупнолиственные и хвойные</li>
                            <li class="catalog-categories__item" data-category="category">Кустарники </li>
                            <li class="catalog-categories__item" data-category="category">Многолетние цветы </li>
                            <li class="catalog-categories__item" data-category="category">Хвойные растения</li>
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
                <div class="catalog__goods">
                    <div class="catalog__functional-container">
                        <div class="search-input-container">
                            <input class="search-input js-desc-search" type="text" placeholder="Поиск">
                            <svg class="js-search-goods" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#7E899A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="select-container sort-select-container js-desc-sort-select">
                            <select class="select sort-select" id="sort-select" name="sort">
                                <option disabled>Сортировать по</option>
                                <option value="popularity">По популярности</option>
                                <option value="update">По обновлению</option>
                                <option value="rating">По рейтингу</option>
                                <option value="price_top">Цена выше</option>
                                <option value="price_bottom">Цена ниже</option>
                            </select>
                        </div>
                    </div>
                    <p class="catalog__goods__text">
                        Товар не найден
                    </p>
                    <div class="catalog__goods__container">

                    </div>
                    <div class="pagination-container catalog-pagination-container">
                        <div class="pagination catalog__pagination">
                            <div class="pagination__arrow pagination__arrow__left catalog-left-arrow">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 12.3536L14.2929 19.3536L15.7071 17.9394L9.41421 11.6465L15.7071 5.35357L14.2929 3.93936L7.29289 10.9394C6.90237 11.3299 6.90237 11.9631 7.29289 12.3536Z" fill="#14181F" />
                                </svg>
                            </div>
                            <ul class="pagination__pages catalog-pagination-pages">
                            </ul>
                            <div class="pagination__arrow pagination__arrow__right catalog-right-arrow">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 12.3536L14.2929 19.3536L15.7071 17.9394L9.41421 11.6465L15.7071 5.35357L14.2929 3.93936L7.29289 10.9394C6.90237 11.3299 6.90237 11.9631 7.29289 12.3536Z" fill="#14181F" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>