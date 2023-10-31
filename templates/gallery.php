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
			$args          = ( [
				'fields'         => 'ids',
				'posts_per_page' => 3,
				'post_type'      => 'gallery',
				'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
			] );
			$gallery_query = new WP_Query( $args );
			$total_pages   = $gallery_query->max_num_pages;
			$current_page  = max( 1, get_query_var( 'paged' ) );

			if ( $gallery_query->have_posts() ) {
				while ( $gallery_query->have_posts() ) {
					$gallery_query->the_post();
					?>

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
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
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

					<?php
				}
			}
		?>

        <div class="pagination">
			<?php
				echo paginate_links( [
					'base'      => get_pagenum_link( 1 ) . '%_%',
					'format'    => '/page/%#%',
					'current'   => $current_page,
					'total'     => $total_pages,
					'prev_text' => __( '<' ),
					'next_text' => __( '>' ),
				] );
			?>
        </div>
    </div>

	<?php get_template_part( 'template-parts/donate-section' ); ?>

</main>


<?php get_footer(); ?>





