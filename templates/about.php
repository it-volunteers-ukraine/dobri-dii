<?php
	/*
	Template Name: about
	*/
	get_header();
?>

<main class="about-page main">

    <!--    Hero section -->
    <section class="container" id="aboutStory">
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
                <p class="text-main text-expandable"><?php the_field( 'hero_text' ); ?></p>
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
            <a class="stories-button" href="<?php the_field( 'facebook', 17 ); ?>" target="_blank"
               aria-label="Перейти на сторінку в Фейсбук">
                <svg width="24px" height="24px">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#facebook"></use>
                </svg>
                <span>Facebook</span>
            </a>
        </div>
    </section>

    <!--    Team section -->
    <section class="team" id="aboutTeam">
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
                                         alt="<?php the_sub_field( 'team_card_surname' ); ?> <?php the_sub_field( 'team_card_name' ); ?>">
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

    <!--    Documents section -->
    <section class="documents" id="aboutDocuments">
        <div class="container">
            <h2 class="title-main">
				<?php the_field( 'documents_title' ); ?>
            </h2>

            <div class="documents-wrapper">
                <p class="text-main">
					<?php the_field( 'documents_text' ); ?>
                </p>
                <div class="documents-list">
					<?php if ( have_rows( 'documents' ) ): ?>
						<?php while ( have_rows( 'documents' ) ): the_row(); ?>

                            <a class="documents-card" href="<?php the_sub_field( 'documents_file' ); ?> "
                               target="_blank">
                                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icon-document-green.svg"
                                     alt="Документ">
                                <span><?php the_sub_field( 'documents_title' ); ?></span>
                            </a>
						<?php endwhile; ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <!--    Reports section -->
    <section class="reports" id="aboutReports">
        <div class="container">
            <h2 class="title-main">
				<?php the_field( 'reports_title' ); ?>
            </h2>

            <div class="carousel-container">
                <div class="swiper swiperReports">
                    <div class="swiper-wrapper">
						<?php if ( have_rows( 'reports' ) ): ?>
							<?php while ( have_rows( 'reports' ) ): the_row(); ?>
                                <div class="swiper-slide">
                                    <a class="documents-card swiper-slide"
                                       href="<?php the_sub_field( 'reports_file' ); ?> "
                                       target="_blank">
                                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icon-document-violet.svg"
                                             alt="Документ">
                                        <span><?php the_sub_field( 'reports_title' ); ?></span>
                                    </a>
                                </div>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>
                </div>
                <div class="button-next">
                    <svg width="24px" height="24px">
                        <use class="arrow-up"
                             href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                    </svg>
                </div>
                <div class="button-prev">
                    <svg width="24px" height="24px">
                        <use class="arrow-up"
                             href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-left"></use>
                    </svg>
                </div>
            </div>

        </div>
    </section>

	<?php get_template_part( 'template-parts/donate-section' ); ?>
</main>

<?php get_footer(); ?>

