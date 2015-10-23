<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sample_themes
 */

?><!DOCTYPE HTML>
<html>
<head>
  <title>Henryetta Portfolio</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <!-- stylesheets -->
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="colour.css" rel="stylesheet" type="text/css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
  <div id="main">

    <!-- begin header -->
    <header>
      <div id="logo"><h1>Henryetta's<a href="#">Portfolio</a>Work </h1></div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="#"><a href="portfolioindex.html">home</a></li>
          <li><a href="about.html">about me</a></li>
          <li><a href="#">my portfolio</a>
            <ul>
              <li><a href="portfolio_one.html">portfolio_one</a></li>
              <li><a href="portfolio_two.html">portfolio_two</a></li>
            </ul>
          </li>
          <li><a href="blog.html">blog</a></li>
          <li><a href="contact.html">contact</a></li>
        </ul>
      </nav>


<div class="ht-main">


<div id="page" class="hfeed site"> -->
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sample-themes' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php endif; ?>
			<p class="site-description"><?php bloginfo( 'description' ); ?></p>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sample-themes' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
