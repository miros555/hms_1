<?php /* Template Name: Get Audit Landing */ ?>

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
	
	.audit-hero h1, .audit-hero p {
		text-align:center!important;
	}
	
	.audit-hero h1 {
		margin-bottom: 30px;
	}
	.audit-hero p {
		margin: 0 0 55px 0;
	}
	
	.audit-hero .big-btn {
		margin: 0 auto;
	}
	
	.audit-hero .below-txt {
    font-size: 16px;
    margin: 20px 0 0;
    font-weight: 600;
    color: #f87658;
}
	.top-box img {
		width: 164px; 
		height: 164px;
		border-radius: 164px; 
	}
	.audit-2 .bottom-box p {
    font-size: 16px;
    line-height: 30px;
    padding: 30px 10px;
    margin: 0;
    background: #fff;
}
	.above-holder {
    margin: 0 0 60px;
}
	.main-banner {
		background-color: transparent;
	}
	main {
    background: url(/wp-content/uploads/2019/02/xbuy-package-bg.jpg.pagespeed.ic.swwTAU2YGu.jpg) center -180px no-repeat;
    background-color: #fff;
   
}
	.price-new {
		text-align: center;
    font-size: 60px;
    font-weight: bold;
    line-height: 60px;
    color: #3a404f;
    margin: 20px 0;
	}
	
	.price-old {
		text-align: center;
    color: #ff8400;
	}
	
	.lead-gen {
		margin-bottom: 0;
	}
	
	.lead-gen h2 {
		margin-top: 0;
		margin-bottom: 40px;
	}
	
	.lead-gen ul {
		list-style: disc;
	}
	.lead-gen ul li {
		margin-bottom: 20px;
	}
	
	.video-right {
		    background: #fff;
    border-radius: 10px;
    padding: 30px 30px 40px 30px;
		box-shadow: 0 0 38px 0 rgba(220,226,236,.6);
	}
	
	.video-right p {
		text-align: center;
	}
	
	.video-right .big-btn {
    margin: 50px auto 0 auto;
}
	
	
	.team-member-holder {
		padding: 50px 20px 30px;
	}
	
	.team-img {
		text-align: center;
    width: 100%;
	}
	
	.manager-top .top-holder {
		text-align:center;
		margin-left: 0;
		width: 100%;
	}
	
	.team-member-holder {
		padding: 50px 20px;
	}
	
	.manager-right p {
		    padding: 0;
    margin-bottom: 60px;
		font-size: 18px;
		line-height: 30px;
	}
	
	.manager-right a {
		color: #fff;
		font-size: 18px;
		line-height: 58px;
		text-decoration: none;
	}
	
	.manager-right a:hover {
		color: #fff;
	}
	
	.testimonial-content p {
		text-align: center;
		padding-bottom: 40px!important;
		background: url(/wp-content/uploads/2019/07/starsicon.png) center bottom no-repeat;
	}
	
	
	.faq-section h2 {
    margin-bottom: 70px;
}
	.faq-section p {
		text-align: center;
	}
	.faq-section a.big-btn {
		margin: 60px auto 0 auto;
	}
	
	.free-call {
		padding: 70px 0;
    background: #3a404f;
   
    text-align: center;
	}
	
	.free-call p {
		color: #c0c4d6;
    font-size: 14px;
	}
	
	.free-call h2 {
		color: #fff;
	}
	
	.free-call .big-btn {
		margin: 30px auto 0 auto;
	}
	
	.free-call .big-btn:hover {
		background: #fff;
		color: #3a404f;
	}
	.footer-holder {
		display: none;
	}
	footer {
		padding-top: 0!important;
	}	
	.footer-bottom {
		margin: 0 auto!important;
	}
	@media only screen and (max-width: 600px) {
	#_hj-f5b2a1eb-9b07_feedback_minimized {
		display: none!important;
	}
	}
</style>
	<main role="main">
		
		
		<section class="main-banner">
			
			<div class="section-holder audit-hero">
  			
				<h1 class="landing-title">
					<?php the_field('title'); ?>
				</h1>
				<p>
					<?php the_field('text'); ?>
				</p>
				<a class="big-btn" href="<?php the_field('button_link'); ?>" target="_blank"><?php the_field('button_text'); ?></a>
				<p class="below-txt">
					<?php the_field('text_below_button'); ?>
				</p>
				
				
			</div>
			
			
			
		</section>
		
		
		
		
		<section class="package-choice audit-2">
		
				<div class="section-holder">
				<div class="above-holder">
					<h2 class="section-heading">
				<?php the_field('title_2'); ?>
			</h2>
			
					</div>	
			
					<div class="package-item orange">
						<div class="top-box">
							<img src="<?php the_field('image_1'); ?>" />
						</div>
						
						<div class="bottom-box">
							<p>
								<?php the_field('image_text_1'); ?>
							</p>
						</div>
						
						<div class="package-item-below"></div>
					</div>
					
					<div class="package-item blue">
						<div class="top-box">
							<img src="<?php the_field('image_2'); ?>" />
						</div>
						
						<div class="bottom-box">
							<p>
								<?php the_field('image_text_2'); ?>
							</p>
						</div>
						
						<div class="package-item-below"></div>
					</div>
					
					
					<div class="package-item red last-item">
						<div class="top-box">
							<img src="<?php the_field('image_3'); ?>" />
						</div>
						
						<div class="bottom-box">
							<p>
								<?php the_field('image_text_3'); ?>
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
					<?php the_field('title_3'); ?>
				</h2>
				<p>
					<?php the_field('text_3'); ?>
				</p>
				
			
			</div>
			<div class="video-right">
				<p>
					<?php the_field('right_text_1'); ?>
				</p>
				<p class="price-new">
					<?php the_field('right_text_2'); ?>
				</p>
				<p class="price-old">
					<?php the_field('right_text_3'); ?>
				</p>
				<a class="big-btn" href="<?php the_field('button_link2'); ?>" target="_blank"><?php the_field('button_text2'); ?></a>
			</div>
			
			</div>
		
		</section>
		
		
		
		
		<section class="marketing-manager">
			<div class="how-works-holder section-holder">
				<h2 class="section-heading">
					About the creator
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
						
						
							</div>
						<div class="manager-bottom">
							
							<div class="team-member-below">
					
				</div>
						</div>
						
				</div>
				<div class="manager-right">
						<p>
							<?php the_field('right_text'); ?>
					</p>
					<a class="big-btn" href="<?php the_field('button_link3'); ?>" target="_blank"><?php the_field('button_text3'); ?></a>
				</div>
				
				
			</div>
		
		</section>
		
		
		<section class="testimonials">
			<h2>
					What others have to say
				</h2>
			<div class="testimonials-holder">
			<?php if ( function_exists( 'strong_testimonials_view' ) ) {
    strong_testimonials_view( '1' );
} ?>
			</div>
		</section>
		
		
		<section class="faq-section faq-blue">
			<h2 class="section-heading">
				<?php _e('Frequently Asked Questions','HelloMaasWP'); ?>
			</h2>
			<div class="section-holder">
				
				<p>
					<?php the_field('faq_text'); ?>
				</p>
		<a class="big-btn" href="<?php the_field('button_link4'); ?>" target="_blank"><?php the_field('button_text4'); ?></a>

			

		
			</div>
		
		
		</section>
		
		<section class="free-call">
		<h2 class="section-heading">
				<?php the_field('title_call'); ?>
			</h2>
		<p>
			<?php the_field('text_call'); ?>
			</p>
			<a class="big-btn" href="<?php the_field('button_link5'); ?>" target="_blank"><?php the_field('button_text5'); ?></a>
		</section>
		


		
		<!-- /section -->
	</main>



<?php get_footer(); ?>
