<?php
/**
 * Enqueue Scripts and Styles
 */
require_once GREENR_INCLUDES_DIR . '/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require GREENR_INCLUDES_DIR . '/custom-header.php';

/**
 * Custom functions for this theme.
 */
require GREENR_INCLUDES_DIR . '/theme-functions.php';

/**
 * Custom template tags for this theme.
 */
require GREENR_INCLUDES_DIR . '/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require GREENR_INCLUDES_DIR . '/extras.php';

/**
 * Load Redux Framework
 */
require_once GREENR_PARENT_DIR . '/admin/admin-init.php';

/**
 * Load Theme Options
 */
require_once GREENR_INCLUDES_DIR . '/theme-options-config.php';

/**
 * Load Sane Defaults
 */
require_once GREENR_INCLUDES_DIR . '/home-info.php';

/**
 * Load Sidebars
 */
require_once GREENR_INCLUDES_DIR . '/sidebars.php';

/**
 * JigoShop Support
 */
require_once( GREENR_INCLUDES_DIR . '/jigoshop.php' );