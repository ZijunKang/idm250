<?php
get_header();
?>
<!-- Custom post type cats Archive Page 
==========================================-->
<div class="kittents">

<div class="kittents_banner">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/kittents/bg.jpg" alt="">
</div>
<div class="layout ">
<div class="cats_list_menu" style="">

<div class="date" style="font-size:24px">
    Updated <?php get_the_date('m/d/Y')?>
</div>
<div class="cats_categories" >
<div class="color_cat_container cat_container">
    <!-- Dynamic Navigation Cats Gender -->
        <div class="cat_type">
             Gender
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/drop_down.png" alt="">
        </div>
        
        <div class="cat_items">
            <?php
                echo wp_nav_menu(array(
                'menu' => 'gender',
                'container' => 'div',
                'container_class' => 'color_cat',
                'container_id' => 'color_cat',
                'theme_location' => 'color',
                'items_wrap' => '<ul class="ul_color_cat">%3$s</ul>',
                ));
            ?>
        </div>

    </div>

    <div class="color_cat_container cat_container">
        <!-- Dynamic Navigation Cats Color -->
        <div class="cat_type">
             Color
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/drop_down.png" alt="">
        </div>
        <div class="cat_items">
            <?php
                echo wp_nav_menu(array(
                'menu' => 'color',
                'container' => 'div',
                'container_class' => 'color_cat',
                'container_id' => 'color_cat',
                'theme_location' => 'color',
                'items_wrap' => '<ul class="ul_color_cat">%3$s</ul>',
                ));
            ?>
        </div>
    </div>
</div>
</div>

</div>
<div class="layout">
<div id="cats_lists" style="">
    <!-- WP_Query：Get cats post list data -->
          <?php
            $args = array('post_type' => 'cats', 'posts_per_page' => 10, 'order' => 'asc');
            $loop = new WP_Query($args);
          ?>

          <?php while ($loop->have_posts()): $loop->the_post(); ?>
		          <a href="<?php echo get_permalink(); ?>" class="cat_list_item">

		          <?php if (has_post_thumbnail()) {the_post_thumbnail();} ?>
		          <div class="item_des">
		            <div class="item_title">
		                <?php the_title(); ?>
		            </div>
                    <!-- Get cats category data -->
		            <?php
                        $gender = wp_get_object_terms(get_the_ID(), "cats_gender_category", array());
                        $color = wp_get_object_terms(get_the_ID(), "cats_category_color", array());
                    ?>
                    <!-- Get cats category data -->
		            <div class="item_category" style="display:flex;">
		                <div class="item_cat1 item_cat"><?php echo $gender[ 0 ]->name ?></div>
		                <div class="item_cat2 item_cat">
		                    <?php
                                foreach ($color as $row) {
                                echo $row->name . " ";
                                }
                        ?>
		                    biocolor
		                </div>

		                </div>

		          </div>

		          </a>
                <?php endwhile; ?>

        </div>
<!-- WP_Query：Get cats post list data -->
</div>
</div>

<?php
get_footer();
?>