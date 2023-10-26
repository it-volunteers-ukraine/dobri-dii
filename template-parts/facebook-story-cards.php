<?php if ( have_rows( 'gallery_card', 7 ) ): ?>
	<?php while ( have_rows( 'gallery_card' ) ): the_row(); ?>
        <article class="swiper-slide stories-card">
            <div class="stories-card-img">
                <img src="<?php the_sub_field( 'gallery_card_image' ); ?>"
                     alt="<?php the_sub_field( 'gallery_card_image_alt' ); ?>">
            </div>
            <div class="stories-card-info">
                <p class="stories-card-text text-secondary">
					<?php the_sub_field( 'gallery_card_text' ); ?>
                </p>
                <div class="stories-card-bottom">
                    <a class="button--arrow"
                       href="<?php the_sub_field( 'gallery_card_link' ); ?>">Читати
                        більше
                        <svg width="24px" height="24px">
                            <use class="arrow-up"
                                 href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#arrow-up-right"></use>
                            <use class="arrow-right"
                                 href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow-right"></use>
                        </svg>
                    </a>
                    <span class="stories-card-author"><?php the_sub_field( 'gallery_card_author' ); ?></span>
                </div>
            </div>
        </article>
	<?php endwhile; ?>
<?php endif; ?>