<div id="faq-<?php echo $i; ?>" class="faq">

<?php if( get_sub_field('faq_title') ) { ?>
  <div class="faq-header">
  <div class="row">   
    <div class="header item desktop-12 tablet-6 mobile-3">
      <h2 class="title"><?php the_sub_field('faq_title'); ?></h2>
      <div class="desc"><?php the_sub_field('faq_description'); ?></div>
    </div>
  </div>
  </div>
<? } ?>


  <?php if(get_field('faq')): ?>
  <div id="faqlist" data-collapse="accordion">
    <?php while(has_sub_field('faq')): ?>
    <div class="question">
      <div class="row">
        <h2 class="desktop-12"><?php the_sub_field('faq_question'); ?></h2>
      </div>
    </div>
    <div class="answer">
      <div class="row">
        <div class="desktop-12"><?php the_sub_field('faq_answer'); ?></div>
      </div>
    </div>
    <?php endwhile; ?>
    </div><!--faqlist-->
  <?php endif; ?>

</div><!--Faq Panel-->