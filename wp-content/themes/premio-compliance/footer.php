<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package premio-compliance
 */

?>

	</div><!-- #content -->

	<footer class="bg-footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/Logo-premio-2019.png">
				</div>
				<div class="col">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/premio-selo.png">
				</div>
				<div class="col">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/logo-footer.png">
				</div>
			</div>
		</div>		
	</footer> <!-- end .footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
