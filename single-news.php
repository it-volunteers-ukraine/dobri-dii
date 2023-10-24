<?php
/**
 * The template for displaying news single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-it-volunteers
 */

get_header();
?>

<main class="container">

    <section class="one-news__hero"
        style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), linear-gradient(180deg, rgba(0, 0, 0, 0.00) 34.9%, rgba(0, 0, 0, 0.14) 52.6%, rgba(0, 0, 0, 0.33) 67.71%, rgba(0, 0, 0, 0.42) 78.65%, rgba(0, 0, 0, 0.60) 89.58%, rgba(0, 0, 0, 0.75) 100%), url(<?php the_field('img'); ?>) no-repeat center top / cover;">
        <h3 class=" title-secondary one-news__title"><?php the_title(); ?></h3>
        <span class="one-news__date"><?php the_field('date'); ?></span>
    </section>


    <div>
        <section class="one-news__article">
            <h3 class="title-secondary one-news__title"><?php the_title(); ?></h3>
            <p class="text-secondary one-news__text"><?php the_field('text'); ?></p>


            <div class="gallery">
                <div class="swiper swiperOneNews2">
                    <div class="swiper-wrapper">
                        <div class=" news-gallery__item2 swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>

                        <div class="news-gallery__item2 swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>

                        <div class="news-gallery__item2 swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>

                        <div class="news-gallery__item2 swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>

                    </div>
                </div>

                <div class="gallery__wrapper">
                    <div thumbsSlider="" class="swiper swiperOneNews">

                        <div class="news-gallery__container swiper-wrapper">

                            <div class="news-gallery__item  swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </div>

                            <div class="news-gallery__item swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </div>

                            <div class="news-gallery__item  swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>

                            <div class="news-gallery__item  swiper-slide">
                                <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </div>
                        </div>
                        <div class="news__pagination"></div>
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

            </div>

        </section>
        <section class="sidebar"></section>
    </div>



    <!-- <?php
		while ( have_posts() ) :
			the_post();
						    get_template_part( 'template-parts/content', get_post_type() );
				?>




    <?php  the_post_navigation(
    array(
    'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wp-it-volunteers' ) . '</span> <span
        class="nav-title">%title</span>',
    'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wp-it-volunteers' ) . '</span> <span
        class="nav-title">%title</span>',
    )
    );

    // If comments are open or we have at least one comment, load up the comment template.
    // if ( comments_open() || get_comments_number() ) :
    // comments_template();
    // endif;

    endwhile; // End of the loop.
    ?> -->

</main><!-- #main -->

<?php get_template_part( 'template-parts/donate-section' ); ?>

<?php
// get_sidebar();
get_footer();