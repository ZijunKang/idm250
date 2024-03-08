<?php
/*Template Name: Front Page Template*/
?>
<?php
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/front-page.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/idangerous.swiper.css">
<!-- Home Page
==========================================-->
<div class="layout home_page">
	<div class="home_block1 home_block">
		<div class="banner_left block_item" style="">
			<div class="banner_left_line1" style=""><span class="banner_left_line1_title1">DreamPurr</span>
			<br><span class="banner_left_line1_title2" >Purring Dreams into Reality</span></div>
			<div class="JosefinSlab banner_left_line2">Welcome to DreamPurr, where we lovingly craft the perfect blend of affection and elegance in every Ragdoll kitten.</div>
			<div style=""><button class="cat_btn banner_left_btn" >Our Cats</button></div>
		</div>
		<div class="banner_right">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/04.png" alt="">
		</div>
	</div>
	<!-- block2 -->
	<div class="home_block2 home_block">
		<div class="home_block2_item block_item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/01.png" alt="">
			<p>Chasing high</p>
		</div>
		<div class="home_block2_item block_item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/02.png" alt="">
			<p>Linus</p>
		</div>
		<div class="home_block2_item block_item">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/03.png" alt="">
			<p>Bonus</p>
		</div>

	</div>
	<!-- block2 -->
	<!-- block3 -->
	<div class="home_block3 home_block">
		<div class="block1 block_item">
			<div class="row1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/05.png" alt=""></div>
			<div class="row2">Planning to own a ragdoll cat? <br>
You are in the right place.</div>
			<div class="row3"><button class="cat_btn">kittens</button></div>
		</div>
		<div class="block2 JosefinSlab block_item">
		At DreamPurr, we are more than just a cattery; we are a family dedicated to raising, nurturing, and loving these magnificent cats. Each Ragdoll cat and kitten in our care is a cherished member of our extended family, receiving the utmost attention and affection to ensure they grow up healthy, happy, and ready to become a loving addition to your home.
<br>Our mission at DreamPurr is to match our beautiful Ragdolls with families who will love and cherish them as much as we do. We pride ourselves on our ethical breeding practices, our focus on health and socialization, and our dedication to educating future Ragdoll parents about this wonderful breed.
		</div>
	</div>
	<!-- block3 -->

	<!-- block4 -->
	<div class="home_block4 home_block ">
		<div class="block1 block_item swiper-container">
			<div class="swiper-wrapper">
				<div class="swpier_item swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/06.png" alt="">
					<div class="home_block4_img_word">
					A guide to entering the world of<br> breeding & showing cats
					</div>
				</div>
				<div class="swpier_item swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/06.png" alt="">
					<div class="home_block4_img_word">
					A guide to entering the world of<br> breeding & showing cats
					</div>
				</div>
				<div class="swpier_item swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/06.png" alt="">
					<div class="home_block4_img_word">
					A guide to entering the world of<br> breeding & showing cats
					</div>
				</div>
				<div class="swpier_item swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/06.png" alt="">
					<div class="home_block4_img_word">
					A guide to entering the world of<br> breeding & showing cats
					</div>
				</div>
				<div class="swpier_item swiper-slide">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/06.png" alt="">
					<div class="home_block4_img_word">
					A guide to entering the world of<br> breeding & showing cats
					</div>
				</div>
			</div>
		</div>
		<div class="pagination"></div>
		<div class="block2 block_item"><button class="cat_btn">Blog</button></div>
	</div>
	<!-- block4 -->
</div>

<script>
  var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    grabCursor: true,
    paginationClickable: true,
	autoplay:3000
  })



  </script>
<?php
get_footer();

?>