<?
/**
 * Template name: about
 **/
get_header();
require_once "template-parts/breadcrumb.php";
?>

    <div class="wrapper">
        <?php get_breadcrumb(["<p>О нас</p>"]); ?>
    </div>
    <main class="about-page">
        <div class="wrapper">
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
            <section class="advantages">
                <?php while(have_rows("преимущества",get_option('page_on_front'))): the_row(); ?>
                        <div class="advantage-item">
                            <div class="advantage-item__img">
                                <img src="<?= get_sub_field("иконка_темная") ?>" alt="advantage1">
                            </div>
                            <div class="advantage-item__info">
                                <h5 class="advantage-item__header"><?= get_sub_field("название") ?></h5>
                                <!-- <p class="advantage-item__desc"><?= get_sub_field("описание") ?></p> -->
                            </div>
                        </div>
                        <?php endwhile; ?>
                <!-- <div class="advantage-item">
                    <img class="advantage-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/advantage-1.svg" alt="">
                    <div class="advantage-item__info">
                        <p class="advantage-item__header">ПРЕДЗАКАЗ</p>
                        <p class="advantage-item__text">На сезонные растения и поставки под заказ</p>
                    </div>
                </div>
                <div class="advantage-item">
                    <img class="advantage-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/advantage-2.svg" alt="">
                    <div class="advantage-item__info">
                        <p class="advantage-item__header">СКИДКИ %</p>
                        <p class="advantage-item__text">На оптовые и комплексные заказы</p>
                    </div>
                </div>
                <div class="advantage-item">
                    <img class="advantage-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/advantage-3.svg" alt="">
                    <div class="advantage-item__info">
                        <p class="advantage-item__header">оплата онлайн</p>
                        <p class="advantage-item__text">Возможность заказать и оплатить онлайн</p>
                    </div>
                </div>
                <div class="advantage-item">
                    <img class="advantage-item__img" src="<?//= get_template_directory_uri() ?>/Garden/dist/resourses/advantage-4.svg" alt="">
                    <div class="advantage-item__info">
                        <p class="advantage-item__header">рассрочка</p>
                        <p class="advantage-item__text">Для гос.структур и частных клиентов </p>
                    </div>
                </div> -->
            </section>
        </div>
        <section class="landscape-section">
            <div class="landscape-section__container">
                <?php while(have_rows('баннеры')) : the_row(); ?>
                <div class="hover-scale">
                    <img src="<?= get_sub_field('изображение') ?>" alt="landscape image">
                </div>
                <?php endwhile; ?>
            </div>
        </section>
         <?php
        $query = new WP_Query(array('post_type' => 'service'));
        if($query->have_posts()){
            $counter = 0;
        ?>
        <section class="services-section">
            <div class="services-row four-row">
                <?php while ($query->have_posts() & $counter < 4){
                    $query->the_post();
                    $counter = $counter + 1;
                    get_template_part('template-parts/services-live-item', '', array('counter' => $counter));
                } ?>
                <!-- <img class="row-bg" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/offer-bg-1.webp" alt=""> -->
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
        <div class="wrapper">
            <section class="team-section">
                <h2 class="team-section__header">Наша команда профессионалов</h2>
                <div class="team-section__container">
                    <?php 
                    
                    while(have_rows('команда')) : the_row(); ?>
                        <div class="team-item">
                            <img class="team-item__img" src="<?= get_sub_field('изображение') ?>" alt="аватар члена команды">
                            <p class="team-item__name"><?= get_sub_field('фио') ?></p>
                            <p class="team-item__role"><?= get_sub_field('должность') ?></p>
                        </div>
                    <?php endwhile;; ?>
                </div>
            </section>
            
        </div>
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
        <section class="blog-block">
           <?php $query = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3]); 
            while($query->have_posts()): $query->the_post();
             ?>
            <a href="<?= get_the_permalink() ?>" class="blog-item">
                <img class="blog-item__img" src="<?= get_the_post_thumbnail_url() ?>" alt="картинки блога">
                <div class="blog-item__text-wrapper">
                    <p class="blog-item__text"><?= get_the_title(); ?></p>
                </div>
            </a>
            <?php endwhile; ?>
            <a class="blog-block__link" href="#">
                <span>Перейти в</span> блог
            </a>
        </section>
    </main>
    
<?php
get_footer();