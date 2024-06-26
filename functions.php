<?php
if ( ! function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup() {
    add_theme_support( 'custom-logo',
      array(
        'height'      => 70,
        'width'       => 225,
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
  wp_enqueue_style( 'lightbox2-style', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css', array('main') );
  wp_enqueue_style( 'donate-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/donate-section.css', array('main') );
 
  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );
  wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), false, true );
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true );
  wp_localize_script('jquery', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
  wp_enqueue_script( 'lightbox2-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array(), false, true );


  if ( is_page_template('templates/home.php') ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true );
  }

  if ( is_page_template('templates/about.php') ) {
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main') );
    wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true );
  }

  if ( is_page_template('templates/projects.php') || is_page_template('templates/training.php') ) {
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

  if ( is_page_template('templates/donate.php') ) {
    wp_enqueue_style( 'donate-style', get_template_directory_uri() . '/assets/styles/template-styles/donate.css', array('main') );
    wp_enqueue_script( 'donate-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/donate.js', array(), false, true );
  }

  if ( is_page_template('templates/reports.php') ) {
    wp_enqueue_style( 'reports-style', get_template_directory_uri() . '/assets/styles/template-styles/reports.css', array('main') );
    wp_enqueue_script( 'reports-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/reports.js', array(), false, true );
  }

    if (is_singular() && locate_template('template-parts/content-list.php')) {
    wp_enqueue_style( 'content-list-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-list.css', array('main') );
    }

    if (is_singular() && locate_template('template-parts/facebook-story-cards.php')) {
    wp_enqueue_style( 'facebook-story-cards-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/facebook-story-cards.css', array('main') );
    }

    if (get_post_type() === 'news' ) {
    wp_enqueue_style('single-news-style', get_template_directory_uri() . '/assets/styles/single-pages-styles/single-news.css', array('main') );
    wp_enqueue_script('single-news-scripts', get_template_directory_uri() . '/assets/scripts/single-pages-scripts/single-news.js', array(), false, true);
    }

    if (get_post_type() === 'projects' || get_post_type() === 'training') {
    wp_enqueue_style('single-projects-style', get_template_directory_uri() . '/assets/styles/single-pages-styles/single-projects.css', array('main') );
    wp_enqueue_script('single-projects-scripts', get_template_directory_uri() . '/assets/scripts/single-pages-scripts/single-projects.js', array(), false, true);
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

/** Load more function */

function load_more_projects() {
    $page = $_POST['page'];
    $posts_per_page = $_POST['posts_per_page'];
    $post_type = $_POST['postType'];

    $args = array(
        'post_type' => $post_type,
        'posts_per_page' => $posts_per_page,
        'paged' => $page,
    );

    $project_query = new WP_Query($args);

    if ($project_query->have_posts()) {
        while ($project_query->have_posts()) {
            $project_query->the_post();

          set_query_var('type', 'projects' );
          set_query_var('classButton', 'button button--transparent' );
          set_query_var('text', $post_type === 'projects' ? 'Детальніше про проєкт' : 'Читати більше' );

          get_template_part('template-parts/content', 'posts');
}
}
wp_reset_postdata();
die();
}

add_action('wp_ajax_load_more_projects', 'load_more_projects');
add_action('wp_ajax_nopriv_load_more_projects', 'load_more_projects');


function get_total_pages() {
$post_type = $_POST['postType'];
$posts_per_page = $_POST['postsPerPage'];

$total_pages = ceil(wp_count_posts($post_type)->publish / $posts_per_page);

echo $total_pages;

wp_die();
}

add_action('wp_ajax_get_total_pages', 'get_total_pages');
add_action('wp_ajax_nopriv_get_total_pages', 'get_total_pages');