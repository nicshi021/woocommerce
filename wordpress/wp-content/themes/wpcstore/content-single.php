<?php
/**
 * Template used to display post content on single pages.
 *
 * @package wpcstore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	do_action( 'wpcstore_single_post_top' );

	/**
	 * Functions hooked into wpcstore_single_post add_action
	 *
	 * @see wpcstore_post_header          - 10
	 * @see wpcstore_post_content         - 30
	 */
	do_action( 'wpcstore_single_post' );

	/**
	 * Functions hooked in to wpcstore_single_post_bottom action
	 *
	 * @see wpcstore_post_nav         - 10
	 * @see wpcstore_display_comments - 20
	 */
	do_action( 'wpcstore_single_post_bottom' );
	?>

</article><!-- #post-## -->
