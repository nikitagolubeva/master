<?php
/*
* Template name: главная
*/

global $header_color;
$header_color = 'white';
get_header();
require_once "template-parts/feedback-popup.php";
//require_once "template-parts/march-popup.php";
?>

    <main class="main">
        <section class="first-block">
            <img class="first-block__title" loading="lazy" src="<?= get_template_directory_uri() ?>/resourses/title.svg" alt="Ландшафт как образ жизни">
            <img class="first-block__bg-img" loading="lazy" src="https://nikitagolubeva.ru/wp-content/uploads/2023/10/first-block-bg-1_11zon-scaled.webp" alt="задний фон">
            <div class="first-block__shadow"></div>
            <div class="wrapper">
                <h2 class="first-block__text"><?= get_field("главный_баннер_десктоп") ?></h2>
                <h2 class="first-block__mobile-text"><?= get_field("главный_баннер_моб") ?></h2>
                <div class="first-block__search js-all-search-container">
                    <input class="first-block__search__input js-all-search-input" type="text" placeholder="Найти растения">
                    <svg class="js-all-search-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <button class="first-block__button banner-button arrow-hover-right  <?php $link = get_field('ссылка__кнопки_главного_баннера_пусто_если_всплывающее_окно'); if ($link && !empty($link)) {
                                        echo "js-button-link";
                                    } else {
                                        echo "js-feedback-popup";
                                    }
                                    ?>" data-href="<?= get_field('ссылка__кнопки_главного_баннера_пусто_если_всплывающее_окно') ?>"
                
                >
                    <span><?= get_field("кнопка_главного_баннера") ?></span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
             <div class="wrapper">
                <div class="first-block__media">
                     <?php while(have_rows('соцсети','option')): the_row(); ?>
                    <a href="<?= get_sub_field('ссылка') ?>" class="first-block__media__link" target="_blank" >
                        <?= get_sub_field('иконка_баннер') ?>
                    </a>
                    <?php endwhile; ?>
                    
                </div>
            </div>
            <div class="first-block__bottom">
                <div class="wrapper">
                    <div class="first-block__bottom__container">
                        <?php while(have_rows("преимущества")): the_row(); ?>
                        <div class="advantage-item">
                            <img class="advantage-item__icon" loading="lazy" src="<?= get_sub_field("иконка") ?>" alt="advantage1">
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header"><?= get_sub_field("название") ?></h5>
                                <!-- <p class="advantage-item__desc"><?= get_sub_field("описание") ?></p> -->
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="offers-block">
            <div class="banners-container">
                <div class="borderless-banners-slider swiper">
                    <div class="swiper-wrapper">
                        <?php $query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 1]); 
                        while($query->have_posts()): $query->the_post();
                        ?>
                        <div class="swiper-slide">
                            <div class="offer-block slider-offer">
                                <div class="slider-offer__bottom">
                                    <p><?= get_the_title(); ?></p>
                                    <button type="button" class="banner-button arrow-hover-right js-button-link"
                                    data-href="<?= get_the_permalink(); ?>">
                                        Подробнее
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img class="offer-block__bg-img" src="<?= get_the_post_thumbnail_url(); ?>" alt="bg">
                            </div>
                        </div>
                        <?php endwhile;
                        wp_reset_postdata();
                        ?>
                        
                        <?php while(have_rows("карусель_баннеров")): the_row(); ?>
                        <div class="swiper-slide">
                            <div class="offer-block slider-offer">
                                <div class="slider-offer__bottom">
                                    <p><?= get_sub_field("название") ?></p>
                                    <button type="button" class="banner-button arrow-hover-right <?php $link = get_sub_field('ссылка');
                                    if ($link && !empty($link)) {
                                        echo "js-button-link";
                                    } else {
                                        echo "js-feedback-popup";
                                    }
                                    ?>" <?= ($link && !empty($link)) ? "data-href=$link" : "" ?>>
                                        <?php
                                            $banner_name = get_sub_field("текст_кнопки");
                                        if ($banner_name != '') {
                                            echo "<span>$banner_name</span>";
                                        }
                                        ?>
                                        
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                                <img class="offer-block__bg-img" src="<?= get_sub_field("баннер") ?>" alt="bg">
                            </div>
                        </div>
                         <?php endwhile; ?>
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
                     <?php 
                     $i = 0;
                     while(have_rows("каталог")): the_row();
                     $term = get_sub_field("категория");
                     ?>
                     
                    <a href="/catalog?category=<?= $term->term_id ?>" class="categories-item <?php if ($i % 9 == 1 || $i % 9 == 3 || $i % 9 == 8) echo "big-item"; ?>">
                        <p class="categories-item__name"><?= $term->name ?></p>
                        <img loading="lazy" class="categories-item__img" src="<?= get_sub_field("изображение")['sizes']['large'] ?>" alt="category">
                    </a>
                     
                     
                     <?php $i++; endwhile; ?>
                 
                 <!--    <a href="/catalog?category=19" class="categories-item big-item">
                     <p class="categories-item__name">Плодово-ягодные деревья, кустарники и лианы</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-2.webp" alt="category">
                 </a>
                 <a href="/catalog?category=18" class="categories-item">
                     <p class="categories-item__name">Кустарники</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-3.webp" alt="category">
                 </a>
                 <a href="/catalog?category=23" class="categories-item">
                     <p class="categories-item__name">Злаки</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-4.webp" alt="category">
                 </a>
                 <a href="/catalog?category=17" class="categories-item">
                     <p class="categories-item__name">Деревья</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-5.webp" alt="category">
                 </a>
                 <a href="/catalog?category=26" class="categories-item big-item">
                     <p class="categories-item__name">Растения для прудов<br>и водоемов</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-6.webp" alt="category">
                 </a>
                 <a href="/catalog?category=25" class="categories-item big-item">
                     <p class="categories-item__name">Пряно-ароматические<br>растения</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-1.webp" alt="category">
                 </a>
                 <a href="/catalog?category=24" class="categories-item">
                     <p class="categories-item__name">Почвопокровные<br>растения</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-2.webp" alt="category">
                 </a>
                 <a href="/catalog?category=28" class="categories-item ">
                     <p class="categories-item__name">Услуги</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-3.webp" alt="category">
                 </a>
                 <a href="/catalog?category=20" class="categories-item ">
                     <p class="categories-item__name">Многолетние<br>цветы</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-4.webp" alt="category">
                 </a>
                 <a href="/catalog?category=27" class="categories-item big-item">
                     <p class="categories-item__name">Сопутствующие товары<br>для сада</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-5.webp" alt="category">
                 </a>
                 <a href="/catalog?category=22" class="categories-item">
                     <p class="categories-item__name">Лианы</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/categories-6.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item">
                     <p class="categories-item__name">Вересковые</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/вереск.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item">
                     <p class="categories-item__name">Однолетние цветы</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/однолетние.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item big-item">
                     <p class="categories-item__name">Ниваки - садовый бонсай</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/ниваки.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item big-item">
                     <p class="categories-item__name">Крупномеры лиственные<br>и хвойные</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/крупномеры.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item">
                     <p class="categories-item__name">Оливковые деревья</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/оливковые.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item">
                     <p class="categories-item__name">Луковичные</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/луковичные.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item">
                     <p class="categories-item__name">Комнатые<br>растения</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/комнатные.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item big-item">
                     <p class="categories-item__name">Рододендроны</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/рододендроны.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item">
                     <p class="categories-item__name">Товары для декора интерьера</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/декор.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item">
                     <p class="categories-item__name">Товары для бани и сауны</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/баня.webp" alt="category">
                 </a>
                 <a href="#" class="categories-item">
                     <p class="categories-item__name">Розы</p>
                     <img class="categories-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/розы.webp" alt="category">
                 </a> -->
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
                    <?php
                        //$args = ["post_type" => "product", "posts_per_page" => 12];
                        $goods = get_field("рекомендованные_товары");
                        //print_r($goods);
                        global $product;
                        foreach($goods as $good) {
                        $product = wc_get_product($good->ID);
                        ?>
                            
                             <div class="swiper-slide">
                                   <?php require "template-parts/product-card.php"; ?>
                                </div>
                            
                        <?php }
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="swiper-scrollbar">
                </div>
            </div>
        </section>
        <section class="landscape-section">
            <div class="landscape-section__main">
                <div class="wrapper">
                    <h2 class="landscape-section__main__header"><?= get_field("текст_баннера_4") ?></h2>
                    <a href="<?= get_field('ссылка__кнопки_баннера_после_рекомендуемых_товаров') ?>" class="landscape-section__main__link arrow-hover-right">
                        <span class="desc"><?= get_field("текст_кнопки_баннера_4") ?></span>
                        <span class="mobile">Подробнее</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <img loading="lazy" class="landscape-section__main__img" src="<?= get_field("главное_изображение_баннера_4") ?>" alt="landscape image">
                </div>
            </div>
            <div class="landscape-section__container">
                 <div class="hover-scale">
                    <img src="<?= get_field("1_изображение_баннера_5") ?>" loading="lazy" alt="landscape image">
                </div>
                <div class="hover-scale">
                    <img src="<?= get_field("2_изображение_баннера_5") ?>" loading="lazy" alt="landscape image">
                </div>
                <div class="hover-scale">
                    <img src="<?= get_field("3_изображение_баннера_5") ?>" loading="lazy" alt="landscape image">
                </div>
            </div>
        </section>
        <?php require "template-parts/partners.php"; ?>
        <section class="feedback-block">
            <img class="feedback-block__bg" loading="lazy" src="<?= get_field('подложка_под_блок_обратной_связи','option') ?>" alt="feedback background">
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
                    <p class="about-block__desc"><?= get_field("about_us") ?></p>
                    <div class="about-block__img mobile">
                        <img src="<?= get_field("about_image") ?>" loading="lazy" alt="Никита Голубева">
                    </div>
                    <div class="about-block__grid">
                        <?php while(have_rows("about_numbers")): the_row(); ?>
                        <div class="about-item">
                            <span class="about-item__number"><?= get_sub_field("number"); ?></span>
                            <span class="about-item__text"><?= get_sub_field("description"); ?></span>
                        </div>
                        <?php endwhile; ?>
                        
                    </div>
                </div>
                <div class="about-block__img desc">
                    <img src="<?= get_field("about_image") ?>" loading="lazy" alt="Никита Голубева">
                </div>
            </div>
            <img class="about-block__bg-img stick" src="resourses/stick.png" alt="веточка">
            <img class="about-block__bg-img wine" src="resourses/wine.png" alt="виноград">
            <img class="about-block__bg-img berries" src="resourses/berries.png" alt="малина">
            <img class="about-block__bg-img currant" src="resourses/currant.png" alt="смородина">
        </section>
        <section class="comment-block">
            <div class="comment-block__left">
                <img loading="lazy" class="comment-block__img" src="resourses/comment-image.webp" alt="природа для комментариев">
            </div>
            <div class="comment-block__right">
                <h1 class="comment-block__header">Отзывы</h1>
                <img class="comment-block__quotes" src="resourses/quotes.png" loading="lazy" alt="кавычки">
                <div class="comment-block__comments">
                    <div class="swiper comment-slider">
                        <div class="swiper-wrapper">
                            <?php while(have_rows("отзывы")): the_row(); ?>
                            <div class="swiper-slide">
                                <div class="comment-item">
                                    <p class="comment-item__header"><?= get_sub_field("заголовок") ?></p>
                                    <p class="comment-item__text"><?= get_sub_field("текст_отзыва") ?></p>
                                    <p class="comment-item__author"><?= get_sub_field("автор") ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
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
            <?php $query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3]); 
            while($query->have_posts()): $query->the_post();
             ?>
            <a href="<?= get_the_permalink() ?>" class="blog-item">
                <img loading="lazy" class="blog-item__img" src="<?= get_the_post_thumbnail_url() ?>" alt="картинки блога">
                <div class="blog-item__text-wrapper">
                    <p class="blog-item__text"><?= get_the_title(); ?></p>
                </div>
            </a>
            <?php endwhile; ?>
            <a class="blog-block__link" href="/blog">
                <span>Перейти в</span> блог
            </a>
        </section>
    </main>

<?php
get_footer();