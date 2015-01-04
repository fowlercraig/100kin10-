<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php wp_title(' | ', true, 'right'); ?> | <?php bloginfo( 'description' ) ?></title>
<meta name="description" content="<?php bloginfo( 'description' ) ?>">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<?php if ( is_front_page() && is_home() ) { ?>
  <body <?php body_class('enabled-onepage-scroll gridlock'); ?>>
<?} elseif ( is_front_page() ) {?>
  <body <?php body_class('enabled-onepage-scroll gridlock'); ?>>
<? } elseif ( is_home() ) {
  // blog page
} else { ?>
  <body <?php body_class('disabled-onepage-scroll gridlock'); ?>>
<?} ?>

<div id="wrapper" class="<?php the_field('color_scheme'); ?>">

<header id="header">
  <div class="row">
    <div class="desktop-4"><h1 id="logo"><a href="/">100K<span>IN</span>10</a></h1></div>
    <div class="desktop-8 mobile-3 text-right"><?php wp_nav_menu( array( 'menu_class' => 'sf-menu menu','walker' => new MV_Cleaner_Walker_Nav_Menu() ) );?></div>
  </div>
</header>

<div id="content" role="main">
<div class="wrapper">
