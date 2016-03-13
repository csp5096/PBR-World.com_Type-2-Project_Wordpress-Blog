<?php
get_header();
	/****** get index services  ********/
	/*if ( get_theme_mod( 'enable_services' ) )
		get_template_part('index', 'services') ;*/
	
	/****** get index projects  ********/
	/*if ( get_theme_mod( 'enable_projects' ) )
		get_template_part('index', 'projects') ;
		*/
	/****** For a Front page displays  ********/
	/*if ( get_theme_mod( 'enable_homepage', 1 ) and get_option( 'show_on_front' ) == "posts" ) {
		get_template_part('index', 'homepage') ;
	} elseif ( get_theme_mod( 'enable_homepage', 1 ) and get_option( 'show_on_front' ) == "page" ) {
		get_template_part('index') ;
	}*/
	
	if ( get_option( 'show_on_front' ) == "posts" ) {
		get_template_part('index', 'homepage') ;
	} elseif ( get_option( 'show_on_front' ) == "page" ) {
		get_template_part('index') ;
	}
		
get_footer();

?>