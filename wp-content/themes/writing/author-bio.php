<?php
// Check if avatar is available
if (get_avatar( get_the_author_meta( 'user_email' ), 80 ) != '') {
	$author_avatar = get_avatar( get_the_author_meta( 'user_email' ), 80 );
}
$author_profile_url = esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );
 ?>
<div class="author_box author-info<?php if (isset($author_avatar)) { echo ' has_avatar';}?>">

	<?php if (isset($author_avatar)) { ?>
		<div class="author-avatar">
			<a class="author-link" href="<?php echo $author_profile_url; ?>" rel="author">
			<?php echo $author_avatar; ?>
			</a>
		</div><!-- .author-avatar -->
	<?php } ?>

	<div class="author-description author_text">

		<h3 class="author-title">
			<a class="author-link" href="<?php echo $author_profile_url; ?>" rel="author">
			<?php echo get_the_author(); ?>
			</a>
		</h3>

		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
		</p><!-- .author-bio -->

			<?php
				$social_icons_list = '';

				// Website
				if (get_the_author_meta('url') != '') {
					$social_icons_list .= '<a rel="nofollow" href="'. esc_url(get_the_author_meta('url')) .'" target="_blank" class="social_icon social_url social_icon_url" ><i class="fa fa-globe"></i></a>';
				}

				// Facebook
				if (get_the_author_meta('facebook') != "") {

					if (!strrpos(get_the_author_meta('facebook'), 'facebook.com') && !strrpos(get_the_author_meta('facebook'), 'fb.com')) {
						$facebook = "https://facebook.com/". get_the_author_meta('facebook');
					} else {
						$facebook = get_the_author_meta('facebook');
					}

					$social_icons_list .= '<a target="_blank" rel="nofollow" href="'. esc_url($facebook) .'" class="social_icon social_facebook social_icon_facebook" ><i class="fa fa-facebook"></i></a>';
				}

				// Twitter
				if (get_the_author_meta('twitter') != "") {
					if (!strrpos(get_the_author_meta('twitter'), 'twitter.com') && !strrpos(get_the_author_meta('twitter'), 'twt.com')) {

						if (strpos(get_the_author_meta('twitter'), '@')) {
							$twitter = str_replace('@', '', get_the_author_meta('twitter'));
						} else {
							$twitter = get_the_author_meta('twitter');
						}
						$twitter = 'https://twitter.com/'.$twitter;

					} else {
						$twitter = get_the_author_meta('twitter');
					}

					$social_icons_list .= '<a rel="nofollow" href="'. esc_url($twitter) .'" target="_blank" class="social_icon social_twitter social_icon_twitter"><i class="fa fa-twitter"></i></a>';
				}

				// Google+
				if (get_the_author_meta('gplus') != "") {
					$social_icons_list .= '<a rel="nofollow" href="'. esc_url(get_the_author_meta('gplus')) .'" target="_blank" class="social_icon social_gplus social_icon_gplus"><i class="fa fa-google-plus"></i></a>';
				}

				// Linkedin
				if (get_the_author_meta('linkedin') != "") {
					$social_icons_list .= '<a rel="nofollow" href="'. esc_url(get_the_author_meta('linkedin')) .'" target="_blank" class="social_icon social_linkedin social_icon_linkdin"><i class="fa fa-linkedin"></i></a>';
				}

				// Pinterest
				if (get_the_author_meta('pinterest') != "") {
					$social_icons_list .= '<a rel="nofollow" href="'. esc_url(get_the_author_meta('pinterest')) .'" class="social_icon social_pinterest social_icon_pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>';
				}

				// Social Icons List if any exists
				if ($social_icons_list != '') {
					echo '<div class="social_icons_list">'.$social_icons_list.'</div>';
				}
			?>
	</div><!-- .author-description -->
</div><!-- .author-info -->