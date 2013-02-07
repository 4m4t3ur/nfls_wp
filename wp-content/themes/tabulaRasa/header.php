<?php
/**
 */
?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ericMeyerReset.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
  <![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="wrap">
    <div id="main">
      <div class="contentFrame">
        <div class="languageSelecta">
        	<?php 
						if(ICL_LANGUAGE_CODE) $currentLang = ICL_LANGUAGE_CODE;
					?>
          <a class="<?php if($currentLang == et) print "strong";  ?>" href="<?php echo site_url(); ?>">est</a> / <a class="<?php if($currentLang == en) print "strong";  ?>" href="<?php echo site_url(); ?>/?lang=en">eng</a> / <a class="<?php if($currentLang == ru) print "strong";  ?>" href="<?php echo site_url(); ?>/?lang=ru">rus</a>
        </div>
        <div class="contentContainer">
          <div class="content">
            <div class="logoContainer">
              <img id="logo" src="<?php print get_bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="päike" /><br />
              <img id="logoText" src="<?php print get_bloginfo('stylesheet_directory'); ?>/img/logoText.png" alt="NukuFilmi LasteStuudio" />
            </div>
            <div class="menuContainer">
              <?php flexipages('show_subpages=3&sort_column=menu_order'); ?>
            </div>