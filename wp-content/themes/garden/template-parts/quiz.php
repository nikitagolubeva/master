<section class="quiz-block">
    <h2 class="quiz-block__header">Рассчитать стоимость онлайн</h2>
    <form class="swiper steps-slider quiz-form">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="quiz-step step-1">
                    <div class="quiz-step__header">
                        <h5 class="quiz-step__header__name">Выберите интересующие услуги</h5>
                        <span class="quiz-step__header__number">Шаг 1 из 7</span>
                    </div>
                    <div class="quiz-step__content  quiz-step__overflow-content service-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <input type="radio" name="service" id="service1" value="Проектирование">
                                    <label for="service1" class="quiz-label">
                                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/service-1.webp" alt="Проектирование">
                                        <p>Проектирование</p>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <input type="radio" name="service" id="service2" value="Озеленение">
                                    <label for="service2" class="quiz-label">
                                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/service-2.webp" alt="Озеленение">
                                        <p>Озеленение</p>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <input type="radio" name="service" id="service3" value="Мощение">
                                    <label for="service3" class="quiz-label">
                                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/service-3.webp" alt="Мощение">
                                        <p>Мощение</p>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <input type="radio" name="service" id="service4" value="Благоустройство">
                                    <label for="service4" class="quiz-label">
                                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/service-4.webp" alt="Благоустройство">
                                        <p>Благоустройство</p>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <input type="radio" name="service" id="service5" value="Уход за садом">
                                    <label for="service5" class="quiz-label">
                                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/service-5.webp" alt="Уход за садом">
                                        <p>Уход за садом</p>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <input type="radio" name="service" id="service6" value="Контейнерное озеленение">
                                    <label for="service6" class="quiz-label">
                                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/service-6.webp" alt="Контейнерное озеленение">
                                        <p>Контейнерное озеленение</p>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <input type="radio" name="service" id="service7" value="Сад на крыше">
                                    <label for="service7" class="quiz-label">
                                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/service-7.webp" alt="Сад на крыше">
                                        <p>Сад на крыше</p>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <input type="radio" name="service" id="service8" value="Зимний сад">
                                    <label for="service8" class="quiz-label">
                                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/service-8.webp" alt="Зимний сад">
                                        <p>Зимний сад</p>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="service-item">
                                    <input type="radio" name="service" id="service9" value="Строительство прудов и водоемов">
                                    <label for="service9" class="quiz-label">
                                        <img loading="lazy" src="<?= get_template_directory_uri() ?>/Garden/dist/resourses/service-9.webp" alt="Строительство прудов и водоемов">
                                        <p>Строительство прудов и водоемов</p>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="quiz-step step-2">
                    <div class="quiz-step__header">
                        <h5 class="quiz-step__header__name">Выберите пакет проектирования:</h5>
                        <span class="quiz-step__header__number">Шаг 2 из 7</span>
                    </div>
                    <div class="quiz-step__content  quiz-step__overflow-content pack-slider">
                        <div class="swiper-wrapper">
                            
                          
                            
                              <?php $i = 0;
                    while(have_rows('пакеты_проектирования', 4568)): $i++; the_row(); ?>
                    
                     <div class="swiper-slide">
                        <div class="pack-item">
                            <input type="radio" name="pack" id="quiz-pack<?= $i ?>" value="<?= get_sub_field('название') ?>">
                            <label for="quiz-pack<?= $i ?>" class="quiz-label">
                                <p class="pack-item__header"><?= get_sub_field('название') ?></p>
                                <p class="pack-item__price"><?= get_sub_field('цена') ?> ₽</p>
                                <button class="pack-item__btn" type="button">Подробнее</button>
                                <ul class="pack-item__list">
                                    <?php while(have_rows('пункты')): the_row(); ?>
                                    <li><?= get_sub_field('пункт') ?></li>
                                    <?php endwhile; ?>
                                </ul>
                            </label>
                        </div>
                    </div>
                   <?php     endwhile; ?>
                            
                        
                        </div>
                        <div class="swiper-scrollbar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="quiz-step step-3">
                    <div class="quiz-step__header">
                        <h5 class="quiz-step__header__name">Укажите размер вашего участка</h5>
                        <span class="quiz-step__header__number">Шаг 3 из 7</span>
                    </div>
                    <div class="quiz-step__content quiz-step__overflow-content swiper size-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="size" id="size1" value="До 10 соток">
                                    <label for="size1" class="quiz-label">
                                        До 10 соток
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="size" id="size2" value="От 10 до 15 соток">
                                    <label for="size2" class="quiz-label">
                                        От 10 до 15 соток
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="size" id="size3" value="От 15 до 20 соток">
                                    <label for="size3" class="quiz-label">
                                        От 15 до 20 соток
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="size" id="size4" value="От 20 до 30 соток">
                                    <label for="size4" class="quiz-label">
                                        От 20 до 30 соток
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="size" id="size5" value="Более 30 соток">
                                    <label for="size5" class="quiz-label">
                                        Более 30 соток
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="quiz-step step-4">
                    <div class="quiz-step__header">
                        <h5 class="quiz-step__header__name">Укажите объем работ, если уже знаете их (размер дорожки, газона, площадки)</h5>
                        <span class="quiz-step__header__number">Шаг 4 из 7</span>
                    </div>
                    <div class="quiz-step__content">
                        <div class="quiz-step__content__input-with-btn">
                            <input type="text" class="quiz-step__input" id="desc1" name="description" placeholder="Описание работ">
                            <button class="quiz-block__next-btn arrow-hover-right" type="button">
                                <span class="quiz-block__next-btn__text">вперед</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="quiz-block__alert-text">
                                    Вы не выполнили шаг
                                </p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="quiz-step step-5">
                    <div class="quiz-step__header">
                        <h5 class="quiz-step__header__name">Когда планируете начать работы?</h5>
                        <span class="quiz-step__header__number">Шаг 5 из 7</span>
                    </div>
                    <?php $year = (int)date("Y"); 
                    
                    $month = date("m");
                    $season = 0;
                    switch($month) {
                        case "01":
                            case "02":
                                case "12":
                                $season = 1;
                                break;
                        case "03":
                        case "04":
                        case "05":
                            $season = 2;
                            break;
                        case "06":
                            case "07":
                                case "08":
                                    $season = 3;
                                    break;
                        case "09":
                            case "10":
                                case "11";
                                $season = 4;
                    }
                    
                    $seasons = [1 => "Зимой", 2 => "Весной", 3 => "Летом", 4 => "Осенью"];
                    
                    ?>
                    <div class="quiz-step__content  quiz-step__overflow-content swiper size-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="date" id="date1" value="Как можно быстрее">
                                    <label for="date1" class="quiz-label">
                                        Как можно быстрее
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="date" id="date2" value="Весной 2023">
                                    <label for="date2" class="quiz-label">
                                        <?= $seasons[$season] . ' ' . $year ?>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="date" id="date3" value="Летом 2023">
                                    <label for="date3" class="quiz-label">
                                            <?php 
                                        $year = $year + ((int) ($season / 4));
                                        $season = ($season % 4) + 1;
                                        ?>
                                        <?= $seasons[$season] . ' ' . $year ?>
                                        
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="date" id="date4" value="Осенью 2023">
                                    <label for="date4" class="quiz-label">
                                            <?php 
                                        $year = $year + ((int) ($season / 4));
                                        $season = ($season  % 4) + 1;
                                        ?>
                                         <?= $seasons[$season] . ' ' . $year ?>
                                    </label>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="size-item">
                                    <input type="radio" name="date" id="date5" value="Пока не знаю">
                                    <label for="date5" class="quiz-label">
                                        Пока не знаю
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-scrollbar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="quiz-step step-6">
                    <div class="quiz-step__header">
                        <h5 class="quiz-step__header__name">Укажите местонахождение вашего участка</h5>
                        <span class="quiz-step__header__number">Шаг 6 из 7</span>
                    </div>
                    <div class="quiz-step__content">
                        <div class="quiz-step__content__input-with-btn">
                            <input type="text" class="quiz-step__input arrow-hover-right" id="address1" name="address" placeholder="Примерный адрес">
                            <button class="quiz-block__next-btn" type="button">
                                <span class="quiz-block__next-btn__text">вперед</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <p class="quiz-block__alert-text">
                                    Вы не выполнили шаг
                                </p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="quiz-step step-7">
                    <div class="quiz-step__header">
                        <h5 class="quiz-step__header__name">Для получения результата укажите свои контактные данные</h5>
                        <span class="quiz-step__header__number">Шаг 7 из 7</span>
                    </div>
                    <div class="quiz-step__content">
                        <div class="input-container">
                            <label for="name1">Ваше имя</label>
                            <input type="text" class="quiz-step__input" data-type="text" name="name" id="name1" placeholder="Имя">
                        </div>
                        <div class="inputs-container">
                            <div class="input-container">
                                <label for="phone1">Номер телефона</label>
                                <input type="text" class="quiz-step__input telephone-input validate-input" name="telephone" data-type="telephone" id="phone1" placeholder="+7(___) ___-__-__">
                            </div>
                            <div class="input-container">
                                <label for="email1">E-mail</label>
                                <input type="text" class="quiz-step__input validate-input" data-type="email" name="email" id="email1" placeholder="E-mail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="quiz-step step-8">
                    <div class="quiz-step__content final">
                        <svg width="125" height="125" viewBox="0 0 125 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="62.5" cy="62.5" r="46" stroke="#3E683A" stroke-width="3" />
                            <path d="M32.5 64.5L52 84L91 45" stroke="#3E683A" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p>Ваша заявка успешно приянта. Мы вышлем вам информацию о предварительной стоимости в ближайшее время.</p>
                        <button class="final-button" type="button">
                            <span>начать заново</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="quiz-block__buttons">
        <button class="quiz-block__prev-btn" type="button">
            <svg class="desc" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 15L10 12L13 9" stroke="#7E899A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <svg class="mobile" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 7L9 12L14 17" stroke="#24282E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span>Назад</span>
        </button>
        <button class="quiz-block__next-btn mobile-button arrow-hover-right" type="button">
            <span class="quiz-block__next-btn__text">вперед</span>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 17L15 12L10 7" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <p class="quiz-block__alert-text">
                Вы не выполнили шаг
            </p>
        </button>
    </div>
</section>