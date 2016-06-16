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
        <div class="marginfoot"></div>
		<div class="footz">
		    <div class="in">
		        <div class="texte">
                    <div class="socialmedia">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                        </ul>
                    </div>
                    <p>Plait-il? / 5 rue du Bûcher , 13007 Marseille</p>
                    <p>Copyright© Plait-il? / 2016</p>
                </div>
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

<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/owl.carousel/dist/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/components/protonet/jquery.inview/jquery.inview.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/jquery.parallax.js"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/customjs.js"></script>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
