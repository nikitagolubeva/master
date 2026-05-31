<section class="quiz-block partners-block">
    <h2 class="quiz-block__header">Наши партнёры</h2>
    <div class="quiz-step step-1">
        <!-- <div class="quiz-step__header">
            <h5 class="quiz-step__header__name">Компании, которые нам доверяют:</h5>
        </div> -->
        <div class="quiz-step__content  quiz-step__overflow-content service-slider">
            <div class="swiper-wrapper">
			<?php while(have_rows("партнеры", 4566)): the_row(); ?>
              <div class="swiper-slide">
                    <div class="service-item">
                        <label for="service1" class="quiz-label">
                            <img src="<?= get_sub_field('картинка') ?>" alt="Проектирование">
                            <p><?= get_sub_field('подпись') ?></p>
                        </label>
                    </div>
                </div>
            
			<?php endwhile; ?>
				</div>
            <div class="swiper-scrollbar">
            </div>
        </div>
    </div>
    </form>
</section>