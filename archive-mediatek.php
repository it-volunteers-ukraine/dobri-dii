<?php
/*
Archive mediatek
*/
get_header();
?>

<main class="main container mediatek-page">

    <h1 class="visually-hidden">Медіатека ГО "Добрі Дії"</h1>

    <h2 class=" title-main title"><?php echo post_type_archive_title( '', false ); ?></h2>

    <?php
    $args = array(
    'post_type' => 'mediatek',
    'posts_per_page' => 12,
    'post_status' => 'publish',
    'order' => 'ASC',
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
    );

    $all_posts = new WP_Query($args);
    ?>
    <?php if ( $all_posts->have_posts() ) : ?>
    <ul class="mediatek-list">
        <?php while ( $all_posts->have_posts() ) : $all_posts->the_post(); ?>
        <?php get_template_part('template-parts/content', 'mediatek' ); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata();  ?>
    </ul>
    <?php endif; ?>

</main>

<?php get_template_part( 'template-parts/donate-section' ); ?>

<?php get_footer(); ?>