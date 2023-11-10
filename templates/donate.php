<?php
/*
Template Name: donate
*/
get_header();
?>
<main class="main donate__page container">
    <h3 class="donate__subtitle">Підтримати нас можна такими способами:</h3>
    <div class="donate__container">
        <div class="donate__payment">
            <p class="donate__title">Переказ за банківськими реквізитами</p>
            <table class="donate__iban">
                <tr>
                    <td class="donate__details">Назва</td>
                    <td class="donate__value"><?php the_field('organization'); ?></td>
                </tr>
                <tr>
                    <td class="donate__details">IBAN:</td>
                    <td class="donate__value"> <?php the_field('iban'); ?></td>
                </tr>
                <tr>
                    <td class="donate__details">Код ЄДРПОУ</td>
                    <td class="donate__value"><?php the_field('code'); ?></td>
                </tr>
                <tr>
                    <td class="donate__details">МФО</td>
                    <td class="donate__value"><?php the_field('mfo'); ?></td>
                </tr>
                <tr>
                    <td class="donate__details">Призначення</td>
                    <td class="donate__value"><?php the_field('payment_purpose'); ?></td>
                </tr>
            </table>
        </div>
        <div class=" donate__qr">
            <p class="donate__qrtext">QR-код для донату</p>
            <p class="donate__qrtextmini">Privat-24</p>
            <img class="donate__qrimg" src="<?php the_field('qrcode'); ?>" alt="QR-код">
        </div>
    </div>
    <div class="donate__pryvat">
        <p>Посилання на Privat-24</p>
        <a class="button button--blue" href="<?php the_field('privat-24'); ?>" target="_blank">
            Задонатити
        </a>
    </div>
</main>

<div class="not-found__wrapper">
    <?php get_template_part( 'template-parts/donate-section' ); ?>
</div>

<?php get_footer(); ?>