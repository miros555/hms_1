<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="blog-page">
			<div class="blog-title-holder">
				
			<h1 class="section-title"><?php single_term_title();?></h1>
			
			</div>
			<?php wp_nav_menu( array( 'theme_location' => 'blog-menu' ) ); ?>
			<div class="post-holder">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

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

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
			</div>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
