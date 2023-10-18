<?php
/*
Template Name: partners
*/
get_header();
?>

<main class="container">
    <h1 class="visually-hidden">Партнери ГО "Добрі Дії"</h1>

    <section class="partners">
      <h2  class="title-main partners__title"><?php the_field('title'); ?></h2>
      <h3 class="subtitle partners__subtitle"><?php the_field('subtitle'); ?></h3>

	  <?php if ( have_rows( 'partners' ) ): ?>
            <div class="partners__container">
			<?php while ( have_rows( 'partners' ) ): the_row(); ?>
							<?php
							$logo = get_sub_field( 'logo' );
							$name   = get_sub_field( 'name' );
							$link   = get_sub_field( 'link' );
							?>

                    <div class="partners__item">
                    <?php
                        if ($link && $logo) {
                            ?>
                            <a  href="<?php echo $link; ?>" target="_blanc">
                                <img  src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?>" loading="lazy" />
                            </a>
                            <?php
                        } elseif (!$link && $logo) {
                            ?>
                            <img  src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?>" loading="lazy" />
                                    <?php
                        } else {
                            ?>
                            <p class="partners__name"><?php echo $name; ?></p>
                            <?php
                        }?>
                       </div>
                        <?php
                     endwhile; ?>

                     <div class="partners__text"> 
                        <p class="subtitle partners__text" ><?php the_field('text'); ?></p>
                     </div>

                    </div>
		<?php endif; ?>

</section>
  

</main>

<?php get_template_part( 'template-parts/donate-section' ); ?>



<?php get_footer(); ?>