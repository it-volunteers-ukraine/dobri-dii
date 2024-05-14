<?php
/*
Template Name: donate
*/
get_header();
?>
<main class="main donate__page container">
    <h1 class="visually-hidden">Підтримати ГО "Добрі Дії"</h1>

    <h2 class="donate__subtitle"><?php the_field('title'); ?></h2>
    <div class="donate__container">
        <div class="donate__payment">
            <p class="donate__title"><?php the_field('subtitle_donate'); ?></p>
            <table class="donate__iban">
                <tr>
                    <td class="donate__details"><?php the_field('organization_label'); ?></td>
                    <td class="donate__value"><?php the_field('organization'); ?></td>
                </tr>
                <tr>
                    <td class="donate__details">IBAN:</td>
                    <td class="donate__value"> <?php the_field('iban'); ?></td>
                </tr>
                <tr>
                    <td class="donate__details"><?php the_field('code_label'); ?></td>
                    <td class="donate__value"><?php the_field('code'); ?></td>
                </tr>
                <tr>
                    <td class="donate__details"><?php the_field('mfo_label'); ?></td>
                    <td class="donate__value"><?php the_field('mfo'); ?></td>
                </tr>
                <tr>
                    <td class="donate__details"><?php the_field('payment_purpose_label'); ?></td>
                    <td class="donate__value"><?php the_field('payment_purpose'); ?></td>
                </tr>
            </table>
        </div>
        <div class=" donate__qr">
            <p class="donate__qrtext"><?php the_field('subtitle_qrcode'); ?></p>
            <p class="donate__qrtextmini"><?php the_field('bank'); ?></p>
            <img class="donate__qrimg" src="<?php the_field('qrcode'); ?>" alt="QR-код">
        </div>
    </div>
    <div class="donate__pryvat">
        <p><?php the_field('text'); ?></p>
        <a class="button button--blue" href="<?php the_field('privat-24'); ?>" target="_blank">
            <?php the_field('button'); ?>
        </a>
    </div>
</main>

<div class="not-found__wrapper">
    <?php get_template_part( 'template-parts/donate-section' ); ?>
</div>

<?php get_footer(); ?>