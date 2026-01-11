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
                <?php while (have_rows('gallery_list')): the_row(); ?>
                    <?php $gallery_title = get_sub_field('gallery_title'); ?>
                    <?php $photogallery = get_sub_field('photogallery'); ?>

                    <li class="gallery-list-item">
                        <?php if ($gallery_title): ?>
                            <div class="title-wrapper">
                                <?php echo $gallery_title ?>
                            </div>
                        <?php endif ?>

                        <?php if ($photogallery): ?>
                            <div class="photogallery">
                                <div class="photogallery-sizer"></div>
                                <?php foreach ($photogallery as $image): ?>
                                    <div class="photogallery-item">
                                        <?php echo wp_get_attachment_image($image['id'], 'medium_large', false, array('class' => '')); ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="button button--transparent load-all"
                                data-more="<?php esc_attr_e('Дивитись всі фото у розділі ', 'wp-dobri-dii'); ?>"
                                data-less="<?php esc_attr_e('Згорнути', 'wp-dobri-dii'); ?>">
                                <?php _e('Дивитись всі фото у розділі ', 'wp-dobri-dii'); ?>
                            </div>
                        <?php endif; ?>
                    </li>

                <?php endwhile; ?>
            </ul>
        <?php endif; ?>

    </section>
    <?php get_template_part('template-parts/donate-section'); ?>
</main>

<?php get_footer(); ?>