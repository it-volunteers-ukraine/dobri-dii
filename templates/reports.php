<?php
/*
Template Name: reports
*/
get_header();
?>

<main class="main ">
    <section class="container">
        <h1 class="visually-hidden">Проєкти ГО "Добрі Дії"</h1>
        <h2 class=" title-main title"><?php the_field( 'title'); ?></h2>
    </section>
    <section class="documents container">
        <div class="content-wrapper">
            <?php the_field( 'text'); ?>
            <ul class="documents-list">
                <?php
    $args = array(
        'posts_per_page' => -1,
        'post_type'      => 'reports',
        'tax_query'      => array(
            array(
                'taxonomy' => 'reports_categories',
                'field'    => 'slug',
                'terms'    => 'document',
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();
            get_template_part('template-parts/content-report', null, array('type' => 'document'));
    ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>
        </div>

        <div class="image-wrapper">
            <div class="image-container">
                <?php  if (get_field( 'image' )) {?>
                <img class="image" src="<?php echo esc_url( get_field( 'image' )['url'] ); ?>"
                    alt="<?php echo esc_attr( get_field( 'image' )['alt'] ); ?>" />
                <?php } ?>
            </div>
        </div>
    </section>

    <div class="container reports-container">
        <section class="reports">
            <h2 class=" title-main title"><?php the_field( 'sub_title'); ?></h2>
            <ul class="reports-list">
                <?php
				$args = array(
					'posts_per_page' => -1,
					'post_type'      => 'reports',
					'tax_query'      => array(
						array(
							'taxonomy' => 'reports_categories',
							'field'    => 'slug',
							'terms'    => 'report',
						),
					),
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					$counter = 0;
					while ($query->have_posts()) :
						$query->the_post();
						get_template_part('template-parts/content-report', null, array('type' => 'report', 'class' => $counter < 3 ? "visible-on-mobile": ""));
						
						$counter ++;
				?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </ul>

            <button class="reports-btn">Показати більше</button>

        </section>
    </div>


</main>

<?php get_template_part( 'template-parts/donate-section' ); ?>

<?php get_footer(); ?>