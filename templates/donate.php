<?php
/*
Template Name: donate
*/
get_header();
?>
<main class="donate__page">
   <h3 class="donate__subtitle">Підтримати нас можна такими способами:</h3>
   <div class="donate__container">
      <div class="donate__payment">
         <p class="donate__title">Переказ за банківськими реквізитами</p>
         <table class="donate__iban">
            <tr>
               <td>Назва</td>
               <td>Громадська організація Добрі Дії</td>
            </tr>
            <tr>
               <td>IBAN:</td>
               <td>UA893515330000026008052133515</td>
            </tr>
            <tr>
               <td>Код ЄДРПОУ</td>
               <td>36375097</td>
            </tr>
            <tr>
               <td>МФО</td>
               <td>305299</td>
            </tr>
            <tr>
               <td>Призначення</td>
               <td>Благодійний внесок</td>
            </tr>
         </table>
      </div>
      <div class="donate__qr">
         <p class="donate__qrtext">QR-код для донату</p>
         <img class="donate__qrimg"
            src="<?php bloginfo( 'template_url' ); ?>/assets/images/image1.svg"
            alt="#">
      </div>
   </div>
   <div class="donate__pryvat">
      <p>Посилання на Privat-24</p>
      <a class="button button--blue">
         Задонатити
      </a>
   </div>
</main>

<div class="not-found__wrapper">
   <?php get_template_part( 'template-parts/donate-section' ); ?>
</div>

<?php get_footer(); ?>





