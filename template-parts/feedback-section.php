<?php
$feedback_info = get_field('feedback_info', 'option');
$feedback_title = get_field('feedback_title', 'option');
$feedback_img = get_field('feedback_img', 'option');
$form_id = get_field('feedback_form_id', 'option'); ?>

<section class="feedback-section container">
    <div class="left-column">
        <h3 class="title"><?php echo $feedback_title; ?></h3>
        <?php if ($feedback_info): ?>
            <div class="info-content">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/note.svg" alt="">
                <span><?php echo $feedback_info; ?></span>
            </div>
        <?php endif; ?>

        <?php if (!empty($feedback_img)): ?>
            <img src="<?php echo $feedback_img; ?>" alt="Волонтер в роботі">
        <?php endif; ?>
    </div>

    <div class="right-column">
        <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="false" ajax="true"]');
        ?>
    </div>
</section>