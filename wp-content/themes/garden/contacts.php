<?
/**
 * Template name: contacts
 **/
get_header();
require_once "template-parts/breadcrumb.php";
?>

    <div class="wrapper">
        <?php get_breadcrumb(["<p>Контакты</p>"]); ?>
        <main class="contacts-page">
            <h1 class="contacts-page__header">Контакты</h1>
            <section class="phones-block">
                <?php foreach(get_field('contact_numbers') as $number) {?>
                <div class="phone-item">
                    <a href="tel:+79218863366" class="phone-item__phone"><?php echo $number['phone'] ?></a>
                    <span class="phone-item__name"><?php echo $number['title'] ?></span>
                </div>
                <?php } ?>
                <!-- <a class="link" href="/requisites">
                    <span>Реквизиты</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 17L15 12L10 7" stroke="#3E683A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a> -->
            </section>
            <section class="addresses-block">
                <?php foreach (get_field('towns') as $town) { ?>
                <div class="address-item">
                    <button class="address-item__btn js-show-contacts">
                        <span>Развернуть контакты</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10L12 15L17 10" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="address-item__btn js-hide-contacts">
                        <span>Свернуть контакты</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 14L12 9L7 14" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <h2 class="address-item__header"><?php echo $town['name'] ?></h2>
                    <div class="address-item__info">
                        <div class="address-item__line address-item__address-line">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.2483 25.868L19.9987 34.1666L11.7491 25.868C7.193 21.2848 7.193 13.8539 11.7491 9.27072C16.3052 4.68751 23.6922 4.68751 28.2483 9.27072C32.8044 13.8539 32.8044 21.2848 28.2483 25.868ZM19.9987 23.3333C23.2204 23.3333 25.832 20.7216 25.832 17.5C25.832 14.2783 23.2204 11.6666 19.9987 11.6666C16.777 11.6666 14.1654 14.2783 14.1654 17.5C14.1654 20.7216 16.777 23.3333 19.9987 23.3333Z" fill="#3E683A" />
                                <path d="M19.9987 34.1666L18.9349 35.2242C19.2165 35.5074 19.5993 35.6666 19.9987 35.6666C20.3981 35.6666 20.7809 35.5074 21.0625 35.2242L19.9987 34.1666ZM28.2483 25.868L29.3121 26.9255L28.2483 25.868ZM11.7491 25.868L12.8129 24.8105L11.7491 25.868ZM11.7491 9.27072L10.6853 8.21321V8.21321L11.7491 9.27072ZM28.2483 9.27072L29.3121 8.21321V8.21321L28.2483 9.27072ZM21.0625 35.2242L29.3121 26.9255L27.1845 24.8105L18.9349 33.1091L21.0625 35.2242ZM10.6853 26.9255L18.9349 35.2242L21.0625 33.1091L12.8129 24.8105L10.6853 26.9255ZM10.6853 8.21321C5.5476 13.3815 5.5476 21.7572 10.6853 26.9255L12.8129 24.8105C8.8384 20.8123 8.8384 14.3264 12.8129 10.3282L10.6853 8.21321ZM29.3121 8.21321C24.1695 3.04001 15.8279 3.04001 10.6853 8.21321L12.8129 10.3282C16.7825 6.33501 23.2149 6.33501 27.1845 10.3282L29.3121 8.21321ZM29.3121 26.9255C34.4498 21.7572 34.4498 13.3815 29.3121 8.21321L27.1845 10.3282C31.159 14.3264 31.159 20.8123 27.1845 24.8105L29.3121 26.9255ZM24.332 17.5C24.332 19.8932 22.3919 21.8333 19.9987 21.8333V24.8333C24.0488 24.8333 27.332 21.5501 27.332 17.5H24.332ZM19.9987 13.1666C22.3919 13.1666 24.332 15.1067 24.332 17.5H27.332C27.332 13.4499 24.0488 10.1666 19.9987 10.1666V13.1666ZM15.6654 17.5C15.6654 15.1067 17.6055 13.1666 19.9987 13.1666V10.1666C15.9486 10.1666 12.6654 13.4499 12.6654 17.5H15.6654ZM19.9987 21.8333C17.6055 21.8333 15.6654 19.8932 15.6654 17.5H12.6654C12.6654 21.5501 15.9486 24.8333 19.9987 24.8333V21.8333Z" fill="#3E683A" />
                            </svg>
                            <p class="address-item__text"><?php echo $town['address'] ?></p>
                        </div>
                        <div class="address-item__line">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 32C26.6274 32 32 26.6274 32 20C32 13.3726 26.6274 8 20 8C13.3726 8 8 13.3726 8 20C8 26.6274 13.3726 32 20 32ZM21 12.2857C21 11.7334 20.5523 11.2857 20 11.2857C19.4477 11.2857 19 11.7334 19 12.2857V20C19 20.5523 19.4477 21 20 21H27.7143C28.2666 21 28.7143 20.5523 28.7143 20C28.7143 19.4477 28.2666 19 27.7143 19H21V12.2857Z" fill="#3E683A" />
                            </svg>
                            <p class="address-item__text"><?php echo $town['work_time'] ?></p>
                        </div>
                        <div class="address-item__line">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.1653 13.5601C29.803 22.648 22.648 29.803 13.5601 32.1653C10.0162 33.0866 7 30.0316 7 26.37C7 24.6469 8.40942 23.2813 10.1012 22.9544C10.2827 22.9194 10.463 22.8813 10.6422 22.8402C12.0663 22.5141 13.6063 22.7987 14.6393 23.8317L15.4072 24.5996C19.4226 22.678 22.678 19.4226 24.5996 15.4072L23.8317 14.6393C22.7987 13.6063 22.5141 12.0663 22.8402 10.6422C22.8813 10.463 22.9194 10.2827 22.9544 10.1012C23.2813 8.40942 24.6469 7 26.37 7C30.0316 7 33.0866 10.0163 32.1653 13.5601Z" fill="#3E683A" stroke="#3E683A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="address-item__contacts">
                                <?php foreach ($town['contact_numbers'] as $number) { ?>
                                <p class="address-item__text">
                                    <a href="tel:"><?php echo $number['phone'] ?></a><span> — <?php echo $number['title'] ?></span>
                                </p>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="address-item__line">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.39787 11.297C7.54605 11.3378 7.69043 11.4022 7.82569 11.4914L17.5229 17.8852C19.0257 18.876 20.9743 18.876 22.4771 17.8852L32.1743 11.4914C32.3096 11.4022 32.454 11.3378 32.6021 11.297C32.0999 10.4536 31.1723 9.8877 30.1111 9.8877H9.88889C8.82767 9.8877 7.90009 10.4536 7.39787 11.297ZM33 14.5404L24.1284 20.3897C21.6238 22.0411 18.3761 22.0411 15.8716 20.3897L7 14.5404V27.0306C7 28.6085 8.2934 29.8877 9.88889 29.8877H30.1111C31.7066 29.8877 33 28.6085 33 27.0306V14.5404Z" fill="#3E683A" />
                            </svg>
                            <p class="address-item__text">
                                <a href="mailto:nikitagolubeva@mail.ru"><?php echo $town['email'] ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="address-item__map">
                        <iframe src="<?php echo $town['link'] ?>" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
                <?php } ?>
            </section>
        </main>
    </div>
<?php
get_footer();
