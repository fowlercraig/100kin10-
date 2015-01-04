<div id="partner" role="main">
  <div class="<?php the_category_unlinked(' '); ?>">
    <a href="#" class="close"><i class="ss-icon ss-gizmo">Close</i></a>
    <h2 class="title"><?php the_title(); ?></h2>
    <h3 class="commitment-title">Commitment: <?php $category = get_the_category(); echo $category[0]->cat_name;?></h3>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </div>
</div>

