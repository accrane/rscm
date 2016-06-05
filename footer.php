<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

$street_address = get_field('street_address', 'option');
$city = get_field('city', 'option');
$state = get_field('state', 'option');
$zip = get_field('zip', 'option');
$phone = get_field('phone', 'option');
$email = get_field('email', 'option');
$spambot = antispambot($email);


?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			<div class="site-info">
				<a href="http://rscmamerica.org/">Return to rscmamerica.org</a>
			</div><!-- .site-info -->

			<div class="site-info">
				<?php 

				echo $street_address.' | '.$city.', '.$state.' '.$zip.' | '.$phone.' | <a href="mailto:'.$spambot.'">'.$spambot.'</a>';

				 ?>
			</div>
	</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
