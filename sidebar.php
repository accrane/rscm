<?php 

// specific post ID you want to pull
$post = get_post(2); 
setup_postdata( $post );

	$create_your_account = get_field('create_your_account');
	$what_happens_next = get_field('what_happens_next');
	$gold_form_requirements = get_field('gold_form_requirements');
	$silver_form_requirements = get_field('silver_form_requirements');
	$bronze_form_requirements = get_field('bronze_form_requirements');
	$more_information = get_field('more_information');

wp_reset_postdata();

global $user_login;
 ?>

<div id="secondary" class="widget-area">
		<section class="login">
			<p><strong>Already have an account?</strong></p>
			
			<?php if ( is_user_logged_in() ) : ?>
				<a class="button login" href="<?php bloginfo('url'); ?>/rscm-awards-application/">Submit a Candidate</a>
			<?php else: ?>
				
				<a class="button login" href="<?php bloginfo('url'); ?>/login">Login Here</a>
				
			<?php endif; ?>

		</section>

		<section class="download">
			<p><strong>Download forms below.</strong></p>

			<a class="button download" href="<?php echo $bronze_form_requirements; ?>">Bronze</a>
			
			<div class="clear"></div>

			<a class="button download" href="<?php echo $silver_form_requirements; ?>">Silver</a>

			<div class="clear"></div>

			<a class="button download" href="<?php echo $what_happens_next; ?>">Gold</a>


		</section>

		<section class="information">
			<?php echo $more_information; ?>
		</section>


	</div><!-- #secondary -->