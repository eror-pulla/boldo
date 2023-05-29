<?php
/**
 * boldo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package boldo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function boldo_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on boldo, use a find and replace
		* to change 'boldo' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'boldo', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'boldo' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'boldo_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'boldo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function boldo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'boldo_content_width', 640 );
}
add_action( 'after_setup_theme', 'boldo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function boldo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'boldo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'boldo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'boldo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function boldo_scripts() {
	// wp_enqueue_style( 'my-reze-style', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_style_add_data( 'my-reze-style', 'rtl', 'replace' );
	// wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js', null, null, true );
    // wp_enqueue_script('jQuery');
	// wp_enqueue_script( 'my-reze-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	// wp_enqueue_script( 'abc-main', get_template_directory_uri() . '/js/main.js', array('jquery'), _S_VERSION, true );
	// wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js');
	// wp_enqueue_script('font-aswesome', 'https://kit.fontawesome.com/09fca8f15d.js');
	// wp_enqueue_script('locomotive-scroll', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1/dist/locomotive-scroll.min.js');
	// wp_enqueue_style('swiper-css','https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css');
	// wp_enqueue_style('locomotive-css','https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1/dist/locomotive-scroll.min.css');
	// wp_enqueue_style('bootstrap-css','https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css');
	// wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap');



	
	wp_enqueue_style('locomotive-css','https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1/dist/locomotive-scroll.min.css');
	wp_register_style('style', get_template_directory_uri() . '/dist/css/app.css', [] ,1, 'all');
	wp_enqueue_style('style');

	wp_register_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js', null, null, true );
    wp_enqueue_script('jQuery');

	wp_enqueue_script('locomotive-scroll', 'https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1/dist/locomotive-scroll.min.js');
	
	// wp_enqueue_script('jquery');

	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', null, null, true);
	wp_enqueue_style('swiper-css','https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');
	// wp_enqueue_script('owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', null, null, true);
	// wp_enqueue_script('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css	', null, null, true);
	wp_register_script('app' , get_template_directory_uri() . '/dist/js/app.js' ,['jquery'] , 1 , true);	
	wp_enqueue_script('app');



	wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&family=Open+Sans:wght@300;400;500;600;700;800&display=swap');
	// wp_enqueue_style( 'boldo-style', get_stylesheet_uri(), array(),1 );
	// wp_style_add_data( 'boldo-style', 'rtl', 'replace' );




	wp_enqueue_script( 'boldo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), 1 , true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'boldo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function boldo_features(){
	register_nav_menu('headerMainMenu', 'Main Header Menu');
}
add_action('after_setup_theme','boldo_features' );   

function boldo_features1(){
	register_nav_menu('landings', 'Landing Menu');
}
add_action('after_setup_theme','boldo_features1' );    

function boldo_features2(){
	register_nav_menu('company', 'Landing Menu1');
}
add_action('after_setup_theme','boldo_features2' );    

function boldo_features3(){
	register_nav_menu('resources', 'Landing Menu2');
}
add_action('after_setup_theme','boldo_features3' );    

function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


function load_more_blogs(){
    $args = array(
        'post_type' => 'blogs',
        'posts_per_page' => 10000,
		'offset' => 3
    );
    $query = new WP_Query($args);
	$ajaxposts = [];
	if ($query->have_posts()) :
		$i=0;
        while ($query->have_posts()) : $query->the_post();
			$projects_preview=get_field('single_blog_view');
            $categories = get_the_category();
			$date=get_the_date();
			$project_slugB = get_post_field( 'post_name',$query->ID );
			$ajaxposts[$i] = [ 'projects_preview' => $projects_preview, 'categories'=> $categories, 'date'=> $date, 'project_slug' => $project_slugB];
			$i++;
		endwhile;
	endif;

    echo json_encode($ajaxposts);
	exit;
}
add_action('wp_ajax_load_more_blogs', 'load_more_blogs');
add_action('wp_ajax_nopriv_load_more_blogs', 'load_more_blogs');


function load_more_services(){
    $args = array(
        'post_type' => 'services',
        'posts_per_page' => 10000,
		'offset' => 3
    );
    $query = new WP_Query($args);
	$ajaxposts = [];
	if ($query->have_posts()) :
		$i=0;
        while ($query->have_posts()) : $query->the_post();
			$projects_preview=get_field('home_view');
            $categories = get_the_category();
			$date=get_the_date();
			$project_slugS = get_post_field( 'post_name',$query->ID );
			$ajaxposts[$i] = [ 'projects_preview' => $projects_preview, 'categories'=> $categories, 'date'=> $date, 'project_slug' => $project_slugS];
			$i++;
		endwhile;
	endif;

    echo json_encode($ajaxposts);
	exit;
}

add_action('wp_ajax_load_more_services', 'load_more_services');
add_action('wp_ajax_nopriv_load_more_services', 'load_more_services');





function load_home_blogs(){
    $args = array(
        'post_type' => 'blogs',
        'posts_per_page' => 3,
		'offset' => 3
    );
    $query = new WP_Query($args);
	$ajaxposts = [];
	if ($query->have_posts()) :
		$i=0;
        while ($query->have_posts()) : $query->the_post();
			$projects_preview=get_field('home_view');
            $categories = get_the_category();
			$date=get_the_date();
			$project_slugS = get_post_field( 'post_name',$query->ID );
			$ajaxposts[$i] = [ 'projects_preview' => $projects_preview, 'categories'=> $categories, 'date'=> $date, 'project_slug' => $project_slugS];
			$i++;
		endwhile;
	endif;

    echo json_encode($ajaxposts);
	exit;
}

add_action('wp_ajax_load_home_blogs', 'load_home_blogs');
add_action('wp_ajax_nopriv_load_home_blogs', 'load_home_blogs');