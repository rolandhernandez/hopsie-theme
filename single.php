<?php
/**
 * Default Single Post Template
 *
 */

get_header(); ?>

<div class="grid-x grid-padding-x align-center-middle flex-dir-column">
  <div class="cell small-6">
  <?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'group' ); ?> role="article">
  <header>
    <h1><?php the_title(); ?></h1>
    <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time>
  </header>

  <?php the_content(); ?>
</article>

<?php comments_template( '', true ); ?>
<?php endwhile; ?>
  </div>
</div>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
