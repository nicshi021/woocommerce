<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package wpcstore
 */

?>

</div><!-- .col-full -->
</div><!-- #content -->

<?php do_action( 'wpcstore_before_footer' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="col-full">

		<?php
		/**
		 * Functions hooked in to wpcstore_footer action
		 *
		 * @see wpcstore_footer_widgets - 10
		 * @see wpcstore_credit         - 20
		 */
		do_action( 'wpcstore_footer' );
		?>

    </div><!-- .col-full -->
</footer><!-- #colophon -->

<?php do_action( 'wpcstore_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
