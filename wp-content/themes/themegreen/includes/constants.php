<?php
	/* Defining directory PATH Constants */
	define( 'GREENR_PARENT_DIR', get_template_directory() );
	define( 'GREENR_CHILD_DIR', get_stylesheet_directory() );
	define( 'GREENR_INCLUDES_DIR', GREENR_PARENT_DIR. '/includes' );

	/** Defining URL Constants */
	define( 'GREENR_PARENT_URL', get_template_directory_uri() );
	define( 'GREENR_CHILD_URL', get_stylesheet_directory_uri() );
	define( 'GREENR_INCLUDES_URL', GREENR_PARENT_URL . '/includes' );

	/* 
	Check for language directory setup in Child Theme
	If not present, use parent theme's languages dir
	*/
	if ( ! defined( 'GREENR_LANGUAGES_URL' ) ) /** So we can predefine to child theme */
		define( 'GREENR_LANGUAGES_URL', GREENR_PARENT_URL . '/languages' );

	if ( ! defined( 'GREENR_LANGUAGES_DIR' ) ) /** So we can predefine to child theme */
		define( 'GREENR_LANGUAGES_DIR', GREENR_PARENT_DIR . '/languages' );