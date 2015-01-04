<li data-href="<?php the_permalink(); ?>" class="item sizer-item mix desktop-4 tablet-3 mobile-3<?php the_category_unlinked(' '); ?> <?php echo strtolower(str_replace(' ', '-', get_the_title('', false))); ?>">
  
  <?php 

  if ( in_category( 'build-the-movement' )) {

    echo '<img src="/assets/img/partners-01.png" alt="" class="partner-icon" />';

  } elseif ( in_category( 'increase-supply' )) {

    echo '<img src="/assets/img/partners-02.png" alt="" class="partner-icon" />';

  } elseif ( in_category( 'retain-excellence' )) {

    echo '<img src="/assets/img/partners-03.png" alt="" class="partner-icon" />';

  } else {

    echo '<img src="/assets/img/partners-04.png" alt="" class="partner-icon" />';

  }
  ?>

  <div class=" sizer-item ">
    <span class="partner-type">
      <?php 

      if ( in_category( 'build-the-movement' )) {

      echo 'Build the Movement';

      } elseif ( in_category( 'increase-supply' )) {

      echo 'Increase Supply';

      } elseif ( in_category( 'retain-excellence' )) {

      echo 'Retain Excellence';

      } else {

      echo 'Multiple Commitments';

      }
      ?>
    </span>
    <h3 class="partner-title"><?php the_title(); ?></h3>
    <a class="readmore all" href="#">View Commitment</a>
    <?php if ( ! in_category( 'all' )) { ?>
    <a class="filter readmore deemphasized" data-filter=".<?php echo strtolower(str_replace(' ', '-', get_the_title('', false))); ?>:not(.all)">View All Commitments</a>
    <?php } ?>

  </div>
</li>