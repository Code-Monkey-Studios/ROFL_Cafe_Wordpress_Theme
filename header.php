<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ROFL Cafe
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
<!-- Always force latest IE rendering engine (even in intranet) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<meta name="author" content="Scott Boyle" />
	
<!-- Goggle site verification provided by Google Webmasters: http://google.com/webmasters -->
	<meta name="google-site-verification" content="google13bd1c94fda82686.html" />
<!-- Who owns the content of this site? -->
	<meta name="Copyright" content="ROFL Cafe" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Icons care of Iconifyer: http://iconifier.net -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory');?>/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory');?>/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory');?>/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory');?>/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory');?>/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory');?>/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory');?>/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory');?>/apple-touch-icon-152x152.png" />
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <title><?php wp_title('|', true, 'right');?></title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site wrapper clearfix">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'rofl-cafe' ); ?></a>
	
    <header id="masthead" class="site-header" role="banner">
		
        <div class="site-branding">
            <h1>ROFL Cafe</h1>
		    <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <span class="logo">ROFL </span>
                <img class="logo" src="<?php bloginfo('template_directory');?>/images/shield.png" alt="ROFL Cafe shield logo" />
                <span class="logo"> Cafe</span>
            </a>
            <div id="login-rss">
                 
                <ul>
                    <!-- Moving the meta links (doc4,2015) -->
                    <?php wp_register(); ?>
                    <li><span> | </span><li>
                    <li><?php wp_loginout(); ?><li>
                    <li><span> | </span></li>
                    <li><abbr title="Really Simple Syndication">RSS</abbr>: </li> <!-- RSS Icons (Feed Icons, 2015) -->
                    <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php echo esc_attr(__('Syndicate this site using RSS 2.0')); ?>"><img src="<?php bloginfo('template_directory');?>/images/rss.png" /></a></li>
                    <li><span> | </span></li>
                    <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php echo esc_attr(__('The latest comments to all posts in RSS')); ?>"><img src="<?php bloginfo('template_directory');?>/images/rss.png" /></a></li>
                </ul>
                <!-- search bar (Wordpress.org – Move search bar to header, 2015) -->
                <?php get_search_form(); ?>               
            </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
			    <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Primary Menu', 'rofl-cafe' ); ?></button>
			    <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		    </nav><!-- #site-navigation -->
        </div>

		
	</header><!-- #masthead -->

	<div id="content" class="site-content">
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
