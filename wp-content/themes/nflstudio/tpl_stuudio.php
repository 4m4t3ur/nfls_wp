<?php
/**
Template Name: Stuudio
 *
 */
get_header(); ?>
  <h1><?php the_title(); ?></h1>
<?php 
	$videos = array(
		1 => "fyYU1NknfU4",
		2 => "76Ak_5LTCSk",
	);
	$randNum = rand(1,2);
	$theVideo = $videos[$randNum];
?>

<iframe style="width: 100%; height: auto !important; max-width: 630px;  min-height: 356px;" src="http://www.youtube.com/embed/<?=$theVideo?>?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>

  <br /><br />
<?php get_footer(); ?>