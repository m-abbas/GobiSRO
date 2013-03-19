<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php 
   echo wp_enqueue_script (
                   'validator'
                   , 'xxx'
         );
          ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php do_action( 'chip_life_wrap_before' ); ?>
<div id="wrap">
  <div id="wrap-data">
  
	<?php do_action( 'chip_life_header_before' ); ?>
    <div id="header">
      <div id="header-data">
	    <?php do_action( 'chip_life_header' ); ?>    
	  <div class="clear"></div>
      </div> <!-- end #header-data -->
    </div> <!-- end #header -->
    <?php do_action( 'chip_life_header_after' ); ?>