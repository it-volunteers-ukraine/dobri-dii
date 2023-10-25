<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-it-volunteers
 */

?>

<aside id="secondary" class="sidebar">

    <h3 class=".title-main sidebar__title">Інші новини</h3>


    <ul class="sidebar__list">

        <?php
            global $post;
            $myposts = get_posts([ 
            'post_type' => 'news',  
            'posts_per_page' => 2,   

            ]);

            if( $myposts ){
              foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>
        <li class="">
            <div class="sidebar__img">
                <img src="<?php the_field('img'); ?>" alt="<?php the_field('alt'); ?>">
            </div>
            <div class="sidebar__info">
                <span class="sidebar__date"><?php the_field('date'); ?></span>
                <h3 class="title-secondary sidebar__subtitle"><?php the_title(); ?></h3>
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

    <a class="button--arrow" href="<?php echo get_permalink( 11); ?>">Усі новини
        <svg width="24px" height="24px">
            <use class="arrow-up"
                href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#arrow-up-right">
            </use>
            <use class="arrow-right"
                href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow-right">
            </use>
        </svg>
    </a>
</aside><!-- #secondary -->