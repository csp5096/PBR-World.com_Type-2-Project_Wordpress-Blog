<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package CorporateBusiness

 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'corporatebusiness' ); ?></a>
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		<?php
        if ( get_theme_mod('logo' , get_template_directory_uri() . '/images/logo.png') ) {
        ?>
            <div class="header-logo-image">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img src="<?php echo esc_url( get_theme_mod('logo' , get_template_directory_uri() . '/images/logo.png') ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                </a>
            </div><!-- #header-logo-image -->
        <?php
        } else {
        ?>
        	<div class="header-text">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        	</div>

        <?php
        }
        ?>
            <div class="header-search">
            	<?php get_search_form(); ?>
            	<div class="site-description">
                	<?php
                    $adress = get_theme_mod( 'adress', 'Massachusetts Ave, Cambridge, MA, USA' );
					$mail = get_theme_mod( 'mail', 'info@example.com' );
					$phone = get_theme_mod( 'phone', '+1 617-253-1000' );
					
					if ($mail) echo '<span><i class="fa fa-envelope-o"></i>'.$mail.'<br /></span>';
					if ($phone) echo '<span><i class="fa fa-phone"></i>'.$phone.'<br /></span>';
					if ($adress) echo '<span><i class="fa fa-map-marker"></i>'.$adress.'</span>';
					?>
                </div>
            </div>    
            <div class="clear"></div>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
    
    <nav id="site-navigation" class="main-navigation <?php if((is_home())or(is_single())or(is_search())or(is_archive())){echo 'mr';}?>" role="navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'corporatebusiness' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
        
        <div class="clear"></div>
        <div class="nav-foot"></div>
    </nav><!-- #site-navigation -->
    
<?php
if( get_theme_mod( 'enable_slider' ) ) {
	if ( is_front_page() ) {
?>
		<div class="site-slider"><div class="inner">
<?php
		corporatebusiness_slider();
?>
		<div class="clear"></div></div></div>
<?php
	}
}
?>

	<div id="content" class="site-content">