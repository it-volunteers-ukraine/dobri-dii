<section class="donate-section container">
    <div class="donate-section__img">
        <img src="<?php the_field( 'img','option'); ?>" alt="Волонтер в роботі">
        <div class="donate-section__help">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icon_hands.svg" alt="Потиснення рук">
          <span><?php the_field( 'info','option' ); ?></span>
        </div>
    </div>

    <div class="donate-section__description">
      <h3 class="donate-section__title"><?php the_field( 'title','option' ); ?></h3>
      <p class="text-secondary donate-section__text"><?php the_field( 'text','option' ); ?></p>
      <a class="button button--blue donate-section__link " href="<?php echo get_permalink( 19 ); ?>"><?php the_field( 'button-text','option' ); ?></a>
    </div>
 </section>