<?php
$type = get_query_var('type');
$classButton = get_query_var('classButton');
$text = get_query_var('text');
?>


<li class=" <?php print $type; ?>__item">
    <div class="<?php print $type; ?>__img">
        <img src="<?php the_field('img'); ?>" alt="<?php the_field('alt'); ?>">
    </div>
    <div class="<?php print $type; ?>__info">
        <span class="<?php print $type; ?>__date"><?php the_field('date'); ?></span>
        <h3 class="title-secondary <?php print $type; ?>__title"><?php the_title(); ?></h3>
        <p class="text-secondary <?php print $type; ?>__text"><?php the_field('text'); ?></p>
        <a class="<?php print $classButton; ?>" href="<?php the_permalink(); ?>">
            <?php print $text; ?>
            <svg width="24px" height="24px">
                <use class="arrow-up"
                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#arrow-up-right">
                </use>
                <use class="arrow-right"
                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow-right">
                </use>
            </svg>
        </a>
    </div>
</li>