<?php Themewrangler::setup_page();get_header(/***Template Name: Home Page */); ?>

<div id="homepage">
  <div class="panel_wrapper">
    <?php include locate_template('_flexfields/flex_master.php'); ?>
  </div>
</div>

<script>
  
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {

    $('body').addClass('mobile');
    $('#header .menu').superclick('destroy');
    
  }else {  

  $(".panel_wrapper").onepage_scroll({
    loop: false,
    updateURL: true,  
    responsiveFallback: false
  });

  $(".home .panel_wrapper .down").click(function() {
    $('.panel_wrapper').moveTo(2);
  });

  }
</script>

<!--<div id="overlay">
  <div class="row">
    <div class="desktop-12 tablet-6 mobile-3"><i class="ss-icon ss-gizmo">loading</i></div>
  </div>
</div>-->

<?php get_footer(); ?>