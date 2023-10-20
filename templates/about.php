<?php
	/*
	Template Name: about
	*/
	get_header();
?>

<main class="about">

    <!--    Hero section -->
    <section class="container">
        <h2 class="title-main">
			<?php the_field( 'hero_title' ); ?>
        </h2>
        <div class="hero-wrapper">
            <div class="hero-image-block">
                <div class="hero-image-wrapper">
                    <img src="<?php the_field( 'hero_image' ); ?>" alt="<?php the_field( 'hero_image_alt' ); ?>">
                </div>
            </div>

            <div class="hero-description">
                <div class="text-main text-expandable"><?php the_field( 'hero_text' ); ?></div>
                <button class="show-more-button" onclick=expandText(this)>Розгорнути</button>
            </div>
        </div>
    </section>

    <!-- Facebook stories section -->
    <section class="stories">
        <div class="background"></div>
        <div class="container">
            <h2 class="title-main">
				<?php the_field( 'gallery_title' ); ?>
            </h2>

            <div class="gallery-desktop">
				<?php get_template_part( 'template-parts/facebook-story-cards' ); ?>
            </div>

            <div class="gallery-mobile">
                <div class="swiper swiperStories">
                    <div class="swiper-wrapper">
						<?php get_template_part( 'template-parts/facebook-story-cards' ); ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <p class="stories-text"><?php the_field( 'gallery_text' ); ?></p>
            <a class="stories-button" href="<?php the_field( 'facebook', 17 ); ?>">
                <svg width="24px" height="24px">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#facebook"></use>
                </svg>
                <span>Facebook</span>
            </a>
        </div>
    </section>

    <!--    Team section -->
    <section class="team">
        <div class="container">
            <h2 class="title-main">
				<?php the_field( 'team_title' ); ?>
            </h2>
            <p class="text-main">
				<?php the_field( 'team_text' ); ?>
            </p>

            <div class="team-list">
				<?php if ( have_rows( 'team_card' ) ): ?>
					<?php while ( have_rows( 'team_card' ) ): the_row(); ?>
                        <div class="team-card-column">
                            <div class="team-card">
                                <div class="team-card-img-wrapper">
                                    <img src="<?php the_sub_field( 'team_card_image' ); ?>"
                                         alt="<?php the_sub_field( 'gallery_card_image_alt' ); ?>">
                                </div>
                                <span class="text-main">
		                        <?php the_sub_field( 'team_card_surname' ); ?>
                            </span>
                                <span class="text-main">
		                        <?php the_sub_field( 'team_card_name' ); ?>
                            </span>
                                <img class="team-card-line"
                                     src="<?php bloginfo( 'template_url' ); ?>/assets/images/about-team-card-line.svg"
                                     alt="#">
                                <span class="text-secondary">
		                        <?php the_sub_field( 'team_card_position' ); ?>
                            </span>
                            </div>
                        </div>
					<?php endwhile; ?>
				<?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>

