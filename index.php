<?php
/**
 * The main template file.
 *
 */

get_header(); 

$create_your_account = get_field('create_your_account');
$what_happens_next = get_field('what_happens_next');
$gold_form_requirements = get_field('gold_form_requirements');
$silver_form_requirements = get_field('silver_form_requirements');
$bronze_form_requirements = get_field('bronze_form_requirements');
$more_information = get_field('more_information');



?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="entry-content form-control">

			<?php echo $create_your_account; ?>

			<?php echo do_shortcode('[gravityform id="2" title="false" description="false"]'); ?>

			<?php echo $what_happens_next; ?>

		</div>

		

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="secondary" class="widget-area">
		<section class="login">
			<p><strong>Already have an account?</strong></p>
			

			<button class="login">
				<a href="#">Login Here</a>
			</button>

		</section>

		<section class="download">
			<p><strong>Download forms below.</strong></p>

			<button class="download">
				<a href="<?php echo $bronze_form_requirements; ?>">Bronze</a>
			</button>

			<div class="clear"></div>

			<button class="download">
				<a href="<?php echo $silver_form_requirements; ?>">Silver</a>
			</button>

			<div class="clear"></div>

			<button class="download">
				<a href="<?php echo $what_happens_next; ?>">Gold</a>
			</button>


		</section>

		<section class="information">
			<?php echo $more_information; ?>
		</section>


	</div><!-- #secondary -->

<?php
get_footer();
