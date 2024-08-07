        <h1 class="title-main project__title"><?php the_title(); ?></h1>

        <div class="project__wrapper">

            <div class="project__img">
                <img src="<?php the_field('img'); ?>" alt="<?php the_field('alt'); ?>">
            </div>

            <div class="project__info">
                <div class="project__container">
                    <span class="project__date"><?php the_field('date'); ?></span>
                    <?php $sum = get_field('sum'); ?>
                    <?php if (!empty($sum)) : ?>
                    <p class="project__budget"><?php the_field( 'budget', 'option'); ?>
                        <span><?php echo $sum; ?></span>
                    </p>
                    <?php endif; ?>
                </div>

                <p class="text-secondary project__text"><?php the_field('text'); ?></p>
            </div>

        </div>


        <?php if (have_rows('gallery')): ?>

        <div class="project-gallery">
            <div class="swiper swiperOneProject">
                <div class="project-gallery__container swiper-wrapper">
                    <?php while ( have_rows( 'gallery' ) ): the_row(); ?>
                    <?php
							$image = get_sub_field( 'img' );
							$description   = get_sub_field( 'description' );
							?>

                    <a class=" project-gallery__item swiper-slide" href="<?php echo esc_url( $image['url'] ); ?>"
                        data-lightbox="projectsImages" data-title="<?php echo $description; ?>"
                        data-alt=" <?php echo $image['alt']; ?>">
                        <img src=" <?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>

                    <?php endwhile; ?>
                </div>

                <div class="project__pagination"></div>


            </div>

            <div class="button-prev">
                <svg width="24px" height="24px">
                    <use class="arrow-up"
                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-left">
                    </use>
                </svg>
            </div>

            <div class="button-next">
                <svg width="24px" height="24px">
                    <use class="arrow-up"
                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right">
                    </use>
                </svg>
            </div>

        </div>

        <?php endif; ?>