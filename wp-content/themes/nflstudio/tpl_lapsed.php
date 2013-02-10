<?php
/**
Template Name: Lapsed
 *
 */
get_header(); ?>
  <h1><?php the_title(); ?></h1>
  <div class="printedContent">
<?php query_posts('tag=lapsed&showposts=0&suppress_filters=1'); ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="smallerVideo">
			<?php
			// get the video ID
      ob_start();
      $subject = $post->post_content;
      $pattern = '#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#';
      preg_match($pattern, $subject, $matches);
      $videoId = $matches[0];
      ob_end_clean();
      ?>
      <a href="http://www.youtube.com/embed/<?=$videoId?>?autoplay=1&hd=1&rel=0" class="lightview" data-lightview-title="<?php the_title(); ?>" data-lightview-options="skin: 'mac'" ><img src="http://i.ytimg.com/vi/<?=$videoId?>/0.jpg" class="videoImg" /></a>
      <!--<h2><a href="http://www.youtube.com/embed/<?=$videoId?>?autoplay=1&hd=1" class="videoLinkText lightview"  data-lightview-title="<?php the_title(); ?>" data-lightview-options="skin: 'mac'"><?php the_title(); ?></a></h2>-->
    </div>            
<?php endwhile;?>
  </div>
<br /><br />
<?php get_footer(); ?>