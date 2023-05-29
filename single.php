<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package boldo
 */

get_header();
?>

<?php
// var_dump(get_post_type());

if ( 'services' == get_post_type() ) {

    get_template_part( 'single', 'service' );
} else {
    get_template_part( 'single', 'blog' );
}
?>

<?php
get_sidebar();
get_footer();
