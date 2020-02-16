<?php 

  get_header();

  echo '<main>';
  if ( have_posts() ) {

    while ( have_posts() ) {
      the_post();

      the_title( '<h1 class="entry-title">', '</h1>' );

      echo '<div class="content">' . get_the_content() . '</div>';
    }
  }
  echo '</main>';
  
  get_footer();
  
?>