<?php Themewrangler::setup_page(
  'not onepage',
  'not onepagescroll'
); get_header('home'/***Template Name: Partners */); ?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="content">

<div class="controls">
  <div class="row">
  <div class="desktop-12 tablet-6 mobile-3">
    <nav class="desktop-9 contained">
      <a class="filter" data-filter=".all">All</a>
      <a class="filter" data-filter=".increase-supply">Increase Supply</a>
      <a class="filter" data-filter=".retain-excellence">Retain Excellence</a>
      <a class="filter" data-filter=".build-the-movement">Build the Movement</a>
    </nav>
    <input type="text" id="input" placeholder="Type here">
  </div>
  </div>
</div>

<div class="row">
<ul id="partners-grid">
<?php 
  $temp = $wp_query; 
  $wp_query = null; 
  $wp_query = new WP_Query(); 
  $wp_query->query('showposts=999&orderby=title&order=asc&post_type=partner'.'&paged='.$paged); 

  while ($wp_query->have_posts()) : $wp_query->the_post();
  get_template_part('templates/partner', 'item' );
  endwhile; ?>
<li class="desktop-12 tablet-6 mobile-3 pager-list"></li>
<li id="containerPartner" class="desktop-12"></li>
</ul>
</div>
</div>


<?php 
  $wp_query = null; 
  $wp_query = $temp;  // Reset
?>

<?php get_footer(); ?>