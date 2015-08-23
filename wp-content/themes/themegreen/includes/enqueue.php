<?php
/**
 * Enqueue scripts and styles.
 */
function greenr_fontawesome() {
    wp_deregister_style( 'redux-elusive-icon' );
    wp_deregister_style( 'redux-elusive-icon-ie7' );
	wp_enqueue_style( 'greenr-fontawesome', GREENR_PARENT_URL . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'greenr_fontawesome' );
add_action( 'redux/page/greenr/enqueue', 'greenr_fontawesome' );

function greenr_scripts() {
	wp_enqueue_style( 'greenr-neuton', '//fonts.googleapis.com/css?family=Neuton:400,700' );
	wp_enqueue_style( 'greenr-roboto', '//fonts.googleapis.com/css?family=Roboto' );
	wp_enqueue_style( 'greenr-flexslider', GREENR_PARENT_URL . '/css/flexslider.css' );
	wp_enqueue_style( 'greenr-style', get_stylesheet_uri() );

	wp_enqueue_script( 'greenr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'greenr-skip-link-focus-fix', GREENR_PARENT_URL . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'greenr-flexsliderjs', GREENR_PARENT_URL . '/js/jquery.flexslider-min.js', array('jquery'), '2.2.2', true );
	wp_enqueue_script( 'jquery-ui-accordion', false, array('jquery'));
	wp_enqueue_script( 'greenr-custom', GREENR_PARENT_URL . '/js/custom.js', array('jquery'), '1.0', true );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	global $greenr;
	if( isset( $greenr['color'] ) ) {
		switch ($greenr['color']) {
			case '1':
				wp_enqueue_style( 'greenr-default', GREENR_PARENT_URL . '/css/green_default.css');
				break;			
			case '2':
				wp_enqueue_style( 'greenr-blue', GREENR_PARENT_URL . '/css/green_pattern.css');
				break;
			case '3':
				wp_enqueue_style( 'greenr-flat', GREENR_PARENT_URL . '/css/green_flat.css');
				break;
			default:
				wp_enqueue_style( 'greenr-style', get_stylesheet_uri() );
				break;
		}		
	} else {
		wp_enqueue_style( 'greenr-style', get_stylesheet_uri() );
	}

}
add_action( 'wp_enqueue_scripts', 'greenr_scripts' );

function greenr_admin_style() {
	wp_enqueue_style( 'greenr-admin', GREENR_PARENT_URL . '/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'greenr_admin_style' );