 <?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package talk2rep
 */

?>
<!doctype html>
<html >
<head>
	<meta property="og:image" content="https://outplex.com/wp-content/uploads/2020/03/outplex-share.png" />
	<!-- 
	language_attributes

	
    <link rel="amphtml" href="http://www.outplex.com/amp/">
	 -->
	
	
<!-- Bing tracking -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"26047441"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script>


<!-- Bing Tracking -->
<!-- Google tag commented for test purpose -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126637002-1"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());

        gtag('config', 'UA-126637002-1');

    </script> -->

    <!--    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZEM1LRIE-8dTm9wh88ASE3STAO8ahTd4"
    async defer></script>
    <!--	<meta charset="--><?php //bloginfo( 'charset' ); ?><!--">-->
    <meta charset="UTF-8">

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="apple-touch-icon" sizes="57x57" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?=get_template_directory_uri()?>/dist/images/favs/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?=get_template_directory_uri()?>/dist/images/favicon.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?=get_template_directory_uri()?>/dist/images/ffavicon.png">

<meta name="msapplication-TileImage" content="<?=get_template_directory_uri()?>/dist/images/favicon.png">

	<?php wp_head(); ?>
	
	<style> #from-home-mobile{ display: none !important; } </style>
	
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'talk2rep' ); ?></a>

	<header id="masthead" class="site-header">

		<nav id="site-navigation" class="main-navigation">
		<div class="container-fluid">
		<div class="col-lg-6 col-md-6 col-xs-6">
            <?php
            if(is_home()) {
                ?>
                <a href="/">
                    <img src="<?=get_template_directory_uri()?>/dist/images/outplexwhite.svg" class="top-logo" />
                    <img src="<?=get_template_directory_uri()?>/dist/images/outplex-icon.png" class="top-logo-mobile" />
                </a>
                <p class="global-top-text">Global Brands’ Choice for Complex Outsourcing and Higher ROI</p>
            <?php } else { ?>
                <a href="/">
                    <img src="<?=get_template_directory_uri()?>/dist/images/outplex.svg" class="top-logo no-mobile" />
                    <img src="<?=get_template_directory_uri()?>/dist/images/outplexwhite.svg" class="top-logo show-on-mobile" />
                    <img src="<?=get_template_directory_uri()?>/dist/images/outplex-icon.png" class="top-logo-mobile" />
                </a>
            <?php }?>
 		</div>
		<div class="col-lg-6 col-md-6 col-xs-6 menu-container">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <?php
            if(is_home()) {
            ?>
            <img src="<?=get_template_directory_uri()?>/dist/images/sd-menu-white.png" class="sd-menu-top" />
            <?php } else { ?>
                <img src="<?=get_template_directory_uri()?>/dist/images/sd-menu-orange.png" class="sd-menu-top"/>
            <?php }?>
        </button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</div>
</div>

		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
