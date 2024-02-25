<?php wp_footer();?>
<div class="hr" style="width:100%;background:#D9D9D9;height:2px;"></div>
     <div class="layout">
     <div class="footer_contact">
	<div class="contact_title" style="font-size:40px">Contact Us</div>
	<div class="contact_block ">
		<div class="block1 contact_item block_item">
			<div class="block1_info">Kimberly</div>
			<div class="block1_info">kimber@gmail.com</div>
			<div class="block1_info">860-XXX-XXXX</div>
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
  </div>
</div>
<div class="footer_logo pc">
  <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="">
</div>
<div class="footer_nav pc">
<?php
                      echo wp_nav_menu( array( 
                        'container' => 'div',
                        'container_class' => 'nav', 
                        'container_id' => 'nav-bar',
                        'theme_location' => 'primary', 
                        'items_wrap' => '<ul class="nav_ul flex">%3$s</ul>', 
                        ) );
                    ?>
  
                <li class="search_icon"><a><img src="<?php echo get_template_directory_uri();?>/assets/images/icons/04.png" alt=""></a></li>
              
</div>

<footer id="footer">
<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> by Zijun</p>
    
    </footer>
</body>
</html>