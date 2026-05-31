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
        <?php get_breadcrumb(["<p>Блог</p>"]); ?>
    </div>
    <main class="blog-page">
        <div class="wrapper">
            <section class="blog-page__top">
                <div class="blog-page__info">
                    <h1 class="blog-page__header">Блог</h1>
                    <p class="blog-page__desc">Следите за нашей жизнью, получайте полезную информацию о ландшафтном дизайне. Мы пишем о комфортном городе, широко трактуя это понятие: удобство жизни в мегаполисе зависит одновременно и от глобальных градостроительных инициатив, и от количества мест, где можно выпить хороший кофе.</p>
                </div>
                <div class="vk-block">
                    <h3 class="vk-block__header">наша группа вконтакте</h3>
                    <div class="vk-block__container">
                        <img class="vk-block__img" src="resourses/vk.webp" alt="vk avatar">
                        <div class="vk-block__info">
                            <p class="vk-block__name">Садовый центр<br>Никиты Голубевой</p>
                            <p class="vk-block__subs">3 456 подписчиков</p>
                            <a class="vk-block__link" href="#">подписаться</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="blog-page__blog-block">
                <div class="loading-container">
                    <div class="loading-block">
                        <span class="bg-line"></span>
                    </div>
                </div>
                <div class="blog-page__blog-container">
                    <!-- <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog1.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Растения и климат. Что выбрать для участка?</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog2.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Роза в ландшафтном дизайне.</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog3.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Цветник в саду. С чего начать?</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog1.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Растения и климат. Что выбрать для участка?</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog2.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Роза в ландшафтном дизайне.</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog3.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Цветник в саду. С чего начать?</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog1.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Растения и климат. Что выбрать для участка?</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog2.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Роза в ландшафтном дизайне.</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog3.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Цветник в саду. С чего начать?</p>
                        </div>
                    </a>
                    <a href="#" class="blog-item">
                        <img class="blog-item__img" src="resourses/blog2.webp" alt="картинки блога">
                        <div class="blog-item__text-wrapper">
                            <p class="blog-item__text">Роза в ландшафтном дизайне.</p>
                        </div>
                    </a> -->
                </div>
                <div class="pagination-container blog-pagination-container">
                    <div class="pagination blog__pagination">
                        <div class="pagination__arrow pagination__arrow__left blog-left-arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 12.3536L14.2929 19.3536L15.7071 17.9394L9.41421 11.6465L15.7071 5.35357L14.2929 3.93936L7.29289 10.9394C6.90237 11.3299 6.90237 11.9631 7.29289 12.3536Z" fill="#14181F" />
                            </svg>
                        </div>
                        <ul class="pagination__pages blog-pagination-pages">
                        </ul>
                        <div class="pagination__arrow pagination__arrow__right blog-right-arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 12.3536L14.2929 19.3536L15.7071 17.9394L9.41421 11.6465L15.7071 5.35357L14.2929 3.93936L7.29289 10.9394C6.90237 11.3299 6.90237 11.9631 7.29289 12.3536Z" fill="#14181F" />
                            </svg>
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