<?php Themewrangler::setup_page(
  'not onepage',
  'not onepagescroll'
); get_header('home'/***Template Name: Blog */); ?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="content">
<div class="row">
<div class="desktop-8 tablet-6 mobile-3">
<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=10&post_type=post'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post(); 
?>

<div <?php post_class('item'); ?>>
  <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="meta">
    <?php the_time( 'D M d, Y' ); ?>
  </div>
  <?php the_excerpt(); ?>
</div>

<?php endwhile; ?>

<nav>
    <?php previous_posts_link('&laquo; Newer') ?>
    <?php next_posts_link('Older &raquo;') ?>
</nav>

</div><!-- Two Thirds -->
</div>
<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>

</div>

<?php get_footer(); ?>