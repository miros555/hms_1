<?php /* Template Name: Contact Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-banner contact-banner">
			
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



<?php get_footer(); ?>
