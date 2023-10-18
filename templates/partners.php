<?php
/*
Template Name: partners
*/
get_header();
?>

<main>
    <h1 class="visually-hidden">Партнери ГО "Добрі Дії"</h1>
    <h2>partners</h2>

	<?php if ( have_rows( 'gallery' ) ): ?>
                    <div class="gallery__container lightBox">
						<?php while ( have_rows( 'gallery' ) ): the_row(); ?>
							<?php
							$image = get_sub_field( 'gallery-img' );
							$alt   = get_sub_field( 'gallery-alt' );
							?>

                            <a class="gallery__link gallery__item" href="<?php echo $image['url']; ?>">
                                <img class="gallery__image" src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>"
                                     data-source="<?php echo $image['url']; ?>" loading="lazy"/>
                            </a>

						<?php endwhile; ?>

                    </div>
				<?php endif; ?>


</main>



<?php get_footer(); ?>