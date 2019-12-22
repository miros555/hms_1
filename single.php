<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<div class="section-holder">
				<div class="top-post-content">
					<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
					<?php the_category(''); ?>
					<h1>
						<?php the_title(); ?>
					</h1>
					<p class="blog-post-meta">  
						By <?php the_author(); ?> | <?php echo get_the_date('M j, Y'); ?>
					</p>
					
				</div>
				<div class="post-img-holder">
					
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				<?php endif; ?>
			<!-- /post thumbnail -->
					
				</div>
				<div class="bottom-post-content">
					<?php the_content(); // Dynamic Content ?>
				</div>
			</div>

			

			

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
		<section class="related-posts">
		<h2 class="section-title">
			Related Articles
			</h2>
			
			<div class="section-holder">
				<?php // Display blog posts on any page @ https://m0n.co/l
		$temp = $wp_query; $wp_query= null;
		$wp_query = new WP_Query(array('category__not_in' => array(399),'posts_per_page'   => 3, 'paged' => $paged, 'orderby' =>'rand'	));
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
		<div class="blog-post-text">
			
		<?php the_category(''); ?>
		
		
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
			
		</div>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php wp_reset_query(); ?>
			</div>
		
		</section>
	</main>



<?php get_footer(); ?>