<?php
$feedback_info = get_field('feedback_info', 'option');
$feedback_title = get_field('feedback_title', 'option');
$feedback_img = get_field('feedback_img', 'option');
$form_id = get_field('feedback_form_id', 'option'); ?>

<section class="feedback-section container">
    <h3 class="title"><?php echo $feedback_title; ?></h3>
    <div class="section-columns">
        <div class="left-column">
            <div class="column-content">
                <?php if ($feedback_info): ?>
                    <div class="info-content">
                        <div class="icon-wrapper">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/note.svg" alt="">
                        </div>
                        <p class="text"><?php echo $feedback_info; ?></p>
                    </div>
                <?php endif; ?>

                <?php if (!empty($feedback_img)): ?>
                    <div class="section-image">
                        <img src="<?php echo $feedback_img; ?>" alt="Волонтер в роботі">
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="right-column">
            <?php echo do_shortcode('[contact-form-7 id="' . $form_id . '" title="false" ajax="true"]');
            ?>
        </div>
    </div>

</section>