<div id="grid-<?php echo $i; ?>" class="bio block">
  <div class="row">   
    
    <article class="item clearfix">

      <header class="meta desktop-12 tablet-6 mobile-3">
        <h2 class="title"><?php the_sub_field('grid_title'); ?></h2>
        <h4 class="subtitle"><?php the_sub_field('grid_description'); ?></h4>
      </header>


      <?php if( have_rows('logo_grid') ): while ( have_rows('logo_grid') ) : the_row(); ?>

      <div class="desktop-3">
        <a href="#">
          <img class="img-responsive" src="<?php the_sub_field('grid_image'); ?>" />
        </a>
      </div>

      <?php endwhile; else : endif; ?>

      
    </article>
          
  </div>
</div>
