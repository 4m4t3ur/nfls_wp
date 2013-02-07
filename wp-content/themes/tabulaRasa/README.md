tabulaRasaWp
============

a blank resposive WordPress theme for kickstarting a kickass design.

/* Installation * 
Install it as any other Wordpress theme:
1) download and put to wp-content/themes
2) enable it

/* Creating a child theme / sub theme */

It might be more comfortable for you to just start tweaking the current theme. 
Nevertheless - to be futureproof it might be a good idea to keep the development in a sub- or child theme.

To do that use the following steps:

1) create a new folder in "wp-content/themes" folder a la "/themes/child-theme"
2) add a css file and mark the parent theme in the header as "tabulaRasaWp" with "Template" ( everything else is optional):
/*
Theme Name: ***my theme name***
Theme URI:  ***my URI***
Description: ***my description***.
Version: ***my version name*** 
Author: ***my name***
Template: tabulaRasaWp
*/

3) Most propably you want to add more js and css files then in the parent theme. There are two ways for doing it:
3.1) just add your own header.php to the "themes/child-theme" folder
or
3.2) to "themes/child-theme" add a functions.php file and let it print out the neccessary files:
<?php
function addHeader() {
?>
  <link rel="stylesheet" type="text/css" href="<?php print get_bloginfo('stylesheet_directory'); ?>/css/main.css" />
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/main.js" type="text/javascript"></script> 
	<!-- and everything else you need in the header -->   
<? }
add_action( 'wp_head', 'addHeader' );
?> 
