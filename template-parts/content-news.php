             <h3 class="title-secondary one-news__title"><?php the_title(); ?></h3>
             <p class="text-secondary one-news__text"><?php the_field('text'); ?></p>

             <div class="gallery">
                 <?php if ( have_rows( 'gallery' ) ): ?>
                 <div class="swiper swiperOneNews2">
                     <div class="swiper-wrapper">
                         <?php while ( have_rows( 'gallery' ) ): the_row(); ?>
                         <?php
							$image = get_sub_field( 'img' );
							$alt   = get_sub_field( 'alt' );
							?>

                         <div class=" news-gallery__item2 swiper-slide">
                             <img src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" />
                         </div>

                         <?php endwhile; ?>
                     </div>
                 </div>

                 <div class="gallery__wrapper">

                     <div thumbsSlider="" class="swiper swiperOneNews">
                         <div class="news-gallery__container swiper-wrapper">
                             <?php while ( have_rows( 'gallery' ) ): the_row(); ?>
                             <?php
							$image = get_sub_field( 'img' );
							$alt   = get_sub_field( 'alt' );
							?>

                             <div class=" news-gallery__item swiper-slide">
                                 <img src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" />
                             </div>

                             <?php endwhile; ?>
                         </div>

                         <div class="news__pagination"></div>
                     </div>

                     <div class="button-prev">
                         <svg width="24px" height="24px">
                             <use class="arrow-up"
                                 href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-left">
                             </use>
                         </svg>
                     </div>

                     <div class="button-next">
                         <svg width="24px" height="24px">
                             <use class="arrow-up"
                                 href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right">
                             </use>
                         </svg>
                     </div>

                 </div>
                 <?php endif; ?>
             </div>