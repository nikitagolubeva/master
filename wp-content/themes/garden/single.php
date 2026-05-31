<?
/**
 * Template name: single-blog
 **/
get_header();
require_once "template-parts/breadcrumb.php";
?>

    <div class="wrapper">
        <?php get_breadcrumb(["<a href='/blog'>Блог</a>", "<p>Статья</p>"]); ?>
    </div>
    <main class="single-blog-page">
        <div class="wrapper">
            <h1 class="single-blog-page__header">Статья</h1>
            <a class="single-blog-page__back-btn hover-color" href="/blog">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 7L9 12L14 17" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Ко всем статьям</span>
            </a>
            <div class="single-blog-page__container">
                <div class="single-blog-page__content">
                    <img class="single-blog-page__content__img" src="<?= get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="картинка статьи">
                    <h2 class="single-blog-page__content__header"><?= the_title() ?></h2>
                    <p class="single-blog-page__content__text"><?= get_the_content() ?></p>
                </div>
                <div class="single-blog-page__blogs">
                    <?php
                      $args = ["post_type" => "post", "posts_per_page" => 3];

                        $query = new WP_Query($args);
                        global $post;
                        while ($query->have_posts()) {
                            $query->the_post();?>
                             <a href="<?= get_the_permalink() ?>" class="blog-item">
                                <img class="blog-item__img" src="<?= get_the_post_thumbnail_url($post->ID, 'full') ?>" alt="картинки блога">
                                <div class="blog-item__text-wrapper">
                                    <p class="blog-item__text"><?= the_title() ?></p>
                                </div>
                            </a>
                        <?php }
                        wp_reset_postdata();
                        ?>
                </div>
            </div>
            <section class="recommended-goods">
                <div class="recommended-goods__container">
                    <div class="swiper blog-product-slider">
                        <div class="swiper-wrapper">
                            <?php
                                    $args = ["post_type" => "product", "posts_per_page" => 8];
                                
                                        $query = new WP_Query($args);
                                        
                                        while($query->have_posts()) :
                                            $query->the_post(); ?>
                                            <div class="swiper-slide">
                                               <?php require "template-parts/product-card.php"; ?>
                                            </div>
                                        <?php
                                        endwhile;
                            
                                    ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
<?php
get_footer();