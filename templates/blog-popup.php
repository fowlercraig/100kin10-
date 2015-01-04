<?php if ( wp_is_mobile() ) {} else { ?>

<div id="news-wrapper">
<div class="row">

  <div id="news-window" class="desktop-4 left">
    <div class="toolbar">
      <a class="close" href="#"><i class="ss-icon">navigatedown</i></a>
      <a class="open active" href="#"><i class="ss-icon">navigateup</i></a>
    </div>
    <div class="wrapper">

      <?php $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination

        $the_query = new WP_Query( array( 
        'orderby'        => 'menu_order',
        'posts_per_page' => 1) 

      ); ?>

      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <article>
        <!--<div class="thumbnail">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php the_post_thumbnail( 'newswindow-thumb', 'img-responsive'); ?>
          </a>
        </div>-->
        <div class="meta">
          <span><?php $category = get_the_category(); echo $category[0]->cat_name; ?></span>
          <h3 class="title"><a href="#"><?php the_title(); ?></a></h3>
          <a href="<?php the_permalink(); ?>">Read More</a>
        </div>
      </article>

      <?php endwhile; wp_reset_postdata(); // Rest Data ?>

      <div class="links">
        <a href="/news">Go to Blog <i class="ss-icon ss-gizmo">navigateright</i></a>
      
      </div>
    </div>
  </div>

</div>
</div>

<? }?>