<?php
/*
	Template Name: Фотогалерея
    Template Post Type: mediatek
	*/
get_header();
$title_description = get_field('title_description');
$image = get_field('image');
$gallery_list = get_field('gallery_list');
?>

<main class="main photo-gallert-page">
    <section class="container">
        <?php if ($title_description || $image) : ?>
            <div class="hero-section">
                <?php if ($title_description) : ?>
                    <div class="title-description-column">
                        <?php echo $title_description ?>
                    </div>
                <?php endif ?>
                <?php if ($image) : ?>
                    <div class="image-wrapper">
                        <?php echo wp_get_attachment_image($image['id'], 'medium_large', false, array('class' => '')); ?>
                    </div>
                <?php endif ?>
            </div>
        <?php endif ?>


        <?php if (have_rows('gallery_list')) : ?>
            <ul class="gallery-list">
                <?php
                $row_counter = 0;
                while (have_rows('gallery_list')): the_row();
                    $row_counter++;

                    $gallery_title = get_sub_field('gallery_title');
                    $photogallery = get_sub_field('photogallery');
                ?>
                    <li class="gallery-list-item">
                        <?php if ($gallery_title): ?>
                            <div class="title-wrapper">
                                <?php echo $gallery_title; ?>
                            </div>
                        <?php endif ?>

                        <?php if ($photogallery): ?>
                            <?php
                            $unique_lightbox_group = 'gallery-group-' . get_the_ID() . '-' . $row_counter;
                            ?>
                            <div class="photogallery">
                                <?php foreach ($photogallery as $image): ?>
                                    <div class="photogallery-item">
                                        <a href="<?php echo esc_url($image['url']); ?>"
                                            data-lightbox="<?php echo esc_attr($unique_lightbox_group); ?>"
                                            data-title="<?php echo esc_attr($image['caption']); ?>">
                                            <?php
                                            echo wp_get_attachment_image(
                                                $image['id'],
                                                'medium_large',
                                                false,
                                                array('class' => 'photogallery-image', 'alt' => esc_attr($image['alt']))
                                            );
                                            ?>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="button button--transparent load-all"
                                data-more="<?php echo esc_attr(pll__('Дивитись всі фото у розділі')); ?>"
                                data-less="<?php echo esc_attr(pll__('Згорнути')); ?>">
                                <?php pll_e('Дивитись всі фото у розділі'); ?>
                            </div>
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    </section>
    <?php get_template_part('template-parts/donate-section'); ?>
    <?php get_template_part('template-parts/feedback-section'); ?>
</main>

<?php get_footer(); ?>