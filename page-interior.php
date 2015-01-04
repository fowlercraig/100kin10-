<?php Themewrangler::setup_page(
  'not onepage',
  'not onepagescroll'
); get_header('home'/***Template Name: Home */); ?>

<?php get_template_part('templates/page', 'header'); ?>

<div class="content">
<?php include locate_template('_flexfields/flex_master.php'); ?>
</div>

<?php get_footer(); ?>