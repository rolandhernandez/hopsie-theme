<div class="flex-child-shrink">
<div class="card post-card" style="width: 300px;">
  <?php the_post_thumbnail( 'medium' ); ?>
  <div class="card-section">
    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time>
    <br>
    <?php the_excerpt(); ?>
  </div>
</div>
</div>