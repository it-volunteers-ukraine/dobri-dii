<?php
$type = $args['type'];
$class = isset($args['class']) ? $args['class'] : "";

?>

<li class="<?php print $type; ?>-item <?= $class; ?>">
    <?php
    $file = get_field('report_file');
    if( $file ): ?>
    <a class="link" href="<?php echo $file['url']; ?>" target="_blank">
        <svg width="23" height="30">
            <use
                href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-<?php echo esc_attr( $args['type'] ); ?>">
            </use>
        </svg></a>
    <?php endif; ?>

    <p><?php the_field('title'); ?></p>
</li>