<?
/**
 * Template name: service-page
 **/
get_header();
require_once "template-parts/breadcrumb.php";
?>
    
    <main class="service-page">
        <div class="wrapper">
            <?php
            $name = get_the_title();
            get_breadcrumb(["<a href='/landscape-design'>Ландшафтный дизайн</a>", "<p>$name</p>"]); ?>
            <h1 class="service-page__name"><?php echo the_title() ?></h1>
        </div>
        <img class="service-page__img" src="<?php echo get_field('image') ?>" alt="изображение услуги">
        <div class="wrapper">
            <div class="service-info">
                <p class="service-info__text"><?php echo get_field('description') ?></p>
                <div class="service-info__links">
                    <a class="service-info__download-link" href="<?php echo get_field('пример_проекта') ?>">
                        <span class="desc">СКАЧАТЬ пример проекта</span>
                        <span class="mobile">СКАЧАТЬ проект</span>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 12L12.5 17M12.5 17L17.5 12M12.5 17L12.5 4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.5 20H18.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                    <a class="service-info__download-link" href="<?php echo get_field('полный_прайс_лист') ?>">
                        <span class="desc">скачать полный прайс-лист</span>
                        <span class="mobile">скачать прайс-лист</span>
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
                     <?php $i = 0;
                    while(have_rows('пакеты_проектирования', 4568)): $i++; the_row(); ?>
                    
                     <div class="swiper-slide">
                        <div class="pack-item show">
                            <input type="radio" name="pack" id="pack<?= $i ?>" value="<?= get_sub_field('название') ?>" disabled>
                            <label for="pack<?= $i ?>">
                                <p class="pack-item__header"><?= get_sub_field('название') ?></p>
                                <p class="pack-item__price"><?= get_sub_field('цена') ?> ₽</p>
                                <button class="pack-item__btn hidden" type="button">Подробнее</button>
                                <ul class="pack-item__list">
                                    <?php while(have_rows('пункты')): the_row(); ?>
                                    <li><?= get_sub_field('пункт') ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            </label>
                        </div>
                    </div>
                   <?php     endwhile; ?>
                </div>
                <div class="swiper-scrollbar">
                </div>
            </div>
        </section>
           <?php while(have_rows('блоки')): the_row(); ?>
            <section class="prices-section">
         
            <h2 class="prices-section__header"><?= get_sub_field('заголовок') ?></h2>
            <div class="prices-section__container">
                <?php while(have_rows('маленький_блок')): the_row(); ?>
                <div class="price-item">
                    <div class="price-item__info">
                        <p class="price-item__name"><?= get_sub_field('название') ?></p>
                        <p class="price-item__price"><?= get_sub_field('цена') ?></p>
                    </div>
                    <ul class="price-item__list">
                        <?php while(have_rows('пункты')): the_row(); ?>
                        <li><?= get_sub_field('текст') ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <?php endwhile; ?>
            </div>
        </section>
        <?php endwhile; ?>
    </main>
<?php
get_footer();
