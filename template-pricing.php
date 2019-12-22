<?php /* Template Name: Pricing Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-banner pricing-page">
			
			<h1>
				<?php the_field('pricing_heading'); ?>
			</h1>
			<p>
				<?php the_field('pricing_subheading'); ?>
			</p>
			
		</section>
		<section class="pricing-tabs">
		<div class="section-holder">
			
		<!-- Tab links -->
		<div class="pricing-tab">
  			<div class="clients-tab-button tablinks active" onclick="openTab(event, 'client')">
				<p>
					<?php _e('Pricing for Clients','HelloMaasWP'); ?>
					</p>
			</div>
  			<div class="expert-tab-button tablinks" onclick="openTab(event, 'expert')">
				<p>
					<?php _e('Pricing for Freelancers','HelloMaasWP'); ?>
					</p>
			</div>
  			
		</div>
	
		<!-- Tab content -->
		
			

		<div id="client" class="tabcontent" style="display: block;">
  			<div class="client-top">
				<p>
					<?php _e('Monthly or annual subscription? See which one is right for your situation.','HelloMaasWP'); ?>
				</p>
				
				<div class="pay-choice">
					<form>
					<input type="radio" name="gender" value="monthly" data-id="annual1"  checked="checked"><span class="checkmark"></span> <p>
					<?php _e('Monthly','HelloMaasWP'); ?>
					</p>
					<input type="radio" name="gender" value="annual" data-id="monthly1"><span class="checkmark"></span> <p>
					<?php _e('Annually','HelloMaasWP'); ?>
					</p>
					</form>
				</div>
			</div>
			<div class="package-holder client-package-tab">
				
			<div class="pricing-packages">
				<div class="pricing-package-item first">
					<div class="package-border">
					<div class="top">
						<p class="pricing-name">
							<?php the_field('client_package_name'); ?>
						</p>
						<p class="pricing-price">
							<sup>€</sup><?php the_field('client_price'); ?><span> /month</span>
						</p>
						
						<p class="desc">
							<?php the_field('client_description'); ?>
						</p>
					</div>
					<div class="bottom">
						<div class="pricing-list-item">
							<p class="left">
								<?php _e('Matchmaking fee per hour','HelloMaasWP'); ?> 
							</p>
							<p class="right">
								<?php the_field('client_matchmaking_fee_per_hour'); ?>
							</p>
						</div>
						<div class="pricing-list-item">
							<p class="left">
								 <?php the_field('review_label'); ?>
							</p>
							<p class="right">
								<?php the_field('client_buy_expert_review'); ?>
							</p>
						</div>
						<div class="pricing-list-item no-border">
							<p class="left">
								 <?php _e('Buy Marketing package','HelloMaasWP'); ?> 
							</p>
							<p class="right">
								<?php the_field('client_buy_marketing_package'); ?>
							</p>
						</div>
						
					</div>
					</div>
					<a class="big-btn" href="<?php the_field('client_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Client free pricing');"><?php the_field('client_button_text'); ?></a>
				</div>
			</div>
			
			
			<div class="pricing-packages">
				<div class="pricing-package-item second">
					
					<div class="package-border">
					<div class="top">
						<p class="pricing-name">
							<?php the_field('client_package_name2'); ?>
						</p>
						<p class="pricing-price monthly1">
							<sup>€</sup><?php the_field('client_price2'); ?><span> /month</span>
						</p>
						<p class="pricing-price annual1 none">
							<sup>€</sup><?php the_field('client_price2_annual'); ?><span> /month</span>
						</p>
						<p class="desc">
							<?php the_field('client_description2'); ?>
						</p>
					</div>
					<div class="bottom">
						<div class="pricing-list-item">
							<p class="left">
								 <?php _e('Matchmaking fee per hour','HelloMaasWP'); ?>
							</p>
							<p class="right">
								<?php the_field('client_matchmaking_fee_per_hour2'); ?>
							</p>
						</div>
						<div class="pricing-list-item">
							<p class="left">
								 <?php the_field('review_label2'); ?>
							</p>
							<p class="right">
								<?php the_field('client_buy_expert_review2'); ?>
							</p>
						</div>
						<div class="pricing-list-item no-border">
							<p class="left">
								 <?php _e('Buy Marketing package','HelloMaasWP'); ?>
							</p>
							<p class="right">
								<?php the_field('client_buy_marketing_package2'); ?>
							</p>
						</div>
						
					</div>
					</div>
					<a class="big-btn" href="<?php the_field('client_button_link2'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Client standard pricing');"><?php the_field('client_button_text2'); ?></a>
					<p class="garantee">
						<?php _e('10 day money back guarantee','HelloMaasWP'); ?>
					</p>
				</div>
			</div>
			
			
			<div class="pricing-packages">
				<div class="pricing-package-item third">
					<p class="popular">
						<?php _e('Most popular','HelloMaasWP'); ?>
					</p>
					<div class="package-border no-border">
						
				
					<div class="top">
						<p class="pricing-name">
							<?php the_field('client_package_name3'); ?>
						</p>
						<p class="pricing-price monthly1">
							<sup>€</sup><?php the_field('client_price3'); ?><span> /month</span>
						</p>
						<p class="pricing-price annual1 none">
							<sup>€</sup><?php the_field('client_price3_annual'); ?><span> /month</span>
						</p>
						<p class="desc">
							<?php the_field('client_description3'); ?>
						</p>
					</div>
					<div class="bottom">
						<div class="pricing-list-item">
							<p class="left">
								 <?php _e('Matchmaking fee per hour','HelloMaasWP'); ?>
							</p>
							<p class="right">
								<?php the_field('client_matchmaking_fee_per_hour3'); ?>
							</p>
						</div>
						<div class="pricing-list-item">
							<p class="left">
								 <?php the_field('review_label3'); ?>
							</p>
							<p class="right">
								<?php the_field('client_buy_expert_review3'); ?>
							</p>
						</div>
						<div class="pricing-list-item no-border">
							<p class="left">
								 <?php _e('Buy Marketing package','HelloMaasWP'); ?>
							</p>
							<p class="right">
								<?php the_field('client_buy_marketing_package3'); ?>
							</p>
						</div>
						
					</div>
							</div>
					<a class="big-btn" href="<?php the_field('client_button_link3'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Client plus pricing');"><?php the_field('client_button_text3'); ?></a>
					<p class="garantee">
						<?php _e('10 day money back guarantee','HelloMaasWP'); ?>
					</p>
				</div>
				
			</div>
				
			
			</div>
			
			<p class="upgrade-txt">
				<?php _e('Plans can be upgraded or downgraded once a month.','HelloMaasWP'); ?>
			</p>
		</div>

		<div id="expert" class="tabcontent">
  			<div class="client-top">
				<p>
					<?php _e('Monthly or annual subscription? See which one is right for your situation.','HelloMaasWP'); ?>
				</p>
				<div class="pay-choice">
					<form>
						
					
					<input type="radio" name="gender" value="monthly" data-id="annual2" checked="checked"><span class="checkmark"></span> <p>
					<?php _e('Monthly','HelloMaasWP'); ?>
					</p>
					<input type="radio" name="gender" value="annual" data-id="monthly2"><span class="checkmark"></span> <p>
					<?php _e('Annually','HelloMaasWP'); ?>
					</p>
						</form>
				</div>
			</div>
			<div class="package-holder freelancers-package-tab">
				
			<div class="pricing-packages">
				<div class="pricing-package-item first">
					<div class="package-border">
					<div class="top">
						<p class="pricing-name">
							<?php the_field('expert_package_name'); ?>
						</p>
						<p class="pricing-price">
							<sup>€</sup><?php the_field('expert_price'); ?><span> /month</span>
						</p>
						
						<p class="desc">
							<?php the_field('expert_description'); ?>
						</p>
					</div>
					<div class="bottom">
						<div class="pricing-list-item">
							<p class="left">
								<?php _e('Matchmaking fee per hour','HelloMaasWP'); ?> 
							</p>
							<p class="right">
								<?php the_field('expert_matchmaking_fee_per_hour'); ?>
							</p>
						</div>
						<div class="pricing-list-item no-border">
							<p class="left">
								 <?php _e('Number of packages you can sell','HelloMaasWP'); ?>
							</p>
							<p class="right">
								<?php the_field('expert_number_of_packages'); ?>
							</p>
						</div>
						
					</div>
					</div>
					<a class="big-btn" href="<?php the_field('expert_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Freelancer free pricing');"><?php the_field('expert_button_text'); ?></a>
				</div>
			</div>
			
			
			<div class="pricing-packages">
				<div class="pricing-package-item second">
					<p class="popular">
						<?php _e('Most popular','HelloMaasWP'); ?>
					</p>
					<div class="package-border">
					<div class="top">
						<p class="pricing-name">
							<?php the_field('expert_package_name2'); ?>
						</p>
						<p class="pricing-price monthly2">
							<sup>€</sup><?php the_field('expert_price2'); ?><span> /month</span>
						</p>
						<p class="pricing-price annual2 none">
							<sup>€</sup><?php the_field('expert_price2_annual'); ?><span> /month</span>
						</p>
						<p class="desc">
							<?php the_field('expert_description2'); ?>
						</p>
					</div>
					<div class="bottom">
						<div class="pricing-list-item">
							<p class="left">
								<?php _e('Matchmaking fee per hour','HelloMaasWP'); ?> 
							</p>
							<p class="right">
								<?php the_field('expert_matchmaking_fee_per_hour2'); ?>
							</p>
						</div>
						<div class="pricing-list-item no-border">
							<p class="left">
								<?php _e('Number of packages you can sell','HelloMaasWP'); ?> 
							</p>
							<p class="right">
								<?php the_field('expert_number_of_packages2'); ?>
							</p>
						</div>
						
					</div>
					</div>
					<a class="big-btn" href="<?php the_field('expert_button_link2'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Freelancer standard pricing');"><?php the_field('expert_button_text2'); ?></a>
					<p class="garantee">
						<?php _e('10 day money back guarantee','HelloMaasWP'); ?> 
					</p>
				</div>
			</div>
			
			
			<div class="pricing-packages">
				<div class="pricing-package-item third">
					
					<div class="package-border no-border">
						
				
					<div class="top">
						<p class="pricing-name">
							<?php the_field('expert_package_name3'); ?>
						</p>
						<p class="pricing-price monthly2">
							<sup>€</sup><?php the_field('expert_price3'); ?><span> /month</span>
						</p>
						<p class="pricing-price annual2 none">
							<sup>€</sup><?php the_field('expert_price3_annual'); ?><span> /month</span>
						</p>
					
						<p class="desc">
							<?php the_field('expert_description3'); ?>
						</p>
					</div>
					<div class="bottom">
						<div class="pricing-list-item">
							<p class="left">
								 <?php _e('Matchmaking fee per hour','HelloMaasWP'); ?> 
							</p>
							<p class="right">
								<?php the_field('expert_matchmaking_fee_per_hour3'); ?>
							</p>
						</div>
						<div class="pricing-list-item no-border">
							<p class="left">
								 <?php _e('Number of packages you can sell','HelloMaasWP'); ?> 
							</p>
							<p class="right">
								<?php the_field('expert_number_of_packages3'); ?>
							</p>
						</div>
						
					</div>
							</div>
					<a class="big-btn" href="<?php the_field('expert_button_link3'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Freelancer plus pricing');"><?php the_field('expert_button_text3'); ?></a>
					<p class="garantee">
						<?php _e('10 day money back guarantee','HelloMaasWP'); ?>
					</p>
				</div>
			</div>
				
			
			</div>
			<p class="pay-choice-info">
				<?php the_field('info_text'); ?>
			</p>
			<p class="upgrade-txt">
				<?php _e('Plans can be upgraded or downgraded once a month.','HelloMaasWP'); ?>
			</p>
		</div>
			
			
		</div>
			
		</section>
			<section class="faq-section faq-blue-pricing">
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
		
		
		
		
		<!--
		<section class="testimonials">
			<h2>
					Testimonials
				</h2>
			<div class="testimonials-holder">
				
			<?php if ( function_exists( 'strong_testimonials_view' ) ) {
    strong_testimonials_view( '1' );
} ?>
			</div>
		
		</section> -->
		
		

		
		
		<!-- /section -->
	</main>



<?php get_footer(); ?>
