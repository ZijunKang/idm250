<?php
echo 
  '<div class="card-box list">';
          
   the_title('<h1><a href="'.get_permalink().'">','</a></h1>');
   the_excerpt();
   echo '<div class="date-line">
          <span>
          '.get_the_date('Y-m-d').' '.get_the_author().'
          </span>
          <a href="'.get_permalink().'"><span>Detail</span></a>
        </div>';
        
echo '</div>';
?>