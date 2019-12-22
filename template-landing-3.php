<?php /* Template Name: Custom Landing Page 2  */ get_header(); ?>
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
	.main-banner-content h1, .main-banner-content p, .main-banner-content a, .main-banner-content {
		text-align: center!important;
	}
	.main-banner-content a {
		display: inline-block!important;
		margin-top: 40px; 
	}
	.landing-package-bg {
		    background: url(/wp-content/uploads/2019/02/buy-package-bg.jpg) center -270px no-repeat;
	}
	.package-item .top-box img {
	border-radius: 120px;
    padding: 4px;
    border: 1px solid #dfe5ea;
    width: 100%;
    max-width: 120px;
    height: 120px;
	}
	.team-on-demand p {
		font-size: 18px; 
		line-height 30px;
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
  			
				<h1 class="landing-title">
					<?php the_field('title'); ?>
				</h1>
				<p>
					<?php the_field('subtitle'); ?>
				</p>
				<a class="big-btn" href="<?php the_field('button_link'); ?>" target="_blank"><?php the_field('button_text'); ?></a>
			
			
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
							<img src="<?php the_field('freelancer_image'); ?>" />
							<p class="freelancer-name">
							<?php the_field('freelancer_name'); ?>
							</p>
						</div>
						<div class="mid-box">
							<p>
								<?php the_field('freelancer_title'); ?>
							</p>
						</div>
						<div class="bottom-box">
							<p>
								<?php the_field('freelancer_benefits'); ?>
							</p>
						</div>
						<a class="package-button" href="<?php the_field('freelancer_button_link'); ?>"><?php the_field('freelancer_button_text'); ?></a>
						<div class="package-item-below"></div>
						
					</div>
					
					
					<div class="package-item blue">
						<div class="top-box">
							<img src="<?php the_field('freelancer_image2'); ?>" />
							<p class="freelancer-name">
							<?php the_field('freelancer_name2'); ?>
							</p>
						</div>
						<div class="mid-box">
							<p>
								<?php the_field('freelancer_title2'); ?>
							</p>
						</div>
						<div class="bottom-box">
							<p>
								<?php the_field('freelancer_benefits2'); ?>
							</p>
						</div>
						<a class="package-button" href="<?php the_field('freelancer_button_link2'); ?>"><?php the_field('freelancer_button_text2'); ?></a>
						<div class="package-item-below"></div>
						
					</div>
					
					
					
					<div class="package-item red last-item">
						
						<div class="top-box">
							<img src="<?php the_field('freelancer_image3'); ?>" />
							<p class="freelancer-name">
							<?php the_field('freelancer_name3'); ?>
							</p>
						</div>
						<div class="mid-box">
							<p>
								<?php the_field('freelancer_title3'); ?>
							</p>
						</div>
						<div class="bottom-box">
							<p>
								<?php the_field('freelancer_benefits3'); ?>
							</p>
						</div>
						<a class="package-button" href="<?php the_field('freelancer_button_link3'); ?>"><?php the_field('freelancer_button_text3'); ?></a>
						<div class="package-item-below"></div>
						
					</div>
					
				</div>
					
		</section>
		
		<section class="team-on-demand">
		
			<div class="section-holder">
				
				<h2>
					<?php the_field('title3'); ?>
				</h2>
				<p>
					<?php the_field('subtitle3'); ?> 
				</p>
			</div>
			
		
		
		</section>
		
		<section class="horizontal-freelancers">
		
			<div class="section-holder">
				<div class="f-holder">
					<div class="f-left">
						<img src="<?php the_field('image-f1'); ?>" />
						<h3>
								<?php the_field('name-f1'); ?>
							</h3>
							<p class="f-location">
								<?php the_field('location-f1'); ?>
							</p>
						<a class="big-btn" href="<?php the_field('button_link-f1'); ?>"><?php the_field('button_text-f1'); ?></a>
					</div>
					<div class="f-right">
						<div class="f-desc">
							
							<p class="f-title">
								<?php the_field('title-f1'); ?>
							</p>
							<p class="f-info">
								<?php the_field('description-f1'); ?>
							</p>
						</div>
						<div class="f-skills">
							<p>
								<?php the_field('skill1-f1'); ?>
							</p>
							<p>
								<?php the_field('skill2-f1'); ?>
							</p>
							<p>
								<?php the_field('skill3-f1'); ?>
							</p>
						</div>
						<div class="f-logos">
							<img src="<?php the_field('logo_1-f1'); ?>" />
							<img src="<?php the_field('logo_2-f1'); ?>" />
						</div>
					</div>
				</div>
				
				<div class="f-holder">
					<div class="f-left">
						<img src="<?php the_field('image-f2'); ?>" />
						<h3>
								<?php the_field('name-f2'); ?>
							</h3>
							<p class="f-location">
								<?php the_field('location-f2'); ?>
							</p>
						<a class="big-btn" href="<?php the_field('button_link-f2'); ?>"><?php the_field('button_text-f2'); ?></a>
					</div>
					<div class="f-right">
						<div class="f-desc">
							
							<p class="f-title">
								<?php the_field('title-f2'); ?>
							</p>
							<p class="f-info">
								<?php the_field('description-f2'); ?>
							</p>
						</div>
						<div class="f-skills">
							<p>
								<?php the_field('skill1-f2'); ?>
							</p>
							<p>
								<?php the_field('skill2-f2'); ?>
							</p>
							<p>
								<?php the_field('skill3-f2'); ?>
							</p>
						</div>
						<div class="f-logos">
							<img src="<?php the_field('logo_1-f2'); ?>" />
							<img src="<?php the_field('logo_2-f2'); ?>" />
						</div>
					</div>
				</div>
				
				<div class="f-holder">
					<div class="f-left">
						<img src="<?php the_field('image-f3'); ?>" />
						<h3>
								<?php the_field('name-f3'); ?>
							</h3>
							<p class="f-location">
								<?php the_field('location-f3'); ?>
							</p>
						<a class="big-btn" href="<?php the_field('button_link-f3'); ?>"><?php the_field('button_text-f3'); ?></a>
					</div>
					<div class="f-right">
						<div class="f-desc">
							
							<p class="f-title">
								<?php the_field('title-f3'); ?>
							</p>
							<p class="f-info">
								<?php the_field('description-f3'); ?>
							</p>
						</div>
						<div class="f-skills">
							<p>
								<?php the_field('skill1-f3'); ?>
							</p>
							<p>
								<?php the_field('skill2-f3'); ?>
							</p>
							<p>
								<?php the_field('skill3-f3'); ?>
							</p>
						</div>
						<div class="f-logos">
							<img src="<?php the_field('logo_1-f3'); ?>" />
							<img src="<?php the_field('logo_2-f3'); ?>" />
						</div>
					</div>
				</div>
			</div>
			
		</section>
		
			<section class="bottom-landing">
		
			<div class="section-holder">
				
				<h2>
					<?php the_field('title4'); ?>
				</h2>
				<p>
					<a class="big-btn" href="<?php the_field('button_link3'); ?>"><?php the_field('button_text3'); ?></a>
				</p>
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
