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

<main class="main container">

    <section class="one-news__hero" style="<?php if(get_field('img_bg')) : ?>
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), linear-gradient(180deg, rgba(0, 0, 0, 0.00) 34.9%, rgba(0, 0, 0, 0.14) 52.6%, rgba(0, 0, 0, 0.33) 67.71%, rgba(0, 0, 0, 0.42) 78.65%, rgba(0, 0, 0, 0.60) 89.58%, rgba(0, 0, 0, 0.75) 100%), url(<?php the_field('img_bg'); ?>) no-repeat center top / cover;
    <?php else : ?>
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.20) 0%, rgba(0, 0, 0, 0.20) 100%), linear-gradient(180deg, rgba(0, 0, 0, 0.00) 34.9%, rgba(0, 0, 0, 0.14) 52.6%, rgba(0, 0, 0, 0.33) 67.71%, rgba(0, 0, 0, 0.42) 78.65%, rgba(0, 0, 0, 0.60) 89.58%, rgba(0, 0, 0, 0.75) 100%), url(<?php the_field('img') ?>) no-repeat center top / cover;
    <?php endif ?>">
        <h3 class=" title-secondary one-news__title"><?php the_title(); ?></h3>
        <span class="one-news__date"><?php the_field('date'); ?></span>
    </section>

    <div class="one-news__wrapper">
        <section class="one-news__article">
            <?php
		while ( have_posts() ) :
		    	the_post();

			    get_template_part( 'template-parts/content', 'news', get_post_type() );
			
        endwhile; 
		    ?>
        </section>

        <section class="sidebar">
            <?php get_sidebar(); ?>
        </section>
    </div>

</main><!-- #main -->

<?php get_template_part( 'template-parts/donate-section' ); ?>

<?php
get_footer();