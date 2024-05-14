<footer class="footer">

    <div class="footer-top">
        <div class="footer-top-wrapper container">
            <div class="info">
                <?php
					if ( has_custom_logo() ) {
						echo get_custom_logo();
					}
				?>
                <p class="address"><?php the_field( 'address', 'option' ); ?></p>
            </div>

            <div class="menu">
                <p class="title"><?php the_field( 'menu_title', 'option' ); ?></p>
                <nav>
                    <?php wp_nav_menu( [
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'menu-list',
						'menu_id'        => false,
						'echo'           => true,
						'items_wrap'     => '<ul id="%1$s" %2$s">%3$s</ul>',
					] );
					?>
                </nav>

            </div>

            <div class="contacts">
                <p class="title"><?php the_field( 'contacts_title', 'option' ); ?></p>
                <ul class="contacts-list">
                    <li>
                        <a class="social-link" href="tel:<?php the_field( 'telephone_1', 17 ); ?>" target="_blank"
                            aria-label="Зв'язатись за допомогою телефону 1">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#phone">
                                </use>
                            </svg>
                            <span class="social-link-text"><?php the_field( 'telephone_1_display', 17 ); ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="social-link" href="tel:<?php the_field( 'telephone_2', 17 ); ?>" target="_blank"
                            aria-label="Зв'язатись за допомогою телефону 2">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#phone">
                                </use>
                            </svg>
                            <span class="social-link-text"><?php the_field( 'telephone_2_display', 17 ); ?></span>
                        </a>
                    </li>
                    <li>
                        <a class="social-link" href="mailto:<?php the_field( 'email', 17 ); ?>" target="_blank"
                            aria-label="Зв'язатись за допомогою електронної пошти">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#mail">
                                </use>
                            </svg>
                            <span class="social-link-text"><?php the_field( 'email', 17 ); ?></span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="socials">
                <p class="title"><?php the_field( 'social_networks_title', 'option' ); ?></p>
                <ul class="socials-list">
                    <li>
                        <a class="social-link" href="<?php the_field( 'instagram', 17 ); ?>" target="_blank"
                            aria-label="Перейти на сторінку в Інстаграм">
                            <svg class="social-link-icon">
                                <use
                                    href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#instagram">
                                </use>
                            </svg>
                            <span class="social-link-text">Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a class="social-link" href="<?php the_field( 'youtube', 17 ); ?>" target="_blank"
                            aria-label="Перейти на канал в Ютуб">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#youtube">
                                </use>
                            </svg>
                            <span class="social-link-text">YouTube</span>
                        </a>
                    </li>
                    <li>
                        <a class="social-link" href="<?php the_field( 'facebook', 17 ); ?>" target="_blank"
                            aria-label="Перейти на сторінку в Фейсбук">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#facebook">
                                </use>
                            </svg>
                            <span class="social-link-text">Facebook</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="footer-project">
        <div class="container">
            <div>
                <p><?php the_field('project_text', 'option'); ?></p>
            </div>

            <?php  $project_logos = get_field('project_logos', 'option');
            if ($project_logos) { ?>
            <div class="footer-project_logos">
                <?php 
                        foreach ($project_logos as $logo) { ?>
                <div class="footer-project_logo_item">
                    <img src="<?php echo $logo["project_logo"]['url']?>" alt="logo">
                </div>

                <?php }
                    
                    ?>
            </div>
            <?php } ?>
        </div>
    </div>


    <hr class="line">

    <div class="footer-bottom">
        <p class="copyright container">© <?php echo date( "Y" ); ?>
            <?php the_field('copyright', 'option'); ?></p>
    </div>

</footer>

<?php wp_footer(); ?>

</div>
</body>

</html>