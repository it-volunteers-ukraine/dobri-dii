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


</main>

<?php get_footer(); ?>

