<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Dynamic title tags -->
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <!-- Dynamic title tags -->

    <!-- Include favicon into the <head> -->
    <link rel="icon" href="<?php echo get_field('favicon_img','option');?>" sizes="32x32">
    <!-- Include favicon into the <head> -->
      
    <!-- Include wp_head() -->
    <?php wp_head(); ?>
    <!-- Include wp_head() -->

   

</head>
<!-- Footer component 
==========================================-->
<!-- Include body_class() to the <body> element -->
<body <?php body_class(); ?> >
<!-- Include body_class() to the <body> element -->
  <?php wp_body_open(); ?>
    <header>
        <div class="layout">
            <div class="header" style="">
              <div class="header_left flex ai_b">
<?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" class="logo" alt="' . get_bloginfo( 'name' ) . '">';
  } else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
  }
?>
                <!-- <img src="<?php echo get_field('logo','option');?>" class="logo" alt=""> -->
                <div class="flex header_icons_group">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/01.png" alt="">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/02.png" alt="">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/03.png" alt="">
                </div>
              </div>
              <!-- Dynamic Navigation PC  -->
              <div class="header_right flex ai_c pc">

                  <?php
                    echo wp_nav_menu(array(
                    'container' => 'div',
                    'container_class' => 'nav',
                    'container_id' => 'nav-bar',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="nav_ul flex">%3$s</ul>',
                    ));
                  ?>

                <li onclick="searchPC()" class="search_icon"><a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/04.png" alt=""></a></li>

              </div>
              <!-- Dynamic Navigation PC -->
              <div class="phone">
                       <img class="menu_btn" onclick="menu_btn()" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/05.png" alt="">
              </div>
              <!-- Dynamic Navigation Phone -->
              <div class="phone menu_list">
            <?php
              echo wp_nav_menu(array(
              'container' => 'div',
              'container_class' => '',
              'theme_location' => 'primary',
              'items_wrap' => '<ul class="menu_list_ul">%3$s</ul>',
              ));
            ?>
            <!-- Dynamic Navigation Phone -->
                    <li onclick="searchPhone()" class="search_icon"><a><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/04.png" alt=""></a></li>
                    </div>
                  </div>
                  </div>
            </div>
            <div class="searchForm" style="">
                <?php get_search_form();?>
            </div>
            </div>

    </header>