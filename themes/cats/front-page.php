<?php
/*Template Name: Front Page Template*/
?>
<?php
get_header();

?>
<!-- Home Page
==========================================-->
<div class="layout home_page">
	<div class="home_block1 home_block">
		<div class="banner_left block_item" style="">
			<div class="banner_left_line1" style=""><span class="banner_left_line1_title1"><?php echo get_field('banner_title1');?></span>
			<br><span class="banner_left_line1_title2" ><?php echo get_field('banner_title2');?></span></div>
			<div class="JosefinSlab banner_left_line2"><?php echo get_field('banner_des');?></div>
			<div style=""><a href="<?php echo home_url().'/index.php/our-cats'?>"><button class="cat_btn banner_left_btn" >Our Cats</button></a></div>
		</div>
		<div class="banner_right">
			<img src="<?php echo get_field('banner_img');?>" alt="">
		</div>
	</div>
	<!-- block2 -->
	<div class="home_block2 home_block">
		<?php
		    $gallery = get_field('gallery');
			foreach($gallery as $row){
				echo '<div class="home_block2_item block_item">
				<img src="'.$row['url'].'" alt="">
				<p>'.$row['title'].'</p>
			</div>';
			}
		?>
	</div>
	<!-- block2 -->
	<!-- block3 -->
	<div class="home_block3 home_block">
		<div class="block1 block_item">
			<div class="row1"><img src="<?php echo get_field('kittents_img');?>" alt=""></div>
			<div class="row2"><?php echo get_field('kittents_title');?></div>
			<div class="row3"><a href="<?php echo home_url().'/index.php/cats'?>"><button class="cat_btn">kittens</button></a></div>
		</div>
		<div class="block2 JosefinSlab block_item">
		<?php echo get_field('kittents_des');?></div>
	</div>
	<!-- block3 -->

	<!-- block4 -->
	<div class="home_block4 home_block ">
		<div class="block1 block_item swiper-container">
			<div class="swiper-wrapper">
 <!-- WP_Query：Get cats post list data -->
 <?php
            $args = array('post_type' => 'post', 'posts_per_page' => 10, 'order' => 'asc');
            $loop = new WP_Query($args);
          ?>

          <?php while ($loop->have_posts()): $loop->the_post(); ?>

		         
		          <div class="swpier_item swiper-slide">
				  <?php if (has_post_thumbnail()) {the_post_thumbnail();} ?>
					<div class="home_block4_img_word">
					<?php the_title();?>
					</div>
				</div>
                <?php endwhile; ?>

        </div>
<!-- WP_Query：Get cats post list data -->
				

				<!-- <div class="swpier_item swiper-slide">
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
				</div> -->
			</div>
		</div>
		<div class="pagination"></div>
		<div class="block2 block_item"><a href="<?php echo home_url().'/index.php/blog'?>"><button class="cat_btn">Blog</button></a></div>
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
