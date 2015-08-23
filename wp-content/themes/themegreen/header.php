<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Greenr
 */
global $greenr;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
if ( ! function_exists( '_wp_render_title_tag' ) ) :
    function greenr_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
    }
    add_action( 'wp_head', 'greenr_render_title' );
endif;
?>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'greenr' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div id="header-top">
			<div class="container">
				<?php if( isset($greenr['contact']) ) : ?>
				<div class="ten columns">
					<p><?php echo esc_html($greenr['contact']); ?></p>
				</div>
				<?php endif; ?>
				<?php if( isset( $greenr['social-twitter'] ) || isset($greenr['social-linked']) || isset($greenr['social-facebook']) ) : ?> 
				<div class="six columns">
					<ul class="social">
					<?php if( isset( $greenr['social-twitter'] ) ) : ?>
						<li><a href="<?php echo esc_attr( $greenr['social-twitter'] ); ?>" class="fa fa-twitter"></a></li>
					<?php endif; ?>
					
					<?php if( isset( $greenr['social-facebook'] ) ) : ?>
						<li><a href="<?php echo esc_attr( $greenr['social-facebook'] ); ?>" class="fa fa-facebook"></a></li>
					<?php endif; ?>
					
					<?php if( isset( $greenr['social-google-plus'] ) ) : ?>
						<li><a href="<?php echo esc_attr( $greenr['social-google-plus'] ); ?>" class="fa fa-google-plus"></a></li>
					<?php endif; ?>
					
					<?php if( isset( $greenr['social-linked'] ) ) : ?>
						<li><a href="<?php echo esc_attr( $greenr['social-linked'] ); ?>" class="fa fa-linked"></a></li>
					<?php endif; ?>
					
					<?php if( isset( $greenr['social-dribbble'] ) ) : ?>
						<li><a href="<?php echo esc_attr( $greenr['social-dribbble'] ); ?>" class="fa fa-dribbble"></a></li>
					<?php endif; ?>
					
					<?php if( isset( $greenr['social-rss'] ) ) : ?>
						<li><a href="<?php echo esc_attr( $greenr['social-rss'] ); ?>" class="fa fa-rss"></a></li>
					<?php endif; ?>
					</ul>
				</div>
				<?php endif; ?>
			</div>
		</div>

		<div id="header-bottom">
			<div class="container">
				<div class="site-branding six columns">
						<?php if( isset( $greenr['site-title'] ) && isset( $greenr['custom-logo'] ) && $greenr['site-title'] ) : ?>
							<img src="<?php echo $greenr['custom-logo']['url']; ?>" alt="logo" >
						<?php else : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php if( isset( $greenr['site-description'] ) && $greenr['site-description'] != 0 ) : ?>
								<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
							<?php endif; ?>
						<?php endif; ?>
						<?php if( ! isset( $greenr['site-description'] ) ) : ?>
							<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
						<?php endif; ?>				</div>

				<nav id="site-navigation" class="main-navigation ten columns" role="navigation">
					<button class="menu-toggle"><?php _e( 'Primary Menu', 'greenr' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->

<?php	if ( ! is_front_page() || is_home() ) : ?>
	<div id="content" class="site-content container">
<?php endif; ?>
