<section id="panel-<?php echo $i; ?>" class="panel <?php if( get_sub_field('general_panel_options') ): ?><?php if( in_array( 'right-aligned', get_sub_field('general_panel_options') ) ){ echo ' text-left'; }?><?php if( in_array( 'light-background', get_sub_field('general_panel_options') ) ){ echo ' light-bg'; }?>
<?php endif; ?>">

  <div class="table">
  <div class="cell">
  <header class="row">   
  
    <div class="<?php while(has_sub_field('general_panel_width')): ?><?php the_sub_field('general_panel_width_width'); ?> tablet-3 mobile-3 <?php the_sub_field('general_panel_offset'); ?><?php endwhile; ?>">
      <h2 class="panel-title"><?php the_sub_field('general_panel_title'); ?></h2>
      <div class="desc"><?php the_sub_field('general_panel_body'); ?></div>
    </div>
    
    <?php if( get_sub_field('general_panel_options') ): ?>
    <?php if( in_array( 'pressmedia', get_sub_field('general_panel_options') ) ){ ?>  
    
    <ul class="desktop-7" id="press-logos">
      <?php while(has_sub_field('press_media')): ?>
      <li class="pressitem desktop-6 tablet-2 mobile-3 contained">
        <a href="<?php the_sub_field('press_media_url'); ?>" target="blank"><img src="<?php the_sub_field('press_media_logo'); ?>" alt="" /></a>
      </li>
      <?php endwhile; ?>
      <div class="centerdivider"></div>
    </ul>
    
    <?php } endif; ?>
    
    <?php if( get_sub_field('general_panel_options') ): ?>
    <?php if( in_array( 'partner-commitments', get_sub_field('general_panel_options') ) ){ ?>  
    
    <ul class="desktop-7 contained" id="commitments">
      <?php while(has_sub_field('partner_commitments')): ?>
      <li class="item desktop-4 tablet-2 mobile-3">
        <div class="icon thumbnail"><img src="<?php the_sub_field('partner_commitments_icon'); ?>" /></div>
        <h4><?php the_sub_field('partner_commitments_description'); ?></h4>
      </li>
      <?php endwhile; ?>
    </ul>
    
    <?php } endif; ?>
    
  </header>
  </div>
  </div>
  
  <?php // If we're on the First panel ?>
  <?php if ( $i == 1 ) { ?>
    <a class="down">Learn More</a>
    <img src="/assets/img/mobile-map.png" class="img-responsive mobile-img" />
    <?php get_template_part('templates/blog', 'popup' ); ?>
  <? } ?>

  <?php if ( $i == 4 ) { ?>
    <img src="/assets/img/mobile-graphy.png" class="img-responsive mobile-img" />
  <? } ?>
  
  
  <?php // If we're on the second panel ?>
  <?php if ( $i == 1 ) { ?>
    <div class="points-1 points"></div>
    <div class="points-2 points"></div>
    <div class="points-3 points"></div>
  <? } ?>
<div class="noise"></div>
</section>

