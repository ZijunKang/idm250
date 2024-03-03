<?php
/*Template Name: Blog Template*/
?>
<!-- Post Archive Page 
==========================================-->
<div id="cats_lists ">
<?php
$args = array('post_type' => 'post', 'posts_per_page' => 10);
$loop = new WP_Query($args);
?>

    <?php while ($loop->have_posts()): $loop->the_post(); ?>
        <div class="cat_list_item">
            <?php the_title('<h1><a href="' . get_permalink() . '">', '</a></h1>'); ?>
              <?php endwhile; ?>
</div>