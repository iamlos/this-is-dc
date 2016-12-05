<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dmped
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
<link rel="profile" href="http://gmpg.org/xfn/11">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() .'/js/jquery.scrollify.min.js'?>"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dmped' ); ?></a>
	<div class="mobile-nav">
		<div class="mobile-container">
		    <div class='site-logo'>
		      	<div class="site-logo-container"> 
			      	<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
			        	<img src='<?php echo get_template_directory_uri() ?>/img/mobileLogo.png' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
			        </a>
			        <div class="nav-container">
			        	<img src="<?php echo get_template_directory_uri() ?>/img/mobileNav.png">
			        </div>
		        </div> 
		    </div>
		    <div class="navitems-container">
			    <div class="contain">
				    <div class="navitems">
				    	<?php wp_nav_menu(); ?>
				    </div>
				    <div class="container">
						<p>An Initiative of</p>
						<img src="<?php echo get_template_directory_uri()?>/img/logo.png">
					</div>
					<div class="social">
						<ul>
							<li><img src="<?php echo get_template_directory_uri()?>/img/fb.png"></li>
							<li><img src="<?php echo get_template_directory_uri()?>/img/ig.png"></li>
							<li><img src="<?php echo get_template_directory_uri()?>/img/tw.png"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="masthead" class="site-header" role="banner">
		<?php if(get_field('hero_image')): ?>
			<div class="hero-image" style="background-image: url('<?php echo get_field("hero_image");?>');">
				<?php $title = get_the_title(); 
					$title = str_replace('DC', '<span class="dc-text">dc</span>', $title);
				?>
				<h1><?php echo $title; ?></h1>
			</div>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'dmped_logo' ) ) : ?>
		    <div class='site-logo hidemobile'>
		        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'dmped_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
		    </div>
		<?php else : ?>
		    <hgroup>
		        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
		        <h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
		    </hgroup>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
