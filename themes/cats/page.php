<?php
  get_header();
?>

<div class="layout">
<!-- Defalut page template -->
<div id="default_page">
          <?php
            the_post();  ?>
          
          <div class="entry-content wp-block-post-content has-global-padding is-layout-constrained wp-block-post-content-is-layout-constrained">

		<?php
		the_content();
		?>
    	
	</div>
         
         
        
</div>
</div>

<?php
  get_footer();

?>