<?php /* Template Name: Consult Advisor Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-banner advisor-banner">
			
			<div class="main-banner-content">
  			<div class="tabcontent-left">
				<h1 class="main-banner-heading">
					<?php the_field('consult_title'); ?>
				</h1>
				<p>
						<?php the_field('consult_text'); ?>			
				</p>
				<a href="<?php the_field('consult_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Client consult advisor create account');"><?php the_field('consult_button_text'); ?></a>
			</div>
			<div class="tabcontent-right">  
				<?php the_field('consult_video_embed_code'); ?>
			</div>
		</div>
			
			
			
		
		
		
		
			<div class="freelancers-choice">
					<h2>
						<?php the_field('above_title'); ?>
					</h2>
					<p class="freelancers-subheading">
						<?php the_field('above_text'); ?>
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
					<div class="question-item">
						<img src="<?php _e('/wp-content/uploads/2019/02/question-1.jpg','HelloMaasWP'); ?>" />
						<p>
							<?php the_field('why'); ?>
						</p>
					</div>
					
					<div class="question-item">
						<img src="<?php _e('/wp-content/uploads/2019/02/question-2.jpg','HelloMaasWP'); ?>" />
						<p>
							<?php the_field('how'); ?>
						</p>
					</div>
					
					<div class="question-item last-item">
						<img src="<?php _e('/wp-content/uploads/2019/02/question-3.jpg','HelloMaasWP'); ?>" />
						<p>
							<?php the_field('what'); ?>
						</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="podcast">
		
			<div class="section-holder">
				<div class="podcast-left">
					<h2>
						<?php _e('Podcasts','HelloMaasWP'); ?>
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
						<a href="<?php the_field('option_1_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Client consult advisor diy');"><?php the_field('option_1_button_text'); ?></a>
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
