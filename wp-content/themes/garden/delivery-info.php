<?
/**
 * Template name: delivery-info
 **/
get_header();
require_once "template-parts/breadcrumb.php";
require_once "template-parts/feedback-popup.php";
?>

    <div class="wrapper">
        <?php get_breadcrumb(["<p>Доставка и оплата</p>"]); ?>
        <main class="delivery-page">
            <h1 class="delivery-page__header">Доставка</h1>
            <h2 class="subheader pickup-header">САМОВЫВОЗ:</h2>
            <div class="pickup-container">
                <?php while(have_rows('самовывоз')): the_row(); ?>
                <div class="address-item">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2493 25.8682L19.9997 34.1668L11.7501 25.8682C7.19398 21.285 7.19398 13.8541 11.7501 9.2709C16.3062 4.68769 23.6931 4.68769 28.2493 9.2709C32.8054 13.8541 32.8054 21.285 28.2493 25.8682ZM19.9997 23.3335C23.2213 23.3335 25.833 20.7218 25.833 17.5002C25.833 14.2785 23.2213 11.6668 19.9997 11.6668C16.778 11.6668 14.1663 14.2785 14.1663 17.5002C14.1663 20.7218 16.778 23.3335 19.9997 23.3335Z" fill="#3E683A" />
                        <path d="M19.9997 34.1668L18.9359 35.2243C19.2174 35.5076 19.6003 35.6668 19.9997 35.6668C20.399 35.6668 20.7819 35.5076 21.0635 35.2243L19.9997 34.1668ZM28.2493 25.8682L29.3131 26.9257L28.2493 25.8682ZM11.7501 25.8682L12.8139 24.8107L11.7501 25.8682ZM11.7501 9.2709L10.6863 8.21339V8.21339L11.7501 9.2709ZM28.2493 9.2709L29.3131 8.21339V8.21339L28.2493 9.2709ZM21.0635 35.2243L29.3131 26.9257L27.1855 24.8107L18.9359 33.1093L21.0635 35.2243ZM10.6863 26.9257L18.9359 35.2243L21.0635 33.1093L12.8139 24.8107L10.6863 26.9257ZM10.6863 8.21339C5.54858 13.3817 5.54858 21.7574 10.6863 26.9257L12.8139 24.8107C8.83938 20.8125 8.83938 14.3266 12.8139 10.3284L10.6863 8.21339ZM29.3131 8.21339C24.1704 3.0402 15.8289 3.0402 10.6863 8.21339L12.8139 10.3284C16.7835 6.33519 23.2158 6.33519 27.1855 10.3284L29.3131 8.21339ZM29.3131 26.9257C34.4508 21.7574 34.4508 13.3817 29.3131 8.21339L27.1855 10.3284C31.16 14.3266 31.16 20.8125 27.1855 24.8107L29.3131 26.9257ZM24.333 17.5002C24.333 19.8934 22.3929 21.8335 19.9997 21.8335V24.8335C24.0498 24.8335 27.333 21.5502 27.333 17.5002H24.333ZM19.9997 13.1668C22.3929 13.1668 24.333 15.1069 24.333 17.5002H27.333C27.333 13.4501 24.0498 10.1668 19.9997 10.1668V13.1668ZM15.6663 17.5002C15.6663 15.1069 17.6064 13.1668 19.9997 13.1668V10.1668C15.9496 10.1668 12.6663 13.4501 12.6663 17.5002H15.6663ZM19.9997 21.8335C17.6064 21.8335 15.6663 19.8934 15.6663 17.5002H12.6663C12.6663 21.5502 15.9496 24.8335 19.9997 24.8335V21.8335Z" fill="#3E683A" />
                    </svg>
                    <div>
                        <h5><?= get_sub_field('адрес') ?></h5>
                        <a class="link" href="<?= get_sub_field('схема_проезда') ?>">
                            <span>Схема проезда</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 17L15 12L10 7" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <h2 class="subheader delivery-header">ДОСТАВКА ТРАНСПОРТНОЙ КОМПАНИЕЙ:</h2>
            <div class="delivery-container">
                <?php while(have_rows('доставка_транспортной_компанией')): the_row(); ?>
                <div class="delivery-item">
                    <img class="delivery-item__img" src="<?= get_sub_field('лого') ?>" alt="Грузовичков">
                    <p class="delivery-item__name"><?= get_sub_field('название') ?></p>
                    <p class="delivery-item__desc"><?= get_sub_field('цена') ?></p>
                    <a class="delivery-item__btn js-feedback-popup" href="#" onclick="return false;">Рассчитать у&#160;менеджера</a>
                    <a class="delivery-item__link" href="<?= get_sub_field('ссылка') ?>">Перейти на сайт</a>
                </div>
                <?php endwhile; ?>
                <div class="delivery-item custom">
                    <p class="delivery-item__name">Согласовать доставку собственной ТК:</p>
                    <p class="delivery-item__desc">Единый номер</p>
                    <a class="phone" href="tel:<?= get_field('номер_для_согласования_собственной_доставки') ?>"><?= get_field('номер_для_согласования_собственной_доставки') ?> </a>
                </div>
            </div>
            <section class="note-block">
               
                <ul>
                     <?= get_field("пояснение_к_оплате") ?>
               </ul>
            </section>
            <section class="payment-info-block">
                <h2 class="payment-info-block__header">Оплата</h2>
                <div class="payment-info-block__container">
                    <?php while(have_rows("способы_оплаты", "option")): the_row();
                    if (get_sub_field("спрятать")) {
                        continue;
                    }
                    ?>
                    <div class="payment-info-block__item">
                        <?= get_sub_field("картинка") ?>
                        <p><?= get_sub_field("название") ?></p>
                    </div>
                    <?php endwhile; ?>
            </section>
        </main>
    </div>
<?php
get_footer();