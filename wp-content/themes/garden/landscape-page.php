<?
/**
 * Template name: landscape
 **/
global $header_color;
$header_color = 'white';
get_header();
require_once "template-parts/breadcrumb.php";
?>

    <main class="landscape-page">
        <section class="first-block">
            <img class="first-block__bg-img" src="https://nikitagolubeva.ru/wp-content/uploads/2023/10/first-block-bg-scaled_11zon.webp" alt="задний фон">
            <div class="first-block__shadow"></div>
            <div class="wrapper">
                <h2 class="first-block__text">Ландшафтный<span><br></span> дизайн</h2>
                <a href="<?= get_field('ссылка_кнопки_баннера') ?>" class="first-block__button">
                    <span>Выбрать услуги</span>
                </a>
            </div>
            <img class="first-block__title" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/title.svg" alt="Ландшафт как образ жизни">
        </section>
        <div class="wrapper">
            <section class="stage-section">
                <h2 class="stage-section__header">Этапы сотрудничества для создания комфортной среды</h2>
                <div class="stage-section__container">
                    <?php foreach(get_field('business_stages') as $stage) { ?>
                    <div class="stage-item">
                        <div class="stage-item__top">
                            <p class="stage-item__number"><?php echo $stage['number'] ?></p>
                            <img class="stage-item__img" src="<?php echo $stage['image'] ?>" width="125" height="125" alt="img">
                        </div>
                        <p class="stage-item__text"><?php echo $stage['description'] ?></p>
                    </div>
                    <?php } ?>
                </div>
            </section>
        </div>
        <section class="prework-section">
            <h2 class="prework-section__header">Предпроектные работы</h2>
            <div class="prework-section__container">
                <?php foreach(get_field('predesign_works') as $work) { ?>
                <div class="prework-item">
                    <img class="prework-item__img" src="<?php echo $work['predesign_work_image'] ?>" alt="консультация">
                    <div class="prework-item__info">
                        <p class="prework-item__header"><?php echo $work['predesign_work_name'] ?></p>

                        <ul class="prework-item__list">
                            <?php foreach($work['predesign_work_description'] as $desc) { ?>
                            <li><?php echo $desc['predesign_work_description_element'] ?></li>
                        <?php } ?>
                        </ul>
                        <?php
                        $prices = $work['predesign_work_prices'];
                        if(empty($prices)){
                        ?>
                        <div class="prework-item__bottom">
                            <span>БЕСПЛАТНО</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 12.0001L8.94975 16.9499L19.5563 6.34326" stroke="#3E683A" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                        <?php } else {
                            foreach($prices as $price) {?>
                        <ul class="prework-item__prices">
                            <li><?php echo $price['predesign_work_price_title'] ?><div class="value"><?php echo $price['predesign_work_price_number'] ?><span>₽</span></div></li>
                        </ul>
                        <?php } ?>
                        <button class="show-prices-btn">Смотреть цены</button>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <section class="choose-pack-section">
            <h2 class="choose-pack-section__header">Выберите пакет проектирования:</h2>
            <div class="single-pack-slider swiper">
                <div class="swiper-wrapper">
                    <?php $i = 0;
                    while(have_rows('пакеты_проектирования')): $i++; the_row(); ?>
                    
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
        <?php
        $query = new WP_Query(array('post_type' => 'service'));
        if($query->have_posts()){
            $counter = 0;
        ?>
        <section class="services-section" id="services">
            <div class="services-row four-row">
                <?php while ($query->have_posts() & $counter < 4){
                    $query->the_post();
                    $counter = $counter + 1;
                    get_template_part('template-parts/services-live-item', '', array('counter' => $counter));
                } ?>
               <!--  <img class="row-bg" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/offer-bg-1.webp" alt=""> -->
            </div>
            <div class="services-row fifth-row">
                <?php while ($query->have_posts() & $counter < 9){
                    $query->the_post();
                    $counter = $counter + 1;
                    get_template_part('template-parts/services-live-item', '', array('counter' => $counter));
                } ?>
            </div>
        </section>
        <?php
            wp_reset_postdata();
        } else { echo 'no posts'; } ?>
        <?php require "template-parts/quiz.php"; ?>
        <section class="project-section">
            <h2 class="project-section__header">Наши проекты</h2>
            <?php $counter = 0;
            foreach (get_field('projects_list') as $project) {
                $counter++; ?>
                <div class="project-item <?php if($counter % 2 == 0) { echo 'reverse'; } ?>">
                    <div class="project-item__info">
                        <div>
                            <p class="project-item__header">проект</p>
                            <p class="project-item__name">“<?php echo $project['project_name'] ?>”</p>
                        </div>
                        <div>
                            <p class="project-item__row"><span>Реализация</span><span><?php echo $project['project_year'] ?></span></p>
                            <p class="project-item__row"><span>Площадь</span><span><?php echo $project['project_size'] ?> соток</span></p>
                        </div>
                    </div>
                    <div class="<?php if($counter % 2 == 0) { echo 'project-slider-reverse'; } else { echo 'project-slider'; } ?> swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide info-slide">
                                <div class="project-item__info">
                                    <div>
                                        <p class="project-item__header">проект</p>
                                        <p class="project-item__name">“<?php echo $project['project_name'] ?>”</p>
                                    </div>
                                    <div>
                                        <p class="project-item__row"><span>Реализация</span><span><?php echo $project['project_year'] ?></span></p>
                                        <p class="project-item__row"><span>Площадь</span><span><?php echo $project['project_size'] ?> соток</span></p>
                                    </div>
                                </div>
                            </div>
                            <?php foreach($project['project_images'] as $image) { ?>
                                <div class="swiper-slide">
                                    <img class="project-item__img" src="<?php echo $image['project_image'] ?>" alt="фото проекта">
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
        <section class="feedback-block">
            <img class="feedback-block__bg" src="<?= get_field('подложка_под_блок_обратной_связи','option') ?>" alt="feedback background">
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
                    <p class="about-block__desc"><?= get_field("about_us", get_option('page_on_front')) ?></p>
                    <div class="about-block__img mobile">
                        <img src="<?= get_field("about_image", get_option('page_on_front')) ?>" alt="Никита Голубева">
                    </div>
                    <div class="about-block__grid">
                     <?php while(have_rows("about_numbers", get_option('page_on_front'))): the_row(); ?>
                           <div class="about-item">
                            <span class="about-item__number"><?= get_sub_field("number"); ?></span>
                            <span class="about-item__text"><?= get_sub_field("description"); ?></span>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="about-block__img desc">
                    <img src="<?= get_field("about_image", get_option('page_on_front')) ?>" alt="Никита Голубева">
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();