<?php
/*
Template Name: news
*/
get_header();
?>

<main class="main container news-page">

    <h1 class=" title-main title"><?php the_title();?></h1>



    <?php
if (have_posts()) {
    global $post;
    
    $myposts = get_posts([
        'post_type' => 'news',
        'posts_per_page' => 4,
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
    ]);
     ?>

    <ul class="news__list">

        <?php if ($myposts)
         { foreach ($myposts as $post) 
            { setup_postdata($post);
                
                set_query_var('type', 'news' );
                set_query_var('classButton', 'button--arrow' ); 
                
            get_template_part('template-parts/content', 'posts' );
     } 
    } 
    wp_reset_postdata();
    ?>

    </ul>
    <?php
     } 
     else { echo 'Новини не знайдено' ; } ?>



    <div class="pagination">
        <?php
    $big = 999999999;
    $posts_per_page = 4;

    // Визначимо аргументи запиту для конкретного типу записів "news"
    $args = array(
        'post_type' => 'news',
        'posts_per_page' => -1 // -1 для виведення всіх записів
    );

    // Виконаємо запит і підрахуємо загальну кількість записів
    $news_query = new WP_Query($args);
    $total_posts = $news_query->found_posts;

    // Вирахуємо загальну кількість сторінок
    $total_pages = ceil($total_posts / $posts_per_page);

    // Отримаємо поточний номер сторінки
    $current_page = get_query_var('paged') ? get_query_var('paged') : 1;

    echo paginate_links(array(
        'base'      => str_replace($big, '%#%', get_pagenum_link($big)),
        'format'    => '/page/%#%',
        'current'   => $current_page,
        'total'     => $total_pages,
        'prev_text' => __('<'),
        'next_text' => __('>'),
    ));
    ?>
    </div>

</main>

<?php get_template_part( 'template-parts/donate-section' ); ?>

<?php get_footer(); ?>