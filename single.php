<?php Themewrangler::setup_page(); get_header(); ?>

<header class="page-header" <?php if( get_field('background_pattern') ) { ?>style="background-image: url(<?php the_field('background_pattern'); ?>);"<? } ?>>
  <div class="row">
    <div class="desktop-12 tablet-6 mobile-3">
      <h1><?php the_title(); ?></h1>
      <div class="meta subtitle"><?php the_time( 'D M d, Y' ); ?></div>
    </div>
  </div>
</header>

<section class="content" role="main">
  <div class="row">
    <?php while (have_posts()) : the_post(); ?>
    <div class="page-content desktop-8"><?php the_content(); ?></div>
    <?php endwhile; ?>
    <?php get_sidebar( ); ?>
  </div>
</section>

<?php get_footer(); ?>