</div>
</div><!--Content-->
<footer id="foot">

  <div class="upper_footer">
    <div class="row">
      <div class="wrapper">
        <?php dynamic_sidebar( 'primary-widget-area' ); ?>
      </div>
    </div>
  </div>
  
  <div class="lower_footer">
    <div class="row">
      <div class="wrapper">
        <?php dynamic_sidebar( 'footer-widget-area' ); ?>
      </div>
    </div>
  </div>

</footer><!--Footer-->
</div><!-- Wrapper -->
<?php if ( is_front_page() && is_home() ) { ?><div id="loading"><div class="spinner"></div></div><?php } ?>

<script type="text/javascript" src="http://fast.fonts.net/jsapi/413543a7-41ae-4dbd-a57c-bc67a2a38997.js"></script>
<?php wp_footer(); ?>

</body>
</html>