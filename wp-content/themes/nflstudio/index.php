<?php
/**
 */
get_header(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=505683549463582";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<br />
<br />
  <div class="printedContent">
  
		<?php /* query_posts('tag=esileht&showposts=1&orderby=rand'); ?>  
      <?php while (have_posts()) : the_post(); ?>
        <?php
          // get the video ID
          ob_start();
          $subject = $post->post_content;
          $pattern = '#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#';
          preg_match($pattern, $subject, $matches);
          $childVideoId = $matches[0];
          ob_end_clean();
        ?>
        <iframe style="width: 100%; height: auto !important; max-width: 630px;  min-height: 356px;" src="http://www.youtube.com/embed/<?=$childVideoId?>?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>
		<?php endwhile; */?>




<?php /*
	$videos = array(
		1 => "gQe8dAm8RCs",
		2 => "Sh2yH_hjep4",
		3 => "8r7vGZSR78U",
		4 => "MhBITajSB30",
		5 => "PpMfpj00mrE",
		6 => "9NpXHS0_We4",
		7 => "FoMB7sktefU",
		8 => "wY4KgEH0ROU",
		9 => "6J9kxR5hiDg",
		10 => "F6zsQ-jRgsg",
	);
	$randNum = rand(1,10);
	$theVideo = $videos[$randNum];
?>

<iframe style="width: 100%; height: auto !important; max-width: 630px;  min-height: 356px;" src="http://www.youtube.com/embed/<?=$theVideo?>?autoplay=1&rel=0" frameborder="0" allowfullscreen></iframe>

*/ ?>

<?php
$shuffle=rand(0,9);
?>
<iframe style="width: 100%; height: auto !important; max-width: 630px;  min-height: 356px;" src="http://www.youtube.com/embed/videoseries?list=PL7lljR6ztfNjSLs3FkN1Z_lvYWvjjv2IK&rel=0&index=<?=$shuffle?>" frameborder="0" allowfullscreen></iframe>
  <br /><br />
  

  
<?php // query_posts('tag=facebook&showposts=0'); ?>
<?php /*  query_posts('tag=facebook&showposts=5'); ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="newsContainer">
			<?php
			?>
				<abbr class="timeago" style="float: right; color: #999999;" title="<?php the_time(c);  ?>"><?php the_time('M j, Y'); ?></abbr>
				<!--<strong><a href="http://facebook.com/nukufilmilastestuudio" class="black" target="_blank">Facebook:</a></strong><br />-->
			<?php		
			print $post->post_content;
			?>
    </div>            
<?php endwhile; */ ?> 
<?php /*
			<div class="nav-previous alignleft"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentytwelve' ) ); ?></div>
			<div class="nav-next alignright"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?></div>
*/ ?>
  </div>
<br /><br /> 

<div class="fb-like-box" data-href="http://www.facebook.com/nukufilmilastestuudio" data-width="630" data-height="1000" data-show-faces="false" data-stream="true" data-header="true"></div>

<?php get_footer(); ?>