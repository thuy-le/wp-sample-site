<?php 

/* Jigo Shop */
remove_action('jigoshop_before_main_content','jigoshop_output_content_wrapper',10);
remove_action( 'jigoshop_after_main_content', 'jigoshop_output_content_wrapper_end', 10);

if( ! function_exists('greenr_jigoshop_output_content_wrapper') ) {
	function greenr_jigoshop_output_content_wrapper() {
		echo '<div class="row"><div id="primary" class="content-area eleven columns">';
	}
}
add_action('jigoshop_before_main_content','greenr_jigoshop_output_content_wrapper',10);

if( ! function_exists('greenr_jigoshop_output_content_wrapper_end') ) {
	function greenr_jigoshop_output_content_wrapper_end() {
		echo '</div>';
	}
}
add_action('jigoshop_after_main_content','greenr_jigoshop_output_content_wrapper_end',10);