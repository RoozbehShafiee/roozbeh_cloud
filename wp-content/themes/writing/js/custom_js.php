<?php

if (!function_exists('asalah_custom_footer_scripts')) {
  function asalah_custom_footer_scripts() {
    global $asalah_blogpage_id;
    ?>
    <script type="text/javascript">
    <?php

    // Include Custom Javascript code
    if (asalah_option('asalah_enable_custom_js')) {
      echo asalah_option('asalah_custom_js_code');
    }

    // include reading progressbar script
    if (asalah_option('asalah_reading_progress') == "yes" && is_single()) {
    ?>
    jQuery(document).ready( function($) {
      // get max length of article
      var getMax = function(){
        return $(document).height() - $(window).height() - $('.top_menu_wrapper').height();
      }

      // get current scroll position
      var getValue = function(){
        return $(window).scrollTop() - $('.top_menu_wrapper').height();
      }

      // if browser supports html5 progress element
      if ('max' in document.createElement('progress')) {
        // define progressbar element
        var progressBar = $('#reading_progress');

        // set progressbar max attribute
        progressBar.attr({ max: getMax() });

        // change progress bar attr values on scroll or resize
        $(window).on('resize scroll',function(){
          progressBar.attr({ max: getMax(), value: getValue() });
        });

      } else { // if browser don't support html5

        // get progress precent
        var setWidth = function() {

          // define progressbar element
          var progressBar = $('.reading-progress-bar');
          // get max length of article
          var max = getMax();
          // get current scroll position
          var value = getValue();
          // set progress percent
          var width = (value/max) * 100;
          width = width + '%';

          // set progress bar width style
          progressBar.css({ width: width });
        }

        $(window).on('resize scroll', function(){
          setWidth();
        });
      }
      // if sticky menu enabled, set top of progress bar
      if (jQuery('.invisible_header').length) {
        if (jQuery('.header_logo_wrapper .container').width() < 600) {
     		 var bartop = jQuery('.sticky_header').height();
     	 } else {
         var offset =  jQuery('.sticky_header').offset();
     		 var bartop =  offset.top + jQuery('.sticky_header').height();
     	 }
     	 jQuery('#reading_progress.progress_sticky_header').css('top', bartop);
      }

    });
  <?php }

  // sticky menu script
  if (asalah_cross_option('asalah_sticky_menu', $asalah_blogpage_id) == "yes") {
  	?>
    jQuery(document).ready( function() {
       var logo_height = jQuery('.sticky_logo').height();
       jQuery('.invisible_header_logo').height(logo_height);

       var header_height = jQuery('.sticky_header').height();
       jQuery('.invisible_header').height(header_height);
    });

    jQuery(window).on('load resize', function () {
      if (jQuery(window).width() < 768) {
        var mobile_menu_h = jQuery(window).height() - 50 - jQuery('#wpadminbar').height();
        jQuery('.top_header_items_holder').css('max-height', mobile_menu_h);
      }
      if ((jQuery(window).width() < 600) && jQuery('#wpadminbar').length) {
        var scrolling = jQuery(window).scrollTop();
  			var main_navbar_offset = jQuery('.site_header').height();
        var top;
        if (scrolling < jQuery('#wpadminbar').height() - 10) {
          top = jQuery('#wpadminbar').height() - scrolling;
        } else {
          top = 0;
        }
        var sticky_header_offset = jQuery('.sticky_header').height() + top;
        jQuery('.sticky_header').css('top', top);
        jQuery('.sticky_logo').css('top', sticky_header_offset);
      }
    });

  	jQuery(window).scroll(function() {
  			var scrolling = jQuery(window).scrollTop();
  			var main_navbar_offset = jQuery('.site_header').height();
        var top;
				if (jQuery(window).width() > 768) {
	  			if (scrolling > main_navbar_offset) {
	  				jQuery('.sticky_header .header_info_wrapper').not('.mobile_menu_opened .header_info_wrapper').show('slow');
	  			} else if (scrolling < main_navbar_offset) {
	  				jQuery('.sticky_header .header_info_wrapper').not('.mobile_menu_opened .header_info_wrapper').hide('slow');
	  			}
				}

        if ((jQuery(window).width() < 600) && jQuery('#wpadminbar').length) {
          if (scrolling < jQuery('#wpadminbar').height() - 10) {
  					top = jQuery('#wpadminbar').height() - scrolling;
    			} else {
            top = 0;
    			}
        }

        var sticky_header_offset = jQuery('.sticky_header').height() + top;
        jQuery('.sticky_header').css('top', top);
        jQuery('.sticky_logo').css('top', sticky_header_offset);

  	 });



  <?php }
  ?>
  </script>
  <?php
  }
}
add_action( 'wp_footer', 'asalah_custom_footer_scripts' );