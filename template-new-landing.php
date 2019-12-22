<?php /* Template Name: New Landings Page Template */?>

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
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Source+Sans+Pro&display=swap" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head();
    get_template_part( 'template-parts/header', 'services' );
    ?>
</head>
<body <?php body_class(); ?>><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WVJF7H"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- wrapper -->





<div class="wrapper">

<main role="main">
    <!-- section -->
    <section class="new-landings-wrap <?=esc_attr(get_field('wrapper_class')); ?>">
        <div class="section-holder">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
    <!-- /section -->
</main>



</div>
<div id="cookie_policy_wrapper">
    <div id="cookie_policy" style="display:none;">
        <script id="CookiePolicy" src="https://consent.cookieinfo.net/65d7e2c8-ca0a-49c4-bf84-e8d044ec6bbc/cd.js" type="text/javascript" async></script>
    </div>
</div>
<!-- /wrapper -->

<?php wp_footer(); ?>
<script type="text/javascript">
    (function(e,t,o,n,p,r,i){e.prismGlobalObjectAlias=n;e.pgo=e.pgo||function(){(e.pgo.q=e.pgo.q||[]).push(arguments)};e.pgo.l=(new Date).getTime();r=t.createElement("script");r.src=o;r.async=true;i=t.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)})(window,document,"https://prism.app-us1.com/prism.js","pgo");

    pgo('setAccount', '252191199');
    pgo('setTrackByDefault', true);

    pgo('process');
</script>
<script src="/wp-content/themes/HelloMaasWP/js/accoridion.js"></script>
</body>
</html>