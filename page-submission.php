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

            	<ul class='tabs'>
				    <li><a href='#tab1'>Gold Form</a></li>
				    <li><a href='#tab2'>Bronze &amp; Silver</a></li>
				</ul>
			  
			  <div id='tab1'>
			    <h2>The Gold Form</h2>
			    <?php echo do_shortcode('[gravityform id="3" title="false" description="false"]');  ?>
			  </div>
			  <div id='tab2'>
			    <h2>The Bronze &amp; Silver Form</h2>
			    <?php echo do_shortcode('[gravityform id="4" title="false" description="false"]');  ?>
			  </div>

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
