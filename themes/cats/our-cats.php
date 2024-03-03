<?php
get_header();
?>

<div class="layout">

<div id="our-cats">
		<?php
		the_post(); ?>


          <div class="entry-content wp-block-post-content has-global-padding is-layout-constrained wp-block-post-content-is-layout-constrained">

		<?php
		the_content();
		?>
    	<div class="back_btn">
	<a href="<?php bloginfo('url') ?>/index.php/cats"><button class="cat_btn">Back to All Kittens</button></a>

	</div>
	</div>



</div>
</div>

<?php
get_footer();

?>