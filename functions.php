<?php
if (! function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup()
  {
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 70,
        'width'       => 225,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'wp_it_volunteers_setup');
}

/**
 * Enqueue scripts and styles.
 */
add_action('wp_enqueue_scripts', 'wp_it_volunteers_scripts');

function wp_it_volunteers_scripts()
{
  wp_enqueue_style('main', get_stylesheet_uri());
  wp_enqueue_style('wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main'));
  wp_enqueue_style('normalize', 'https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css');
  wp_enqueue_style('swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', array('main'));
  wp_enqueue_style('lightbox2-style', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css', array('main'));
  wp_enqueue_style('donate-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/donate-section.css', array('main'));
  wp_enqueue_style('feedback-section-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/feedback-section.css', array('main'));

  wp_enqueue_script('wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true);
  wp_enqueue_script('swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), false, true);
  wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true);
  wp_localize_script('jquery', 'ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
  wp_enqueue_script('lightbox2-scripts', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array(), false, true);



  if (is_page_template('templates/home.php')) {
    wp_enqueue_style('home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main'));
    wp_enqueue_script('home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true);
  }

  if (is_page_template('templates/about.php')) {
    wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main'));
    wp_enqueue_script('about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true);
  }

  if (is_page_template('templates/projects.php') || is_page_template('templates/training.php')) {
    wp_enqueue_style('projects-style', get_template_directory_uri() . '/assets/styles/template-styles/projects.css', array('main'));
    wp_enqueue_script('projects-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/projects.js', array(), false, true);
  }

  if (is_page_template('templates/news.php')) {
    wp_enqueue_style('news-style', get_template_directory_uri() . '/assets/styles/template-styles/news.css', array('main'));
    wp_enqueue_script('news-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/news.js', array(), false, true);
  }

  if (is_page_template('templates/partners.php')) {
    wp_enqueue_style('partners-style', get_template_directory_uri() . '/assets/styles/template-styles/partners.css', array('main'));
    wp_enqueue_script('partners-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/partners.js', array(), false, true);
  }

  if (is_page_template('templates/gallery.php')) {
    wp_enqueue_style('gallery-style', get_template_directory_uri() . '/assets/styles/template-styles/gallery.css', array('main'));
    wp_enqueue_script('gallery-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/gallery.js', array(), false, true);
  }

  if (is_page_template('templates/contacts.php')) {
    wp_enqueue_style('contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main'));
    wp_enqueue_script('contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true);
  }

  if (is_page_template('templates/donate.php')) {
    wp_enqueue_style('donate-style', get_template_directory_uri() . '/assets/styles/template-styles/donate.css', array('main'));
    wp_enqueue_script('donate-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/donate.js', array(), false, true);
  }

  if (is_page_template('templates/reports.php')) {
    wp_enqueue_style('reports-style', get_template_directory_uri() . '/assets/styles/template-styles/reports.css', array('main'));
    wp_enqueue_script('reports-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/reports.js', array(), false, true);
  }

  if (is_singular() && locate_template('template-parts/content-list.php')) {
    wp_enqueue_style('content-list-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-list.css', array('main'));
  }

  if (is_singular() && locate_template('template-parts/facebook-story-cards.php')) {
    wp_enqueue_style('facebook-story-cards-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/facebook-story-cards.css', array('main'));
  }

  if (get_post_type() === 'news') {
    wp_enqueue_style('single-news-style', get_template_directory_uri() . '/assets/styles/single-pages-styles/single-news.css', array('main'));
    wp_enqueue_script('single-news-scripts', get_template_directory_uri() . '/assets/scripts/single-pages-scripts/single-news.js', array(), false, true);
  }

  if (get_post_type() === 'projects' || get_post_type() === 'training') {
    wp_enqueue_style('single-projects-style', get_template_directory_uri() . '/assets/styles/single-pages-styles/single-projects.css', array('main'));
    wp_enqueue_script('single-projects-scripts', get_template_directory_uri() . '/assets/scripts/single-pages-scripts/single-projects.js', array(), false, true);
  }

  if (is_archive() === 'mediatek') {
    wp_enqueue_style('mediatek-styles', get_template_directory_uri() . '/assets/styles/archive-mediatek.css', array('main'));
    wp_enqueue_script('mediatek-scripts', get_template_directory_uri() . '/assets/scripts/mediatek.js', array(), false, true);
  }
}

/** add fonts */
function add_google_fonts()
{
  wp_enqueue_style('Montserrat-400', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap');
  wp_enqueue_style('Montserrat-500', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
  wp_enqueue_style('Montserrat-600', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap');
  wp_enqueue_style('Montserrat-700', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap');
}

add_action('wp_enqueue_scripts', 'add_google_fonts');

/** Register menus */
function wp_it_volunteers_menus()
{
  $locations = array(
    'header' => __('Header Menu', 'wp-it-volunteers'),
    'footer' => __('Footer Menu', 'wp-it-volunteers'),
  );

  register_nav_menus($locations);
}

add_action('init', 'wp_it_volunteers_menus');


/** ACF add options page */
if (function_exists('acf_add_options_page')) {

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

function load_more_projects()
{
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

      set_query_var('type', 'projects');
      set_query_var('classButton', 'button button--transparent');
      set_query_var('text', $post_type === 'projects' ? 'Детальніше про проєкт' : 'Читати більше');

      get_template_part('template-parts/content', 'posts');
    }
  }
  wp_reset_postdata();
  die();
}

add_action('wp_ajax_load_more_projects', 'load_more_projects');
add_action('wp_ajax_nopriv_load_more_projects', 'load_more_projects');


function get_total_pages()
{
  $post_type = $_POST['postType'];
  $posts_per_page = $_POST['postsPerPage'];

  $total_pages = ceil(wp_count_posts($post_type)->publish / $posts_per_page);

  echo $total_pages;

  wp_die();
}

add_action('wp_ajax_get_total_pages', 'get_total_pages');
add_action('wp_ajax_nopriv_get_total_pages', 'get_total_pages');

add_filter('get_the_archive_title', 'modify_archive_title', 10, 1);

function modify_archive_title($title)
{

  $var = "1";

  return $var . $title;
}

add_action('wp_enqueue_scripts', function () {

  wp_enqueue_style(
    'fancybox-style',
    'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.css',
    [],
    null
  );

  wp_enqueue_script(
    'fancybox-scripts',
    'https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox/fancybox.umd.js',
    [],
    null,
    true
  );

  // Initialize AFTER fancybox script is loaded
  wp_add_inline_script('fancybox-scripts', "
    document.addEventListener('DOMContentLoaded', function () {
      if (window.Fancybox) {
        Fancybox.bind('[data-fancybox=\"videos\"]', {
          Carousel: {
            Video: {
            autoplay: false,
            },
          },
        });
      }
    });
  ");
});

function enqueue_video_pagination_scripts()
{
  // Only enqueue if we are on the page that needs it (optional, but good practice)
  // You might want to check for a specific page template or ID here.
  wp_enqueue_script('video-pagination', get_template_directory_uri() . '/assets/scripts/template-scripts/video-pagination.js', array('jquery'), null, true);
  wp_localize_script('video-pagination', 'videoPaginationAjax', array(
    'ajax_url' => admin_url('admin-ajax.php'),
    'post_id'  => get_the_ID(), // Pass the current post ID
    'nonce'    => wp_create_nonce('video_pagination_nonce'), // Security nonce
  ));
}
add_action('wp_enqueue_scripts', 'enqueue_video_pagination_scripts');

function handle_load_more_videos()
{
  // Check nonce for security
  if (! isset($_POST['security']) || ! wp_verify_nonce($_POST['security'], 'video_pagination_nonce')) {
    wp_send_json_error('Nonce verification failed.');
  }

  $page        = isset($_POST['page']) ? intval($_POST['page']) : 1;
  $post_id     = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;
  $videos_per_page = 6; // Must match the value in your template

  if ($post_id <= 0) {
    wp_send_json_error('Invalid post ID.');
  }

  // Set up post data so get_field works correctly
  $post = get_post($post_id);
  if (! $post) {
    wp_send_json_error('Post not found.');
  }
  setup_postdata($post); // Important for get_field to work in context

  $all_videos = get_field('video_list', $post_id); // Get repeater field for the specific post

  // Always clean up post data after setup_postdata() usage
  wp_reset_postdata();

  $html_output      = '';
  $pagination_output = '';
  $success          = false;

  if ($all_videos) {
    $total_videos = count($all_videos);
    $total_pages  = ceil($total_videos / $videos_per_page);
    $offset       = ($page - 1) * $videos_per_page;
    $paged_videos = array_slice($all_videos, $offset, $videos_per_page);

    ob_start(); // Start output buffering

    if (! empty($paged_videos)) {
      foreach ($paged_videos as $video_item) {
        $thumbnail_image = $video_item['thumbnail_image'];
        $video_link      = $video_item['video_link'];
        $title           = $video_item['title'];
        $description     = $video_item['description'];
        if ($thumbnail_image || $title || $video_link || $description) {
?>
          <li class="video-list-item">
            <?php
            if ($video_link) :
              if (!$thumbnail_image) {
                preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/\s]{11})%i', $video_link, $match);
                $youtube_id = $match[1] ?? null;
                $fallback_thumb = $youtube_id ? "https://img.youtube.com/vi/$youtube_id/hqdefault.jpg" : "";
              }
            ?>
              <div class="image-wrapper">
                <?php if ($thumbnail_image) : ?>
                  <img src="<?php echo esc_url($thumbnail_image['sizes']['large']); ?>" alt="<?php echo esc_attr($title); ?>">
                <?php elseif (!empty($fallback_thumb)) : ?>
                  <img src="<?php echo esc_url($fallback_thumb); ?>" alt="<?php echo esc_attr($title); ?>">
                <?php endif; ?>

                <a href="<?php echo esc_url($video_link); ?>" data-fancybox="videos" data-aspect-ratio="2 / 1"
                  data-caption="<?php echo esc_attr($title); ?>" class="play-button">
                </a>
              </div>
            <?php endif; ?>
            <?php if ($title) : ?>
              <h3 class="title"><?php echo esc_html($title); ?></h3>
            <?php endif; ?>
            <?php if ($description) : ?>
              <p class="description"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
          </li>
        <?php
        }
      }
    } else {
      echo '<p>No videos found for this page.</p>';
    }

    $html_output = ob_get_clean(); // Get the buffered output

    ob_start(); // Start buffering for pagination

    if ($total_pages > 1) {
      $range = 2; // How many pages to show around the current page

      // Previous button
      if ($page > 1) : ?>
        <button class="pagination-button nav-button prev-page" data-page="<?php echo $page - 1; ?>"></button>
        <?php endif;

      // Loop for page numbers
      for ($i = 1; $i <= $total_pages; $i++) :
        // Always show first page
        if ($i == 1) : ?>
          <button class="pagination-button page-number <?php echo ($i == $page) ? 'active' : ''; ?>"
            data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
        <?php
        // Show ellipsis if there's a gap between page 1 and the current page's range
        elseif ($i == $page - $range - 1 && $page - $range > 2) : ?>
          <span class="pagination-ellipsis">...</span>
        <?php
        // Show pages within the sliding range around the current page
        elseif ($i >= $page - $range && $i <= $page + $range) : ?>
          <button class="pagination-button page-number <?php echo ($i == $page) ? 'active' : ''; ?>"
            data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
        <?php
        // Show ellipsis if there's a gap between the current page's range and the last page
        elseif ($i == $page + $range + 1 && $page + $range < $total_pages - 1) : ?>
          <span class="pagination-ellipsis">...</span>
        <?php
        // Always show last page
        elseif ($i == $total_pages) : ?>
          <button class="pagination-button page-number <?php echo ($i == $page) ? 'active' : ''; ?>"
            data-page="<?php echo $i; ?>"><?php echo $i; ?></button>
        <?php endif;
      endfor;

      // Next button
      if ($page < $total_pages) : ?>
        <button class="pagination-button nav-button next-page" data-page="<?php echo $page + 1; ?>"></button>
      <?php endif; ?>
  <?php
    }
    $pagination_output = ob_get_clean();
    $success = true;
  } else {
    $html_output = '<p>No videos found.</p>';
  }

  // Send JSON response
  wp_send_json_success(array(
    'html'       => $html_output,
    'pagination' => $pagination_output,
    'page'       => $page, // For debugging
    'total_pages' => $total_pages, // For debugging
  ));

  // Always exit once you've sent the JSON response
  die();
}
add_action('wp_ajax_load_more_videos', 'handle_load_more_videos');        // For logged-in users
add_action('wp_ajax_nopriv_load_more_videos', 'handle_load_more_videos'); // For non-logged-in users

add_action('init', function () {
  // pll_register_string('Context', 'Ukrainian phrase', 'Group');
  pll_register_string('Main UI', 'Переглянути', 'dobri-dii');
  pll_register_string('Main UI', 'Дивитись всі фото у розділі', 'dobri-dii');
  pll_register_string('Main UI', 'Згорнути', 'dobri-dii');
  pll_register_string('Archive Title', 'Медіатека', 'dobri-dii');
});

// 1. Inject the Dropdown via JavaScript (DEBUGGING VERSION)
add_action('admin_footer', function () {
  $screen = get_current_screen();

  if (!$screen || strpos($screen->id, 'flamingo') === false) {
    return;
  }

  $current = isset($_GET['reason_filter']) ? esc_js($_GET['reason_filter']) : '';

  ?>
  <script>
    document.addEventListener("DOMContentLoaded", function() {

      // 2nd Debug: Log the container we are looking for
      const actionWrap = document.querySelector('.tablenav.top .actions:not(.bulkactions)');

      if (actionWrap) {
        const filterHtml = `
                <select name="reason_filter" id="reason_filter" style="float:left; margin-right: 5px;">
                    <option value="">Всі причини</option>
                    <option value="Подяка" ${'Подяка' === '<?php echo $current; ?>' ? 'selected' : ''}>Подяка</option>
                    <option value="Скарга" ${'Скарга' === '<?php echo $current; ?>' ? 'selected' : ''}>Скарга</option>
                    <option value="Інше" ${'Інше' === '<?php echo $current; ?>' ? 'selected' : ''}>Інше</option>
                </select>
            `;
        actionWrap.insertAdjacentHTML('afterbegin', filterHtml);
      } else {
        console.error("JS check -> FAILED: Could not find the HTML container (.tablenav.top .actions:not(.bulkactions))");
      }
    });
  </script>
<?php
});

// 2. The PHP logic to filter the actual database query (UPDATED)
add_action('pre_get_posts', function ($query) {
  if (!is_admin()) return;

  // Safely check the post_type (WordPress sometimes passes it as an array)
  $post_type = $query->get('post_type');
  $is_flamingo = (is_string($post_type) && $post_type === 'flamingo_inbound') ||
    (is_array($post_type) && in_array('flamingo_inbound', $post_type));

  // If we are on Flamingo and a filter is selected
  if ($is_flamingo && !empty($_GET['reason_filter'])) {
    $meta_query = (array) $query->get('meta_query');

    // Using just the sanitized text with LIKE covers both strings and arrays natively
    $meta_query[] = array(
      'key'     => '_field_your-reason',
      'value'   => sanitize_text_field($_GET['reason_filter']),
      'compare' => 'LIKE'
    );

    $query->set('meta_query', $meta_query);
  }
});

if (function_exists('pll_register_string')) {
  pll_register_string('CF7 Custom Validation', 'Please use the format: (067)333-44-55', 'Contact Form 7');
}

add_filter('wpcf7_validate_tel', 'custom_tel_validation_filter', 20, 2);
add_filter('wpcf7_validate_tel*', 'custom_tel_validation_filter', 20, 2);

function custom_tel_validation_filter($result, $tag)
{
  if ('your-phone' == $tag->name) {
    $tel = isset($_POST['your-phone']) ? trim($_POST['your-phone']) : '';

    if (empty($tel)) {
      return $result;
    }

    $pattern = '/^\(\d{3}\)\d{3}-\d{2}-\d{2}$/';

    if (! preg_match($pattern, $tel)) {
      $message = 'Будь ласка використовуйте формат: (067)333-44-55';

      if (function_exists('pll__')) {
        $message = pll__($message);
      }

      $result->invalidate($tag, $message);
    }
  }
  return $result;
}
