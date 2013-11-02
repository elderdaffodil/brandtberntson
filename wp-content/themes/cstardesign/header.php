<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php if( get_theme_option("advanced", "is_responsive") == 'on' ){ ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php } ?>
<title><?php echo get_theme_generator("site_title"); ?></title>
<link href="<?php echo get_theme_option("general","site_favicon"); ?>" rel="icon" type="image/x-icon" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
<?php echo get_theme_generator("ie_hack"); ?>
<?php if( get_theme_option('general','google_analytics_position') == 'header' ){ echo stripslashes(get_theme_option('general','google_analytics_code')); } ?>
</head>
<body <?php body_class(); ?>>
<?php if( get_theme_option('advanced', 'layout_boxed') == 'on' ){ echo '<div id="boxed-layout">'; } ?>
<div id="header">
   <div class="inner">
      <a href="<?php echo home_url( '/' ); ?>" class="logo"><img src="<?php echo get_theme_option("general","site_logo"); ?>" alt="<?php bloginfo('name'); ?>"/></a>
      <?php echo get_theme_generator("header_area"); ?>
      <?php get_theme_generator("site_menu"); ?>
   </div>
</div>