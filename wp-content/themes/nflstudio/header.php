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
						
						switch($currentLang) {
						
							case et:
							$printFrontPage = "Esileht";	
							break;
							
							case en:
							$printFrontPage = "Front Page";
							break;	

							case ru:
							$printFrontPage = "Первая Страница";
							break;	
							
							default:
							$printFrontPage = "Esileht";	
							break;
														
						}
						
					?>
          <a class="<?php if($currentLang == et) print "strong";  ?>" href="<?php echo site_url(); ?>">est</a> / <a class="<?php if($currentLang == en) print "strong";  ?>" href="<?php echo site_url(); ?>/?lang=en">eng</a> / <a class="<?php if($currentLang == ru) print "strong";  ?>" href="<?php echo site_url(); ?>/?lang=ru">rus</a><br>
          <a href="#" style="color: #999999;">Kontakt</a>
        </div>
        <div class="contentContainer">
          <div class="content">
            <div class="logoContainer" >
              <img id="logo" src="<?php print get_bloginfo('stylesheet_directory'); ?>/img/logo.png" alt="päike" onclick="location.href='<?php echo site_url(); ?>'" style="cursor: pointer;" /><br />
              <img id="logoText" src="<?php print get_bloginfo('stylesheet_directory'); ?>/img/logoText.png" alt="NukuFilmi LasteStuudio" onclick="location.href='<?php echo site_url(); ?>'" style="cursor: pointer;" />
            </div>
            <div class="menuContainer">
							<ul class="frontPage"><li class="page_item <?php if(is_front_page()) print "current_page_item"; ?>"><a href="<?php echo site_url(); ?>" title="Esileht"><?php print $printFrontPage; ?></a></li></ul>
              <?php flexipages('show_subpages=3&sort_column=menu_order'); ?>
            </div>
            <?php /*<div id="virusWrap">
            	<a href="http://www.neti.ee" class="lightview"><img id="virus" src="<?php print get_bloginfo('stylesheet_directory'); ?>/img/virus.gif" alt="virus" /></a>
            </div>  */ ?>          