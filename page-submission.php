<?php
/**
 * Template Name: Candidate Submit
 */

get_header(); 

global $user_login;

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

			<?php
			while ( have_posts() ) : the_post(); 

			$content = get_field('content');

			?>
			<div class="entry-content"><?php echo $content; ?></div>
			
			<div class="clear"></div>

			<div class="entry-content form-control">
				<?php 

				// If user is already logged in.
            	if ( is_user_logged_in() ) : ?>

            	<a class="button login" href="<?php bloginfo('url'); ?>/gold-form">Submit a Gold Form</a>
            	<a class="button login" href="<?php bloginfo('url'); ?>/bronze-silver-form">Submit a Silver &amp; Bronze Form</a>

            	<?php

            	

            	else: ?>

            	<div class="warning">
            		<h2>You must login to access this page.</h2>
            		<button class="login">
						<a href="<?php bloginfo('url'); ?>/login">Login Here</a>
					</button>
            	</div>

            <?php endif; ?>
            	

			</div>

			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
