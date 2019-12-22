<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 3,
	'cat' => '8,7'
);
		
		$wp_query = new WP_Query($args); 
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="blog-post-img">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail(array(404, 230, true) ); // Declare pixel size you need inside the array ?>
			</a>
		<?php endif; ?>
		<!-- /post thumbnail -->
		</div>
		<div class="post-border">
			
		
		<div class="blog-post-text">
			
		
		<!-- post details -->
		<p class="blog-post-meta">  
						By <?php the_author(); ?> | <?php echo get_the_date('M j, Y'); ?>
					</p>
		
		<!-- /post details -->
		
		<!-- post title -->
		<h3>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>
		<!-- /post title -->

		
		<div class="excerpt-txt">
		
		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
	
			</div>
		</div>
		<div class="post-buttons">
			<a class="readmore" href="<?php the_permalink(); ?>">Read Full Article <i class="far fa-arrow-alt-circle-right"></i></a>
			<div class="post-share" href="#"><i class="fas fa-share-alt"></i>
				<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?></div>
		</div>
			</div>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php wp_reset_query(); ?>
