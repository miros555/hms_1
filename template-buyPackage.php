<?php /* Template Name: Buy Package Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-banner package-bg">
			
			<div class="main-banner-content package-banner">
  			<div class="tabcontent-left">
				<h1 class="main-banner-heading">
					<?php the_field('buy_title'); ?>
				</h1>
				<p>
						<?php the_field('buy_text'); ?>				
				</p>
				<a href="<?php the_field('buy_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Client Buy Package');"><?php the_field('buy_button_text'); ?></a>
			</div>
			<div class="tabcontent-right">  
				
				<?php the_field('video_embed_code'); ?>

			</div>
		</div>
			
			<h2 class="section-heading">
				<?php the_field('above_title'); ?>
			</h2>
			<p class="heading-text">
				<?php the_field('above_text'); ?>
			</p>
			
		</section>
		
		
		
			<section class="package-choice">
		
				<div class="section-holder">
					<div class="package-item orange">
						<div class="top-box">
							<h5>
								<?php the_field('package_name'); ?><br>
								<span><?php the_field('package_for'); ?></span>
							</h5>
							<p class="package-sub-heading">
								<?php the_field('advisor_name'); ?>  |  <i class="fa fa-star"></i> <?php the_field('rate'); ?>
							</p>
							<p class="package-price">
								<sup>€</sup><?php the_field('monthly_price'); ?><span class="month">/month</span>
							</p>
						</div>
						<div class="mid-box">
							<p>
								IDEAL FOR: <?php the_field('ideal_for'); ?>
							</p>
						</div>
						<div class="bottom-box">
							<p>
								<?php the_field('description'); ?>
							</p>
						</div>
						
						<div class="package-item-below"></div>
					</div>
					
					
					<div class="package-item blue">
						<div class="top-box">
							<h5>
								<?php the_field('package_name2'); ?><br>
								<span><?php the_field('package_for2'); ?></span>
							</h5>
							<p class="package-sub-heading">
								<?php the_field('advisor_name2'); ?>  |  <i class="fa fa-star"></i> <?php the_field('rate2'); ?>
							</p>
							<p class="package-price">
								<sup>€</sup><?php the_field('monthly_price2'); ?><span class="month">/month</span>
							</p>
						</div>
						<div class="mid-box">
							<p>
								IDEAL FOR: <?php the_field('ideal_for2'); ?>
							</p>
						</div>
						<div class="bottom-box">
							<p>
								<?php the_field('description2'); ?>
							</p>
						</div>
						
						<div class="package-item-below"></div>
					</div>
					
					
					
					<div class="package-item red last-item">
						<div class="top-box">
							<h5>
								<?php the_field('package_name3'); ?><br>
								<span><?php the_field('package_for3'); ?></span>
							</h5>
							<p class="package-sub-heading">
								<?php the_field('advisor_name3'); ?>  |  <i class="fa fa-star"></i> <?php the_field('rate3'); ?>
							</p>
							<p class="package-price">
								<sup>€</sup><?php the_field('monthly_price3'); ?><span class="month">/month</span>
							</p>
						</div>
						<div class="mid-box">
							<p>
								IDEAL FOR: <?php the_field('ideal_for3'); ?>
							</p>
						</div>
						<div class="bottom-box">
							<p>
								<?php the_field('description3'); ?>
							</p>
						</div>
						
						<div class="package-item-below"></div>
					</div>
				
				</div>
					
		</section>
		
		<section class="how-works">
			<div class="how-works-holder section-holder">
				<h2 class="section-heading">
					<?php _e('How It Works','HelloMaasWP'); ?>
				</h2>
				<p class="how-subheading">
					<?php _e('Choose the option that best fits your needs.','HelloMaasWP'); ?>
				</p>
				
				<div class="how-works-box">
					<div class="how-works-left">
						<img src="/wp-content/uploads/2019/02/how-works-left.png" />
						<h4>
							<?php the_field('option_1_title'); ?>
						</h4>
						<p>
							<?php the_field('option_1_text'); ?>
						</p>
						<a href="<?php the_field('option_1_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Client Buy Package Profile');"><?php the_field('option_1_button_text'); ?></a>
					</div>
					<div class="how-works-mid">
						
					</div>
					<div class="how-works-right">
						<img src="/wp-content/uploads/2019/02/how-works-right.png" />
						<h4>
							<?php the_field('option_2_title'); ?>
						</h4>
						<p>
							<?php the_field('option_2_text'); ?>
						</p>
						<a href="<?php the_field('option_2_button_link'); ?>"><?php the_field('option_2_button_text'); ?></a>
					</div>
				</div>
			</div>
		
		</section>
		
		
		<section class="faq-section">
			<h2 class="section-heading">
				<?php _e('Frequently Asked Questions','HelloMaasWP'); ?>
			</h2>
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
