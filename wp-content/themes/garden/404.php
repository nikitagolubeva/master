<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package garden
 */
global $header_color;
$header_color = 'white';
get_header();
?>

	<main class="not-found-page">
        <img class="not-found-page__bg" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/404_bg.webp" alt="bg">
        <div class="not-found-page__container">
            <h1 class="not-found-page__title">404</h1>
            <h5 class="not-found-page__text">Страница, которую вы ищете, не&nbsp;существует</h5>
            <a class="not-found-page__link" href="/">вернуться назад</a>
        </div>
    </main>

<?php
get_footer();
