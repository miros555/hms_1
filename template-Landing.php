<?php /* Template Name: Package Landing */ ?>

<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="/wp-content/uploads/2019/02/favicon.ico" rel="shortcut icon">
        <link href="/wp-content/uploads/2019/02/apple-icon-precomposed.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel='stylesheet' id='wpmtst-font-awesome-css'  href='/wp-content/plugins/strong-testimonials/public/fonts/font-awesome-4.6.3/css/font-awesome.min.css?ver=4.6.3' media='all' /><link rel='stylesheet' id='wpmtst-font-awesome-css'  href='/wp-content/plugins/strong-testimonials/public/fonts/font-awesome-4.6.3/css/font-awesome.min.css?ver=4.6.3' media='all' />
		<link href="https://fonts.googleapis.com/css?family=Poppins|Source+Sans+Pro" rel="stylesheet">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

		<script id="CookieConsent" src="https://consent.cookieinfo.net/uc.js" data-cbid="65d7e2c8-ca0a-49c4-bf84-e8d044ec6bbc" type="text/javascript" async></script>
		<script>
			document.addEventListener( 'wpcf7mailsent', function( event ) {
				if ( '440' == event.detail.contactFormId ) {
   					 ga('send', 'event', 'Form', 'Submit', 'Client Goals');
				}
				if ( '111' == event.detail.contactFormId ) {
   					 ga('send', 'event', 'Form', 'Submit', 'Contact us');
				}
			}, false );
		</script>
		
		
		<!-- schema -->
		<script type="application/ld+json">
		{
 			"@context": "https://schema.org",
 			"@type": "Organization",
 			"url": "https://www.hellomaas.com",
 			"logo": "https://www.hellomaas.com/wp-content/uploads/2019/02/apple-icon-precomposed.png"
	
		}
		{
 			"@context": "https://schema.org",
			 "@type": "Organization",
 			"name": "HelloMaaS",
 			"url": "https://www.hellomaas.com",
 			"sameAs": [
   			"http://www.facebook.com/hellomaas",
   			"http://instagram.com/hellomaas",
   			"http://www.linkedin.com/company/hellomaas/"

 				]
		}
		</script>
		
		
		<!-- Hotjar Tracking Code for www.hellomaas.com -->
<script>
   (function(h,o,t,j,a,r){
       h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
       h._hjSettings={hjid:1274101,hjsv:6};
       a=o.getElementsByTagName('head')[0];
       r=o.createElement('script');r.async=1;
       r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
       a.appendChild(r);
   })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
		
		
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WVJF7H');</script>
<!-- End Google Tag Manager -->
	</head>
	<body <?php body_class(); ?>><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WVJF7H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
		
		<!-- header -->
			<header class="header clear" role="banner">
					<div class="header-top">
						<div class="header-top-holder">
						
						<a class="signup" href="https://app.hellomaas.com/sign-up" target="_blank" onclick="ga('send', 'event', 'Signup', 'Submit', 'Signup header');"><?php _e('Sign Up','HelloMaasWP'); ?></a>
						<a class="login" href="https://app.hellomaas.com/sign-in" target="_blank">Login</a>	
						<a href="<?php _e('/join-as-advisor/','HelloMaasWP'); ?>"><?php _e('Join as an Advisor','HelloMaasWP'); ?></a>
						<a href="<?php _e('/join-as-a-freelancer/','HelloMaasWP'); ?>"><?php _e('Join as a Freelancer','HelloMaasWP'); ?></a>	
						</div>
				</div>
				<div class="header-bottom">
					<!-- logo -->
					<div class="logo">
						
							
							<img src="/wp-content/uploads/2019/02/logo.png" alt="HelloMaas Logo" class="logo-img">
						
					</div>
					<!-- /logo -->

					<!-- nav -->
					<div class="main-nav">
						
					<nav id="site-navigation" class="main-navigation nav" role="navigation">
						
						<p>
							<?php _e('For Clients','HelloMaasWP'); ?> <span class="fas fa-angle-right"></span>
						</p>
						<?php html5blank_nav(); ?>
					</nav>
						
					</div>
					<!-- /nav -->
				
					
				</div>
					

			</header>
			<!-- /header -->

		<!-- wrapper -->
		<div class="wrapper">
<div class="switchero">
	<?php do_action('wpml_add_language_selector'); ?>	
			</div>



<style>
	.main-nav {
		display: none;
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
	.ft-col-2 {
		display: none;
	}
	.ft-col-1 {
		    width: 100%;
    padding: 0;
    max-width: 100%;
    text-align: center;
	}
	.footer-bottom-nav {
		display: none!important;
	}
	.copyright {
		width: 100%;
		text-align: center;
	}
	@media only screen and (max-width: 600px) {
	#_hj-f5b2a1eb-9b07_feedback_minimized {
		display: none!important;
	}
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
				<a style="box-sizing: initial;" class="big-btn" href="<?php the_field('button_link'); ?>" target="_blank"><?php the_field('button_text'); ?></a>
			</div>
			<div class="tabcontent-right">  
				
				<img src="<?php the_field('landing_image'); ?>" />

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
								<sup>€</sup><?php the_field('monthly_price'); ?><span class="month">/<?php the_field('price_per'); ?></span>
							</p>
						</div>
						<div class="mid-box">
							<p>
								<?php the_field('ideal_for'); ?>
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
								<sup>€</sup><?php the_field('monthly_price2'); ?><span class="month">/<?php the_field('price_per2'); ?></span>
							</p>
						</div>
						<div class="mid-box">
							<p>
								<?php the_field('ideal_for2'); ?>
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
								<sup>€</sup><?php the_field('monthly_price3'); ?><span class="month">/<?php the_field('price_per3'); ?></span>
							</p>
						</div>
						<div class="mid-box">
							<p>
								<?php the_field('ideal_for3'); ?>
							</p>
						</div>
						<div class="bottom-box">
							<p>
								<?php the_field('description3'); ?>
							</p>
						</div>
						
						<div class="package-item-below"></div>
					</div>
					<div class="below-packages-text">
						<p>
							<?php the_field('text_below'); ?>
						</p>
					</div>
				</div>
					
		</section>
		
		
			
		
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
		
		
		
		
		
		
		


		
		<!-- /section -->
	</main>



<?php get_footer(); ?>
