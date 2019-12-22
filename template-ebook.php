<?php /* Template Name: Ebook Landing */ ?>

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
	
	.ebook-left {
		max-width: 30%;
		text-align: left;
		margin-right: 5%;
		display: inline-block;
	}
	.ebook-right {
		max-width: 65%;
		display: inline-block;
		text-align: left;
	}
	.switchero {
		display: none;
	}
	
	.ebook-right h1 {
		text-align: left;
	}
	
	.ebook-right form#_form_5D3AC46AE1649_ {
		width: 100%;
    background: none!important;
    border: none!important;
    margin-top: 0;
    font-family: 'Poppins'!important;
	}
	
	._x86873289 {
		    width: 48%;
	}
	._x86873289 input {
		width: 100%!important;
	}
	
	._x53158501 {
		width: 48%;
		margin-left: 4%!important;
	}
	._x53158501 input, ._x58032742 input {
		width: 100%!important;
	}
	
	._x58032742, ._x20781098, .ebook-right ._button-wrapper {
		width: 100%!important;
		margin-left: 0!important;
	}
	
	.ebook-right form {
		margin-top: 0!important;
		padding-top: 0!important;
	}
	
	.ebook-text p {
		margin-bottom: 22px;
	}
	
	.ebook-text ul {
    list-style: disc;
	}
	
	main {
    background: url(/wp-content/uploads/2019/02/buy-package-bg.jpg) center 0 no-repeat;
    background-color: #fff;
   
	}
	
	.ebook-bg .section-holder {
		max-width: 900px;
	}
	
	.ebook-bg {
		background-color: transparent!important;
	}
	.ebook-text {
		padding-bottom: 80px;
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
	@media only screen and (max-width: 1024px) {
	.ebook-text ul {
    list-style: disc;
    max-width: 400px;
    text-align: left;
    margin: 0 auto;
}
	}
@media only screen and (max-width: 800px) {	
	.ebook-left {
    text-align: center;
    max-width: 100%;
    width: 100%;
		margin-right: 0!important;
    margin-bottom: 40px;
}
	
	.ebook-right {
		max-width: 100%;
		margin: 0!important;
	}
	
	.ebook-right form ._form-title, .ebook-right form ._html-code {
		text-align: center!important;
	}
	
	._x20781098, .ebook-right ._button-wrapper {
		text-align: center;
	}
	.g-recaptcha div:first-child {
		margin: 0 auto;
	}
	}
	
	@media only screen and (max-width: 600px) {
	#_hj-f5b2a1eb-9b07_feedback_minimized {
		display: none!important;
	}
	}
	
	
	@media only screen and (max-width: 380px) {
	.ebook-right ._button-wrapper button {
		width: 100%!important;
    	min-width: 100%!important;
	}
		.g-recaptcha {
    transform: scale(.7);
    -webkit-transform: scale(.7);
    transform-origin: 0 0;
    -webkit-transform-origin: 0 0;
}
	}
</style>
	<main role="main">
		
		
		<section class="main-banner ebook-bg">
			
			<div class="section-holder">
  			<div class="ebook-left">
				<img src="<?php the_field('image'); ?>" />
				</div>
				<div class="ebook-right">
					<div class="_form_18"></div><script src="https://hellomaas.activehosted.com/f/embed.php?id=18" type="text/javascript" charset="utf-8"></script>
				</div>
		</div>
			
			
			
		</section>
		
		
		
		
		<section class="ebook-text">
		
				<div class="section-holder">
				
					<div class="tabcontent-left">
						<?php the_field('left_text'); ?>
					</div>
					<div class="tabcontent-right">
						<?php the_field('right_text'); ?>
					</div>
					
					
				
				</div>
					
		</section>
		
		
			
		
		
		
		
		
		
		
		
		


		
		<!-- /section -->
	</main>



<?php get_footer(); ?>
