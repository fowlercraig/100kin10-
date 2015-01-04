<header class="page-header" <?php if( get_field('background_pattern') ) { ?>style="background-image: url(<?php the_field('background_pattern'); ?>);"<? } ?>>
  <div class="row">
    <div class="desktop-12 tablet-6 mobile-3">
      <h1><?php the_title(); ?></h1>
      <?php while (have_posts()) : the_post(); ?>
      <div class="page-content"><?php the_content(); ?></div>
      <?php endwhile; ?>
    </div>
  </div>
</header>