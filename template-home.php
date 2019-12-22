<?php /* Template Name: Home Page Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="main-banner">
			
			<h1>
				<?php the_field('home_page_heading'); ?>
			</h1>
			
		</section>
		<section class="banner-tabs">
		<div class="tabs-holder">
			
		<!-- Tab links -->
		<div class="tab">
  			<div class="tablinks active" onclick="openTab(event, 'freelancer')">
				<div class="tab-title-holder">				
				<p class="freelancer-title">
					<i class="freelancer-blue"></i><i class="freelancer-white"></i>
				<?php _e('Hire<br><span>Freelancer</span>','HelloMaasWP'); ?>
					</p>
				</div>	
			</div>
  			<div class="tablinks middle" onclick="openTab(event, 'package')">
				<div class="tab-title-holder">				
				<p class="package-title">
					<i class="package-blue"></i><i class="package-white"></i>
				<?php _e('Buy<br><span>Package</span>','HelloMaasWP'); ?>
					</p>
				</div>
			</div>
  			<div class="tablinks" onclick="openTab(event, 'advisor')">
				<div class="tab-title-holder">				
				<p class="advisor-title">
					<i class="advisor-blue"></i><i class="advisor-white"></i>
				<?php _e('Consult<br><span>Advisor</span>','HelloMaasWP'); ?>
					</p>
				</div>
			</div>
		</div>
	
		<!-- Tab content -->
		<div id="freelancer" class="tabcontent">
  			<div class="tabcontent-left">
				<h2>
					<?php the_field('hire_freelancer_title'); ?>
				</h2>
				<p>
					<?php the_field('hire_freelancer_text'); ?>
				</p>
				<a href="<?php the_field('hire_freelancer_button_link'); ?>"  target="_blank" onclick="ga('send', 'event', 'Signup', 'Click', 'Client Home');"><?php the_field('hire_freelancer_button_text'); ?></a>
			</div>
			<div class="tabcontent-right">
				
				<?php the_field('hire_freelancer_video_embed_code'); ?>

 			 </div>

</div>

			

		<div id="package" class="tabcontent">
  			<div class="tabcontent-left">
				<h2>
					<?php the_field('buy_package_title'); ?>
				</h2>
				<p>
					<?php the_field('buy_package_text'); ?>
				</p>
				<a href="<?php the_field('buy_package_button_link'); ?>"  target="_blank" onclick="ga('send', 'event', 'Signup', 'Click', 'Client homepage buy package');"><?php the_field('buy_package_button_text'); ?></a>
			</div>
			<div class="tabcontent-right">
				<?php the_field('buy_package_video_embed_code'); ?>
			</div> 
		</div>

		<div id="advisor" class="tabcontent">
  			<div class="tabcontent-left">
				<h2>
					<?php the_field('consult_advisor_title'); ?>
				</h2>
				<p>
					<?php the_field('consult_advisor_text'); ?>
				</p>
				<a href="<?php the_field('consult_advisor_button_link'); ?>" target="_blank" onclick="ga('send', 'event', 'Signup', 'Click', 'Client Homepage consult advisor');"><?php the_field('consult_advisor_button_text'); ?></a>
			</div>
			<div class="tabcontent-right">
				<?php the_field('consult_advisor_video_embed_code'); ?>
			</div>
		</div>
		</div>
		</section>
		
		
			<section class="steps-list">
		<h2 class="section-title">
			<?php _e('How It Works','HelloMaasWP'); ?>
				</h2>
				<div class="steps-holder">
					
				
				<div class="steps-left">
					<img src="<?php the_field('home_step_1_image'); ?>" class="step-imgs" id="first" style="display: block;" />
					<img src="<?php the_field('home_step_2_image'); ?>" class="step-imgs" id="second" />
					<img src="<?php the_field('home_step_3_image'); ?>" class="step-imgs" id="third" />
					<img src="<?php the_field('home_step_4_image'); ?>" class="step-imgs" id="forth" />
					<img src="<?php the_field('home_step_5_image'); ?>" class="step-imgs" id="fifth" />
					<img src="<?php the_field('home_step_6_image'); ?>" class="step-imgs" id="sixth" />
					<img src="<?php the_field('home_step_7_image'); ?>" class="step-imgs" id="seventh"/>
					<img src="<?php the_field('home_step_8_image'); ?>" class="step-imgs" id="eight" />
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
					
					<div class="acc-bg">
						
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
					
					<div class="acc-bg">
						
					<div class="accordion" id="acc-seventh">
						
						<div class="acc-num step-7">
							
						</div> 
						
						
						<p class="acc-title">
						<?php the_field('home_step_7_title'); ?>
						</p>
					</div>
						<div class="panel">
	  						<p><?php the_field('home_step_7_text'); ?></p>
						</div>
					
					</div>
					
					<div class="acc-bg">
						
					<div class="accordion" id="acc-eight">
						
						<div class="acc-num step-8">
							
						</div> 
						
						
						<p class="acc-title">
						<?php the_field('home_step_8_title'); ?>
						</p>
					</div>
						<div class="panel last-panel">
	  						<p><?php the_field('home_step_8_text'); ?></p>
						</div>
					
					</div>	
					<a class="big-btn" href="<?php the_field('steps_button_link'); ?>" target="_blank"><?php the_field('steps_button_text'); ?></a>	
					</div>
				</div>
					
		</section>
		
		<section class="lead-gen">
			<div class="lead-gen-holder">
		
			<div class="lead-left">
				<h2>
					<?php the_field('lead_gen_title'); ?>
				</h2>
				<p>
					<?php the_field('lead_gen_text'); ?>
				</p>
			
			</div>
			<div class="lead-right">
				<?php echo do_shortcode('[contact-form-7 id="440" title="Home Page Lead Question 1"]'); ?>
				<div class="after-form">
					<div class="question-top">
					<p class="form-top-text">Thanks for connecting.
					</p>
					<h4>We will review your marketing brief and get in touch in 2 business days. If you have any questions for now, please give us a call at (+31) 06-30647057 or send us a message via our chat.</h4>
					</div>
					<div class="blue-submit">
						COMPLETE
					</div>
				</div>
			</div>
			
			</div>
		
		</section>
		
		
		<section class="brands">
			<div class="brands-holder">
				<h4>
					<?php the_field('home_brands_title'); ?> 
				</h4>
				<div class="brand-logos">
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_1'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_2'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_3'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_4'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_5'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_6'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_7'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_8'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_9'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_10'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_11'); ?> " />
					</div>
					<div class="logo-grid-item mob-hide">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_12'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_13'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_14'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_15'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_16'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_17'); ?> " />
					</div>
					<div class="logo-grid-item">
						<span class="helper"></span><img src="<?php the_field('home_brand_logo_18'); ?> " />
					</div>
				</div>
			</div>
		
		
		</section>
		
		<section class="marketers">
			<div class="marketers-holder">
				<h2>
					<?php the_field('marketers_title'); ?>
				</h2>
				<p>
					<?php the_field('marketers_text'); ?>
				</p>
				<div class="trends-holder"> 
					<div class="trend t1"  id="myBtn1">
						<p>
							<?php the_field('home_topic_1'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal1" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close1">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t1.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_1'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_1'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend t2" id="myBtn2">
						<p>
							<?php the_field('home_topic_2'); ?> 
						</p>
					</div>
					

 						 <!-- The Modal -->
						<div id="myModal2" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close2">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t2.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_2'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_2'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend  t3" id="myBtn3">
						<p>
							<?php the_field('home_topic_3'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal3" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close3">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t3.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_3'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_3'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend  t4"  id="myBtn4">
						<p>
							<?php the_field('home_topic_4'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal4" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close4">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t4.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_4'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_4'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend  t5" id="myBtn5">
						<p>
							<?php the_field('home_topic_5'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal5" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close5">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t5.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_5'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_5'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend  t6" id="myBtn6">
						<p>
							<?php the_field('home_topic_6'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal6" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close6">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t6.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_6'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_6'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend  t7" id="myBtn7">
						<p>
							<?php the_field('home_topic_7'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal7" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close7">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t7.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_7'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_7'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend  t8" id="myBtn8">
						<p>
							<?php the_field('home_topic_8'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal8" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close8">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t8.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_8'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_8'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend  t9" id="myBtn9">
						<p>
							<?php the_field('home_topic_9'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal9" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close9">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t9.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_9'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_9'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend  t10" id="myBtn10">
						<p>
							<?php the_field('home_topic_10'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal10" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close10">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t10.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_10'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_10'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
					<div class="trend  t11" id="myBtn11">
						<p>
							<?php the_field('home_topic_11'); ?>
						</p>
					</div>
					<!-- The Modal -->
						<div id="myModal11" class="modal">

 						 <!-- Modal content -->
 						 <div class="modal-content">
   						 <span class="close close11">&times;</span>
							 <div class="popup-left">
								 <img src="/wp-content/uploads/2019/03/t11.png" />
							 </div>
							 <div class="popup-right">
								 
							 
							<h3>
								<?php the_field('home_topic_11'); ?>
							 </h3>
  						  <p><?php the_field('popup_text_11'); ?></p>
							<?php echo do_shortcode('[activecampaign form=10]'); ?> 
								 </div>
 						 </div>

						</div>
					<!-- modal end -->
				</div>
			</div>
		
		
		</section>
		
		<section class="latest-blog">
			<h2>
			<?php the_field('home_blog_title'); ?>
			</h2>
			<p>
				<?php the_field('home_blog_text'); ?>
			</p>
			
			<div class="post-holder">
				<?php get_template_part( 'loop' ); ?>
				<a class="all-posts-button" href="/blog/">VIEW ALL POSTS</a>
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

<script src="/wp-content/themes/HelloMaasWP/js/accoridion.js"></script>

<script src="/wp-content/themes/HelloMaasWP/js/popup.js"></script>
<?php get_footer(); ?>
