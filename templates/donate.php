<?php
/*
Template Name: donate
*/
get_header();
?>
<main class="main donate__page">
   <h3 class="donate__subtitle">Підтримати нас можна такими способами:</h3>
   <div class="donate__container">
      <div class="donate__payment">
         <p class="donate__title">Переказ за банківськими реквізитами</p>
         <table class="donate__iban">
            <tr>
               <td>Назва</td>
               <td><?php the_field('organization'); ?></td>
            </tr>
            <tr>
               <td>IBAN:</td>
               <td><?php the_field('iban'); ?></td>
            </tr>
            <tr>
               <td>Код ЄДРПОУ</td>
               <td><?php the_field('code'); ?></td>
            </tr>
            <tr>
               <td>МФО</td>
               <td><?php the_field('mfo'); ?></td>
            </tr>
            <tr>
               <td>Призначення</td>
               <td><?php the_field('payment_purpose'); ?></td>
            </tr>
         </table>
      </div>
      <div class="donate__qr">
         <p class="donate__qrtext">QR-код для донату</p>
         <img class="donate__qrimg"
            src="<?php the_field('qrcode'); ?>"
            alt="#">
      </div>
   </div>
   <div class="donate__pryvat">
      <p>Посилання на Privat-24</p>
      <a class="button button--blue">
      <?php the_field('privat-24'); ?>
         Задонатити
      </a>
   </div>
</main>

<div class="not-found__wrapper">
   <?php get_template_part( 'template-parts/donate-section' ); ?>
</div>

<?php get_footer(); ?>





