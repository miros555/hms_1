<?php /* Template Name: Press Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<!--
		<section id="slider" class="section-holder">
			
      <div class="flexslider">
        <ul class="slides">
        <?php query_posts(array('category_name'  => 'press', 'posts_per_page' => 3)); if(have_posts()) : while(have_posts()) : the_post();?>
            <li class="slide">
				<div class="press-slide">
					<div class="press-slide-text">
						<h1>
							<?php the_title(); ?>
						</h1>
						<p>
							By <?php the_author(); ?> | <?php echo get_the_date('M j, Y'); ?>
						</p>
					</div>
					<div class="press-overlay">
						
					</div>
           			
		
            		<?php the_post_thumbnail(array(1252, 620, true) ); ?>
				</div>
            
          </li>
        <?php endwhile; endif; wp_reset_query(); ?>
        </ul>
    </div>
			
</section> -->
		
		<section class="publication">
			<div class="section-holder">
				<p>
					<?php _e('Publications that wrote about us','HelloMaasWP'); ?>
				</p>
				<div class="publication-logos">
					<div class="logo-grid-item">
						<span class="helper"></span><img src="/wp-content/uploads/2019/04/1.png" />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="/wp-content/uploads/2019/04/2.png" />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="/wp-content/uploads/2019/04/3.png" />
					</div>
					
				</div>
			</div>
		
		
		</section>
		
		<section class="press-posts related-posts">
		
		<div class="section-holder">
				<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		query_posts(array('category_name'  => 'press', 'posts_per_page' => 6, 'paged' => $paged));
		 if ( have_posts() ) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

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
			
		
		
		
		<!-- post title -->
		<h3>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h3>
		<!-- /post title -->
		<p class="blog-post-meta">  
						By <?php the_author(); ?> | <?php echo get_the_date('M j, Y'); ?>
					</p>
		
		<div class="excerpt-txt">
		
		<?php html5wp_excerpt('html5wp_index2'); // Build your custom callback length in functions.php ?>
	
			</div>
		</div>
		<div class="post-buttons">
			<a class="readmore" href="<?php the_permalink(); ?>">Read Full Article <i class="far fa-arrow-alt-circle-right"></i></a>
			<a class="post-share" href="#"><i class="fas fa-share-alt"></i> Share</a>
			
		</div>
	</article>
	<!-- /article -->

<?php endwhile; ?>
			
			<?php get_template_part('pagination'); ?>
			<?php else : ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php wp_reset_query(); ?>
			</div>
			
		
		</section>
		

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			
				<?php the_content(); ?>

				

		<?php endwhile; ?>

		<?php else: ?>

			

		<?php endif; ?>

		
		<!-- /section -->
	</main>



<?php get_footer(); ?>
