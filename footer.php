<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saddydelgado
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
  		<?php get_sidebar( 'footer-one' ); ?>
  		<?php get_sidebar( 'footer-two' ); ?>
		<div class="site-info">
			<p>1430 S. Dixie Highway, Suite 110, Coral Gables FL 33146 <span>•</span>
		  Cell: 305.632.4256 <span>•</span> Office: 305.666.0562 <span>•</span>
		  Fax 305.666.4187</p>
		  <p id="disclaimer">This offering is subject to errors, omissions, prior sale, change of price, or withdrawal without notice. Not intended to solicit currently listed property.</p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'saddydelgado' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'saddydelgado' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'saddydelgado' ), 'saddydelgado', '<a href="http://greasyhacks.com/" rel="designer">greasyhacks.com</a>' ); ?></p>
			<img id="footer_logo" src="http://localhost:8888/dev_sd/wp-content/uploads/2016/06/footer_logo.jpg">
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
