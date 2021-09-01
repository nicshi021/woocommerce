<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package wpcstore
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="//gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'wpcstore_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'wpcstore_before_header' ); ?>

    <header id="masthead" class="site-header" role="banner" style="<?php wpcstore_header_styles(); ?>">

		<?php
		do_action( 'wpcstore_header' );
		/**
		 * Functions hooked into wpcstore_header action
		 *
		 * @see wpcstore_header_container                 - 0
		 * @see wpcstore_header_row                       - 1
		 * @see wpcstore_skip_links                       - 5
		 * @see wpcstore_handheld_navigation_button       - 10
		 * @see wpcstore_site_branding                    - 20
		 * @see wpcstore_product_search                   - 40
		 * @see wpcstore_header_row_close                 - 41
		 * @see wpcstore_header_row                       - 42
		 * @see wpcstore_primary_navigation               - 50
		 * @see wpcstore_header_cart                      - 60
		 * @see wpcstore_header_row_close                 - 69
		 * @see wpcstore_header_row                       - 70
		 * @see wpcstore_handheld_navigation              - 75
		 * @see wpcstore_header_row_close                 - 79
		 * @see wpcstore_header_container_close           - 99
		 *
		 */
		?>

    </header><!-- #masthead -->

	<?php
	/**
	 * Functions hooked in to wpcstore_before_content
	 *
	 * @see woocommerce_breadcrumb - 10
	 */
	do_action( 'wpcstore_before_content' );
	?>

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">

<?php
do_action( 'wpcstore_content_top' );

