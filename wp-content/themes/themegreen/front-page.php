<?php
/**
 * The Front Page template file.
 *
 * This is the front page template file, use to display static page
 * when set 'Front page displays' to a page in Reading Settings
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package GREENR
 */
if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
	get_header(); 

	if ( isset( $greenr ) ) {
		$slides = isset($greenr['slides']) ? $greenr['slides'] : '';
		$output = '';

		$output .= '<div class="flex-container">';
		$output .= '<div class="flexslider">';
		$output .= '<ul class="slides">';

		foreach ( (array)$slides as $slide ) {
			$output .= '<li>';
			if ( isset( $slide['image'] ) && $slide['image'] != '' ) {
				$slide_image = $slide['image'];
			} else {
				$slide_image = $greenr_home['slide'];
			}

			if ( isset( $slide['description'] ) && $slide['description'] != '' ) {
				$slide_description = $slide['description'];
			} else {
				$slide_description = $greenr_home['caption'];
			}
			$output .= '<div class="flex-image"><img src="' . esc_url( $slide_image ) . '" alt="" ></div>';
			$output .= '<div class="flex-caption">' . $slide_description . '</div>';
			$output .= '</li>';
		}

		$output .= '</ul>';
		$output .= '</div><!-- .flexslider -->';
		$output .= '</div><!-- .flex-container -->';

		echo $output;

		$info = isset($greenr['info']) ? $greenr['info'] : $greenr_home['info'];
		echo '<div class="services gap nomrn"><div class="container">';
		echo $info;
		echo '</div></div>';

		$testimonial = isset($greenr['testimonial']) ? $greenr['testimonial'] : $greenr_home['testimonial'];
		echo $testimonial;

		$output = '';
		$output = '<div class="services">';
		$output .= '<div class="container">';
		$service_icon = $greenr_home['service-icon'];
		$service_title = $greenr_home['service-title'];
		$service_description = $greenr_home['service-description'];
		$dummy_service = '';
		$dummy_service .= '<div class="four columns" class="service">';
		$dummy_service .= '<div class="service-title"><p><i class="' . esc_attr( $greenr_home['service-icon'] ) . '"></i></p>';
		$dummy_service .= '<h2>' . esc_html( $greenr_home['service-title'] ) . '</h2></div>';
		$dummy_service .= '<div class="service">' . $greenr_home['service-description'] . '</div>';
		$dummy_service .= '</div><!-- .one-third -->';

		if ( isset( $greenr['service-icon-1'], $greenr['service-title-1'], $greenr['service-description-1'] ) && ( $greenr['service-icon-1'] != '' && $greenr['service-title-1'] != '' && $greenr['service-description-1'] != '' )  ) {
			$output .= '<div class="four columns" class="service">';
			$output .= '<div class="service-title"><p><i class="' . esc_attr( $greenr['service-icon-1'] ) . '"></i></p>';
			$output .= '<h2>' . esc_html( $greenr['service-title-1'] ) . '</h2></div>';
			$output .= '<div class="service">' . $greenr['service-description-1'] . '</div>';
			$output .= '</div><!-- .one-third -->';
		} else {
			$output .= $dummy_service;
		}

		if ( isset( $greenr['service-icon-2'], $greenr['service-title-2'], $greenr['service-description-2'] ) && ( $greenr['service-icon-2'] != '' && $greenr['service-title-2'] != '' && $greenr['service-description-2'] != '' )  ) {
			$output .= '<div class="four columns" class="service">';
			$output .= '<div class="service-title"><p><i class="' . esc_attr( $greenr['service-icon-2'] ) . '"></i></p>';
			$output .= '<h2>' . esc_html( $greenr['service-title-2'] ) . '</h2></div>';
			$output .= '<div class="service">' . $greenr['service-description-2'] . '</div>';
			$output .= '</div><!-- .one-third -->';
		} else {
			$output .= $dummy_service;
		}

		if ( isset( $greenr['service-icon-3'], $greenr['service-title-3'], $greenr['service-description-3'] ) && ( $greenr['service-icon-3'] != '' && $greenr['service-title-3'] != '' && $greenr['service-description-3'] != '' )  ) {
			$output .= '<div class="four columns" class="service">';
			$output .= '<div class="service-title"><p><i class="' . esc_attr( $greenr['service-icon-3'] ) . '"></i></p>';
			$output .= '<h2>' . esc_html( $greenr['service-title-3'] ) . '</h2></div>';
			$output .= '<div class="service">' . $greenr['service-description-3'] . '</div>';
			$output .= '</div><!-- .one-third -->';
		} else {
			$output .= $dummy_service;
		}

		if ( isset( $greenr['service-icon-4'], $greenr['service-title-4'], $greenr['service-description-4'] ) && ( $greenr['service-icon-4'] != '' && $greenr['service-title-4'] != '' && $greenr['service-description-4'] != '' )  ) {
			$output .= '<div class="four columns" class="service">';
			$output .= '<div class="service-title"><p><i class="' . esc_attr( $greenr['service-icon-4'] ) . '"></i></p>';
			$output .= '<h2>' . esc_html( $greenr['service-title-4'] ) . '</h2></div>';
			$output .= '<div class="service">' . $greenr['service-description-4'] . '</div>';
			$output .= '</div><!-- .one-third -->';
		} else {
			$output .= $dummy_service;
		}

		$output .= '</div><!-- .container -->';
		$output .= '</div><!-- .services -->';

		echo $output;

		$cta = isset($greenr['cta']) ? $greenr['cta'] : $greenr_home['cta'];
		echo '<div class="container gap">';
		echo $cta;
		echo '</div>';
	}
	get_footer(); 
}
?>