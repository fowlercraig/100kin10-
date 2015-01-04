<?php

if ( is_page( 'guide' )) { 
   
    include locate_template(TEMPLATEPATH.'/page-guide.php');

} elseif ( is_page( 'become-a-member' )) {	
    
    include locate_template('/pages/page-become-a-member.php');

}	else {

    include locate_template('/page-interior.php');

}

?>