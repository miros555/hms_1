<?php /* Template Name: Join as Advisor */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-banner joinas-advisor-banner">
			
			<div class="main-banner-content">
  			<div class="tabcontent-left">
				<h1 class="main-banner-heading">
					<?php the_field('banner_title'); ?>
				</h1>
				<p>
						<?php the_field('banner_text'); ?>			
				</p>
				<a href="<?php the_field('banner_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Freelancer Join as advisor top');"><?php the_field('banner_button_text'); ?></a>
			</div>
			<div class="tabcontent-right">  
				
				<?php the_field('banner_video_embed_code'); ?>

			</div>
		</div>
			
			
			
		</section>
		
		
		
			<section class="freelancers-choice benifit-holder padd-out">
					
					<p class="joinas-advisor-subheading">
						<?php _e('Are you a marketing expert that likes to share your know-how<br>and help other companies win?','HelloMaasWP'); ?>
					</p>
				<div class="section-holder">
					<div class="freelancer-item">
						<div class="item-holder">
							
							<img src="<?php the_field('freelancer_image'); ?>" />
							<p class="freelancer-name">
							<?php the_field('freelancer_name'); ?>
							</p>
							<p class="freelancer-skill">
							<span><?php the_field('freelancer_freelancer_title'); ?></span><br>
							<?php the_field('freelancer_skills'); ?>
							</p>
							<p class="freelancer-price">
							<sup>€</sup><?php the_field('freelancer_hourly_rate'); ?><span>/hour</span>
							</p>
							<p class="freelancer-description">
							<?php the_field('freelancer_description'); ?>
							</p>
						</div>
						<p class="freelancer-tags">
							<?php the_field('freelancer_tags'); ?>
						</p>
					</div>
					
					<div class="freelancer-item">
						<div class="item-holder">
							
							<img src="<?php the_field('freelancer_image2'); ?>" />
							<p class="freelancer-name">
							<?php the_field('freelancer_name2'); ?>
							</p>
							<p class="freelancer-skill">
							<span><?php the_field('freelancer_freelancer_title2'); ?></span><br>
							<?php the_field('freelancer_skills2'); ?>
							</p>
							<p class="freelancer-price">
							<sup>€</sup><?php the_field('freelancer_hourly_rate2'); ?><span>/hour</span>
							</p>
							<p class="freelancer-description">
							<?php the_field('freelancer_description2'); ?>
							</p>
						</div>
						<p class="freelancer-tags">
							<?php the_field('freelancer_tags2'); ?>
						</p>
					</div>
					
					<div class="freelancer-item">
						<div class="item-holder">
							
							<img src="<?php the_field('freelancer_image3'); ?>" />
							<p class="freelancer-name">
							<?php the_field('freelancer_name3'); ?>
							</p>
							<p class="freelancer-skill">
							<span><?php the_field('freelancer_freelancer_title3'); ?></span><br>
							<?php the_field('freelancer_skills3'); ?>
							</p>
							<p class="freelancer-price">
							<sup>€</sup><?php the_field('freelancer_hourly_rate3'); ?><span>/hour</span>
							</p>
							<p class="freelancer-description">
							<?php the_field('freelancer_description3'); ?>
							</p>
						</div>
						<p class="freelancer-tags">
							<?php the_field('freelancer_tags3'); ?>
						</p>
					</div>
					
					<div class="freelancer-item last-item">
						<div class="item-holder">
							
							<img src="<?php the_field('freelancer_image4'); ?>" />
							<p class="freelancer-name">
							<?php the_field('freelancer_name4'); ?>
							</p>
							<p class="freelancer-skill">
							<span><?php the_field('freelancer_freelancer_title4'); ?></span><br>
							<?php the_field('freelancer_skills4'); ?>
							</p>
							<p class="freelancer-price">
							<sup>€</sup><?php the_field('freelancer_hourly_rate4'); ?><span>/hour</span>
							</p>
							<p class="freelancer-description">
							<?php the_field('freelancer_description4'); ?>
							</p>
						</div>
						<p class="freelancer-tags">
							<?php the_field('freelancer_tags4'); ?>
						</p>
					</div>
				
				</div>
				
				<div class="questions-holder">
					<h2>
						<?php _e('Benefit of Joining HelloMaaS','HelloMaasWP'); ?>
					</h2>
					<p class="benifit-subheading">
						<?php _e('You decide your price and availability.','HelloMaasWP'); ?>
					</p>
					<div class="benifit-item">
						<img src="/wp-content/uploads/2019/02/circle-1.png" />
						<p>
							<?php the_field('number_1'); ?>
						</p>
					</div>
					
					<div class="benifit-item">
						<img src="/wp-content/uploads/2019/02/circle-2.png" />
						<p>
							<?php the_field('number_2'); ?>
						</p>
					</div>
					
					<div class="benifit-item last-item">
						<img src="/wp-content/uploads/2019/02/circle-3.png" />
						<p>
							<?php the_field('number_3'); ?>
						</p>
					</div>
				</div>
				
		</section>
		
		<section class="podcast podcast-blue">
		
			<div class="section-holder">
				<div class="podcast-left">
					<h2>
						Podcasts
					</h2>
					<p>
						<?php the_field('podcast_text'); ?>
					</p>
				</div>
				<div class="podcast-right">
					<iframe style="border: none; padding: 20px;" src="//html5-player.libsyn.com/embed/destination/id/1020950/height/360/theme/custom/thumbnail/yes/direction/backward/no-cache/true/render-playlist/yes/custom-color/ff8400/" height="360" width="100%" scrolling="no"  allowfullscreen webkitallowfullscreen mozallowfullscreen oallowfullscreen msallowfullscreen></iframe>
				</div>
			</div>
		
		</section>
		
		<section class="steps-list steps-working">
		<h2 class="section-title">
			<?php _e('Working with HelloMaaS is turn-key','HelloMaasWP'); ?>
				</h2>
				<div class="steps-holder">
					
				
				<div class="steps-left">
					<img src="<?php the_field('home_step_1_image'); ?>" class="step-imgs" id="first" style="display: block;" />
					<img src="<?php the_field('home_step_2_image'); ?>" class="step-imgs" id="second" />
					<img src="<?php the_field('home_step_3_image'); ?>" class="step-imgs" id="third" />
					<img src="<?php the_field('home_step_4_image'); ?>" class="step-imgs" id="forth" />
					<img src="<?php the_field('home_step_5_image'); ?>" class="step-imgs" id="fifth" />
					
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
						
					<div class="accordion join-long"  id="acc-second">
						
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
						
					<div class="accordion join-long" id="acc-third">
						
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
					
					<div class="acc-bg join-steps-advisor">
						
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
					
					
					
					<a class="big-btn" href="<?php the_field('steps_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Freelancer Join as advisor bottom');"><?php the_field('steps_button_text'); ?></a>				
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
