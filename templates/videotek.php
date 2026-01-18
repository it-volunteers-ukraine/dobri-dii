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
        global $post; // Make sure $post is available for get_field

        $videos_per_page = 6; // How many videos you want to show per page
        $current_page    = isset($_GET['video_page']) ? intval($_GET['video_page']) : 1; // Get page from URL or default to 1

        $all_videos = get_field('video_list'); // Fetch all videos

        if ($all_videos) :
            $total_videos = count($all_videos);
            $total_pages  = ceil($total_videos / $videos_per_page);

            // Calculate offset and limit for the current page
            $offset = ($current_page - 1) * $videos_per_page;
            $paged_videos = array_slice($all_videos, $offset, $videos_per_page);
        ?>

            <ul class="video-list" id="video-list-container">
                <?php
                if (! empty($paged_videos)) :
                    foreach ($paged_videos as $video_item) :
                        $thumbnail_image = $video_item['thumbnail_image'];
                        $video_link      = $video_item['video_link'];
                        $title           = $video_item['title'];
                        $description     = $video_item['description'];
                        if ($thumbnail_image || $title || $video_link || $description) :
                ?>
                            <li class="video-list-item">
                                <?php if ($video_link) : ?>
                                    <div class="image-wrapper">
                                        <?php if ($thumbnail_image) : ?>
                                            <img src=" <?php echo esc_url($thumbnail_image['sizes']['large']); ?>"
                                                alt="<?php echo esc_attr($title); ?>">
                                        <?php endif; ?>
                                        <a href="<?php echo esc_url($video_link); ?>" data-fancybox="videos" data-aspect-ratio="2 / 1"
                                            data-caption="<?php echo esc_attr($title); ?>" class="play-button">
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <?php if ($title) : ?>
                                    <h3 class="title"><?php echo esc_html($title); ?></h3>
                                <?php endif; ?>
                                <?php if ($description) : ?>
                                    <p class="description"><?php echo esc_html($description); ?></p>
                                <?php endif; ?>
                            </li>
                        <?php endif; ?>
                <?php endforeach;
                else :
                    echo '<p>No videos found for this page.</p>';
                endif; ?>
            </ul>

            <?php if ($total_pages > 1) : ?>
                <div class="video-pagination">
                    <?php
                    $range = 2; // How many pages to show around the current page

                    // Previous button
                    if ($current_page > 1) : ?>
                        <button class="pagination-button nav-button prev-page"
                            data-page="<?php echo $current_page - 1; ?>"></button>
                        <?php endif;

                    // Loop for page numbers
                    for ($i = 1; $i <= $total_pages; $i++) :
                        // Always show first page
                        if ($i == 1) : ?>
                            <button class="pagination-button page-number <?php echo ($i == $current_page) ? 'active' : ''; ?>"
                                data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php
                        // Show ellipsis if there's a gap between page 1 and the current page's range
                        elseif ($i == $current_page - $range - 1 && $current_page - $range > 2) : ?>
                            <span class="pagination-ellipsis">...</span>
                        <?php
                        // Show pages within the sliding range around the current page
                        elseif ($i >= $current_page - $range && $i <= $current_page + $range) : ?>
                            <button class="pagination-button page-number <?php echo ($i == $current_page) ? 'active' : ''; ?>"
                                data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php
                        // Show ellipsis if there's a gap between the current page's range and the last page
                        elseif ($i == $current_page + $range + 1 && $current_page + $range < $total_pages - 1) : ?>
                            <span class="pagination-ellipsis">...</span>
                        <?php
                        // Always show last page
                        elseif ($i == $total_pages) : ?>
                            <button class="pagination-button page-number <?php echo ($i == $current_page) ? 'active' : ''; ?>"
                                data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
                        <?php endif;
                    endfor;

                    // Next button
                    if ($current_page < $total_pages) : ?>
                        <button class="pagination-button nav-button next-page"
                            data-page="<?php echo $current_page + 1; ?>"></button>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

        <?php else : ?>
            <p>No videos found.</p>
        <?php endif; ?>
    </section>
    <?php get_template_part('template-parts/donate-section'); ?>
</main>

<?php get_footer(); ?>