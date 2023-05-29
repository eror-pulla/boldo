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
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/> -->
<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1/dist/locomotive-scroll.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" integrity="sha512-+z66PuMP/eeemN2MgRhPvI3G15FOBbsp5NcCJBojg6dZBEFL0Zoi0PEGkhjubEcQF7N1EpTX15LZvfuw+Ej95Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
	<?php wp_head(); ?>
	
<script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
</head>

<body <?php body_class(); ?> data-scroll-container> 
<?php wp_body_open(); ?>

<header class="header">
	<a href="<?php echo get_site_url() ?>">
		<div class="logo-div">
			<img class="invert" src="<?php echo get_template_directory_uri(); ?>/images/boldo.png" alt="">
			<!-- <h3>Boldo</h3> -->
		</div>
	</a>
	<div class="nav-wrap">
		<div class="nav" >
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
	</div>
</header>

<div class="header-mobile">
	<div class="wraper-mob">
		<div class="div-img-wrap">
			<a href="<?php echo get_site_url() ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/boldo.png" alt="">
			</a>
		</div>
		<btn class="menu-mobile-btn">
			<img src="<?php echo get_template_directory_uri(); ?>/images/mobile.png" alt="">
		</btn>
	</div>
</div>

<div class="overlay">
	<div class="mobile-nav">
		<?php
			wp_nav_menu(array(
			'theme_location'=>'headerMainMenu'
			));
		?>
	</div>

	<div class="mode">
			<button class="mode-btn">
				Dark Mode
			</button>
	</div>
</div>
