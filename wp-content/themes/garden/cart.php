<?
/**
 * Template name: cart
 **/
get_header();
require_once "template-parts/breadcrumb.php";
?>



<div class="wrapper">
        <?php get_breadcrumb(["<p>Корзина</p>"]); ?>
        <main class="cart-page">
            <h1 class="cart-page__header">корзина</h1>
            <section class="cart-page__container">
                <div class="cart-page__goods-container">
                    <?php
                    require "template-parts/loading.php";
                    ?>
                     <?php 
                    $total = 0;
                    $total_regular = 0;
                    $count = 0;
                      global $_product;
                      global $tt;
                      global $quantity;
                          foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                            
                                 $_product =  wc_get_product( $cart_item['data']->get_id()); 
                                 // print_r($_product);
                                $cid = $cart_item['data'];
                                $count++;
                                $total += $cid->get_price() * (int)$cart_item['quantity'];
                                $total_regular += $cid->get_regular_price() * (int)$cart_item['quantity'];
                                $tt = $cid->get_price() * (int)$cart_item['quantity'];
                                $quantity = (int)$cart_item['quantity'];
                                require "template-parts/cart-card.php";
                    } ?>
                    <p class="empty-text">Корзина пуста.</p>
                    <button class="cart-page__goods-container__clear-btn" type="button">Очистить корзину</button>
                </div>
                <div class="cart-page__info">
                    <?php
                    require "template-parts/loading.php";
                    ?>
                    <div class="cart-page__info__sum">
                        <p>Сумма заказа (<span class="js-cart-goods-counter"><?= $count ?></span>):</p>
                        <p class="sum"><span class="js-cart-sum"><?= $total ?></span> ₽</p>
                    </div>
                    <a class="cart-page__info__order-btn" href="/order">оформить заказ</a>
                    <a class="cart-page__info__back-btn" href="/catalog">ВЕРНУТЬСЯ К ПОКУПКАМ</a>
                    <p class="cart-page__info__subtext">Доставка осуществляется при заказе более чем на 5000 ₽, подробнее об условиях можно узнать в разделе</p>
                </div>
            </section>
        </main>
    </div>

<?php
get_footer();