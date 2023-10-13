<?php
if ( ! function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup() {
    add_theme_support( 'custom-logo', 
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,        
      )
    );
    add_theme_support( 'title-tag' );    
  }
  add_action( 'after_setup_theme', 'wp_it_volunteers_setup' );
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_it_volunteers_scripts' );

function wp_it_volunteers_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main') );
	wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css');
  wp_enqueue_style( 'swiper-style','https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array('main') );

  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );
  wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), false, true );

  if ( is_page_template('templates/home.php') ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true );
  }

  if ( is_page_template('templates/about.php') ) {
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main') );
    wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true );
  }

  if ( is_page_template('templates/projects.php') ) {
    wp_enqueue_style( 'projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main') );
    wp_enqueue_script( 'projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true );
  }

  if ( is_page_template('templates/news.php') ) {
    wp_enqueue_style( 'news-style', get_template_directory_uri() . '/assets/styles/template-styles/news.css', array('main') );
    wp_enqueue_script( 'news-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/news.js', array(), false, true );
  }

  if ( is_page_template('templates/partners.php') ) {
    wp_enqueue_style( 'partners-style', get_template_directory_uri() . '/assets/styles/template-styles/partners.css', array('main') );
    wp_enqueue_script( 'partners-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/partners.js', array(), false, true );
  }
  
  if ( is_page_template('templates/gallery.php') ) {
    wp_enqueue_style( 'gallery-style', get_template_directory_uri() . '/assets/styles/template-styles/gallery.css', array('main') );
    wp_enqueue_script( 'gallery-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/gallery.js', array(), false, true );
  }

  if ( is_page_template('templates/contacts.php') ) {
    wp_enqueue_style( 'contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main') );
    wp_enqueue_script( 'contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true );
  }

    if (is_singular() && locate_template('template-parts/donate-section.php')) {
    wp_enqueue_style( 'donate-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/donate-section.css', array('main') );
    wp_enqueue_script( 'donate-section-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/donate-section.js', array(), false, true );
    }

 
}
/** add fonts */
function add_google_fonts() {
  wp_enqueue_style( 'Montserrat-400', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap' );
  wp_enqueue_style( 'Montserrat-500', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap' );
  wp_enqueue_style( 'Montserrat-600', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap' );
  wp_enqueue_style( 'Montserrat-700', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap' );
}
 
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** Register menus */
function wp_it_volunteers_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp-it-volunteers' ),
    'footer' => __( 'Footer Menu', 'wp-it-volunteers' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'wp_it_volunteers_menus');


/** ACF add options page */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
      'page_title'    => 'Theme General Settings',
      'menu_title'    => 'Theme Settings',
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Header Settings',
      'menu_title'    => 'Header',
      'parent_slug'   => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
      'page_title'    => 'Theme Footer Settings',
      'menu_title'    => 'Footer',
      'parent_slug'   => 'theme-general-settings',
  ));
}
