<div id="staff-<?php echo $i; ?>" class="bio block">
  <div class="row">   
    
    <article class="item clearfix">
      <header class="meta desktop-12 tablet-6 mobile-3">
        <h2 class="title"><?php the_sub_field('staff_name'); ?></h2>
        <h4 class="subtitle"><?php the_sub_field('staff_position'); ?></h4>
      </header>

      <?php

        $image = get_sub_field('staff_headshot');

        if( !empty($image) ): 

        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

        // thumbnail
        $size = 'homepage-thumb';
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];

      endif; ?>

      <div class="desktop-12 tablet-6 mobile-3"><br></div>
      <div class="desktop-2  thumbnail"><img src="<?php echo $thumb; ?>" alt="<?php the_sub_field('staff_name'); ?>" /></div>
      <div class="desktop-10 questions"><?php the_sub_field('staff_questions'); ?></div>
      <div class="desktop-12 tablet-6 mobile-3"><br></div>
      <div class="desktop-12 tablet-6 mobile-3 bio"><?php the_sub_field('staff_bio'); ?></div>
    </article>
          
  </div>
</div>

<!-- 

<?php the_sub_field('staff_name'); ?>
<?php the_sub_field('staff_position'); ?>
<?php the_sub_field('staff_headshot'); ?>
<?php the_sub_field('staff_bio'); ?>
<?php the_sub_field('staff_questions'); ?>

-->

