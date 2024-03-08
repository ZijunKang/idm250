<?php
get_header();
?>
<!-- Blog Post Single Page
==========================================-->
<div class="layout">
  <?php the_post(); ?>
  <h1 style="text-align:center"><?php the_title(); ?></h1>
  <div class="entry-content wp-block-post-content has-global-padding is-layout-constrained wp-block-post-content-is-layout-constrained">
          <?php
  the_content();
?>
      </div>

</div>

<?php
get_footer();
?>