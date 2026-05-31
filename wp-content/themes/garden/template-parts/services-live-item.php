<a class="services-live-item" href="<?= get_the_permalink() ?>">
    <div>
        <div class="services-live-item__main-info">
            <div class="services-live-item__number-container">
                <p class="services-live-item__number"><?php echo $args['counter'] ?></p>
            </div>
            <h5 class="services-live-item__name"><?php echo the_title() ?></h5>
            <div class="services-live-item__desc">
                <p class="services-live-item__text"><?php echo get_field('description') ?></p>
                <div class="services-live-item__link">ПОДРОБНЕЕ</div>
            </div>
        </div>
    </div>
    <img loading="lazy" class="services-live-item__img" src="<?php echo get_field('image') ?>" alt="">
</a>