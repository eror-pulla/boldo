<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package boldo
 */

?>
	<div class="footer-wrap m1" data-scroll-section>
		<footer class="footer">
			<div class="footer-logo">
				<div class="logo-div" data-scroll>
					<img class="invert" src="<?php echo get_template_directory_uri(); ?>/images/Logo.png" alt="">
					<h3 >Boldo</h3>
				</div>
				<p data-scroll>Social media validation business model canvas graphical user interface launch party creative facebook iPad twitter.</p>
				<p data-scroll class="rights">All rights reserved.</p>
			</div>
			<div class="col-wrap">
				<div class="col-landing" data-scroll>
					<h3>Landings</h3>
					<?php
					wp_nav_menu(array(
					'theme_location'=>'landings'
					));
					?>
				</div>
				<div class="col-company" data-scroll>
					<h3>Company</h3>
					<?php
					wp_nav_menu(array(
					'theme_location'=>'company'
					));
					?>
				</div>
				<div class="col-resources" data-scroll>
					<h3>Resources</h3>
					<?php
					wp_nav_menu(array(
					'theme_location'=>'resources'
					));
					?>
				</div>
			</div>
		</footer>
	</div>

</div>

<?php wp_footer(); ?>

</body>
</html>
