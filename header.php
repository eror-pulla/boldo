<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package boldo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1/dist/locomotive-scroll.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" integrity="sha512-okkLcBJE+U19Dpd0QdHA1wn4YY6rW3CwaxeLJT3Jmj9ZcNSbln/VYw8UdqXRIwLX7J8PmtHs0I/FPAhozFvXKg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1/dist/locomotive-scroll.min.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<header class="header">
	<div class="logo-div">
		<img class="invert" src="<?php echo get_template_directory_uri(); ?>/images/Logo.png" alt="">
		<h3>Boldo</h3>
	</div>
	<div class="nav">
		<?php
			wp_nav_menu(array(
			'theme_location'=>'headerMainMenu'
			));
		?>
		<div class="mode">
			<button class="mode-btn">
				Dark Mode
			</button>
		</div>
	</div>
</header>

