<?
/**
 * Template name: favorite
 **/
get_header();
require_once "template-parts/breadcrumb.php";
require_once "template-parts/product-popup.php";
?>

    <div class="wrapper favorite-page-wrapper">
        <?php get_breadcrumb(["<p>Избранное</p>"]); ?>
        <main class="favorite-page">
            <h1 class="catalog__header">ИЗБРАННОЕ</h1>
            <p class="favorite-page__text">
                Нет товаров в избранном
            </p>
            <section class="favorite-page__container">
                <?php
                        if (is_user_logged_in()) {
                            $fav = get_user_meta(get_current_user_id(), 'favorite', true);
                            $res = [];
                            if (!empty($fav)) {
                                $res  = $fav;
                                $args = ["post_type" => "product", "post__in" => $res];
                                
                                $query = new WP_Query($args);
                                        
                                while($query->have_posts()) :
                                    $query->the_post(); ?>
                                        <div class="swiper-slide">
                                           <?php require "template-parts/product-card.php"; ?>
                                        </div>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            }
                            
                        }
                        
                    ?>
            </section>
        </main>
    </div>

<?php
get_footer();