<li class="projects__item">
    <div class="projects__img">
        <img src="<?php the_field('img'); ?>" alt="<?php the_field('alt'); ?>">
    </div>
    <div class="projects__info">
        <span class="projects__date"><?php the_field('date'); ?></span>
        <h3 class="title-secondary projects__title"><?php the_title(); ?></h3>
        <p class="text-secondary projects__text"><?php the_field('text'); ?></p>
        <a class="button button--transparent" href="<?php the_permalink(); ?>">
            Детальніше про проєкт
        </a>
    </div>
</li>