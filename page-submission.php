<?php
/**
 * Template Name: Candidate Submit
 */

get_header(); 

global $user_login;

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post(); ?>

			<div class="entry-content form-control">
				<?php 

				// If user is already logged in.
            	if ( is_user_logged_in() ) :

            	the_content(); 

            	echo do_shortcode('[gravityform id="3" title="false" description="false"]'); 

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
