<!-- Include wp_footer() -->
<?php wp_footer(); ?>
<!-- Include wp_footer() -->

<!-- Footer component 
==========================================-->
<div class="hr" style="width:100%;background:#D9D9D9;height:2px;"></div>
     <div class="layout">
     <div class="footer_contact">
	<div class="contact_title" style="font-size:40px">Contact Us</div>
	<div class="contact_block ">
		<div class="block1 contact_item block_item">
			<div class="block1_info"><?php echo get_field('footer_author','option');?></div>
			<div class="block1_info"><?php echo get_field('footer_email','option');?></div>
			<div class="block1_info"><?php echo get_field('footer_phone','option');?></div>
		</div>
		<div class="block2 contact_item block_item">
			<div class="form-group">
				<div class="form_label">Full Name:</div>
				<div><input type="text"></div>
			</div>
			<div class="form-group">
				<div class="form_label">Email:</div>
				<div><input type="text"></div>
			</div>
			<div class="form-group">
				<div class="form_label">Message:</div>
				<div><textarea name="" id="" cols="30" rows="10"></textarea></div>
			</div>
		</div>
	</div>
	<div class="footer_send">
	<button class="cat_btn">Send</button>

	</div>

  </div>
</div>
<div class="footer_logo">
  <img src="<?php echo get_field('logo','option');?>" alt="">
</div>
<div class="footer_nav">
<?php
echo wp_nav_menu(array(
 'container' => 'div',
 'container_class' => 'nav',
 'container_id' => 'nav-bar',
 'theme_location' => 'primary',
 'items_wrap' => '<ul class="nav_ul flex">%3$s</ul>',
));
?>
</div>
<footer id="footer">
<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> <?php echo get_field('footer_text','option');?></p>
    </footer>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js">	</script>
</body>
</html>