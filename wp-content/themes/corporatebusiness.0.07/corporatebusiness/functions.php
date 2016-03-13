<?php
/**
 * CorporateBusiness functions and definitions
 *
 * @package CorporateBusiness

 */

if ( ! function_exists( 'corporatebusiness_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function corporatebusiness_setup() {
	/**
	 * Set the content width based on the theme's design and stylesheet.
	 */
	if ( ! isset( $content_width ) ) {
		$content_width = 670; /* pixels */
	}

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on corporatebusiness, use a find and replace
	 * to change 'corporatebusiness' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'corporatebusiness', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => __( 'Primary Menu', 'corporatebusiness' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'corporatebusiness_custom_background_args', array(
		'default-image' => get_template_directory_uri().'/images/bg.jpg',
		'default-repeat' => 'repeat'
	) ) );
	
	add_theme_support( 'post-thumbnails' );
	
	//add_editor_style();
}
endif; // corporatebusiness_setup
add_action( 'after_setup_theme', 'corporatebusiness_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function corporatebusiness_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'corporatebusiness' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '<div class="widget-bottom">
								<div class="l"></div>
								<div class="r"></div>
							</div>
							</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'corporatebusiness_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function corporatebusiness_theme_scripts() {
	wp_enqueue_style( 'corporatebusiness-style', get_stylesheet_uri() );
		
	wp_enqueue_style( 'corporatebusiness-font-awesome',get_template_directory_uri().'/inc/font-awesome/css/font-awesome.min.css',array() );
	
	wp_enqueue_style( 'corporatebusiness-google-fonts','//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700',array() );

	wp_enqueue_script( 'corporatebusiness-navigation', get_template_directory_uri() . '/inc/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'corporatebusiness-skip-link-focus-fix', get_template_directory_uri() . '/inc/js/skip-link-focus-fix.js', array(), '20130115', true );
	
	wp_enqueue_script( 'corporatebusiness-fitvids', get_template_directory_uri() . '/inc/js/jquery.fitvids.js', array('jquery'), '' );
	
	wp_enqueue_script( 'corporatebusiness-fitvids-doc-ready', get_template_directory_uri() . '/inc/js/fitvids-doc-ready.js', array('jquery'), '' );
	
	wp_register_script( 'corporatebusiness-jquery-cycle', get_template_directory_uri() . '/inc/js/jquery.cycle.all.min.js', array( 'jquery' ), '2.9999.5' ); // JQuery cycle js file for slider.
		
	wp_enqueue_script( 'corporatebusiness-basejs',get_template_directory_uri().'/inc/js/base.js',array('jquery'),'' );

	// 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/**
	 * Enqueue Slider setup js file.
	 */
	if( get_theme_mod( 'enable_slider' ) ) { 
		if ( is_home() || is_front_page() ) {
			wp_enqueue_script( 'corporatebusiness_slider', get_template_directory_uri() . '/inc/js/slider-setting.js', array( 'corporatebusiness-jquery-cycle' ), false, true );

		}
	}
	
	/**
    * Browser specific queuing i.e
	* https://gist.github.com/grappler/05568f05633484499acc
    */
	global $wp_scripts;
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.2', false );
	$wp_scripts->add_data( 'html5shiv', 'conditional', 'lt IE 9' );
}
add_action( 'wp_enqueue_scripts', 'corporatebusiness_theme_scripts' );

/**
 * Fav icon for the site
 */
function corporatebusiness_favicon() {
	if ( get_theme_mod( 'favicon', false ) ) {
		$corporatebusiness_favicon = get_theme_mod( 'favicon', "" );
		$corporatebusiness_favicon_output = '';
		if ( !empty( $corporatebusiness_favicon ) ) {
			$corporatebusiness_favicon_output .= '<link rel="shortcut icon" href="'.esc_url( $corporatebusiness_favicon ).'" type="image/x-icon" />';
		}
		echo $corporatebusiness_favicon_output;
	}
}
add_action( 'admin_head', 'corporatebusiness_favicon' );
add_action( 'wp_head', 'corporatebusiness_favicon' );

/**
 * Hooks the Custom Internal CSS to head section
 */
function corporatebusiness_custom_css() {

	$corporatebusiness_internal_css = '';

	$primary_color = esc_attr( get_theme_mod( 'primary_color', '#3C9DFF' ) );	
	if( $primary_color != '#3C9DFF' ) {
		$corporatebusiness_internal_css .= '
		blockquote{border-left:2px solid '.$primary_color.';}
		pre{border-left:2px solid '.$primary_color.';}
		button,input[type="button"],input[type="reset"],input[type="submit"]{background:'.$primary_color.';}
		a:hover,a:focus,a:active{color:'.$primary_color.';}
		.pagination .nav-links a:hover{color:'.$primary_color.';}
		.pagination .current{color:'.$primary_color.';}
		.entry-content a{color:'.$primary_color.';}
		.wp-pagenavi span.current{color:'.$primary_color.';}
		.entry-title, .entry-title a, .widget-area .widget-title{color:'.$primary_color.';}
		#controllers a:hover, #controllers a.active{color:'.$primary_color.';}
		#controllers a:hover, #controllers a.active{background-color:'.$primary_color.';}
		#slider-title a{background:'.$primary_color.';}
		.more-link:hover {color:'.$primary_color.' !important; border-color:'.$primary_color.' !important;}';
	}

	if( !empty( $corporatebusiness_internal_css ) ) {
		?>
		<style type="text/css"><?php echo $corporatebusiness_internal_css; ?></style>
		<?php
	}
}
add_action('wp_head', 'corporatebusiness_custom_css');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Theme Options Panel
 */
require get_template_directory() . '/inc/theme-options.php';

/**
 * Slider
 */
require_once( get_template_directory() . '/inc/header-functions.php' );
?>