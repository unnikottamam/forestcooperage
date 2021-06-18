<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package forestcooperage
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function forestcooperage_body_classes($classes)
{
  // Adds a class of hfeed to non-singular pages.
  if (!is_singular()) {
    $classes[] = 'hfeed';
  }

  // Adds a class of no-sidebar when there is no sidebar present.
  if (!is_active_sidebar('sidebar-1')) {
    $classes[] = 'no-sidebar';
  }

  return $classes;
}
add_filter('body_class', 'forestcooperage_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function forestcooperage_pingback_header()
{
  if (is_singular() && pings_open()) {
    printf(
      '<link rel="pingback" href="%s">',
      esc_url(get_bloginfo('pingback_url'))
    );
  }
}
add_action('wp_head', 'forestcooperage_pingback_header');

if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}

// Change Menu Active Clas
function change_menu_classes($css_classes)
{
  $css_classes = str_replace("current-menu-item", "active", $css_classes);
  $css_classes = str_replace("current_page_item", "active", $css_classes);
  $css_classes = str_replace("current-menu-parent", "active", $css_classes);
  $css_classes = str_replace("current-menu-ancestor", "active", $css_classes);
  return $css_classes;
}
add_filter('nav_menu_css_class', 'change_menu_classes');

add_image_size('review-size', 180, 180, true);
add_image_size('gallery-size', 564, 400, true);
add_image_size('blog-thumb', 660, 420, true);
// update_option('large_size_w', 460);
// update_option('large_size_h', 460);
// update_option('large_crop', 1);

require_once 'aq_resizer.php';
require_once 'acf-blocks.php';
// require_once 'shortcodes.php';

function posts_link_next_class($format)
{
  $format = str_replace('href=', 'class="btton btton-success" href=', $format);
  return $format;
}
add_filter('next_post_link', 'posts_link_next_class');

function posts_link_prev_class($format)
{
  $format = str_replace('href=', 'class="btton btton-white" href=', $format);
  return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');

function wds_gutenberg_assets()
{
  wp_enqueue_style(
    'wds-gutenberg-admin',
    get_stylesheet_directory_uri() . '/dist/css/app.min.css',
    [],
    '1.0.0'
  );

  wp_enqueue_script(
    'wds-gutenberg-admin',
    get_template_directory_uri() . '/dist/js/app.js',
    [],
    '1.0.0',
    true
  );
}
add_action('enqueue_block_editor_assets', 'wds_gutenberg_assets');
add_action('admin_head', 'my_custom_styles');

function my_custom_styles()
{
  echo '<style>
  [data-aos^=fade][data-aos^=fade] {
    opacity: 1 !important;
    transform: none !important;
}
[data-aos^=fade][data-aos^=fade].aos-animate {
  opacity: 1 !important;
  transform: none !important;
}
  </style>';
}

// Load More Funtion
function my_load_more_scripts()
{
  global $wp_query;
  wp_register_script(
    'my_loadmore',
    get_stylesheet_directory_uri() . '/js/loadmore.js',
    ['jquery']
  );

  wp_localize_script('my_loadmore', 'loadmore_params', [
    'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
    'posts' => json_encode($wp_query->query_vars),
    'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
    'max_page' => $wp_query->max_num_pages,
  ]);

  wp_enqueue_script('my_loadmore');
}
add_action('wp_enqueue_scripts', 'my_load_more_scripts');

function loadmore_ajax_handler()
{
  $args = json_decode(stripslashes($_POST['query']), true);
  $args['paged'] = $_POST['page'] + 1;
  $args['post_status'] = 'publish';

  query_posts($args);
  $ct = $_POST['page'] % 2 ? 1 : 0;
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      $ct = $ct == 1 ? 0 : ++$ct;
      get_template_part('template-parts/content', 'blog', [
        'class' => $ct,
      ]);
    }
  }
  die();
}

add_action('wp_ajax_loadmore', 'loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'loadmore_ajax_handler');

// Add numbers to menu
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
function my_wp_nav_menu_objects($items, $args)
{
  $count = 0;
  foreach ($items as $item) {
    $count++;
    $title = $item->title;
    $item->title = $count < 10 ? '0' . $count . ' ' : $count . ' ';
    $item->title .= $title;
  }
  return $items;
}

// Search Form Widget
function search_form_widget($form)
{
  $form =
    '<div class="searchform">
        <form action="' .
    home_url('/') .
    '" method="get">
            <input class="form-control" type="text" name="s" id="search" value="' .
    get_search_query() .
    '" placeholder="Type here ..." />
            <button type="submit" class="btton btton-primary">Search</button>
        </form>
    </div>';
  return $form;
}
add_filter('get_search_form', 'search_form_widget');