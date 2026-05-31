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
        <?php get_breadcrumb(["<p>О нас</p>"]); ?>
    </div>
    <main class="about-page">
        <div class="wrapper">
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
                                <span class="about-item__number">1000+</span>
                                <span class="about-item__text">посаженных деревьев</span>
                            </div>
                        </div>
                    </div>
                    <div class="about-block__img desc">
                        <img src="resourses/about-img.webp" alt="Никита Голубева">
                    </div>
                </div>
            </section>
            <section class="advantages">
                <div class="advantage-item">
                    <div class="advantage-item__img">
                        <img src="resourses/advantage-1.svg" alt="">
                    </div>
                    <div class="advantage-item__info">
                        <p class="advantage-item__header">ПРЕДЗАКАЗ</p>
                        <!-- <p class="advantage-item__text">На сезонные растения и поставки под заказ</p> -->
                    </div>
                </div>
                <div class="advantage-item">
                    <div class="advantage-item__img">
                        <img src="resourses/advantage-2.svg" alt="">
                    </div>
                    <div class="advantage-item__info">
                        <p class="advantage-item__header">СКИДКИ %</p>
                        <!-- <p class="advantage-item__text">На оптовые и комплексные заказы</p> -->
                    </div>
                </div>
                <div class="advantage-item">
                    <div class="advantage-item__img">
                        <img src="resourses/advantage-3.svg" alt="">
                    </div>
                    <div class="advantage-item__info">
                        <p class="advantage-item__header">оплата онлайн</p>
                        <!-- <p class="advantage-item__text">Возможность заказать и оплатить онлайн</p> -->
                    </div>
                </div>
                <div class="advantage-item">
                    <div class="advantage-item__img">
                        <img src="resourses/advantage-4.svg" alt="">
                    </div>
                    <div class="advantage-item__info">
                        <p class="advantage-item__header">рассрочка</p>
                        <!-- <p class="advantage-item__text">Для гос.структур и частных клиентов </p> -->
                    </div>
                </div>
            </section>
        </div>
        <section class="landscape-section">
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
        <section class="services-section">
            <div class="services-row four-row">
                <a href="#" class="services-live-item">
                    <div>
                        <div class="services-live-item__main-info">
                            <div class="services-live-item__number-container">
                                <p class="services-live-item__number">1</p>
                            </div>
                            <h5 class="services-live-item__name">проектирование</h5>
                            <div class="services-live-item__desc">
                                <p class="services-live-item__text">Безопасная и своевременная обрезка кустарников и деревьев продлит молодость Вашего сада и сделает его более привлекательным.</p>
                                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
                            </div>
                        </div>
                    </div>
                    <img class="services-live-item__img" src="resourses/service-bg-1.webp" alt="">
                </a>
                <a href="#" class="services-live-item">
                    <div>
                        <div class="services-live-item__main-info">
                            <div class="services-live-item__number-container">
                                <p class="services-live-item__number">2</p>
                            </div>
                            <h5 class="services-live-item__name">благоустройство</h5>
                            <div class="services-live-item__desc">
                                <p class="services-live-item__text">Безопасная и своевременная обрезка кустарников и деревьев продлит молодость Вашего сада и сделает его более привлекательным.</p>
                                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
                            </div>
                        </div>
                    </div>
                    <img class="services-live-item__img" src="resourses/service-bg-2.webp" alt="">
                </a>
                <a href="#" class="services-live-item">
                    <div>
                        <div class="services-live-item__main-info">
                            <div class="services-live-item__number-container">
                                <p class="services-live-item__number">3</p>
                            </div>
                            <h5 class="services-live-item__name">контейнерное озеленение</h5>
                            <div class="services-live-item__desc">
                                <p class="services-live-item__text">Безопасная и своевременная обрезка кустарников и деревьев продлит молодость Вашего сада и сделает его более привлекательным.</p>
                                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
                            </div>
                        </div>
                    </div>
                    <img class="services-live-item__img" src="resourses/service-bg-3.webp" alt="">
                </a>
                <a href="#" class="services-live-item">
                    <div>
                        <div class="services-live-item__main-info">
                            <div class="services-live-item__number-container">
                                <p class="services-live-item__number">4</p>
                            </div>
                            <h5 class="services-live-item__name">озеленение</h5>
                            <div class="services-live-item__desc">
                                <p class="services-live-item__text">Безопасная и своевременная обрезка кустарников и деревьев продлит молодость Вашего сада и сделает его более привлекательным.</p>
                                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
                            </div>
                        </div>
                    </div>
                    <img class="services-live-item__img" src="resourses/service-bg-4.webp" alt="">
                </a>
                <!-- <img class="row-bg" src="resourses/offer-bg-1.webp" alt=""> -->
            </div>
            <div class="services-row fifth-row">
                <a href="#" class="services-live-item">
                    <div>
                        <div class="services-live-item__main-info">
                            <div class="services-live-item__number-container">
                                <p class="services-live-item__number">5</p>
                            </div>
                            <h5 class="services-live-item__name">уход за садом</h5>
                            <div class="services-live-item__desc">
                                <p class="services-live-item__text">Безопасная и своевременная обрезка кустарников и деревьев продлит молодость Вашего сада и сделает его более привлекательным.</p>
                                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
                            </div>
                        </div>
                    </div>
                    <img class="services-live-item__img" src="resourses/service-bg-5.webp" alt="">
                </a>
                <a href="#" class="services-live-item">
                    <div>
                        <div class="services-live-item__main-info">
                            <div class="services-live-item__number-container">
                                <p class="services-live-item__number">6</p>
                            </div>
                            <h5 class="services-live-item__name">мощение</h5>
                            <div class="services-live-item__desc">
                                <p class="services-live-item__text">Безопасная и своевременная обрезка кустарников и деревьев продлит молодость Вашего сада и сделает его более привлекательным.</p>
                                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
                            </div>
                        </div>
                    </div>
                    <img class="services-live-item__img" src="resourses/service-bg-6.webp" alt="">
                </a>
                <a href="#" class="services-live-item">
                    <div>
                        <div class="services-live-item__main-info">
                            <div class="services-live-item__number-container">
                                <p class="services-live-item__number">7</p>
                            </div>
                            <h5 class="services-live-item__name">сады на крыше</h5>
                            <div class="services-live-item__desc">
                                <p class="services-live-item__text">Безопасная и своевременная обрезка кустарников и деревьев продлит молодость Вашего сада и сделает его более привлекательным.</p>
                                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
                            </div>
                        </div>
                    </div>
                    <img class="services-live-item__img" src="resourses/service-bg-7.webp" alt="">
                </a>
                <a href="#" class="services-live-item">
                    <div>
                        <div class="services-live-item__main-info">
                            <div class="services-live-item__number-container">
                                <p class="services-live-item__number">8</p>
                            </div>
                            <h5 class="services-live-item__name">зимние сады</h5>
                            <div class="services-live-item__desc">
                                <p class="services-live-item__text">Безопасная и своевременная обрезка кустарников и деревьев продлит молодость Вашего сада и сделает его более привлекательным.</p>
                                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
                            </div>
                        </div>
                    </div>
                    <img class="services-live-item__img" src="resourses/service-bg-8.webp" alt="">
                </a>
                <a href="#" class="services-live-item">
                    <div>
                        <div class="services-live-item__main-info">
                            <div class="services-live-item__number-container">
                                <p class="services-live-item__number">9</p>
                            </div>
                            <h5 class="services-live-item__name">строительство<br> прудов и водоемов</h5>
                            <div class="services-live-item__desc">
                                <p class="services-live-item__text">Безопасная и своевременная обрезка кустарников и деревьев продлит молодость Вашего сада и сделает его более привлекательным. родлит молодость Вашего сада и сделает его родлит молодость Вашего сада и сделает его родлит молодость Вашего сада и сделает его</p>
                                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
                            </div>
                        </div>
                    </div>
                    <img class="services-live-item__img" src="resourses/service-bg-9.webp" alt="">
                </a>
            </div>
        </section>
        <div class="wrapper">
            <section class="team-section">
                <h2 class="team-section__header">Наша команда профессионалов</h2>
                <div class="team-section__container">
                    <?php for ($i = 1; $i <= 8; $i++) : ?>
                        <div class="team-item">
                            <img class="team-item__img" src="resourses/about-img.webp" alt="аватар члена команды">
                            <p class="team-item__name">Александра Иванова</p>
                            <p class="team-item__role">Менеджер площадки</p>
                        </div>
                    <?php endfor; ?>
                </div>
            </section>
        </div>
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
        <section class="blog-block">
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
            <a class="blog-block__link" href="#">
                <span>Перейти в</span> блог
            </a>
        </section>
    </main>
    <?php require_once "assets/views/includes/footer.php" ?>
    <script src="main.js"></script>
</body>


</html>