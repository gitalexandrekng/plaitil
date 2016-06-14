<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
		</section>

		<div class="row footer-container-background">
			<p class="large-4 columns">© Agence Plait-il | 2016     -     <a href="Mentions Légales">Mentions légales</a></p>
			<p class="large-4 text-center columns">Plait-il ? -  5 rue du Bûcher , 13007 Marseille</p>
			<div class="social text-right large-4 columns">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-pinterest"></i></a>
			</div>
		</div>

		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>


<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/javascript/jquery.flexslider.js">
</script>

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
</script>

</body>
</html>
