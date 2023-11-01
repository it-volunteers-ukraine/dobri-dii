<?php
	/*
	Template Name: contacts
	*/
	get_header();
?>

    <main class="contact-page main">
        <section class="container">
            <h1 class="title-main"><?php the_title(); ?></h1>

            <div class="contact-page-wrapper">
                <div class="map">
                    <iframe src="<?php the_field( 'address_link' ); ?>"
                            width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div>
                    <p class="address"><?php the_field( 'address' ); ?></p>
                    <div class="contact-links-wrapper">
                        <ul>
                            <li>
                                <a class="contact-link" href="tel:<?php the_field( 'telephone_1' ); ?>" target="_blank"
                                   aria-label="Зв'язатись за допомогою телефону 1">
                                    <svg class="contact-link-icon" width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#phone"></use>
                                    </svg>
                                    <span class="contact-link-text"><?php the_field( 'telephone_1_display' ); ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="contact-link" href="tel:<?php the_field( 'telephone_2' ); ?>" target="_blank"
                                   aria-label="Зв'язатись за допомогою телефону 2">
                                    <svg class="contact-link-icon" width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#phone"></use>
                                    </svg>
                                    <span class="contact-link-text"><?php the_field( 'telephone_2_display' ); ?></span>
                                </a>
                            </li>
                            <li>
                                <a class="contact-link" href="mailto:<?php the_field( 'email' ); ?>" target="_blank"
                                   aria-label="Зв'язатись за допомогою електронної пошти">
                                    <svg class="contact-link-icon" width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#mail"></use>
                                    </svg>
                                    <span class="contact-link-text"><?php the_field( 'email' ); ?></span>
                                </a>
                            </li>
                        </ul>


                        <ul>
                            <li>
                                <a class="contact-link" href="<?php the_field( 'instagram' ); ?>"
                                   target="_blank"
                                   aria-label="Перейти на сторінку в Інстаграм">
                                    <svg class="contact-link-icon" width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#instagram"></use>
                                    </svg>
                                    <span class="contact-link-text">Instagram</span>
                                </a>
                            </li>
                            <li>
                                <a class="contact-link" href="<?php the_field( 'telegram' ); ?>" target="_blank"
                                   aria-label="Зв'язатись за допомогою мессенджера Телеграм">
                                    <svg class="contact-link-icon" width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#telegram"></use>
                                    </svg>
                                    <span class="contact-link-text">Telegram</span>
                                </a>
                            </li>
                            <li>
                                <a class="contact-link" href="<?php the_field( 'facebook' ); ?>" target="_blank"
                                   aria-label="Перейти на сторінку в Фейсбук">
                                    <svg class="contact-link-icon" width="24" height="24">
                                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#facebook"></use>
                                    </svg>
                                    <span class="contact-link-text">Facebook</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

		<?php get_template_part( 'template-parts/donate-section' ); ?>

    </main>


<?php get_footer(); ?>