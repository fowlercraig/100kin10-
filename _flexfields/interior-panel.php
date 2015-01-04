<div id="interiorpanel-<?php echo $i; ?>" class="block">
<div class="row">   
  
<?php if( get_sub_field('section_title') ) { ?>
<div class="item desktop-12 tablet-6 mobile-3">
<h2 class="panel-title"><?php the_sub_field('section_title'); ?></h2>
</div>
<? } ?>

<?php

if( get_sub_field('section_options') ) { 
   
    if( in_array( 'rightblock', get_sub_field('section_options') ) ){
       
        echo '<div class="desc special right desktop-10"><div>'; the_sub_field('section_body'); echo '</div></div>';
    
    } elseif ( in_array( 'leftblock', get_sub_field('section_options') ) ){
        
        echo '<div class="desc special left desktop-10"><div>'; the_sub_field('section_body'); echo '</div></div>';
        
    } elseif ( in_array( 'lefticon', get_sub_field('section_options') ) ){
        
        echo '<div class="thumbnail desktop-2">'; echo '<img src="'; the_sub_field('section_icon'); echo '" /></div>';
        echo '<div class="icon-desc desktop-10"><div>'; the_sub_field('section_body'); echo '</div></div>';
    
    }	else {
    
        echo '<div class="desc special left desktop-12 tablet-6 mobile-3"><div>'; the_sub_field('section_body'); echo '</div></div>';
    
    }

} else {

  echo '<div class="desc desktop-12 tablet-6 mobile-3"><div>'; the_sub_field('section_body'); echo '</div></div>';

}

?>

<!--<?php if( get_sub_field('section_options') ): ?>
<?php if( in_array( 'rightblock', get_sub_field('section_options') ) ){ echo ' Right block'; }?>
<?php if( in_array( 'leftblock', get_sub_field('section_options') ) ){ echo ' Left block'; }?>
<?php if( in_array( 'lefticon', get_sub_field('section_options') ) ){ echo ' Left Icon'; }?>
<?php if( in_array( 'sectionbreak', get_sub_field('section_options') ) ){ echo ' Section Break'; }?>
<?php endif; ?>-->
        
</div>
</div>

