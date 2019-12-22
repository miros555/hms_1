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
		<!--<script id="CookieConsent" src="https://consent.cookieinfo.net/uc.js" data-cbid="65d7e2c8-ca0a-49c4-bf84-e8d044ec6bbc" type="text/javascript" async></script>-->
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
})(window,document,'script','dataLayer','GTM-TJ6K92W');</script>
<!-- End Google Tag Manager -->
		
		<meta name="google-site-verification" content="WobcJbhYXvNq_98HVQ4qwb92ckyPVEruPF03XGG--3g" />
	</head>
	<body <?php body_class(); ?>><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJ6K92W"
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
						<a href="<?php echo home_url(); ?>">
							
							<img src="/wp-content/uploads/2019/02/logo.png" alt="HelloMaas Logo" class="logo-img">
						</a>
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


