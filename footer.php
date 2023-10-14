<footer class="footer">

    <div class="footer-top">
        <div class="footer-top-wrapper container">
            <div class="info">
				<?php
					if ( has_custom_logo() ) {
						echo get_custom_logo();
					}
				?>
                <p class="address">Україна, 62560, Харківська обл., Чугуївський район, смт Старий Салтів, вул. Перемоги,
                    буд. 6</p>
            </div>

            <div class="menu">
                <p class="title">Меню</p>
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
                <p class="title">Контакти</p>
                <ul class="contacts-list">
                    <li>
                        <a class="social-link" href="tel:+380 66 535 69 00" target="_blank"
                           aria-label="Зв'язатись за допомогою телефону 1">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#phone"></use>
                            </svg>
                            <span class="social-link-text">+380 96 702 17 80</span>
                        </a>
                    </li>
                    <li>
                        <a class="social-link" href="tel:+380 96 702 17 80" target="_blank"
                           aria-label="Зв'язатись за допомогою телефону 2">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#phone"></use>
                            </svg>
                            <span class="social-link-text">+380 96 702 17 80</span>
                        </a>
                    </li>
                    <li>
                        <a class="social-link" href="mailto:dobridiigo@gmail.com" target="_blank"
                           aria-label="Зв'язатись за допомогою електронної пошти">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#mail"></use>
                            </svg>
                            <span class="social-link-text">dobridiigo@gmail.com</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="socials">
                <p class="title">Соцмережі</p>
                <ul class="socials-list">
                    <li>
                        <a class="social-link" href="https://www.instagram.com/" target="_blank"
                           aria-label="Зв'язатись за допомогою електронної пошти">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#instagram"></use>
                            </svg>
                            <span class="social-link-text">Instagram</span>
                        </a>
                    </li>
                    <li>
                        <a class="social-link" href="https://www.facebook.com/" target="_blank"
                           aria-label="Зв'язатись за допомогою електронної пошти">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#facebook"></use>
                            </svg>
                            <span class="social-link-text">Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a class="social-link" href="https://telegram.org/" target="_blank"
                           aria-label="Зв'язатись за допомогою електронної пошти">
                            <svg class="social-link-icon">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#telegram"></use>
                            </svg>
                            <span class="social-link-text">Telegram</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <hr class="line">

    <div class="footer-bottom">
        <p class="copyright container">© <?php echo date( "Y" ); ?> IT Volunteers. All Rights Reserved.</p>
    </div>

</footer>

<?php wp_footer(); ?>

</div>
</body>
</html>
