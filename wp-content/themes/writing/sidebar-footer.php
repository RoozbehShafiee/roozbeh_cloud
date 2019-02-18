<?php
// Check if any of the footer widget areas available, if not exit
if (   ! is_active_sidebar( 'footer-1'  ) &&
			 ! is_active_sidebar( 'footer-2' ) &&
			 ! is_active_sidebar( 'footer-3'  )
	 )
		return;

// Set footer widget area class
$footer_widget_col = 'col-md-4';

// Set first footer area if existed
if ( is_active_sidebar( 'footer-1' ) ) :
?>
	<div id="first_footer_widget" class="widget_area <?php echo esc_attr($footer_widget_col); ?>">
		<?php dynamic_sidebar( 'footer-1' ); ?>
	</div>
<?php
endif;

// Set second footer area if existed
if ( is_active_sidebar( 'footer-2' ) ) :
?>
	<div id="second_footer_widget" class="widget_area <?php echo esc_attr($footer_widget_col); ?>">
		<?php dynamic_sidebar( 'footer-2' ); ?>
	</div>
<?php
endif;

// Set third footer area if existed
if ( is_active_sidebar( 'footer-3' ) ) :
?>
	<div id="third_footer_widget" class="widget_area <?php echo esc_attr($footer_widget_col); ?>">
		<?php dynamic_sidebar( 'footer-3' ); ?>
	</div>
<?php
endif;
?>