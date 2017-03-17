<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id #maincontentcontainer div and all content after.
 * There are also four footer widgets displayed. These will be displayed from
 * one to four columns, depending on how many widgets are active.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

<?php	do_action( 'quark_after_woocommerce' ); ?>
</div> <!-- /#maincontentcontainer -->

<div class="section section--callout">
	<div class="section__content">
		<div class="row">
			<div class="col grid_6_of_12">
				<div class="social">
					<h3 class="social__title">Follow Us</h3>

					<ul class="social__links">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div><!-- .col.grid_6_of_12 -->

			<div class="col grid_6_of_12">
				<form class="mailchimp" action="">
					<div class="mailchimp__email">
						<input class="form-input" type="email" placeholder="Sign up for our newsletter">
					</div>

					<div class="mailchimp__submit">
						<input type="submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div class="section">
	<div id="footercontainer">

		<footer class="site-footer" role="contentinfo">
			<div class="row">
				<div class="col grid_12_of_12">
					<img class="footer-logo" src="<?php header_image(); ?>" alt="" />
				</div>
			</div>

			<div class="row">
				<?php
			// Count how many footer sidebars are active so we can work out how many containers we need
				$footerSidebars = 0;
				for ( $x=1; $x<=4; $x++ ) :
					if ( is_active_sidebar( 'sidebar-footer' . $x ) ) :
						$footerSidebars++;
					endif;
					endfor;
					?>


					<?php 
				// If there's one or more one active sidebars, create a row and add them
					if ( $footerSidebars > 0 ) :  
						?>

					<?php 
					// Custom Code for Beyond Velocity Page Design
					if ($footerSidebars == 3) : 
						?>
					<div class="col grid_3_of_12">
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-footer1' ); ?>
						</div>
					</div>

					<div class="col grid_3_of_12">
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-footer2' ); ?>
						</div>
					</div>

					<div class="col grid_6_of_12">
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-footer3' ); ?>
						</div>
					</div>

				<?php else: ?>
					<?php

				// Work out the container class name based on the number of active footer sidebars
					$containerClass = "grid_" . 12 / $footerSidebars . "_of_12";

				// Display the active footer sidebars
					for ( $x=1; $x<=4; $x++ ) :
						if ( is_active_sidebar( 'sidebar-footer'. $x ) ) : ?>

					<div class="col <?php echo $containerClass?>">
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-footer'. $x ); ?>
						</div>
					</div> <!-- /.col.<?php echo $containerClass?> -->

				<?php endif; endfor; endif; endif; ?>
			</div><!-- .row --> 
		</div>

	</footer> <!-- /.site-footer -->
</div> <!-- /.footercontainer -->

</div> <!-- /.#wrapper.hfeed.site -->

<?php wp_footer(); ?>
</body>

</html>
