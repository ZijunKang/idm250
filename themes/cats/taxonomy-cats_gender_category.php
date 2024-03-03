<?php
  get_header();
?>
<!-- Custom post type cats category gender Page 
==========================================-->
<div class="kittents">
<div class="layout" style="width:1250px">
<div class="cats_list_menu" style="display:flex;justify-content:space-between;align-items:center">

<?php
    $term = get_queried_object();
   
?>
<div class="date" style="font-size:24px">
<!-- Display menu -->
    Color : <?php echo $term->name;?>
<!-- Display menu -->
</div>
<div class="cats_categories" >
<div class="color_cat_container cat_container">
        <div class="cat_type">
             Gender
            <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/drop_down.png" alt="">
        </div>
        <div class="cat_items">
            <?php
                echo wp_nav_menu( array( 
                    'menu'=>'gender',
                    'container' => 'div',
                    'container_class' => 'color_cat', 
                    'container_id' => 'color_cat',
                    'theme_location' => 'color', 
                    'items_wrap' => '<ul class="ul_color_cat">%3$s</ul>', 
                    ) );
            ?>
        </div>
        
    </div>

    <div class="color_cat_container cat_container">
        <div class="cat_type">
             Color
            <img src="<?php echo get_template_directory_uri();?>/assets/images/icons/drop_down.png" alt="">
        </div>
        <div class="cat_items">
            <?php
                echo wp_nav_menu( array( 
                    'menu'=>'color',
                    'container' => 'div',
                    'container_class' => 'color_cat', 
                    'container_id' => 'color_cat',
                    'theme_location' => 'color', 
                    'items_wrap' => '<ul class="ul_color_cat">%3$s</ul>', 
                    ) );
            ?>
        </div>
        
    </div>

    
    
</div>
</div>

</div>
<div class="layout">

<div id="cats_lists" style="display:flex;flex-wrap:wrap;width:100%;justify-content:space-between">
          <?php
          $args = array( 'post_type' => 'cats', 'posts_per_page' => -1, 'order'=>'asc','tax_query' => array(
            'relation' => 'AND',
            array(
                'taxonomy' => $term->taxonomy,
                'field' => 'term_id',
                'terms' => $term->term_id
            )
        ));
          $loop = new WP_Query( $args );
          ?>
         
          <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
          <a href="<?php echo get_permalink();?>" class="cat_list_item">
            
          <?php if(has_post_thumbnail()){the_post_thumbnail();} ?>
          <div class="item_des">
            <div class="item_title">
            <?php the_title();?>

            </div>
            <?php 
                    $gender = wp_get_object_terms(get_the_ID(),"cats_gender_category",array()); 
                    $color = wp_get_object_terms(get_the_ID(),"cats_category_color",array());    

              ?>
            <div class="item_category" style="display:flex;">
                <div class="item_cat1 item_cat"><?php echo $gender[0]->name?></div>
                <div class="item_cat2 item_cat">
                    <?php 
                        foreach($color as $row){
                            echo $row->name." ";
                        }
                    ?>
                    biocolor
                    </div>
                
                </div>
         
          </div>
                 
          </a>
            
            <?php   endwhile;  ?>
         
        </div>
        
</div>
</div>

<?php
  get_footer();

?>