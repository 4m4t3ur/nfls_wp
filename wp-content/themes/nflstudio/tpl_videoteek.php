<?php
/**
Template Name: Videoteek
 *
 */
get_header(); ?>

  <h2><a href="<?php echo site_url(); ?>/videoteek/lastefilmid/">Laste filmid</a></h2>
<?php query_posts('tag=lapsed&showposts=0'); ?>
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
<div style="clear: both;"></div>

  <h2><a href="<?php echo site_url(); ?>/videoteek/noorte-filmid/">Noorte filmid</a></h2>
<?php query_posts('tag=noored&showposts=0'); ?>
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
<div style="clear: both;"></div>


  <h2><a href="<?php echo site_url(); ?>/videoteek/taiskasvanute-filmid/">Täiskasvanute filmid</a></h2>
<?php query_posts('tag=suured&showposts=0'); ?>
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
<br /><br />



<?php get_footer(); ?>