<?php
/**
 * WPCstore hooks
 *
 * @package wpcstore
 */

/**
 * General
 *
 * @see  wpcstore_get_sidebar()
 */

add_action( 'wpcstore_sidebar', 'wpcstore_get_sidebar', 10 );

/**
 * Header
 *
 * @see  wpcstore_skip_links()
 * @see  wpcstore_secondary_navigation()
 * @see  wpcstore_site_branding()
 * @see  wpcstore_primary_navigation()
 */
add_action( 'wpcstore_header', 'wpcstore_header_container', 0 );
add_action( 'wpcstore_header', 'wpcstore_header_row', 1 );
add_action( 'wpcstore_header', 'wpcstore_skip_links', 5 );
add_action( 'wpcstore_header', 'wpcstore_handheld_navigation_button', 10 );
add_action( 'wpcstore_header', 'wpcstore_site_branding', 20 );
add_action( 'wpcstore_header', 'wpcstore_header_row_close', 41 );
add_action( 'wpcstore_header', 'wpcstore_header_row', 42 );
add_action( 'wpcstore_header', 'wpcstore_primary_navigation', 50 );
add_action( 'wpcstore_header', 'wpcstore_header_row_close', 69 );
add_action( 'wpcstore_header', 'wpcstore_header_row', 70 );
add_action( 'wpcstore_header', 'wpcstore_handheld_navigation', 75 );
add_action( 'wpcstore_header', 'wpcstore_header_row_close', 79 );
add_action( 'wpcstore_header', 'wpcstore_header_container_close', 99 );

/**
 * Footer
 *
 * @see  wpcstore_footer_widgets()
 * @see  wpcstore_credit()
 */
add_action( 'wpcstore_footer', 'wpcstore_footer_widgets', 10 );
add_action( 'wpcstore_footer', 'wpcstore_credit', 20 );


/**
 * Posts
 *
 * @see  wpcstore_post_header()
 * @see  wpcstore_post_meta()
 * @see  wpcstore_post_content()
 * @see  wpcstore_paging_nav()
 * @see  wpcstore_single_post_header()
 * @see  wpcstore_post_nav()
 * @see  wpcstore_display_comments()
 */
add_action( 'wpcstore_loop_post', 'wpcstore_post_header', 10 );
add_action( 'wpcstore_loop_post', 'wpcstore_post_content', 30 );
add_action( 'wpcstore_loop_after', 'wpcstore_paging_nav', 10 );
add_action( 'wpcstore_single_post', 'wpcstore_post_header', 10 );
add_action( 'wpcstore_single_post', 'wpcstore_post_content', 30 );
add_action( 'wpcstore_single_post_bottom', 'wpcstore_edit_post_link', 5 );
add_action( 'wpcstore_single_post_bottom', 'wpcstore_display_comments', 20 );
add_action( 'wpcstore_post_header_after', 'wpcstore_post_meta', 10 );
add_action( 'wpcstore_post_content_before', 'wpcstore_post_thumbnail', 10 );

/**
 * Pages
 *
 * @see  wpcstore_page_header()
 * @see  wpcstore_page_content()
 * @see  wpcstore_display_comments()
 */
add_action( 'wpcstore_page', 'wpcstore_page_header', 10 );
add_action( 'wpcstore_page', 'wpcstore_page_content', 20 );
add_action( 'wpcstore_page', 'wpcstore_edit_post_link', 30 );
add_action( 'wpcstore_page_after', 'wpcstore_display_comments', 10 );

/**
 * Homepage Page Template
 *
 * @see  wpcstore_homepage_header()
 * @see  wpcstore_page_content()
 */
add_action( 'homepage', 'wpcstore_homepage_content', 20 );
add_action( 'wpcstore_homepage', 'wpcstore_page_content', 20 );
