<?php
/**
 * Default Blog Template
 *
 */

get_header(); ?>

<div class="grid-x grid-padding-x align-center-middle text-center flex-dir-column hero">
  <div class="cell small-6">
    <h1 class="headline">Your Hopsie Wordpress Theme</h1>
  </div>
  <div class="cell small-12">
    <p>This is a Hopsie wordpress theme by Roland Hernandez</p>
    <br>
    <p><a href="#" class="button">Hire Now</a></p>
  </div>
</div>

<div class="grid-container post-container text-center" role="main">
  <h4 class="subheadline">Latest Posts</h4>
  <div class="grid-x grid-margin-x">
  <div class="cell small-12 flex-container flex-dir-column large-flex-dir-row">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      get_template_part( 'parts/post', 'index' );
    endwhile;

    get_template_part( 'parts/post', 'nav' );
  endif;
  ?>
  </div>
  
  </div>
</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
