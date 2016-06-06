<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<div class="top-account">
	<div class="account-login">
		<a href="<?php bloginfo('url'); ?>/login">login to your account</a>
	</div>
</div>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			
			<?php if(is_home()) { ?>
	            <h1 class="logo">
	            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </h1>
	        <?php } else { ?>
	            <div class="logo">
	            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
	            </div>
	        <?php } ?>

	        <?php global $user_login;

	        if ( is_user_logged_in() ) : ?>
	        <div class="loged-in-user">
	        	<h3>My account</h3>
	        	<?php 
	        	$user_ID = get_current_user_id();
	        	$user_info = get_userdata($user_ID);
	        	?>
	        	<div class="logedin-heading">
	        		APPLICANT
	        	</div>
	        	<div class="logedin-copy">
	        		<?php echo 'Username: ' . $user_info->user_login . "\n";?>
	        	</div>
	        </div>
		    <?php else: ?>
		        <div class="tagline"><?php bloginfo('description'); ?></div>
		    <?php endif; ?>

			<!--<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'acstarter' ); ?></button>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav> #site-navigation -->
	</div><!-- wrapper -->

	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
