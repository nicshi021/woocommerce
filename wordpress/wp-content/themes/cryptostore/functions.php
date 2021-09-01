<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( !function_exists( 'cryptostore_chld_thm_cfg_parent_css' ) ):
    function cryptostore_chld_thm_cfg_parent_css() {
        wp_enqueue_style('cryptostore-parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'bootstrap-min-css','cryptocurrency-exchange-animate-css','font-awesome-min-css','crypto-flexslider-css' ) );
		wp_enqueue_style('cryptostore-child-style',get_stylesheet_directory_uri() . '/style.css',array('parent-style'));
		wp_enqueue_style( 'crypto-custom-color', get_template_directory_uri() . '/css/custom-color.css');
		wp_enqueue_style('cryptostore-default-style',get_stylesheet_directory_uri() . '/css/cryptostore-color.css' );
	}
endif;
add_action( 'wp_enqueue_scripts', 'cryptostore_chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function cryptostore_customize_register() {
	global $wp_customize;
	//$wp_customize->remove_section( 'upgrade_crypto_premium' );  //Modify this line as needed
	//$wp_customize->remove_section( 'cryptocurrency_slider_option' );  //Modify this line as needed
	//$wp_customize->remove_section( 'cryptocurrency_service_option' );  //Modify this line as needed
	//$wp_customize->remove_section( 'cryptocurrency_exchange_blog_option' );  //Modify this line as needed
	//$wp_customize->remove_control( 'cryptocurrency_exchange_testimonial_settings' ); //Modify this line as needed
}
add_action( 'customize_register', 'cryptostore_customize_register', 11 );
