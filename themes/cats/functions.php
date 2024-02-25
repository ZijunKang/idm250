<?php
register_nav_menus(array(
    'primary' => 'primary',
));
add_theme_support( 'menus' );

function custom_excerpt_length($length) {
    return 20; 
}
add_filter('excerpt_length', 'custom_excerpt_length');

// add_theme_support( 'widgets' );

?>