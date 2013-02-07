<?php
/**
 */

// Add scripts for theme to header
function addHeader() {
?>
  <link rel="stylesheet" type="text/css" href="<?php print get_bloginfo('stylesheet_directory'); ?>/css/stickyFooter.css" />
  <link rel="stylesheet" type="text/css" href="<?php print get_bloginfo('stylesheet_directory'); ?>/css/main.css" />
  <link rel="stylesheet" type="text/css" href="<?php print get_bloginfo('stylesheet_directory'); ?>/css/mediaQueries.css" />
	<script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/jQueryRotateCompressed.2.1.js" type="text/javascript"></script>    
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/tinyNav/tinynav.min.js" type="text/javascript"></script>    
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/main.js" type="text/javascript"></script>    
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/jquery-timeago.js" type="text/javascript"></script>   
	<!--<script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/flyMe.js" type="text/javascript"></script> -->
	<script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/firefly/jquery.firefly.js" type="text/javascript"></script> 
     
  <!--[if !IE 7]>
    <style type="text/css">
      #wrap {display:table;height:100%}
    </style>
  <![endif]-->

<? 
} 
add_action( 'wp_head', 'addHeader' );


// Add jquery and other existing scripts the right way
function my_scripts() {
		wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_scripts');


// Add theme support for Featured Image
add_theme_support( 'post-thumbnails' ); 



?>
