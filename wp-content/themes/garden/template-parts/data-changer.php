<div class="popup-wrapper authorization-wrapper data-changer-wrapper">
    <div class="popup-container">
        <section class="popup-block authorization-page-1 active">
            <div class="popup-block__header">
                <h3>Изменение данных</h3>
            </div>
            <form class="validate-form">
                <div class="input-container">
                    <label for="login-email">ФИО</label>
                    <input class="text-input validate-input" type="text" data-type="text" data-required="true" name="account-name" id="account-name" placeholder="Введите данные">
                </div>
                <div class="input-container">
                    <label for="login-email">Телефон</label>
                    <input class="telephone-input validate-input" type="text" data-type="telephone" data-required="true" name="account-phone" id="account-phone" placeholder="Введите данные">
                </div>
                <div class="input-container">
                    <label for="login-email">E-mail</label>
                    <input class="text-input validate-input" type="email" data-type="email" data-required="true" name="account-email" id="account-email" placeholder="Введите данные">
                </div>
                <div class="popup-block__bottom">
                    <button class="popup-block__bottom__btn confirmation-btn change-btn hover-background" data-page="2" type="button">сохранить изменения</button>
                </div>
            </form>
        </section>
        <section class="popup-block big authorization-page-2">
            <div class="popup-block__header">
                <h3>Изменение данных</h3>
            </div>
            <form class="validate-form">
                <p class="text">На вашу почту отправлено письмо с кодом подтверждения изменения данных. Введите его ниже.</p>
                <div class="code-container pin-code">
                    <input class="js-pin-input" id="change-pin-input-1" type="number" placeholder="*" maxlength="1" autofocus>
                    <input class="js-pin-input" id="change-pin-input-2" type="number" placeholder="*" maxlength="1">
                    <input class="js-pin-input" id="change-pin-input-3" type="number" placeholder="*" maxlength="1">
                    <input class="js-pin-input" id="change-pin-input-4" type="number" placeholder="*" maxlength="1">
                </div>
            </form>
        </section>
        <section class="popup-block big authorization-page-3 success-change">
            <div class="popup-block__header">
                <h3>Данные успешно изменены!</h3>
            </div>
            <form class="validate-form">
                <svg width="126" height="125" viewBox="0 0 126 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="63" cy="62.5" r="46" stroke="#3E683A" stroke-width="3" />
                    <path d="M33 64.5L52.5 84L91.5 45" stroke="#3E683A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </form>
        </section>
        <button class="popup-container__back-btn hidden">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 7L9 12L14 17" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Назад</span>
        </button>
        <div class="popup-container__cross-block  js-close-changer">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.913 1.02972L8.00002 6.94272L2.08702 1.02972C1.9448 0.899583 1.75785 0.82933 1.56513 0.8336C1.3724 0.837871 1.18875 0.916335 1.05244 1.05265C0.916126 1.18896 0.837662 1.37261 0.833392 1.56534C0.829121 1.75806 0.899374 1.94501 1.02952 2.08722L6.93952 8.00022L1.02802 13.9117C0.955794 13.9806 0.89806 14.0631 0.858209 14.1546C0.818357 14.246 0.797191 14.3445 0.795956 14.4443C0.79472 14.5441 0.81344 14.6431 0.851014 14.7355C0.888589 14.8279 0.944259 14.9119 1.01475 14.9825C1.08525 15.0531 1.16914 15.1089 1.26151 15.1466C1.35388 15.1843 1.45285 15.2031 1.55261 15.202C1.65237 15.2009 1.7509 15.1799 1.84242 15.1402C1.93393 15.1005 2.01659 15.0428 2.08552 14.9707L8.00002 9.05923L13.913 14.9722C14.0552 15.1024 14.2422 15.1726 14.4349 15.1683C14.6276 15.1641 14.8113 15.0856 14.9476 14.9493C15.0839 14.813 15.1624 14.6293 15.1666 14.4366C15.1709 14.2439 15.1007 14.0569 14.9705 13.9147L9.05752 8.00172L14.9705 2.08722C15.0427 2.0184 15.1005 1.93583 15.1403 1.84437C15.1802 1.75291 15.2013 1.6544 15.2026 1.55464C15.2038 1.45489 15.1851 1.35589 15.1475 1.26347C15.1099 1.17105 15.0543 1.08708 14.9838 1.01648C14.9133 0.945886 14.8294 0.890096 14.737 0.852391C14.6447 0.814686 14.5457 0.795826 14.4459 0.79692C14.3462 0.798014 14.2476 0.81904 14.1561 0.858762C14.0646 0.898484 13.9819 0.9561 13.913 1.02822V1.02972Z" />
            </svg>
        </div>
    </div>
</div>