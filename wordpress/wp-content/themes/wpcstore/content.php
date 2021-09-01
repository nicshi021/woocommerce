<?php
/**
 * Template used to display post content.
 *
 * @package wpcstore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	/**
	 * Functions hooked in to wpcstore_loop_post action.
	 *
	 * @see wpcstore_post_header          - 10
	 * @see wpcstore_post_content         - 30
	 * @see wpcstore_post_taxonomy        - 40
	 */
	do_action( 'wpcstore_loop_post' );
	?>

</article><!-- #post-## -->
