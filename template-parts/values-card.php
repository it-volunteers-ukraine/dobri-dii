<?php
$card = $args['card'];
$icon = $card['logo'];
$title = $card['title'];
$description = $card['description'];
$isSliderCard = $args['isSliderCard'] ?? false;
?>

<li class="card <?php echo( $isSliderCard ? 'swiper-slide' : '' ); ?>">
    <div class="icon-wrapper">
        <?php echo wp_get_attachment_image($icon['id'], 'full_hd', null); ?>
    </div>

    <?php if ($title): ?>
    <h3><?php echo $title?></h3>
    <?php endif; ?>

    <?php if ($description): ?>
    <div class="">
        <p><?php echo $description?></p>
    </div>
    <?php endif; ?>
</li>