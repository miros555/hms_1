<?php /* Template Name: Blog */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="blog-page">
			<div class="blog-title-holder">
				
			<h1 class="section-title">Blog posts & Podcasts</h1>
		
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'blog-menu' ) ); ?>
			<div class="post-holder">
				<?php // Display blog posts on any page 
				$exclude = get_cat_ID('Press');
		$temp = $wp_query;
		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		$wp_query= null;
		$wp_query = new WP_Query( ); $wp_query->query( 'cat=-'.$exclude . '&posts_per_page=9' . '&paged='.$paged );
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


			</div>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
