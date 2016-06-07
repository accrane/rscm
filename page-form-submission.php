<?php
/**
 * Template Name: Form Submission
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

            	
			    <?php 
			    if(is_page('gold-form')) { ?>
			    <div class="entry-content">
			    	<?php the_content(); ?>
			    </div>
			    	<?php echo do_shortcode('[gravityform id="3" title="false" description="false"]'); ?>
			   <?php } else { ?>
			   <div class="entry-content">
			   		<?php the_content(); ?>
			   </div>
			    	<?php echo do_shortcode('[gravityform id="4" title="false" description="false"]'); ?>
			    <?php } ?>
			    
			  

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
