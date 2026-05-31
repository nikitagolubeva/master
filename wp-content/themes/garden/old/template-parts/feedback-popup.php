<div class="popup-wrapper feedback-popup">
    <div class="popup-container">
        <section class="popup-block feedback-form-block">
            <h3 class="popup-block__header">Оставить заявку</h3>
            <form class="validate-form">
                <div class="input-container">
                    <input class="validate-input telephone-input" data-type="telephone" type="text" placeholder="Номер телефона" id="feedback-phone" name="feedback-phone">
                </div>
                <div class="input-container">
                    <input type="text" class="validate-input" data-type="email" placeholder="E-mail" id="feedback-email" name="email">
                </div>
                <div class="comment">
                    <textarea name="feedback-comment" id="feedback-comment" placeholder="Напишите свой вопрос, опишите товар или услугу, который вас интресует"></textarea>
                </div>
                <button class="popup-block__btn js-send-feedback-form" type="button">оставить заявку</button>
                <p class="popup-block__subtext">Нажимая на кнопку “Оставить заявку”, я даю согласие на обработку персональных данных</p>
            </form>
        </section>
        <section class="popup-block sended-block hidden">
            <h3 class="popup-block__header">Спасибо за вашу заявку</h3>
            <p class="popup-block__text">Мы получили ваш запрос, в ближаешее время с вами свяжется наш менеджер и проконсультирует вас.</p>
            <button class="popup-block__btn js-close-popup" type="button">Хорошо</button>
        </section>
        <svg class="popup-block__cross-block js-close-popup" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18 18L6 6" stroke="#14181F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M18 6L6 18" stroke="#14181F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
</div>