<?php
/**
 * The template for displaying training single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-it-volunteers
 */

get_header();
?>
<main class="main container project">

    <span class="subtitle project__subtitle"><?php the_field( 'project_subtitle', 'option'); ?></span>

    <section class="project__article">
        <?php
		while ( have_posts() ) :
		    	the_post();
			    get_template_part( 'template-parts/content', 'projects', get_post_type() );
			
        endwhile; 
		    ?>
    </section>


    <div class="project__link">
        <a class="button--arrow" href="<?php the_field( 'facebook', 17 ); ?>"
            target="_blank"><?php the_field( 'project_btn_text', 'option'); ?>
            <span>Facebook</span>
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

</main>

<?php get_template_part( 'template-parts/donate-section' ); ?>


<?php get_footer(); ?>