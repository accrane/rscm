<?php
/**
 * The main template file.
 *
 */

get_header(); 




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



<?php
get_sidebar();
get_footer();
