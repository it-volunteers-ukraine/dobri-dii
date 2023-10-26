<?php
/*
Template Name: donate
*/
get_header();
?>
<main class="container">
   <h3 class="donate__subtitle">Підтримати нас можна такими способами:</h3>
   <h2 class="donate__title">Переказ за банківськими реквізитами</h2>
   <div class="donate__container">
      <div class="donate__payment">
         <div class="column1__payment">
            <p>Назва</p>
            <p>IBAN:</p>
            <p>Код ЄДРПОУ</p>
            <p>МФО</p>
            <p>Призначення</p>
         </div>
         <div class="column2__payment">
            <p>Громадська організація Добрі Дії</p>
            <p>UA893515330000026008052133515</p>
            <p>36375097</p>
            <p>305299</p>
            <p>Благодійний внесок</p>
         </div>
      <div class="donate__qr">
         <p class="donate__qrtext">QR-код для донату</p>
         <svg class="donate__qrimg" width="253px" height="248px">
            <use
                  href="<?php bloginfo( 'template_url' ); ?>/assets/images/image1.svg">
            </use>
         </svg>
      </div>
      <div>
         <p>Посилання на Privat-24</p>
         <button class="button--blue">

         </button>
      </div>
      </div>
   </div>
</main>




<?php get_footer(); ?>





