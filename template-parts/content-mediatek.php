<li class="mediatek-list-item">
    <div class="image-wrapper"><?php the_post_thumbnail('large', array('class' => 'post-image')); ?></div>
    <h3 class="post-title"><?php the_title() ?></h3>
    <p><?php echo get_the_excerpt()?></p>
    <a class="card-wrapper" href="<?php the_permalink() ?>"><?php _e("Переглянути", "wp-dobri-dii")?></a>
</li>