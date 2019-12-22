<?php /* Template Name: Join as Freelancer */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-banner joinas-freelancer-banner">
			
			<div class="main-banner-content">
  			<div class="tabcontent-left joinas-freelancer">
				<h1 class="main-banner-heading">
					<?php the_field('banner_title'); ?>

				</h1>
				<p>
						<?php the_field('banner_text'); ?>		
				</p>
				<a href="<?php the_field('banner_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Freelancer Join as top');"><?php the_field('banner_button_text'); ?></a>
			</div>
			<div class="tabcontent-right">  
				
				<?php the_field('banner_video_embed_code'); ?>

			</div>
		</div>
				<div class="benifit-holder">
					
					
				
				<div class="questions-holder joinas-advisor-questions">
					<h2>
						<?php the_field('benefit_title'); ?>
					</h2>
					<div class="benifit-light-item">
						<img src="/wp-content/uploads/2019/02/circle-light-1.png" />
						<p>
							<?php the_field('number_1'); ?>
						</p>
					</div>
					
					<div class="benifit-light-item">
						<img src="/wp-content/uploads/2019/02/circle-light-2.png" />
						<p>
							<?php the_field('number_2'); ?>
						</p>
					</div>
					
					<div class="benifit-light-item">
						<img src="/wp-content/uploads/2019/02/circle-light-3.png" />
						<p>
							<?php the_field('number_3'); ?>
						</p>
					</div>
					
					<div class="benifit-light-item last-item">
						<img src="/wp-content/uploads/2019/02/circle-light-4.png" />
						<p>
							<?php the_field('number_4'); ?>
						</p>
					</div>
					
					<p class="benefit-below">
						<a class="big-btn" style="    width: auto;
    display: inline-block;
    padding: 0 20px;" href="<?php the_field('button_link_benefit'); ?>" target="_blank"><?php the_field('button_text_benefit'); ?></a>
					</p>
				</div>
				
		</div>
			
			
		</section>
		
		
		
		
		
		<section class="package-choice experience-section">
			
			<h2 class="section-title">
				<?php _e('Turn your experience into a package!','HelloMaasWP'); ?>
			</h2>
			<p class="package-subtext">
				<?php _e('Help startups and SMBs with fixed scope, fixed price packages. You deliver when and how you like it.','HelloMaasWP'); ?>
			</p>
		
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
								<sup>€</sup><?php the_field('monthly_price'); ?><span class="month"> Fixed fee</span>
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
								<sup>€</sup><?php the_field('monthly_price2'); ?><span class="month"> Fixed fee</span>
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
								<sup>€</sup><?php the_field('monthly_price3'); ?><span class="month"> Fixed fee</span>
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
		
	
		
		<section class="steps-list steps-working">
		<h2 class="section-title">
			<?php _e('Joining is Easy and FREE!','HelloMaasWP'); ?>
				</h2>
				<div class="steps-holder">
					
				
				<div class="steps-left">
					<img src="<?php the_field('home_step_1_image'); ?>" class="step-imgs" id="first" style="display: block;" />
					<img src="<?php the_field('home_step_2_image'); ?>" class="step-imgs" id="second" />
					<img src="<?php the_field('home_step_3_image'); ?>" class="step-imgs" id="third" />
					<img src="<?php the_field('home_step_4_image'); ?>" class="step-imgs" id="forth" />
					<img src="<?php the_field('home_step_5_image'); ?>" class="step-imgs" id="fifth" />
					<img src="<?php the_field('home_step_6_image'); ?>" class="step-imgs" id="sixth" />
				</div>
				<div class="steps-right">
					<div class="acc-bg active-acc-bg">	
					<div class="accordion active" id="acc-first">
						
						<div class="acc-num step-1">
							
						</div> 
						
						
						<p class="acc-title">
						<?php the_field('home_step_1_title'); ?>
						</p>
					</div>
						<div class="panel show">
	  						<p><?php the_field('home_step_1_text'); ?></p>
						</div>
					
					</div>
					
					<div class="acc-bg">
						
					<div class="accordion"  id="acc-second">
						
						<div class="acc-num step-2">
							
						</div> 
						
						
						<p class="acc-title">
						<?php the_field('home_step_2_title'); ?>
						</p>
					</div>
						<div class="panel">
	  						<p><?php the_field('home_step_2_text'); ?></p>
						</div>
					
					</div>
					
					<div class="acc-bg">
						
					<div class="accordion" id="acc-third">
						
						<div class="acc-num step-3">
							
						</div> 
						
						
						<p class="acc-title">
						<?php the_field('home_step_3_title'); ?>
						</p>
					</div>
						<div class="panel">
	  						<p><?php the_field('home_step_3_text'); ?></p>
						</div>
					
					</div>
					
					<div class="acc-bg">
						
					<div class="accordion" id="acc-forth">
						
						<div class="acc-num step-4">
							
						</div> 
						
						
						<p class="acc-title">
						<?php the_field('home_step_4_title'); ?>
						</p>
					</div>
						<div class="panel">
	  						<p><?php the_field('home_step_4_text'); ?></p>
						</div>
					
					</div>
					
					<div class="acc-bg">
						
					<div class="accordion" id="acc-fifth">
						
						<div class="acc-num step-5">
							
						</div> 
						
						
						<p class="acc-title">
						<?php the_field('home_step_5_title'); ?>
						</p>
					</div>
						<div class="panel">
	  						<p><?php the_field('home_step_5_text'); ?></p>
						</div>
					
					</div>
					
					<div class="acc-bg join-steps">
						
					<div class="accordion" id="acc-sixth">
						
						<div class="acc-num step-6">
							
						</div> 
						
						
						<p class="acc-title">
						<?php the_field('home_step_6_title'); ?>
						</p>
					</div>
						<div class="panel">
	  						<p><?php the_field('home_step_6_text'); ?></p>
						</div>
					
					</div>
					
				
					
					<a class="big-btn" href="<?php the_field('steps_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Freelancer Join as bottom');"><?php the_field('steps_button_text'); ?></a>				
					</div>
				</div>
					
		</section>
		
		
		
		
		<section class="faq-section faq-blue">
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
<script src="/wp-content/themes/HelloMaasWP/js/accoridion.js"></script>

<?php get_footer(); ?>
