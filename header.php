<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>ГО Добрі Дії</title>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__content container">
                <div class="header__logo">
                    <?php 
                        if ( has_custom_logo() ) {
                            echo get_custom_logo();
                        }
                    ?>
                </div>



                <div class="desktop-menu">

                    <nav class="nav-menu">
                        <?php wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,                           
                                'menu_class'           => 'menu__list',
                                'menu_id'              => false,    
                                'echo'                 => true,                            
                                'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',  
                                ] ); 
                            ?>
                    </nav>

                    <ul class="header__socials">
                        <li>
                            <a class="header-social__link" href="<?php the_field( 'facebook', 17 ); ?>" target="_blank"
                                aria-label="Перейти на сторінку в Фейсбук">
                                <svg class="header-social__icon" width="24px" height="24px">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#facebook">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="header-social__link" href="<?php the_field( 'instagram', 17 ); ?>" target="_blank"
                                aria-label="Перейти на сторінку в Інстаграм">
                                <svg class="header-social__icon" width="24px" height="24px">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#instagram">
                                    </use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="header-social__link" href="<?php the_field( 'youtube', 17 ); ?>" target="_blank"
                                aria-label="Перейти на канал в Ютуб">
                                <svg class="header-social__icon" width="24px" height="24px">
                                    <use
                                        href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#youtube">
                                    </use>
                                </svg>
                            </a>
                        </li>
                    </ul>

                    <a class="button button--blue header__button"
                        href="<?php the_field( 'button-link','option' ); ?>"><?php the_field( 'button-text','option' ); ?>
                    </a>


                </div>

                <div class="mobile-menu">

                    <nav class="nav-menu__mobile" id="menu-container" data-menu>
                        <?php wp_nav_menu( [
                                'theme_location'       => 'header',                          
                                'container'            => false,                           
                                'menu_class'           => 'menu__list',
                                'menu_id'              => false,    
                                'echo'                 => true,                            
                                'items_wrap'           => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>',  
                                ] ); 
                            ?>
                    </nav>


                    <a class="button button--blue header__button"
                        href="<?php echo get_permalink( 19 ); ?>"><?php the_field( 'button-text','option' ); ?>
                    </a>

                    <button type="button" class="button-menu is-open" aria-controls="menu-container" data-menu-button>
                        <svg class="social-link-icon" aria-label="Перемикач мобільного меню">
                            <use class="button-menu__burger"
                                href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#burger">
                            </use>
                            <use class="button-menu__cros"
                                href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#cross">
                            </use>
                        </svg>
                    </button>

                </div>





            </div>
        </header>