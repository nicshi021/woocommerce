<?php
/**
 * WPCstore engine room
 *
 * @package wpcstore
 */

/**
 * Assign the WPCstore version to a var
 */
$wpcstore_theme   = wp_get_theme( 'wpcstore' );
$wpcstore_version = $wpcstore_theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$wpcstore = (object) array(
	'version'    => $wpcstore_version,
	'main'       => require 'inc/class-wpcstore.php',
	'customizer' => require 'inc/customizer/class-wpcstore-customizer.php',
);

require 'inc/wpcstore-functions.php';
require 'inc/wpcstore-template-hooks.php';
require 'inc/wpcstore-template-functions.php';
require 'inc/wpcstore-notice.php';
require 'inc/wordpress-shims.php';

if ( wpcstore_is_woocommerce_activated() ) {
	$wpcstore->woocommerce = require 'inc/woocommerce/class-wpcstore-woocommerce.php';

	require 'inc/woocommerce/wpcstore-woocommerce-template-hooks.php';
	require 'inc/woocommerce/wpcstore-woocommerce-template-functions.php';
	require 'inc/woocommerce/wpcstore-woocommerce-functions.php';
}
