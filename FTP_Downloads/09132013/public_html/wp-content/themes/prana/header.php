<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">  
  <div id="header">  
      
      <div class="container_16 container_header_top clearfix">
        <div class="grid_16">
		  <?php get_template_part( 'custom', 'header' ); ?>
        </div>
      </div>
      
      
      <div class="container_16 clearfix">
        <div class="grid_16">
          <div id="nav">
            <?php prana_primary_menu(); ?>
          </div>
        </div>
      </div>
  
  </div>