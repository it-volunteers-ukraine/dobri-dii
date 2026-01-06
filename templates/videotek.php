<?php
	/*
	Template Name: CPT Videotek
    Template Post Type: mediatek
	*/
	get_header();
?>

<main class="main">
    <section class="container">
        <h1 class="title-main"><?php the_title(); ?></h1>

        <?php
if( get_query_var('page') ) {
  $page = get_query_var( 'page' );
} else {
  $page = 1;
}

$row              = 0;
$videos_per_page  = 6; 
$videos           = get_field( 'video_list' );
$total            = count( $videos );
$pages            = ceil( $total / $videos_per_page );
$min              = ( ( $page * $videos_per_page ) - $videos_per_page ) + 1;
$max              = ( $min + $videos_per_page ) - 1;

if( have_rows( 'video_list' ) ) : ?>
        <?php while( have_rows( 'video_list' ) ): the_row();

    $row++;

    if($row < $min) { continue; }

    if($row > $max) { break; } ?>

        <?php $thumbnail_image = get_sub_field( 'thumbnail_image' ); ?>
        <?php $video_link = get_sub_field( 'video_link' ); ?>
        <a href="<?php echo $video_link; ?>" data-lightbox="roadtrip">
            <img src="<?php echo $thumbnail_image['sizes']['thumbnail']; ?>" alt="">
        </a>

        <?php endwhile;

  // Pagination
  echo paginate_links( array(
    'base' => get_permalink() . '%#%' . '/',
    'format' => '?page=%#%',
    'current' => $page,
    'total' => $pages
  ) );
  ?>

        <?php else: ?>

        No images found

        <?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>