<?php
/*
Template Name: projects
*/
get_header();
?>

<main class="main container projects-page">

    <h1 class="visually-hidden">Проєкти ГО "Добрі Дії"</h1>

    <h2 class=" title-main title"><?php the_field( 'title'); ?></h2>


    <?php
if (have_posts()) {
    global $post;
    
    $myposts = get_posts([
        'post_type' => 'projects',
        'posts_per_page' => 4,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    ]);
     ?>
    <ul class="projects__list" id="projects-container">

        <?php if ($myposts)
         { foreach ($myposts as $post) 
            { setup_postdata($post);
                set_query_var('type', 'projects' );
                set_query_var('classButton', 'button button--transparent' ); 
                set_query_var('text', 'Детальніше про проєкт' );
                
            get_template_part('template-parts/content', 'posts' );
     } 
    } 
    wp_reset_postdata();
    ?>
    </ul>

    <?php
     } 
     else { echo 'Проектів не знайдено' ; } ?>

    <div id="loading-spinner" style="display: none;">
        <img class="loading-spinner__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/loading_1.gif"
            alt=" Завантаження" width="100px" height="100px">
    </div>

    <?php
    $projects_count = wp_count_posts('projects')->publish; // Get the total number of 'projects'

    if ($projects_count > 4) { ?>

    <button class="button button--arrow" id="load-more-button" data-post-type="projects" data-page="2" data-posts-per-page="4">
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
    <?php
}
?>
</main>

<?php get_template_part( 'template-parts/donate-section' ); ?>

<?php get_footer(); ?>