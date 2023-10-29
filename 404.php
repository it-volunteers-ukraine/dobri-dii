<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-it-volunteers
 */

get_header();
?>

<main class="container not-found">

    <section class="not-found__section">

        <h1 class="title-main "><?php esc_html_e( 'Сторінку не знайдено', 'wp-it-volunteers' ); ?> </h1>
        <p class="title-secondary">Неправильно набрано адресу, або такої сторінки на сайті більше не існує. </p>
        <a class="button button--transparent" href="<?php echo get_permalink( 5 ); ?>">Перейти на головну сторінку</a>

    </section>

</main>

<?php get_template_part( 'template-parts/donate-section' ); ?>


<?php
get_footer();