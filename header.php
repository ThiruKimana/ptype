<?php
  /**
  * Theme Name: ptype
  * Theme URL: http://geekedtype.com
  * Description: This is  The main template file
  * Author: Thiru Kimana <kimstilltheman@geekedtype.com>
  * Theme Version: 0.0.1
  *	
  **/

  ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div id="branding">
<div id="site-title">

<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>
" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
<?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
</div>


<div id="site-description"><?php bloginfo( 'description'  ); ?></div>
<div id="site-logo"> <?php the_custom_logo(); ?>    </div>
<?php   
if ( $site_description && ( is_home() || is_front_page() ) ) {
	echo " | $site_description";
}



?>
</div>

<nav id="menu" role="navigation">
<h4 class="assistive-text"><?php _e( 'Main menu', 'ptype' ); ?></h4>
	<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
	<div class="skip-link"><a class="assistive-text" href="#content"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
		<?php if ( ! is_singular() ) : ?>
			<div class="skip-link"><a class="assistive-text" href="#secondary"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php endif; ?>
<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</header>
<div id="container">