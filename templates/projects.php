<?php
/*
Template Name: projects
*/
get_header();
?>

<main class="container projects">

    <h1 class="visually-hidden">Проєкти</h1>

    <h2 class=" title-main title"><?php the_field( 'title'); ?></h2>

    <ul class="projects__list" id="projects-container">
    </ul>

    <div id="loading-spinner" style="display: none;">
        <img class="loading-spinner__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/loading_1.gif"
            alt=" Завантаження..." width="200px" height="200px">
    </div>


    <button class="button button--arrow" id="load-more-button" data-page="1" data-posts-per-page="4">
        <?php the_field( 'button'); ?>
        <svg width="24px" height="24px">
            <use class="arrow-up"
                href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#arrow-up-right">
            </use>
            <use class="arrow-right"
                href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow-right">
            </use>
        </svg>
    </button>


</main>

<?php get_template_part( 'template-parts/donate-section' ); ?>

<?php get_footer(); ?>