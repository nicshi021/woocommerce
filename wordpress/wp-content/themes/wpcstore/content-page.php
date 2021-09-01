<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package wpcstore
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked in to wpcstore_page add_action
	 *
	 * @see wpcstore_page_header          - 10
	 * @see wpcstore_page_content         - 20
	 */
	do_action( 'wpcstore_page' );
	?>
</article><!-- #post-## -->
