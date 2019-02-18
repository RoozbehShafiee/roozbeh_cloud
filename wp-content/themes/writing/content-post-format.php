<?php
	// get id of page that loads content
	global $asalah_blogpage_id;
	// get ajax id if content is loaded via ajax, otherwise get page id
	if (isset($ajaxpost_id)) {
		$page_id = $ajaxpost_id;
	} else {
		$page_id = $asalah_blogpage_id;
	}

	// get sidebar position assigned for the page
	$sidebar_postition = asalah_cross_option('asalah_sidebar_position', $page_id);

	// set default blog style
	$blog_style = $asalah_setting_blog_style = 'default';

	// If post format layout is set to masonry, otherwise set to blog style set by user
	if (asalah_cross_option('asalah_media_template_layout') == 'media_lib') {
		$asalah_blog_style = 'masonry';
	} elseif (asalah_cross_option('asalah_blog_style', $page_id)) {
		$asalah_blog_style = asalah_cross_option('asalah_blog_style', $page_id);
		$blog_style = $asalah_blog_style;
	}

	/* For Featured post layout, if first page,
	set post count $banner_featured_count to 0 to make first post featured,
	otherwise set post count $banner_featured_count to 1.
	*/
	if ($asalah_blog_style == 'banner_grid' || $asalah_blog_style == 'banner_list') {
			if ( $paged == 1) {
				$banner_featured_count = 0;
			} else {
				$banner_featured_count = 1;
			}
	}

	// set excerpt limit if not set by user
	if ( asalah_cross_option('asalah_post_excerpt_limit') == '') {
		$excerpt_limit = 80;
		if ($asalah_blog_style == 'masonry' ) {
				$excerpt_limit = 30;
		}elseif ($asalah_blog_style == 'list') {
				$excerpt_limit = 36;
				if ( ($sidebar_postition != 'none') ) {
					$excerpt_limit = 25;
				}
		}
	}	else {
		// get excerpt limit set by user
		$excerpt_limit = asalah_cross_option('asalah_post_excerpt_limit');
	} // end condition excerpt limit

	// set blog thumbnail size
	$blog_thumbnail_size = 'full_blog';
	if ($asalah_blog_style == 'masonry' ) {
		$blog_thumbnail_size = 'masonry_blog';
	}elseif ($asalah_blog_style == 'list') {
		$blog_thumbnail_size = 'list_blog';
	}

	// if image crop disabled at blog page other than list
	if (asalah_option('asalah_blog_image_crop') == 'no' && $blog_style != 'list') {
		$blog_thumbnail_size = '';
	}

	// Set article tag
	$article_tag = 'article';

	// Start loop
	while ( have_posts() ) : the_post();

		// check If post format layout is set to media layout, showing thumbs only
		if (asalah_cross_option('asalah_media_template_layout') == 'media_lib') { ?>
			<<?php echo esc_attr($article_tag); ?> id="post-<?php the_ID(); ?>" <?php post_class('blog_post_container'); ?> >

				<div class="blog_post clearfix">
					<?php
					asalah_blog_post_banner('masonry_blog');
					?>
				</div>

			</<?php echo esc_attr($article_tag); ?>><!-- #post-## -->
			<?php
			// otherwise, show post format in  default blog layout
		} else {
			// get posts count

			// Set Featured post grid layout variables based on posts count
			if ($asalah_blog_style == 'banner_grid') {

					// value 0 means first post, if true, set Featured post variables
					if ($banner_featured_count == 0) {

						// Set default  featured post excerpt limit if no excerpt limit set by user
						if ( asalah_cross_option('asalah_post_excerpt_limit') == '') {
							$excerpt_limit = 80;
						}

						$blog_thumbnail_size = 'full_blog';
						$blog_style = 'banners';

						// Increase post count to skip first post
						$banner_featured_count++;
					} else {

						// Set default  featured post excerpt limit if no excerpt limit set by user
						if ( asalah_cross_option('asalah_post_excerpt_limit') == '') {
							$excerpt_limit = 30;
						}

						$blog_thumbnail_size = 'masonry_blog';
						$blog_style = 'masonry';
					} // end condition $banner_featured_count

			} // end condition Featured post grid layout variables

			// Set Featured post list layout variables based on posts count
			if ($asalah_blog_style == 'banner_list') {

				// value 0 means first post, if true, set Featured post variables
				if ($banner_featured_count == 0) {

					// Set default featured post excerpt limit if no excerpt limit set by user
					if ( asalah_cross_option('asalah_post_excerpt_limit') == '') {
						$excerpt_limit = 80;
					}

					$blog_thumbnail_size = 'full_blog';
					$blog_style = 'banners';

					// Increase post count to skip first post
					$banner_featured_count++;
				} else {

					// Set default featured post excerpt limit if no excerpt limit set by user
					if ( asalah_cross_option('asalah_post_excerpt_limit') == '') {
						$excerpt_limit = 36;
					}

					$blog_thumbnail_size = 'list_blog';
					$blog_style = 'list';
				} // end condition $banner_featured_count

			} // end condition Featured post list layout variables
			?>
			<<?php echo esc_attr($article_tag); ?> id="post-<?php the_ID(); ?>" <?php post_class('blog_post_container'); ?> >

				<?php

				// Hidden shcema data (date, author) to avoid Google Webmaster errors, data that are hidden  from  users are shown to  bots
				if ((asalah_cross_option('asalah_show_meta') == 'no') ||
						(asalah_cross_option('asalah_show_author') == 'no') ||
						(asalah_cross_option('asalah_show_date') == 'no')
					 ) {
				?>
					<div class="asalah_hidden_schemas" style="display:none;">
						<?php

						// Date hidden data
						if (asalah_cross_option('asalah_show_date') == 'no' || asalah_cross_option('asalah_show_meta') == 'no') {

							$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

							if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
								$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
							}

							$time_string = sprintf( $time_string,
																			esc_attr( get_the_date( 'c' ) ),
																			get_the_date()
																		);

							printf( '<span class="blog_meta_item blog_meta_date"><span class="screen-reader-text"></span>%1$s</span>', $time_string );

						} // end date hidden data condition

						// Author hidden data
						if (asalah_cross_option('asalah_show_author') == 'no' || asalah_cross_option('asalah_show_meta') == 'no') {

							printf( '<span class="blog_meta_item blog_meta_author"><span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span></span>',
											esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
											get_the_author()
										);

						} // end author hidden data condition
						?>
					</div><!-- end asalah_hidden_schemas-->
				<?php
				} // end hidden schemas condition
				?>

				<?php // start post content ?>
				<div class="blog_post clearfix">

					<?php
					// Post Thumbnail before Title in masonry, list, banners in blog pages

						/* if blog style is masonry bring post thumbnail before post title */
						if ($blog_style == 'masonry' ) {
						asalah_blog_post_banner($blog_thumbnail_size);
						} else if ($blog_style == 'list' || $blog_style == 'banners') {
						?>
						<div class="posts_list_wrapper clearfix">
							<div class="post_thumbnail_wrapper">
							<?php
							if ($blog_style == "banners")  {
							asalah_blog_post_banner($blog_thumbnail_size);
							}else{
							asalah_post_thumbnail($blog_thumbnail_size);
							}
							?>
							</div><!-- end post_thumbnail_wrapper -->
							<div class="post_info_wrapper"> <!-- use this wrapper in list style only to group all info far from thumbnail wrapper -->
						<?php
						} // end blog post style for thumbnail
						?>



					<?php // Show Title on single page ?>
						<div class="blog_post_title">
							<?php
									the_title(
														 sprintf( '<h2 class="entry-title title post_title"><a href="%s" rel="bookmark">',
														 esc_url( get_permalink() ) ),
														 '</a></h2>'
													 );
							?>
						</div><!-- end blog_post_title -->
					<?php // end show title	?>


					<?php // Show post meta if not hidden
					if (asalah_cross_option('asalah_show_meta') != 'no'):
					?>
						<div class="blog_post_meta clearfix">
							<?php
							asalah_post_meta();
							edit_post_link( __( 'Edit', 'asalah' ), '<span class="blog_meta_item edit_link">', '</span>' );
							?>
						</div><!-- end blog_post_meta -->
					<?php
					endif; // end post meta condition
					?>

					<?php
					/* if blog style is not masonry put post thumbnail after title and meta */
					if ($blog_style == 'default' ) {
						asalah_blog_post_banner($blog_thumbnail_size);
					}
					?>

					<?php // Show Post discription
					if (asalah_cross_option('asalah_post_content_show') != 'no') {
						// set content variable
						$asalah_content = '';
						?>
						<div class="entry-content blog_post_text blog_post_description">
							<?php
							//  If post excerpt not set to disabled, default case
							if (asalah_cross_option('asalah_post_excerpt') != "disabled"):
									// check if post has custom excerpt
									if (asalah_cross_option('asalah_custom_description') != '') {

										// Get post custom excerpt with formatting and applying shortcodes written
										$asalah_content = do_shortcode(htmlspecialchars_decode(asalah_cross_option('asalah_custom_description')));

										// add continue reading button
										$asalah_content .= asalah_more_link('', '');
									} // post doesn't have custom excerpt, but format excerpt is enabled
									else if (asalah_option('asalah_post_with_formatting') == 'yes') {

										// excecute excerpt html code
										$asalah_content = asalah_excerpt_with_format($excerpt_limit);
									} // post doesn't have custom excerpt nor formating excerpt option asalah_post_with_formatting enabled
									else {

										// get default excerpt without formatting
										$asalah_content = '<p>'.asalah_excerpt($excerpt_limit).'</p>';
									}

							// If post excerpt disabled
							else:
									// get full post content with formatting if enabled
									if (asalah_option('asalah_post_with_formatting') == 'yes') {

										/* get content with formatting and add it to variable,
										** ob_start & other functions are used to avoid echoing content and
										** enable checking content for <!-- more --> tag */
										ob_start();
											the_content();
											$asalah_content = ob_get_contents();
										ob_end_clean();

										// check if content contains <!-- more --> tag
										if (strpos($asalah_content, '<!--more-->')) {

											// add continue reading button if full content at blog contains <!-- more -->
											$asalah_content .= asalah_more_link('' , '');
										}
									} // get full post content without formatting, Default case
									else {
										$asalah_content = '<p>'.get_the_content().'</p>';
									} // end checking content format setting
							endif; // end condition checking post excerpt asalah_post_excerpt setting

							echo $asalah_content;
							?>
						</div><!-- end entry-content blog_post_text blog_post_description -->
					<?php
					}
					?>

					<?php // check if blog style is not masonry, then check if readmore button or share enabled to start blog_post_control div
					if (($blog_style !== 'masonry') && (asalah_cross_option('asalah_cont_read_show') != 'no') || (asalah_cross_option('asalah_show_share') != 'no')) {
					?>
						<div class="blog_post_control clearfix">

							<?php // check if continue Reading button isn't disabled, default case is enabled
							if (asalah_cross_option('asalah_cont_read_show') != 'no') {

								// check in case content existed it contains more link
								if (!isset($asalah_content) || (isset($asalah_content) && strpos($asalah_content, 'class="more_link more_link_dots"') != false)) { ?>

									<?php // get continue reading text
									$readmore_text = (asalah_cross_option('asalah_cont_read_text')) ? __(asalah_cross_option('asalah_cont_read_text'), 'asalah') : __('Continue Reading', 'asalah') ; ?>
									<div class="blog_post_control_item blog_post_readmore">
										<?php echo sprintf( '<a href="%1$s" class="read_more_link">%2$s</a>', esc_url( get_permalink() ), $readmore_text ); ?>
									</div><!-- end .blog_post_readmore -->
								<?php
								} // end condition check in case content existed it contains more link
								?>
							<?php
							} // end condition if continue Reading button isn't disabled
							?>

							<?php // check if post share isn't disabled, default case is enabled
							if ((asalah_cross_option('asalah_show_share') != 'no')):
								asalah_post_share();
							endif; ?>
						</div><!-- end blog_post_control -->
					<?php
					} //check if readmore button or share enabled to start blog_post_control div
					?>

					<?php // if blog style is list or banners first
					if ( $blog_style == 'list' || $blog_style == 'banners' ) {
					?>
						</div> <!-- .post_info_wrapper close post_info_wrapper in cas of list style-->
						</div> <!-- .posts_list_wrapper -->
					<?php
					} // end condition blog style is list or banners first
					?>

				</div><!-- end blog_post -->
			</<?php echo esc_attr($article_tag); ?>><!-- #post-## -->
		<?php } // end condition post format layout
	endwhile;
?>