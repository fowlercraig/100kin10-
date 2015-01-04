<?php if( have_rows('home_panels') ):

    $i = 1; while ( have_rows('home_panels') ) : the_row();

        if( get_row_layout() == 'general_panel' ):

          include locate_template('_flexfields/general-panel.php');

        endif;

    $i++; endwhile;

else : endif; ?>

<?php if( have_rows('page_panels') ):

    $i = 1; while ( have_rows('page_panels') ) : the_row();

        if( get_row_layout() == 'general_page_block' ):

          include locate_template('_flexfields/interior-panel.php');
          
        elseif( get_row_layout() == 'faq_block' ):
        
          include locate_template('_flexfields/faq-panel.php');
          
        elseif( get_row_layout() == 'staff_profile' ):
        
          include locate_template('_flexfields/staff-panel.php');

        elseif( get_row_layout() == 'grid_field' ):
        
          include locate_template('_flexfields/grid-field.php');

        elseif( get_row_layout() == 'file_downloads' ):
        
          include locate_template('_flexfields/file-downloads.php');

        endif;

    $i++; endwhile;

else : endif; ?>