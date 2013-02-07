<?php
/**
 * The template for displaying all pages.
 *
 */

get_header(); ?>

						<?php while ( have_posts() ) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            
            <?php 
						/*
RSSImport(
    $display = 10, $feedurl = 'feed://gdata.youtube.com/feeds/base/videos?alt=rss&author=NFLstuudio&q=lapsed', 
    $before_desc = '', $displaydescriptions = true, $after_desc = '', $html = true, $truncatedescchar = 200, $truncatedescstring = ' ... ', 
    $truncatetitlechar = '', $truncatetitlestring = ' ... ', 
    $before_date = ' <small>', $date = false, $after_date = '</small>', 
    $before_creator = ' <small>', $creator = false, $after_creator = '</small>', 
    $start_items = '<ul>', $end_items = '</ul>', 
    $start_item = '<li>', $end_item = '</li>' 
);
				*/		
						
?>
            
            <div class="printedContent">
            	<?php
								// check if the post has a Post Thumbnail assigned to it and print it if it exists
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('medium');
								} 							
							?>
            
							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?>
            </div>
            
            <?php comments_template( '', true ); ?>
            <?php endwhile; // end of the loop. ?>
            
            <br /><br />
<?php get_footer(); ?>