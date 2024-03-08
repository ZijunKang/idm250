<?php
get_header();
?>
<!-- Post Archive Page
==========================================-->

<div class="layout">
  <div class="bloglist block">
    <div class="blog_main_content block_item">
    
     <h1>
      Blog List
     </h1>
      <?php
$args = array('post_type' => 'post', 'posts_per_page' => 3, 'order' => 'asc');
$loop = new WP_Query($args);
?>
	        <div class="blog_list">

    <?php while ($loop->have_posts()): $loop->the_post(); ?>
	    <div class="blog_list_item">
	        <div class="blog_list_item_img">
	          <?php if (has_post_thumbnail()) {the_post_thumbnail();} else {echo '<img src="' . get_template_directory_uri() . '/assets/images/home/05.png">';} ?>
	        </div>
	        <div class="blog_list_item_info">
	          <div class="blog_list_item_top">
	            <?php echo get_avatar(get_the_author_email(), '60') . " " . get_the_date('Y-m-d') ?>
	          </div>
	          <?php the_title('<p class="blog_title"><a href="' . get_permalink() . '">', '</a></p>'); ?>
	          <div class="JosefinSlab">
	            <?php the_excerpt(); ?>
	          </div>
	          <div class="blog_link">
	            <a class="JosefinSlab" href="<?php echo get_permalink(); ?>"><span>Detail >></span></a>
	          </div>

	          <hr>
	          <div class="blog_list_item_bottom">
	            <div class="blog_list_item_comments JosefinSlab">
	               <?php echo get_comments_number() . " comments"; ?>
	            </div>
	            <div class="blog_list_item_icons">
	              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/06.png" alt="">
	              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/07.png" alt="">
	            </div>
	          </div>

	        </div>
	    </div>
		              <?php endwhile; ?>
					  
                </div>
    </div>

    <div class="blog_sidebar block_item">
        <?php
          dynamic_sidebar('sidebar1');

          dynamic_sidebar('sidebar2');

    ?>
    </div>




  </div>
</div>



  <?php
get_footer();

?>