<?php

// custom nav menus
register_nav_menus(array(
 'primary' => 'primary',
));
add_theme_support('menus');
// custom nav menus

// start widgets
add_theme_support('widgets');
// start widgets

// start feature image
add_theme_support("post-thumbnails");
// start feature image

// Included your css/js files using wp_enqueue_script()/wp_enqueue_style()
function ms1_scripts(){
  // Get post type
  $type = get_post_type();
  // common style
  wp_enqueue_style( 'style',get_stylesheet_uri(),array());
  wp_enqueue_style( 'main_style',get_template_directory_uri().'/assets/css/main.css', array());

  // common js
  wp_enqueue_script('jquery123', get_template_directory_uri().'/assets/js/jquery.min.js', array());
  wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array());

  // About page
  if(is_page('about')){
    wp_enqueue_style( 'home',get_template_directory_uri().'/assets/css/front-page.css',array());
    wp_enqueue_style( 'swiper',get_template_directory_uri().'/assets/css/idangerous.swiper.css',array());
    wp_enqueue_script('swiperjs', get_template_directory_uri().'/assets/js/idangerous.swiper.min.js', array());
  }

  // Search page
  if(is_search()){
    wp_enqueue_style( 'blog',get_template_directory_uri().'/assets/css/blog.css',array());
  }
  // Blog page
  if(is_page('blog')){
    wp_enqueue_style( 'blog',get_template_directory_uri().'/assets/css/blog.css',array());
  }
   // Blog page
   if($type == "post"){
    wp_enqueue_style( 'blog',get_template_directory_uri().'/assets/css/blog.css',array());
  }

  // default templete & out-cat page
  if(is_page('our-cats')){
    wp_enqueue_style( 'kittents',get_template_directory_uri().'/assets/css/kittents.css',array());
    wp_enqueue_style( 'page',get_template_directory_uri().'/assets/css/page.css',array());
  }

  // Custom post type cats style
  if($type == "cats"){
    wp_enqueue_style( 'kittents',get_template_directory_uri().'/assets/css/kittents.css',array());
  }
  // Page 404 style
  if(is_404()){
    wp_enqueue_style( '404style',get_template_directory_uri().'/assets/css/404.css',array());
  }

}
// enqueue_scripts
add_action( 'wp_enqueue_scripts', 'ms1_scripts' );

// custom post type cats
function my_custom_post_cats()
{
  // custom menu label
 $labels = array(
  'name' => _x('Kittents', 'Kittents'),
  'singular_name' => _x('Kittents', 'Kittents'),
  'add_new' => _x('create cat', 'create cat'),
  'add_new_item' => __('create a cat'),
  'edit_item' => __('edit cat'),
  'new_item' => __('new cat'),
  'all_items' => __('all cats'),
  'view_item' => __('view cat'),
  'search_items' => __('search cats'),
  'not_found' => __('not cat'),
  'not_found_in_trash' => __('trash'),
  'parent_item_colon' => '',
  'menu_name' => 'Cats',
  'has_archive' => true,
 );
 // custom menu label
 // custom post type config
 $args = array(
  'labels' => $labels,
  'description' => 'My cats',
  'public' => true,
  'menu_position' => 5,
  'show_in_rest' => true,
  'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-fields', 'page-attributes'),
  'has_archive' => true,
 );
 // custom post type config
//  register post type function
 register_post_type('cats', $args);
}

//  custom post type gender taxonomy 
function my_taxonomies_cats_gender()
{

 $labels = array(
  'name' => _x('gender', 'gender'),
  'singular_name' => _x('gender', 'gender'),

  'all_items' => __('all gender'),

  'edit_item' => __('edit gender'),
  'update_item' => __('update gender'),
  'add_new_item' => __('create gender'),
  'new_item_name' => __('new gender'),
  'menu_name' => __('gender categories'),
  'has_archive' => true,
 );
 $args = array(
  'labels' => $labels,
  'hierarchical' => true,
  'has_archive' => true,
 );
 register_taxonomy('cats_gender_category', 'cats', $args);
}
//  custom post type color taxonomy 
function my_taxonomies_cats_color()
{
 $labels = array(
  'name' => _x('colors', 'colors'),
  'singular_name' => _x('color', 'color'),

  'all_items' => __('all colors'),

  'edit_item' => __('edit colors'),
  'update_item' => __('update colors'),
  'add_new_item' => __('create color'),
  'new_item_name' => __('new color'),
  'menu_name' => __('color categories'),
  'has_archive' => true,
 );
 $args = array(
  'labels' => $labels,
  'hierarchical' => true,
  'has_archive' => true,
 );
 register_taxonomy('cats_category_color', 'cats', $args);
}

add_action('init', 'my_custom_post_cats');
add_action('init', 'my_taxonomies_cats_gender', 0);
add_action('init', 'my_taxonomies_cats_color', 0);

// functions custom sidebar
function my_custom_sidebar() {
  register_sidebar(
      array (
          'name' => 'sidebar1',
          'id' => 'sidebar1',
          'description' => '',
          'before_widget' => '<div class="widget-content">',
          'after_widget' => "</div>",
          'before_title' => '<h3 class="widget-title">',
          'after_title' => '</h3>',
      )
  );
  
register_sidebar(
      array (
          'name' => 'sidebar2',
          'id' => 'sidebar2',
          'description' => '',
          'before_widget' => '<div class="widget-content2">',
          'after_widget' => "</div>",
          'before_title' => '<h3 class="widget-title2">',
          'after_title' => '</h3>',
      )
  );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

// customer logo
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
function themename_custom_colors_setup() {
	$defaults = array(

	);
	add_theme_support( 'custom-colors', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_colors_setup' );



