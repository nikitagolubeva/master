<?
/**
 * Template name: requisites
 **/
get_header();
require_once "template-parts/breadcrumb.php";
?>

    <div class="wrapper">
        <?php get_breadcrumb(["<a href='/contacts'>Контакты</a>", "<p>Реквизиты</p>"]); ?>
        <main class="contacts-page requisites-page">
            <h1 class="contacts-page__header">Наши реквизиты</h1>
            <section class="requisites-grid">
                <div class="requisites-item">
                    <p class="requisites-item__label">Наименование организации</p>
                    <p class="requisites-item__text"><?= get_field('наименование_организации') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">ИНН</p>
                    <p class="requisites-item__text"><?= get_field('инн') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Полное наименование организации</p>
                    <p class="requisites-item__text"><?= get_field('полное_наименование_организации') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">ОГРНИП</p>
                    <p class="requisites-item__text"><?= get_field('огрнип') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Сфера деятельности ОКВЭД</p>
                    <p class="requisites-item__text"><?= get_field('сфера_деятельности_оквэд') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">ОКПО</p>
                    <p class="requisites-item__text"><?= get_field('окпо') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Юридический адрес</p>
                    <p class="requisites-item__text"><?= get_field('юридический_адрес') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">E-mail</p>
                    <p class="requisites-item__text"><?= get_field('e-mail') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Фактический адрес</p>
                    <p class="requisites-item__text"><?= get_field('фактический_адрес') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Сайт</p>
                    <p class="requisites-item__text">https://www.nikitagolubeva.ru</p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Телефоны</p>
                    <p class="requisites-item__text"><?= get_field('телефоны') ?></p>
                </div>
            </section>
            <h2 class="contacts-page__header second-header">Банковские реквизиты</h2>
            <section class="requisites-grid">
                <div class="requisites-item">
                    <p class="requisites-item__label">Банк</p>
                    <p class="requisites-item__text"><?= get_field('банк') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Р/счет</p>
                    <p class="requisites-item__text"><?= get_field('рсчет') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">ИНН</p>
                    <p class="requisites-item__text"><?= get_field('инн_банк') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">Кор/счет</p>
                    <p class="requisites-item__text"><?= get_field('корсчет') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">КПП</p>
                    <p class="requisites-item__text"><?= get_field('кпп') ?></p>
                </div>
                <div class="requisites-item">
                    <p class="requisites-item__label">БИК</p>
                    <p class="requisites-item__text"><?= get_field('бик') ?></p>
                </div>
            </section>
            <a class="requisites-button" href="<?= get_field('файл_реквизитов') ?>" download="">
                <span>СКАЧАТЬ реквизиты</span>
                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 12L12.5 17M12.5 17L17.5 12M12.5 17L12.5 4" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M6.5 20H18.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </main>
    </div>
    
<?php
get_footer();