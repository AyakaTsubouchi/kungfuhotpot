<?php



function load_stylesheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootstrap_grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap_grid');

    wp_register_style('bootstrap_reboot', get_template_directory_uri() . '/css/bootstrap-reboot.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap_reboot');
    
    wp_register_style('owlcarousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style('owlcarousel');

    wp_register_style('owltheme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style('owltheme');

    wp_register_style('niceselect', get_template_directory_uri() . '/css/nice-select.css', array(), false, 'all');
    wp_enqueue_style('niceselect');


    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');


    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), false, 'all');
    wp_enqueue_style('responsive');


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

    wp_register_script('owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', '', 1, true);
    wp_enqueue_script('owlcarousel');

    wp_register_script('customjs', get_template_directory_uri() . '/js/scripts.js', '', 1, true);
    wp_enqueue_script('customjs');


    wp_register_script('fontawesome', get_template_directory_uri() . '/js/fontawesome.min.js', '', 1, true);
    wp_enqueue_script('fontawesome');



    // wp_register_script('slick', get_template_directory_uri() . '/js/slick.min.js', '', 1, true);
    // wp_enqueue_script('slick');

    // wp_register_script('tether', get_template_directory_uri() . '/js/tether.min.js', '', 1, true);
    // wp_enqueue_script('tether');

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
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );
/*Added Support Custom Logo*/


/*Added Support Slider Images*/
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
add_theme_support( 'post-thumbnails', array( 'post', 'slider' ) ); // Posts and Movies

/*Added Support Slider Images*/

/*Added Nav Menu*/

function consilting_register_nav_menu(){
    register_nav_menus( array(

        'primary_menu' => __('Primary Menu', 'goopter'),
        'footer_menu' => __('Footer Menu', 'goopter'),
        'footer_menu2' => __('Footer Menu2', 'goopter'),
    )

    );
}
add_action('after_setup_theme', 'consilting_register_nav_menu');

/*Added Nav Menu*/

// Register widget area.
function clinic_widgets_init()

{
    register_sidebar( array(
        'name'          => 'Custom Header Widget Area',
        'id'            => 'custom-header-widget',
        'before_widget' => '<div class="chw-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="chw-title">',
        'after_title'   => '</h2>',
    ) );
    
  
    
}
add_action('widgets_init', 'clinic_widgets_init');
// Register widget area.


/*Added Slider Post in Wordpress*/
function slider_section(){

  $slider_labels = array(
    'name' => __('Slider', 'bonalife_site'),
    'singular_name' => __('Slider', 'bonalife_site'),
    'add_new' => __('Add new Slider', 'bonalife_site'),
    'add_new_item' => __('Add new Slider', 'bonalife_site'),
    'featured_image' => __('Slider Image', 'bonalife_site'),
    'set_featured_image' => __('Set Slider Image', 'bonalife_site'),

  );

  $slider = array(
    'labels' =>  $slider_labels,
    'public' =>true,
    'show_ui' =>true,
    'rewrite' => array( 'slug' => 'slider'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks', 
    'comments', 'revisions', 'custom-fields'),
    'taxonomies'          => array( 'category' ,'post_tag'),

  );

  register_post_type('slider', $slider);
}

add_action('init', 'slider_section');

/*Added Slider Post in Wordpress*/








/*Added Blog Post in Wordpress*/
function blog_post_type(){

  $blog_labels = array(
    'name' => __('Blogs', 'bonalife_site'),
    'singular_name' => __('Blog', 'bonalife_site'),
    'add_new' => __('Add new blog', 'bonalife_site'),
    'add_new_item' => __('Add new blog', 'bonalife_site'),
    'featured_image' => __('blog post image', 'bonalife_site'),
    'set_featured_image' => __('Set blog image', 'bonalife_site'),

  );

  $blog_args = array(

    'labels' =>  $blog_labels,
    'public' =>true,
    'show_ui' =>true,
    'rewrite' => array( 'slug' => 'Blogs'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks', 
    'comments', 'revisions', 'custom-fields'),
    'taxonomies'          => array( 'category' ,'post_tag'),

  );

  register_post_type('blogs', $blog_args);
}

add_action('init', 'blog_post_type');

/*Added Blog Post in Wordpress*/


/*Added Treatments Post in Wordpress*/
function treatments_post_type(){

  $treatments_labels = array(
    'name' => __('Treatments', 'bonalife_site'),
    'singular_name' => __('Treatments', 'bonalife_site'),
    'add_new' => __('Add new Treatments', 'bonalife_site'),
    'add_new_item' => __('Add new Treatments', 'bonalife_site'),
    'featured_image' => __('Treatments post image', 'bonalife_site'),
    'set_featured_image' => __('Set Treatments image', 'bonalife_site'),

  );

  $treatments_args = array(

    'labels' =>  $treatments_labels,
    'public' =>true,
    'show_ui' =>true,
    'rewrite' => array( 'slug' => 'treatments'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks', 
    'comments', 'revisions', 'custom-fields'),
    'taxonomies'          => array( 'category' ,'post_tag'),

  );

  register_post_type('treatments', $treatments_args);
}

add_action('init', 'treatments_post_type');

/*Added Treatments Post in Wordpress*/

/*Added Team Post in Wordpress*/
function team_post_type(){

  $team_labels = array(
    'name' => __('Team', 'bonalife_site'),
    'singular_name' => __('Team', 'bonalife_site'),
    'add_new' => __('Add new Team', 'bonalife_site'),
    'add_new_item' => __('Add new Team', 'bonalife_site'),
    'featured_image' => __('Team post image', 'bonalife_site'),
    'set_featured_image' => __('Set Team image', 'bonalife_site'),

  );

  $team_args = array(

    'labels' =>  $team_labels,
    'public' =>true,
    'show_ui' =>true,
    'rewrite' => array( 'slug' => 'team'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks', 
    'comments', 'revisions', 'custom-fields'),
    'taxonomies'          => array( 'category' ,'post_tag'),

  );

  register_post_type('team', $team_args);
}

add_action('init', 'team_post_type');

/*Added TeamPost in Wordpress*/

/*Added Patients feedback in Wordpress*/
function feedback_post_type(){

  $feedback_labels = array(
    'name' => __('Feedback', 'bonalife_site'),
    'singular_name' => __('Feedback', 'bonalife_site'),
    'add_new' => __('Add new Feedback', 'bonalife_site'),
    'add_new_item' => __('Add new Feedback', 'bonalife_site'),
    'featured_image' => __('Feedback post image', 'bonalife_site'),
    'set_featured_image' => __('Set Feedback image', 'bonalife_site'),

  );

  $feedback_args = array(

    'labels' =>  $feedback_labels,
    'public' =>true,
    'show_ui' =>true,
    'rewrite' => array( 'slug' => 'feedback'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks', 
    'comments', 'revisions', 'custom-fields'),
    'taxonomies'          => array( 'category' ,'post_tag'),

  );

  register_post_type('feedback', $feedback_args);
}

add_action('init', 'feedback_post_type');

/*Added Patients feedback in Wordpress*/






/*Added  About2 in Wordpress*/
function about2_post_type(){

  $about2_labels = array(
    'name' => __('about2', 'bonalife_site'),
    'singular_name' => __('about2', 'bonalife_site'),
    'add_new' => __('Add new about2', 'bonalife_site'),
    'add_new_item' => __('Add new about2', 'bonalife_site'),
    'featured_image' => __('about2 post image', 'bonalife_site'),
    'set_featured_image' => __('Set about2 image', 'bonalife_site'),

  );

  $about2_args = array(

    'labels' =>  $about2_labels,
    'public' =>true,
    'show_ui' =>true,
    'rewrite' => array( 'slug' => 'about2'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks', 
    'comments', 'revisions', 'custom-fields'),
    'taxonomies'          => array( 'category' ,'post_tag'),

  );

  register_post_type('about2', $about2_args);
}

add_action('init', 'about2_post_type');

/*Added  header info in Wordpress*/
function header_post_type(){

  $header_labels = array(
    'name' => __('header', 'bonalife_site'),
    'singular_name' => __('header', 'bonalife_site'),
    'add_new' => __('Add new header', 'bonalife_site'),
    'add_new_item' => __('Add new header', 'bonalife_site'),
    'featured_image' => __('header post image', 'bonalife_site'),
    'set_featured_image' => __('Set header image', 'bonalife_site'),

  );

  $header_args = array(

    'labels' =>  $header_labels,
    'public' =>true,
    'show_ui' =>true,
    'rewrite' => array( 'slug' => 'header'),
    'capability_type' => 'post',
    'menu_position' => null,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'permalinks', 
    'comments', 'revisions', 'custom-fields'),
    'taxonomies'          => array( 'category' ,'post_tag'),

  );

  register_post_type('header', $header_args);
}

add_action('init', 'header_post_type');




// Changing excerpt more
function new_excerpt_more($more) {
  global $post;
  return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
  }
  add_filter('excerpt_more', 'new_excerpt_more');
  
// Changing excerpt more


//for easy appointment translate(loco translate)
load_theme_textdomain( 'themify', TEMPLATEPATH.'/languages' );
?>



