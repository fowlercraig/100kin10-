<?php

require_once locate_template('/lib/blankslate.php');         
require_once locate_template('/lib/activation.php');         
require_once locate_template('/lib/themewrangler.class.php');

// ACF Includes Nonsense

add_filter('acf/settings/path', 'my_acf_settings_path');
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/lib/advanced-custom-fields-pro/';
    return $path;
}
 
add_filter('acf/settings/dir', 'my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
     $dir = get_stylesheet_directory_uri() . '/lib/advanced-custom-fields-pro/';
    return $dir;
}

include_once locate_template('/lib/advanced-custom-fields-pro/acf.php' );
include_once locate_template('/lib/acf-field-date-time-picker/acf-date_time_picker.php' );

include_once locate_template('/lib/soil-master/soil.php' );
include_once locate_template('/lib/roots-rewrites-master/roots-rewrites.php' );
include_once locate_template('/lib/opengraph/opengraph.php' );

add_theme_support('soil-relative-urls');
add_theme_support('soil-nice-search');
add_theme_support('soil-clean-up');

//define( 'ACF_LITE', true );

$settings = array(

'available_scripts' => array(
'jquery-g'          => array('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js','1.11.1'),
'onepagescroll'     => array('/assets/javascripts/jquery.onepage-scroll.min.js'),
'scripts'           => array('/assets/javascripts/scripts.min.js'),
),

'default_scripts'   => array(
),

'available_stylesheets' => array(
'default'           => array('/assets/css/main.css'),
'onepage'           => array('/assets/css/onepage.css'),
'layout'           => array('/assets/css/layout.css'),
'grid'             => array('/assets/css/grid.min.css'),
),

'default_stylesheets' => array(
'default',
'grid',
),

'deregister_scripts' => array('','l10n')

);

Themewrangler::set_defaults( $settings );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );

class clean_nav extends Walker {
    var $tree_type = array( 'post_type', 'taxonomy', 'custom' );
    var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );
    function start_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"sub-menu\">\n";
    }
    function end_lvl(&$output, $depth) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
    function start_el(&$output, $item, $depth, $args) {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes = in_array( 'current-menu-item', $classes ) ? array( 'current-menu-item' ) : array();
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = strlen( trim( $class_names ) ) > 0 ? ' class="' . esc_attr( $class_names ) . '"' : '';
        $id = apply_filters( 'nav_menu_item_id', '', $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
        $output .= $indent . '<li' . $id . $value . $class_names .'>';
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        $item_output = $args->before;
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    function end_el(&$output, $item, $depth) {
        $output .= "</li>\n";
    }
}