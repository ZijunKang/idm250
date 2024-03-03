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
  // common js
  wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '1.10.1', true);
  wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array(), '1.10.1', true);

  // About page
  if(is_page('about')){
    wp_enqueue_style( 'home',get_template_directory_uri().'/assets/css/front-page.css',array());
    wp_enqueue_style( 'swiper',get_template_directory_uri().'/assets/css/idangerous.swiper.css',array());
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



