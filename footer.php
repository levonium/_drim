<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _drim
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer site-grid-item">
		<div class="footer-wrapper">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', '_drim' ) ); ?>"><?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', '_drim' ), 'WordPress' );
				?></a>
				<span class="sep"> | </span>
				<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', '_drim' ), '_drim', '<a href="https://drim.io">Levon Avetyan</a>' );
				?>
			</div><!-- .site-info -->
		</div><!-- .footer-wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
