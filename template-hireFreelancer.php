<?php /* Template Name: Hire a Freelancer */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-banner hire-banner">
			
			<div class="main-banner-content">
  			<div class="tabcontent-left">
				<h1 class="main-banner-heading">
					<?php the_field('hire_title'); ?>
				</h1>
				<p class="subheader">
						<?php the_field('hire_text'); ?>		
				</p>
				<a href="<?php the_field('hire_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Client');"><?php the_field('hire_button_text'); ?></a>
			</div>
			<div class="tabcontent-right freelancer-slider">  
				<div class="mySlides">
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
				
				<div class="freelancer-item last-item">
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
				</div>
				<!--
				<div class="mySlides">
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
				
				<div class="mySlides">
				<div class="freelancer-item">
						<div class="item-holder">
							
							<img src="<?php the_field('freelancer_image5'); ?>" />
							<p class="freelancer-name">
							<?php the_field('freelancer_name5'); ?>
							</p>
							<p class="freelancer-skill">
							<span><?php the_field('freelancer_freelancer_title5'); ?></span><br>
							<?php the_field('freelancer_skills5'); ?>
							</p>
							<p class="freelancer-price">
							<sup>€</sup><?php the_field('freelancer_hourly_rate5'); ?><span>/hour</span>
							</p>
							<p class="freelancer-description">
							<?php the_field('freelancer_description5'); ?>
							</p>
						</div>
						<p class="freelancer-tags">
							<?php the_field('freelancer_tags5'); ?>
						</p>
					</div>
				
				<div class="freelancer-item last-item">
						<div class="item-holder">
							
							<img src="<?php the_field('freelancer_image6'); ?>" />
							<p class="freelancer-name">
							<?php the_field('freelancer_name6'); ?>
							</p>
							<p class="freelancer-skill">
							<span><?php the_field('freelancer_freelancer_title6'); ?></span><br>
							<?php the_field('freelancer_skills6'); ?>
							</p>
							<p class="freelancer-price">
							<sup>€</sup><?php the_field('freelancer_hourly_rate6'); ?><span>/hour</span>
							</p>
							<p class="freelancer-description">
							<?php the_field('freelancer_description6'); ?>
							</p>
						</div>
						<p class="freelancer-tags">
							<?php the_field('freelancer_tags6'); ?>
						</p>
					</div>
				</div>
				<button class="freelancer-slider-btn left" onclick="plusDivs(-1)">&#10094;</button>
  				<button class="freelancer-slider-btn right" onclick="plusDivs(1)">&#10095;</button> -->
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
		<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
		
		
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
		
		<section class="on-demand">
		
			<div class="section-holder">
				<div class="on-demand-left">
					<h2>
						<?php the_field('marketing_title'); ?>
					</h2>
					<p>
						<?php the_field('marketing_text'); ?> 
					</p>
				</div>
				<div class="on-demand-right">
				<?php echo do_shortcode('[activecampaign form=8]'); ?>
				</div>
			</div>
		
		</section>
		<!--
		<section class="cost">
			
			<div class="section-holder">
				<div class="box-holder">
					<div class="fixed">
						<h5>
							Fixed Rate
						</h5>
						<p>
							<?php the_field('fixed_rate_text'); ?>
						</p>
					</div>
					
					<div class="hourly">
						<h5>
							Hourly Rate
						</h5>
						<p class="desc">
							<?php the_field('hourly_rate_text'); ?>
						</p>
						<p class="freelancer-price">
							<sup>€</sup><?php the_field('hourly_rate_low'); ?> - <sup>€</sup><?php the_field('hourly_rate_max'); ?><span>/hour</span>
							</p>
					</div>
				</div>
				
				<div class="img-holder">
					<img src="/wp-content/uploads/2019/02/cost-img.jpg" />
				</div>
				
				<div class="text-holder">
					<h2>
						<?php the_field('what_cost_title'); ?>
					</h2>
					<p>
						<?php the_field('what_cost_text'); ?>
					</p>
				</div>
				
			</div>
		
		</section> -->
		
		<section class="team-on-demand">
		
			<div class="section-holder">
				
				<h2>
					<?php the_field('demo_title'); ?>
				</h2>
				<p>
					<?php the_field('demo_text'); ?>
				</p>
			</div>
			<?php echo do_shortcode('[activecampaign form=12]'); ?>
		
		
		</section>
		
		
		<section class="faq-section hire-faq">
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
