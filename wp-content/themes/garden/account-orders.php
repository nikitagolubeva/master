<?
/**
 * Template name: account-orders
 **/
get_header();
require_once "template-parts/breadcrumb.php";
require_once "template-parts/product-popup.php";
?>

    <div class="wrapper">
        <?php get_breadcrumb(["<p>Личный кабинет</p>"]); ?>
        <main class="account">
            <h1 class="account__header desc">Мои заказы</h1>
            <h1 class="account__header mobile">МОИ ЗАКАЗЫ</h1>
            <div class="account__container">
                <!-- <ul class="account__nav" data-select="data">
                    <a href="/account" class="account__nav__item" data-select="data">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 16C7.58172 16 4 18.2386 4 21H20C20 18.2386 16.4183 16 12 16Z" fill="#24282E" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 13C14.7614 13 17 10.7614 17 8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8C7 10.7614 9.23858 13 12 13Z" fill="#24282E" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Данные профиля</span>
                    </a>
                    <a href="/orders" class="account__nav__item active" data-select="orders">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5 21L7 7.5H18L20 21H5ZM16.5303 12.5303C16.8232 12.2374 16.8232 11.7626 16.5303 11.4697C16.2374 11.1768 15.7626 11.1768 15.4697 11.4697L11 15.9393L9.53033 14.4697C9.23744 14.1768 8.76256 14.1768 8.46967 14.4697C8.17678 14.7626 8.17678 15.2374 8.46967 15.5303L10.4697 17.5303C10.7626 17.8232 11.2374 17.8232 11.5303 17.5303L16.5303 12.5303Z" fill="#24282E" />
                            <path d="M10 7.5V5.5C10 4.11929 11.1193 3 12.5 3V3C13.8807 3 15 4.11929 15 5.5V7.5" stroke="#24282E" stroke-width="1.5" />
                        </svg>
                        <span>Мои заказы</span>
                    </a>
                    <a href="/account-password" class="account__nav__item" data-select="password">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 11V7.88889C8 6.85749 8.42143 5.86834 9.17157 5.13903C9.92172 4.40972 10.9391 4 12 4C13.0609 4 14.0783 4.40972 14.8284 5.13903C15.5786 5.86834 16 6.85749 16 7.88889V11" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M5 12C5 11.4477 5.44772 11 6 11H18C18.5523 11 19 11.4477 19 12V20C19 20.5523 18.5523 21 18 21H6C5.44772 21 5 20.5523 5 20V12Z" fill="#24282E" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>Сменить пароль</span>
                    </a>
                </ul> -->
                <div>
                    <section class="order-section">
                        <p class="order-section__text">
                            Нет заказов
                        </p>
                        <div class="order-section__container">
                            <?php  
                            
                            $args = array(
                                    'customer_id' => get_current_user_id(),
                                    'limit' => -1, 
                            );
                            $orders = wc_get_orders($args);
                            foreach($orders as $order) {
                            $data = $order->get_data(); ?>
                                
                                
                                <div class="account-order-item">
                                <div class="account-order-item__header">
                                    <p>Заказ № <?= $data['id'] ?></p>
                                    <p>Сумма <?= $order->get_total() ?> ₽</p>
                                </div>
                                <p class="account-order-item__date"><?= $order->order_date ?></p>
                                <div class="account-order-item__statuses">
                                    <p><?= wc_get_order_statuses()['wc-' . $data['status']] ?></p>
                                </div>
                                <div class="account-order-item__goods">
                                    <?php foreach ( $order->get_items() as $item_id => $item ) { ?>
                                    <?php  $product        = $item->get_product(); ?>
                                    <div class="account-order-product">
                                        <div class="account-order-product__container">
                                            <img class="account-order-product__img" src="<?= get_the_post_thumbnail_url($product->get_id()) ?>" alt="изображение продукта">
                                            <div class="account-order-product__info">
                                                <div class="account-order-product__header">
                                                    <p class="account-order-product__name"><?= $item->get_name(); ?></p>
                                                    <p class="account-order-product__amount">Количество<span><?= $item->get_quantity(); ?></span></p>
                                                    <p class="account-order-product__amount tablet">Кол-во<span><?= $item->get_quantity(); ?></span></p>
                                                </div>
                                                
                                                <p class="account-order-product__price desc"><?= $product->get_price(); ?> ₽/шт</p>
                                                <p class="account-order-product__price mobile"><?= $product->get_price(); ?> ₽/шт x <?= $item->get_quantity(); ?> = <?= $item->get_total(); ?> ₽</p>
                                                <div class="account-order-product__extra-info">
                                                    <p>Артикул: <span><?= $product->get_sku() ?></span></p>
                                                    <p>Сорт: <span><?= get_field('подсорт',$product->get_id()) ?></span></p>
                                                </div>
                                                <div class="account-order-product__statuses">
                                                    <p><?=  $product->is_in_stock() ? "В наличии" : "Нет в наличии" ?></p>
                                                    <p>Контейнер <?= get_field('контейнер',  $product->get_id()) ?></p>
                                                </div>
                                                <p class="account-order-product__desc">
                                                    <?= get_post($product->get_id())->post_content ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="account-order-product__statuses">
                                            <p><?=  $product->is_in_stock() ? "В наличии" : "Нет в наличии" ?></p>
                                            <p>Контейнер <?= get_field('контейнер',  $product->get_id()) ?></p>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <button class="account-order-item__repeat-btn">ПОВТОРИТЬ ЗАКАЗ</button>
                            </div>
                            <?php }
                            
                            ?>
                        </div>
                    </section>
                </div>
            </div>
        </main>
    </div>

<?php
get_footer();