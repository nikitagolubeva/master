<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package garden
 */

?>
<footer class="footer">
    <div class="wrapper">
        <div class="footer__content">
            <nav class="footer__nav">
                <h5>Меню</h5>
                <ul>
                    <li><a href="/">Главная</a></li>
                    <li><a href="/landscape-design">Ландшафтный дизайн</a></li>
                    <li><a href="/catalog">Каталог</a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/blog">Блог</a></li>
                    <li><a href="/cart">Корзина</a></li>
                    <li><a href="/contacts/">Контакты</a></li>
                    <li>
                        <a class="authorization-button">
                            Личный кабинет
                        </a>
                        <a href="/account" class="profile-link">
                            Личный кабинет
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="footer__addresses">
                <h5>Адреса</h5>
                <div>
                    <?php
                    
                    while(have_rows("адреса", "option")) {
                        the_row();
                         $ad = get_sub_field('адрес');
                         $work = get_sub_field('режим_работы');
                         $tel = get_sub_field('телефон');?>
                         <div>
                        <div class="address-item">
                            <img loading="lazy" src="/resourses/map.svg" alt="map">
                            <span><?= $ad ?></span>
                        </div>
                        <div class="address-item">
                            <img loading="lazy" src="/resourses/clock.svg" alt="clock">
                            <span><?= $work ?></span>
                        </div>
                         <div class="address-item telephone">
                            <svg width="24" height="24" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.1653 13.5601C29.803 22.648 22.648 29.803 13.5601 32.1653C10.0162 33.0866 7 30.0316 7 26.37C7 24.6469 8.40942 23.2813 10.1012 22.9544C10.2827 22.9194 10.463 22.8813 10.6422 22.8402C12.0663 22.5141 13.6063 22.7987 14.6393 23.8317L15.4072 24.5996C19.4226 22.678 22.678 19.4226 24.5996 15.4072L23.8317 14.6393C22.7987 13.6063 22.5141 12.0663 22.8402 10.6422C22.8813 10.463 22.9194 10.2827 22.9544 10.1012C23.2813 8.40942 24.6469 7 26.37 7C30.0316 7 33.0866 10.0163 32.1653 13.5601Z" fill="white" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <a href="tel:<?= $tel ?>"><span><?= $tel ?></span></a>
                        </div>
                    </div>
                    <?php }
                    
                    ?>
                   
                    
                </div>
            </div>
            <div class="footer__contacts">
                <h5>Контакты</h5>
                <?php while(have_rows("телефон2", "option")): the_row();
                $phone = get_sub_field("телефон");
                ?>
                <a href="tel:<?= $phone ?>"><?= $phone ?></a>
                
                <?php endwhile; ?>
                <a href="mailto:<?= get_field("почта", "option") ?>"><?= get_field("почта", "option") ?></a>
                <div class="footer__contacts__media">
                    <?php while(have_rows('соцсети','option')): the_row(); ?>
                    <a href="<?= get_sub_field('ссылка') ?>" target="_blank" >
                        <?= get_sub_field('иконка') ?>
                    </a>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="footer__copyright">
                <p>© Садовый центр Никиты Голубевой,<br>2018—<?= date("Y") ?></p>
            </div>
            <a class="footer__logo" href="/">
                <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/logo-white.svg" alt="logo">
            </a>
            <div class="footer__info">
                <a href="#">Политика конфиденциальности</a>
                <a href="https://terexov.ru/">Создание сайта terexov</a>
            </div>
        </div>
</footer>
<?php wp_footer(); ?>

<script src="//cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8" defer></script>

<!-- Begin LeadBack code {literal} -->
<script>
    var _emv = _emv || [];
    _emv['campaign'] = '57d52315bb7494b25a79d775';

    (function() {
        var em = document.createElement('script'); em.type = 'text/javascript'; em.async = true;
        em.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'leadback.ru/js/leadback.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(em, s);
    })();
</script>
<!-- End LeadBack code {/literal} -->
</body>
</html>