<?php



function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('bootstrap_grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap_grid');

  wp_register_style('bootstrap_reboot', get_template_directory_uri() . '/css/bootstrap-reboot.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap_reboot');

  wp_register_style('niceselect', get_template_directory_uri() . '/css/nice-select.css', array(), false, 'all');
  wp_enqueue_style('niceselect');



  wp_register_style('custom', get_template_directory_uri() . '/css/app.css', '', 1, 'all');
  wp_enqueue_style('custom');
  
  
  wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
  wp_enqueue_style('style');

  wp_register_style('fontawsome', get_template_directory_uri() . '/css/fontawesome.min.css', array(), false, 'all');
  wp_enqueue_style('fontawsome');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.js', '', 1, true);
  wp_enqueue_script('jquery');


  wp_deregister_script('magnificpopup');
  wp_register_script('magnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', '', 1, true);
  wp_enqueue_script('magnificpopup');

  wp_deregister_script('mCustomScrollbar');
  wp_register_script('mCustomScrollbar', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', '', 1, true);
  wp_enqueue_script('mCustomScrollbar');
}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_js()
{

  wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
  wp_enqueue_script('bootstrap');


  wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
  wp_enqueue_script('customjs');


  wp_register_script('fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', '', 1, true);
  wp_enqueue_script('fontawesome');



  wp_register_script('kit.fontawesome', get_template_directory_uri() . '/js/kit.fontawesome.js', '', 1, true);
  wp_enqueue_script('kit.fontawesome');
}
add_action('wp_enqueue_scripts', 'load_js');




/**************
 * Supporting Elements
 ****************************/


/*-----Nav Walker-----------*/
require_once('class-wp-bootstrap-navwalker.php');
/*-----Nav Walker-----------*/


/*Added Support Custom Logo*/
add_theme_support('custom-logo', array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  'header-text' => array('site-title', 'site-description'),
));
/*Added Support Custom Logo*/


/*Added Support Slider Images*/
add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('post'));          // Posts only
add_theme_support('post-thumbnails', array('page'));          // Pages only
add_theme_support('post-thumbnails', array('post', 'slider')); // Posts and Movies

/*Added Support Slider Images*/

/*Added Nav Menu*/

function consilting_register_nav_menu()
{
  register_nav_menus(array(

    'primary_menu' => __('Primary Menu', 'goopter'),
    'footer_menu' => __('Footer Menu', 'goopter'),
    'footer_menu2' => __('Footer Menu2', 'goopter'),
  ));
}
add_action('after_setup_theme', 'consilting_register_nav_menu');

/*Added Nav Menu*/

// Register widget area.
function clinic_widgets_init()

{
  register_sidebar(array(
    'name'          => 'Custom Header Widget Area',
    'id'            => 'custom-header-widget',
    'before_widget' => '<div class="chw-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="chw-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'clinic_widgets_init');
// Register widget area.


/*Added Slider Post in Wordpress*/
function slider_section()
{

  $slider_labels = array(
    'name' => __('Slider', 'kungfuhotpot_site'),
    'singular_name' => __('Slider', 'kungfuhotpot_site'),
    'add_new' => __('Add new Slider', 'kungfuhotpot_site'),
    'add_new_item' => __('Add new Slider', 'kungfuhotpot_site'),
    'featured_image' => __('Slider Image', 'kungfuhotpot_site'),
    'set_featured_image' => __('Set Slider Image', 'kungfuhotpot_site'),

  );

  $slider = array(
    'labels' =>  $slider_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'slider'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('slider', $slider);
}

add_action('init', 'slider_section');

/*Added Slider Post in Wordpress*/








/*Added Blog Post in Wordpress*/
function blog_post_type()
{

  $blog_labels = array(
    'name' => __('Blogs', 'kungfuhotpot_site'),
    'singular_name' => __('Blog', 'kungfuhotpot_site'),
    'add_new' => __('Add new blog', 'kungfuhotpot_site'),
    'add_new_item' => __('Add new blog', 'kungfuhotpot_site'),
    'featured_image' => __('blog post image', 'kungfuhotpot_site'),
    'set_featured_image' => __('Set blog image', 'kungfuhotpot_site'),

  );

  $blog_args = array(

    'labels' =>  $blog_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'Blogs'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('blogs', $blog_args);
}

add_action('init', 'blog_post_type');

/*Added Blog Post in Wordpress*/


/*Added gallery Post in Wordpress*/
function gallery_post_type()
{

  $gallery_labels = array(
    'name' => __('Gallery', 'kungfuhotpot_site'),
    'singular_name' => __('Gallery', 'kungfuhotpot_site'),
    'add_new' => __('Add new Gallery', 'kungfuhotpot_site'),
    'add_new_item' => __('Add new Gallery', 'kungfuhotpot_site'),
    'featured_image' => __('Gallery post image', 'kungfuhotpot_site'),
    'set_featured_image' => __('Set Gallery image', 'kungfuhotpot_site'),

  );

  $gallery_args = array(

    'labels' =>  $gallery_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'gallery'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('gallery', $gallery_args);
}

add_action('init', 'gallery_post_type');

/*Added gallery Post in Wordpress*/

/*Added businessInfo Post in Wordpress*/
function businessInfo_post_type()
{

  $businessInfo_labels = array(
    'name' => __('businessInfo', 'kungfuhotpot_site'),
    'singular_name' => __('Business Info', 'kungfuhotpot_site'),
    'add_new' => __('Add new business Info', 'kungfuhotpot_site'),
    'add_new_item' => __('Add new business info', 'kungfuhotpot_site'),
    'featured_image' => __('Business info post image', 'kungfuhotpot_site'),
    'set_featured_image' => __('Set business info image', 'kungfuhotpot_site'),

  );

  $businessInfo_args = array(

    'labels' =>  $businessInfo_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'businessInfo'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('businessInfo', $businessInfo_args);
}

add_action('init', 'businessInfo_post_type');

/*Added businessInfo Post in Wordpress*/



/*Added  header info in Wordpress*/
function header_post_type()
{

  $header_labels = array(
    'name' => __('header', 'kungfuhotpot_site'),
    'singular_name' => __('header', 'kungfuhotpot_site'),
    'add_new' => __('Add new header', 'kungfuhotpot_site'),
    'add_new_item' => __('Add new header', 'kungfuhotpot_site'),
    'featured_image' => __('header post image', 'kungfuhotpot_site'),
    'set_featured_image' => __('Set header image', 'kungfuhotpot_site'),

  );

  $header_args = array(

    'labels' =>  $header_labels,
    'public' => true,
    'show_ui' => true,
    'rewrite' => array('slug' => 'header'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array(
      'title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks',
      'comments', 'revisions', 'custom-fields'
    ),
    'taxonomies'          => array('category', 'post_tag'),

  );

  register_post_type('header', $header_args);
}

add_action('init', 'header_post_type');




// Changing excerpt more
function new_excerpt_more($more)
{
  global $post;
  return '… <a href="' . get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Changing excerpt more


//for easy appointment translate(loco translate)
load_theme_textdomain('themify', TEMPLATEPATH . '/languages');


//slider shortcode



// test //TODO pending
   
function wpmu_receive_var(){
  $js_var = isset( $_REQUEST['JS_var'] )  ?  $_REQUEST['JS_var']  : 'the var didnt reach this function'; // 1997 value 

 // do something with the variable or just echo it
  echo $js_var;
}
// define the actions for the two hooks 
// please note that it is obligatory to add your function name after <strong>wp_ajax_ & wp_ajax_nopriv</strong> .
add_action("wp_ajax_wpmu_receive_var", "my_user_like");
add_action("wp_ajax_nopriv_wpmu_receive_var", "please_login");