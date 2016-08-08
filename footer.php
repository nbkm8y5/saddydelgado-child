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
    <?php get_sidebar('footer-one'); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'footer') ); ?>

    <div class="site-info">
        <p class="hidden-xs"><a href="https://goo.gl/maps/kqtG5PoYpGo" target="_blank">1430 S. Dixie Highway, Suite 110,
                Coral Gables FL 33146</a> <span>•</span>
            Cell: <a href="tel:1-305-632-4256">305.632.4256</a> <span>•</span> Office: <a href="tel:1-305-666-0562">305.666.0562</a>
            <span>•</span>
            Fax 305.666.4187</p>
        <p class="hidden-lg"><a href="https://goo.gl/maps/kqtG5PoYpGo" target="_blank">1430 S. Dixie Highway, Suite
                110</a></p>
        <p class="hidden-lg hidden-md">Coral Gables FL 33146</p>
        <p class="hidden-lg hidden-md">Cell: <a href="tel:1-305-632-4256">305.632.4256</a></p>
        <p class="hidden-lg hidden-md">Office: <a href="tel:1-305-666-0562">305.666.0562</a></p>
        <p class="hidden-lg hidden-md">Fax 305.666.4187</p>
        <p id="disclaimer">This offering is subject to errors, omissions, prior sale, change of price, or withdrawal
            without notice. Not intended to solicit currently listed property.</p>
        <?php get_sidebar('footer-two'); ?>
        <img id="footer_logo" src="http://localhost:8888/dev_sd/wp-content/uploads/2016/06/footer_logo.jpg">
        <p><a target="_blank"
              href="<?php echo esc_url(__('https://wordpress.org/', 'saddydelgado')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'saddydelgado'), 'WordPress'); ?></a>
            <span class="sep"> | </span>
            <?php printf(esc_html__('Custom Theme: %1$s by %2$s', 'saddydelgado'), 'saddydelgado', '<a href="http://greasyhacks.com/" rel="designer" target="_blank">greasyhacks.com</a>'); ?>
        </p>

    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
