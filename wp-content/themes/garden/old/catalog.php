<?
/**
 * Template name: catalog
 **/
get_header();
require_once "template-parts/breadcrumb.php";
?>


 <div class="wrapper">
        <?php get_breadcrumb(["<p>Каталог</p>"]); ?>
        <main class="catalog">
            <h1 class="catalog__header">Каталог</h1>
            <section class="catalog__container">
                <div class="catalog__mobile-search">
                    <div class="search-input-container">
                        <input class="search-input js-mobile-search" type="text" placeholder="Поиск">
                        <svg class="js-search-goods" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#7E899A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <button class="category-button">
                        <span>категории</span>
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
                </div>
                <div class="catalog-categories" data-default="<?= $_GET['category'] ?>">
                    <ul>
                        <li class="catalog-categories__item hidden" data-category="">Все</li>
                        <?php
                        
                         $args = array(
                        "taxonomy" => "product_cat",
                        "exclude" => "16",
                        'hide_empty' => false
                    );
    
                    $product_categories = get_terms($args);
                    
                     foreach ($product_categories as $product_category) {
                          ?>
                         
                         <li class="catalog-categories__item" data-category="<?= $product_category->term_id ?>"><?= $product_category->name ?> <span> <?= $product_category->count ?></span></li>
                         
                   <?php  }
                        
                        ?>
                    <button class="catalog-categories__button" type="button">
                            <span class="catalog-categories__button__show">Развернуть каталог</span>
                            <span class="catalog-categories__button__hide">Свернуть каталог</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 10L12 15L17 10" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                    </button>
                  </ul>
                </div>
                <div class="catalog__goods">
                    <div class="search-input-container">
                        <input class="search-input js-desc-search" type="text" placeholder="Поиск">
                        <svg class="js-search-goods" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21L16.6569 16.6569M16.6569 16.6569C18.1046 15.2091 19 13.2091 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19C13.2091 19 15.2091 18.1046 16.6569 16.6569Z" stroke="#7E899A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="catalog__goods__container">
                        
                         <?php
                        /* $args = ["post_type" => "product", "posts_per_page" => -1];
                            if (isset($_GET['value'])) {
                                $args['_name_like'] = $_GET['value'];
                            }
                            $query = new WP_Query($args);
                            
                            while($query->have_posts()) :
                                $query->the_post();
                              require "template-parts/product-card.php";
                            endwhile;
                            */
                                        
                        ?> 
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

<?php
get_footer();