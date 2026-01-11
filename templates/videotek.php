<?php
/*
	Template Name: Відеотека
    Template Post Type: mediatek
	*/
get_header();
?>

<main class="main videoteka-page">
    <section class="container">
        <h1 class="title-main"><?php the_title(); ?></h1>

        <?php
        if (get_query_var('page')) {
            $page = get_query_var('page');
        } else {
            $page = 1;
        }

        // $row              = 0;
        // $videos_per_page  = ;
        $videos           = get_field('video_list');
        // $total            = count($videos);
        // $pages            = ceil($total / $videos_per_page);
        // $min              = (($page * $videos_per_page) - $videos_per_page) + 1;
        // $max              = ($min + $videos_per_page) - 1;

        if (have_rows('video_list')) : ?>
            <ul class="video-list">
                <?php while (have_rows('video_list')): the_row(); ?>
                    <?php $thumbnail_image = get_sub_field('thumbnail_image'); ?>
                    <?php $video_link = get_sub_field('video_link'); ?>
                    <?php $title = get_sub_field('title'); ?>
                    <?php $description = get_sub_field('description'); ?>

                    <?php if ($thumbnail_image || $title || $video_link || $description): ?>
                        <li class="video-list-item">
                            <?php if ($video_link): ?>
                                <div class="image-wrapper">
                                    <?php if ($thumbnail_image): ?>
                                        <img src=" <?php echo $thumbnail_image['sizes']['large']; ?>" alt="">
                                    <?php endif ?>
                                    <a href="<?php echo esc_attr($video_link); ?>" data-fancybox="videos" data-aspect-ratio="2 / 1"
                                        data-caption="<?php echo $title; ?>" class="play-button">
                                    </a>
                                </div>
                            <?php endif ?>

                            <?php if ($title): ?>
                                <h3 class="title"><?php echo $title ?></h3>
                            <?php endif ?>

                            <?php if ($description): ?>
                                <p class="description"><?php echo $description ?></p>
                            <?php endif ?>
                        </li>
                    <?php endif ?>


                <?php endwhile;

                // // Pagination
                // echo paginate_links(array(
                //     'base' => get_permalink() . '%#%' . '/',
                //     'format' => '?page=%#%',
                //     'current' => $page,
                //     'total' => $pages
                // ));
                // 
                ?>

            <?php else: ?>
                No images found
            </ul>

        <?php endif; ?>

    </section>
    <?php get_template_part('template-parts/donate-section'); ?>
</main>

<?php get_footer(); ?>