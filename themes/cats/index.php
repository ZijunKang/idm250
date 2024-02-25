<?php
  get_header();

?>
<main class="container">
  <div class="main-box">
    <div class="container-main">

      
        <div id="lists">
          <?php
            
            while(have_posts()){
              the_post();
              get_template_part('templates/cons');         
            }
            the_posts_pagination( array(
              'mid_size' => 3, 
              'prev_text' =>'Pre',
              'next_text' =>'Nex',
              'screen_reader_text'=>' '
              ) );
          ?>
        </div>
    </div>

    <div class="sider-bar">      
      <?php
        get_sidebar('test-side-bar');
        get_sidebar('test-side-bar2');
      ?>
    </div>
  </div>
</main>

<?php
  get_footer();

?>
