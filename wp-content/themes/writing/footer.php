						</div> <!-- .row -->
					</div> <!-- .container -->
				</section> <!-- #content .site_content -->
				<?php // set global page id for cross options
				global $asalah_blogpage_id; ?>
				<footer class="site-footer">

					<!-- screen-reader-text for site footer section -->
					<h3 class="screen-reader-text"><?php _e('Site Footer', 'asalah') ?></h3>

					<div class="footer_wrapper">
						<div class="container">

							<?php // set second footer class as no_first_footer in case there're no footer widgets
							$first_footer = "no_first_footer";

							// if there're footer widgets
							if (  is_active_sidebar( 'footer-1'  )
										|| is_active_sidebar( 'footer-2' )
										|| is_active_sidebar( 'footer-3'  )
							):

								// set second footer class as has_first_footer
								$first_footer = "has_first_footer";
								?>
								<div class="first_footer widgets_footer row">
									<?php get_sidebar('footer'); ?>
								</div><!-- end first_footer -->
							<?php
							endif; // end condition footer widgets
							?>

							<?php // Check footer credits
							if (asalah_option('asalah_footer_credits')):
							?>
								<div class="second_footer <?php echo esc_attr($first_footer); ?> row">
									<div class="col-md-12">
										<div class="second_footer_content_wrapper footer_credits">
											<?php // execute footer credits html code
											echo do_shortcode(htmlspecialchars_decode((asalah_option('asalah_footer_credits')))); ?>
										</div><!-- end second_footer_content_wrapper -->
									</div><!-- end col-md-12 -->
								</div><!-- end second_footer -->
							<?php
							endif; // end condition footer credits
							?>
						</div><!-- end footer .container -->
					</div><!-- end footer_wrapper -->
				</footer><!-- .site-footer -->
			</div><!-- .site_main_container -->

			<!-- start site side container -->
			<?php
			// Set slidebars vars to false
			$slidesidbar = $resizedsidebar = false;

			// Check if Sliding sidebar enabled and active, set $slidesidbar true
			if (is_active_sidebar( 'sidebar-2' )  && asalah_cross_option('asalah_enable_sliding_sidebar', $asalah_blogpage_id) != 'no' ) {
				$slidesidbar = true;
			}

			// Check if site width is less than 701 px and default sidebar is active, set $resizedsidebar to join slide sidebar
			if (is_active_sidebar( 'sidebar-1' ) && (intval(asalah_cross_option('asalah_site_width')) < 701) && (intval(asalah_cross_option('asalah_site_width')) > 499) && (asalah_cross_option('asalah_sidebar_position') != 'none')) {
				$resizedsidebar = true;
			}

			// Based on prev sidebar conditions
			if ( $slidesidbar || $resizedsidebar ) :
			?>
				<!-- Body overlay when slide sidebar is open -->
				<div class="sliding_close_helper_overlay"></div>
				<div class="site_side_container <?php if (asalah_cross_option('asalah_sticky_menu', $asalah_blogpage_id) == 'yes') { echo 'sticky_sidebar';}?>">
					<!-- screen-reader-text for sliding sidebar section -->
					<h3 class="screen-reader-text"><?php _e('Sliding Sidebar', 'asalah') ?></h3>
					<!-- Start slide sidebar wrapper .info_sidebar -->
					<div class="info_sidebar">
						<?php if ($slidesidbar) dynamic_sidebar( 'sidebar-2' ); ?>
						<?php if ($resizedsidebar) dynamic_sidebar( 'sidebar-1' ); ?>
					</div><!-- end .info_sidebar -->

				</div> <!-- end site side container .site_side_container -->
			<?php endif; ?>
		</div><!-- #page .site -->

		<?php wp_footer();
		// Get Custom Footer Code
		if (asalah_cross_option('asalah_custom_footer_code')) {
			echo asalah_cross_option('asalah_custom_footer_code');
		} ?>
	</body>
</html>