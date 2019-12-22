<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-section">
			
			<div class="section-holder">
				
				
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			
				<?php the_content(); ?>

				

		<?php endwhile; ?>

		<?php else: ?>

			

		<?php endif; ?>
				
			</div>
			
			
			
		</section>
		
		
		
			
		
		

		
		<!-- /section -->
	</main>
<script src="/wp-content/themes/HelloMaasWP/js/accoridion.js"></script>

<?php get_footer(); ?>
