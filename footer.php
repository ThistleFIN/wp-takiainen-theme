<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>

    <div id="icons">
        <a href="https://www.linkedin.com/in/roosa-virta/" target="_blank">
            <img id="linkedin" src="<?php echo get_bloginfo('template_url') ?>/images/linkedin.png" alt="ThistleFIN - LinkedIn">
        </a>
        <a href="https://github.com/ThistleFIN" target="_blank">
            <img id="github_img" src="<?php echo get_bloginfo('template_url') ?>/images/Thistle.png" alt="ThistleFIN - Github">
        </a>
    </div>

	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
            </div><!-- close .site-info -->
		</div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>