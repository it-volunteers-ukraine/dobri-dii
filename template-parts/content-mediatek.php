<li class="mediatek-list-item">
    <div class="image-wrapper"><?php the_post_thumbnail('large', array('class' => 'post-image')); ?></div>
    <h3 class="title"><?php the_title() ?></h3>
    <p class="excerpt"><?php echo get_the_excerpt() ?></p>
    <a class="button button--transparent" href="<?php the_permalink() ?>"><?php _e("Переглянути", "wp-dobri-dii") ?></a>
</li>