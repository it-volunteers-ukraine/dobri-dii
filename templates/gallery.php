<?php
	/*
	Template Name: gallery
	*/
	get_header();
?>

<main class="gallery-page">
    <div class="container">
        <h1 class="title-main"><?php the_title(); ?></h1>

		<?php
			$galleryItems = get_posts( [
				'fields'         => 'ids',
				'posts_per_page' => 3,
				'post_type'      => 'gallery',
				'order'          => 'ASC'
			] );

			if ( $galleryItems ) : ?>

				<?php foreach ( $galleryItems as $post ) : setup_postdata( $post ); ?>
                    <article class="gallery-card">
                        <div class="image-gallery">
                            <h3 class="title-secondary title-mobile"><?php the_title(); ?></h3>
                            <div class="swiper swiperGallery">
                                <div class="swiper-wrapper">
									<?php if ( have_rows( 'gallery' ) ): ?>
										<?php while ( have_rows( 'gallery' ) ): the_row(); ?>
                                            <div class="swiper-slide">
                                                <div class="image-wrapper">
                                                    <a href="<?php the_sub_field( 'img' ); ?>"
                                                       data-lightbox="<?php the_ID(); ?>">
                                                        <img src="<?php the_sub_field( 'img' ); ?>"
                                                             alt="<?php the_sub_field( 'alt' ); ?>">
                                                    </a>
                                                </div>
                                            </div>
										<?php endwhile; ?>
									<?php endif; ?>
                                </div>

                                <div class="swiper-pagination"></div>
                                <div class="button-next">
                                    <svg width="26px" height="26px">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                                    </svg>
                                </div>
                                <div class="button-prev">
                                    <svg width="26px" height="26px">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-left"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="date-desktop">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/date-line.svg" alt="#">
                                <span><?php the_field( 'date' ); ?></span>
                            </div>
                            <h3 class="title-secondary title-desktop"><?php the_title(); ?></h3>
                            <div class="date-mobile">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/date-line.svg" alt="#">
                                <span><?php the_field( 'date' ); ?></span>
                            </div>

                            <p class="text-main"><?php the_field( 'text' ); ?></p>
                        </div>

                    </article>
				<?php endforeach;
				wp_reset_postdata(); ?>
			<?php endif; ?>
    </div>

</main>


<?php get_footer(); ?>





