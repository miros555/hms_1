<?php /* Template Name: Custom Landing Page Template */ get_header(); ?>
<style>
	#_hj_feedback_container, .switchero {
		display: none;
	}
	.marketing-manager h2 {
    padding: 0 0 80px;
    margin: 0;
	}
	.lead-gen.video-landing .big-btn {
		margin-top: 60px;
	}
	.how-works {
		padding-bottom: 140px;
	}
	.lead-gen.video-landing {
		margin: 0;
	}
	.main-nav {
		display: none;
	}
	.below-banner {
		padding-top: 120px; 
	}
	.logo {
		float: none;
    margin: 0 auto;
    text-align: center;
    padding-top: 12px;
	}
	.header-top {
		display: none;
	}
	.footer-holder {
		display: none;
	}
	.footer {
		padding-top: 0;
	}
	.footer-bottom {
		margin: 0 auto;
	}
	
	.mob-menu-logo-holder {
		width: 100%;
    	text-align: center;
		margin: 0; 
	}
	
	.mobmenur-container {
		display: none; 
	}
</style>
	<main role="main">
		
		
		<section class="main-banner landing-package-bg">
			
			<div class="main-banner-content">
  			<div class="tabcontent-left">
				<h1 class="landing-title">
					<?php the_field('landing_title'); ?>
				</h1>
				<ul>
					<li><?php the_field('question_1'); ?></li>
					<li><?php the_field('question_2'); ?></li>
					<li><?php the_field('question_3'); ?></li>
				</ul>
				<a class="big-btn" href="<?php the_field('button_link'); ?>" target="_blank"><?php the_field('button_text'); ?></a>
			</div>
			<div class="tabcontent-right">  
				
				<img src="<?php the_field('landing_image'); ?>" />

			</div>
		</div>
			<div class="below-banner">
				<h2>
						<?php the_field('brand_section_title'); ?>
					</h2>
					<p class="freelancers-subheading">
						<?php the_field('brand_section_text'); ?>
					</p>
			</div>
			
		</section>
		
		
		
		<section class="companies">
					
				<div class="section-holder">
					<div class="brand-logos">
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_1'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_2'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_3'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_4'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_5'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_6'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_7'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_8'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_9'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_10'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_11'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_12'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_13'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_14'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_15'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_16'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_17'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('hire_brand_logo_18'); ?> " />
					</div>
				</div>
				</div>
				
		</section>
		
		
		
		<section class="package-choice">
		
				<div class="section-holder">
				<div class="above-holder">
					<h2 class="section-heading">
				<?php the_field('above_title'); ?>
			</h2>
			<p class="heading-text">
				<?php the_field('above_text'); ?>
			</p>
					</div>	
			
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
						<a class="package-button" href="<?php the_field('button_link1'); ?>"><?php the_field('button_text1'); ?></a>
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
						<a class="package-button" href="<?php the_field('button_link2'); ?>"><?php the_field('button_text2'); ?></a>
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
						<a class="package-button" href="<?php the_field('button_link3'); ?>"><?php the_field('button_text3'); ?></a>
						<div class="package-item-below"></div>
					</div>
					
				</div>
					
		</section>
		
		
			
		
		
		
		
		<section class="how-works">
			<div class="how-works-holder section-holder">
				<h2 class="section-heading">
					<?php the_field('section_title'); ?>
				</h2>
				<p class="how-subheading">
					<?php the_field('section_subtitle'); ?>
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
		
		
		<section class="marketing-manager">
			<div class="how-works-holder section-holder">
				<h2 class="section-heading">
					<?php the_field('manager_title'); ?>
				</h2>
				
				
					<div class="manager-left">
						<div class="team-member-holder">
					<div class="manager-top">
						
							<div class="team-img">
								<img src="<?php the_field('image'); ?>" />
							</div>
						<div class="top-holder">
							<h4><?php the_field('manager_name'); ?></h4>
					<p class="team-job-title">
						<span><?php the_field('team_job_title_1'); ?></span><br>
						<?php the_field('team_job_title_2'); ?>
					</p>
					<p class="team-city">
						<?php the_field('team_city_1'); ?>
					</p>
						</div>
						
						</div>
						
						<div class="manager-mid">
							<div class="team-description">
						<?php the_field('team_description'); ?>
					</div>
						</div>
							</div>
						<div class="manager-bottom">
							<div class="team-tags">
						<?php the_field('team_tags'); ?>
				</div>
							<div class="team-member-below">
					
				</div>
						</div>
						
				</div>
				<div class="manager-right">
						<p>
							<?php the_field('right_text'); ?>
					</p>
				</div>
				
				
			</div>
		
		</section>
		
		<!--
		
		<section class="lead-gen video-landing">
			<div class="lead-gen-holder">
		
			<div class="lead-left">
				<h2>
					<?php the_field('video_title'); ?>
				</h2>
				<a class="big-btn" href="<?php the_field('video_button_link'); ?>" target="_blank"><?php the_field('video_button_text'); ?></a>
			
			</div>
			<div class="video-right">
				<?php the_field('video_embed_code'); ?>
			</div>
			
			</div>
		
		</section> -->
		
		
		
		
		
		
		
		
		


		
		<!-- /section -->
	</main>



<?php get_footer(); ?>
