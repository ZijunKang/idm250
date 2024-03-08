<?php
  get_header();
?>
<!-- Custom post type cats single page 
==========================================-->
<div class="layout">
  
<div id="cats_single">
          <?php
            the_post();  ?>
          <?php the_title('<h1 class="cats_single_title" style="font-family: Irish !important;text-align:center">','</h1>');?>
          
          <div class="entry-content wp-block-post-content has-global-padding is-layout-constrained wp-block-post-content-is-layout-constrained">

		<?php
		the_content();
		?>
    	<div class="back_btn">
	<a href="<?php bloginfo('url')?>/index.php/cats"><button class="cat_btn">Back to All Kittens</button></a>

	</div>
	</div>
         
         
        
</div>
</div>

<?php
  get_footer();

?>