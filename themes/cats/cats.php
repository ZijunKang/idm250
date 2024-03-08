<?php
  get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/kittents.css">
<div class="kittents">
  
<div class="kittents_banner">
  <img src="<?php echo get_template_directory_uri();?>/assets/images/kittents/bg.jpg" alt="">
</div>
<div class="layout">
  <div class="cats_categories">
    <?php the_category("cats");?>
  </div>
<div id="cats_lists ">
          <?php
          $args = array( 'post_type' => 'cats', 'posts_per_page' => 10 );
          $loop = new WP_Query( $args );
          ?>
         
          <?php while ( $loop->have_posts() ) : $loop->the_post();  ?>
          <div class="cat_list_item">
          <?php the_title('<h1><a href="'.get_permalink().'">','</a></h1>');?>
         
          </div>
            
            <?php   endwhile;  ?>
         
        </div>
        
</div>
</div>

<?php
  get_footer();

?>