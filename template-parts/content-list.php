    <ul class="<?php print $args['class']; ?> swiper-wrapper">

        <?php
            global $post;
            $myposts = get_posts([ 
            'post_type' => $args['type'],  
            'posts_per_page' => 3,   

            ]);

            if( $myposts ){
              foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>
        <li class="swiper-slide">
            <div class="img">
                <img src="<?php the_field('img'); ?>" alt="<?php the_field('alt'); ?>">
            </div>
            <div class="info">
                <span class="date"><?php the_field('date'); ?></span>
                <h3 class="title-secondary title"><?php the_title(); ?></h3>
                <p class="text-secondary text"><?php the_field('text'); ?></p>
                <a class="button--arrow" href="<?php the_permalink(); ?>">Читати більше
                    <svg width="24px" height="24px">
                        <use class="arrow-up"
                            href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#arrow-up-right">
                        </use>
                        <use class="arrow-right"
                            href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow-right">
                        </use>
                    </svg>
                </a>
            </div>
        </li>
        <?php 
            }
            } 
            wp_reset_postdata(); 
            ?>

    </ul>