<?php
	/*
	Template Name: home
	*/
	get_header();
    $hero_content = get_field('hero_content');
    $activities_title = get_field('activities_title');
    $activities_image = get_field('activities_image');
    $activities_list = get_field('activities_list');
    $values_title = get_field('values_title');
    $values_list = get_field('values_list');
?>

<?php if ($hero_content): ?>
<?php endif; ?>

<main class="main home-page">
    <h1 class="visually-hidden">ГО "Добрі Дії"</h1>
    <section class="home-info container">
        <div class="home-info__wrapper">
            <?php if ($hero_content): ?>
            <div class="home-info__content">
                <?php echo $hero_content ?>
            </div>
            <?php endif; ?>

            <a class="button button--blue home-info__link "
                href="<?php the_field( 'button-link','option' ); ?>"><?php the_field( 'button-text','option' ); ?></a>

        </div>

        <div class="home-info-gallery">
            <div class="home-info-gallery__container">
                <div class="home-info-gallery__column">
                    <svg class="svg-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="139" height="90" viewBox="0 0 139 90" fill="none">
                        <path
                            d="M0.406625 50.0024C-0.23074 34.1943 4.23082 18.9941 30.3628 6.83387C56.4948 -5.32638 97.9236 0.145714 116.407 18.994C131.038 33.9131 140.627 54.8664 138.078 67.0266C135.528 79.1868 119.913 95.299 97.605 86.4828C75.2971 77.6667 79.44 74.9308 52.6706 81.0109C25.9012 87.0909 1.04399 65.8106 0.406625 50.0024Z"
                            fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image1" transform="matrix(0.00104167 0 0 0.00162308 0 -0.53877)" />
                            </pattern>
                            <image id="image1" width="960" height="1280" xlink:href="<?php the_field( 'img_1'); ?>" />
                        </defs>
                    </svg>

                    <svg class="svg-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="179" height="171" viewBox="0 0 179 171" fill="none">
                        <path
                            d="M51.6244 159.011C21.3529 142.163 -0.315179 132.944 0.00346867 100.52C0.322116 68.0953 14.0877 56.1426 23.2647 45.2073C34.736 31.5381 44.6141 8.96809 63.0957 3.24612C81.5772 -2.47585 86.357 2.29244 102.608 2.61033C118.859 2.92822 129.693 0.385114 139.89 6.1071C150.086 11.8291 151.68 15.3258 159.009 37.578C165.186 56.3334 179.402 58.5586 178.127 74.453C176.853 90.3474 165.382 95.1157 157.097 107.195C148.812 119.275 143.395 146.614 126.825 159.011C110.256 171.409 81.8959 175.859 51.6244 159.011Z"
                            fill="url(#pattern1)" />
                        <defs>
                            <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image2" transform="matrix(0.00104167 0 0 0.00109457 0 -0.200524)" />
                            </pattern>
                            <image id="image2" width="960" height="1280" xlink:href="<?php the_field( 'img_2'); ?>" />
                        </defs>
                    </svg>
                </div>

                <div class="home-info-gallery__column">
                    <svg class="svg-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="130" height="101" viewBox="0 0 130 101" fill="none">
                        <path
                            d="M14.6602 71.4195C7.5704 65.8347 -2.50451 59.8776 0.853793 49.825C4.2121 39.7723 9.43613 39.7723 20.2573 31.5813C36.0886 19.5979 46.111 -12.2815 72.8708 5.51886C82.9457 12.2206 80.3337 17.4331 91.9012 15.9438C103.469 14.4546 122.126 11.8483 127.35 27.8581C132.574 43.8678 129.216 55.4098 110.558 61.7392C91.9012 68.0686 97.4983 73.6534 95.6326 87.4293C93.7669 101.205 76.2291 100.833 65.0347 99.3435C53.8404 97.8542 30.3322 102.694 23.6156 95.248C16.899 87.8016 21.7499 77.0043 14.6602 71.4195Z"
                            fill="url(#pattern2)" />
                        <defs>
                            <pattern id="pattern2" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image3" transform="matrix(0.00104167 0 0 0.00135024 0 -0.364152)" />
                            </pattern>
                            <image id="image3" width="960" height="1280" xlink:href="<?php the_field( 'img_3'); ?>" />
                        </defs>
                    </svg>

                    <svg class="svg-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="123" height="124" viewBox="0 0 123 124" fill="none">
                        <path
                            d="M7.78022 50.0645C4.9124 29.7197 2.68186 22.0903 17.021 10.3285C31.3601 -1.43337 44.106 3.33497 63.5435 1.74552C82.981 0.156062 115.483 -4.93013 121.537 19.5472C127.592 44.0246 112.615 55.4686 109.747 68.502C106.88 81.5354 109.429 105.695 94.4524 115.867C79.4759 126.04 66.4114 124.45 53.0282 121.271C39.645 118.093 6.18699 116.185 1.08863 94.5688C-4.00973 72.9524 10.6481 70.4093 7.78022 50.0645Z"
                            fill="url(#pattern3)" />
                        <defs>
                            <pattern id="pattern3" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image4" transform="matrix(0.00138889 0 0 0.00138315 0 -0.163913)" />
                            </pattern>
                            <image id="image4" width="720" height="960" xlink:href="<?php the_field( 'img_4'); ?>" />
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="activities container">
        <?php if ($activities_title): ?>
        <h2 class="title-main"><?php echo $activities_title?></h2>
        <?php endif; ?>

        <div class="image-wrapper">
            <?php if ($activities_image): ?>
            <img src="<?php echo esc_url($activities_image['url']); ?>"
                alt="<?php echo esc_attr($activities_image['alt']); ?>" />
            <?php endif; ?>
        </div>


        <?php if ($activities_list): ?>
        <ul class="activities-list">
            <?php foreach ($activities_list as $list_row): ?>
            <?php $icon = $list_row['logo']; ?>
            <?php $color = $list_row['color_picker']; ?>
            <?php $title = $list_row['title']; ?>
            <?php $description = $list_row['description']; ?>

            <li class="activities-item ">

                <div class="hovered-description-container">
                    <?php if ($icon): ?>
                    <div class="icon-container">
                        <div class="icon-wrapper <?php echo $color;?>">
                            <?php echo wp_get_attachment_image($icon['id'], 'full_hd', null); ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if ($description): ?>
                    <div class="activities-item_description-wrapper">
                        <div class="activities-item_description <?php echo $color;?>">
                            <p><?php echo $description?></p>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <?php if ($title): ?>
                <h3><?php echo $title?></h3>
                <?php endif; ?>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </section>

    <section class="values container">
        <?php if ($values_title): ?>
        <h2 class="title-main"><?php echo $values_title?></h2>
        <?php endif; ?>

        <?php if ($values_list): ?>
        <div class="values-list">
            <?php foreach ($values_list as $values_row): ?>
            <?php  get_template_part('template-parts/values-card', null, array('card' => $values_row)); ?>
            <?php endforeach; ?>
        </div>

        <div class="swiper values-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($values_list as $values_row): ?>
                <?php  get_template_part('template-parts/values-card', null, array('isSliderCard' => true, 'card' => $values_row)); ?>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <?php endif; ?>
    </section>

    <section class="results container">
        <h2 class="title-main results__title"><?php the_field( 'title_results'); ?></h2>

        <ul class="results__list">
            <li class="results__item">
                <div>
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icon1.svg" alt="Пісочний годинник">
                </div>
                <span><?php the_field( 'index_1'); ?></span>
                <p class="text-secondary"><?php the_field( 'description_1'); ?></p>
            </li>
            <li class="results__item">
                <div class="results__icon2">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icon2.svg" alt="Лист паперу">
                </div>
                <span><?php the_field( 'index_2'); ?></span>
                <p class="text-secondary"><?php the_field( 'description_2'); ?></p>
            </li>
            <li class="results__item">
                <div class="results__icon3">
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icon3.svg" alt="Сердечко">
                </div>
                <span><?php the_field( 'index_3'); ?></span>
                <p class="text-secondary"><?php the_field( 'description_3'); ?></p>
            </li>
            <li class="results__item">
                <div>
                    <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/icon4.svg" alt="Грошовий  знак">
                </div>
                <span><?php the_field( 'index_4'); ?></span>
                <p class="text-secondary"><?php the_field( 'description_4'); ?></p>
            </li>
        </ul>

        <span class="results__info"><?php the_field( 'index_info'); ?></span>
    </section>

    <section class="projects">
        <div class="projects__container container">
            <div class="projects__head">
                <h2 class="title-main"><?php the_field('title_projects'); ?></h2>

                <a class="button--arrow"
                    href="<?php echo the_field( 'button_link_projects'); ?>"><?php the_field('button_projects'); ?>
                    <svg width="24px" height="24px">
                        <use class="arrow-up"
                            href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#arrow-up-right">
                        </use>
                        <use class="arrow-right"
                            href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow-right">
                        </use>
                    </svg>
                </a>
            </div>

            <div class="swiper swiperProjects">
                <?php	
            $params = [ 'type' => 'projects', 'class' => 'projects__list'];
            get_template_part( 'template-parts/content', 'list',  $params  );
           ?>

                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>


    <section class="news container">
        <div class="news__head">
            <h2 class="title-main"><?php the_field('title_news'); ?></h2>
            <a class="button--arrow"
                href="<?php echo the_field( 'button_link_news'); ?>"><?php the_field('button_news'); ?>
                <svg width="24px" height="24px">
                    <use class="arrow-up"
                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#arrow-up-right"></use>
                    <use class="arrow-right"
                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow-right">
                    </use>
                </svg>
            </a>
        </div>

        <div class="swiper swiperNews">

            <?php	
            $params = [ 'type' => 'news', 'class' => 'news__list'];
            get_template_part( 'template-parts/content', 'list',  $params  );
           ?>
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <section class="partners container">

        <div class="partners__head">
            <h2 class="title-main"><?php the_field('title_partners'); ?></h2>
            <a class="button--arrow"
                href="<?php echo the_field( 'button_link_partners'); ?>"><?php the_field('button_partners'); ?>
                <svg width="24px" height="24px">
                    <use class="arrow-up"
                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#arrow-up-right"></use>
                    <use class="arrow-right"
                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow-right">
                    </use>
                </svg>
            </a>
        </div>


        <div class="swiper swiperPartners">
            <div class="partners__list swiper-wrapper">

                <?php
            $other_page_id = 13;
            $repeater_fields = get_field('partners', $other_page_id);

            if ($repeater_fields) {
                $count = 0;

                foreach ($repeater_fields as $repeater_field) {
                    $logo = $repeater_field['logo'];
                    $name = $repeater_field['name'];
                    $link = $repeater_field['link'];

                    if ($count < 6) { ?>
                <div class="partners__item swiper-slide">
                    <?php
                        if ($link && $logo) {
                            ?>
                    <a href="<?php echo $link; ?>" target="_blanc">
                        <img src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?>" loading="lazy" />
                    </a>
                    <?php
                        } elseif (!$link && $logo) {
                            ?>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $name; ?>" loading="lazy" />
                    <?php
                        } else {
                            ?>
                    <p class="partners__name"><?php echo $name; ?></p>
                    <?php
                        }?>
                </div>
                <?php
                        $count++;  
                    } else {
                        break;  
                    }
                }
            } else {
                echo 'Партнерів не знайдено';
            }
            ?>


            </div>

        </div>

    </section>

</main>
<?php get_template_part( 'template-parts/donate-section' ); ?>

<?php get_footer(); ?>