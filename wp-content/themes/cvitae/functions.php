<?php
/**
 * CVitae functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CVitae
 */

if ( ! function_exists( 'cvitae_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cvitae_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on CVitae, use a find and replace
	 * to change 'cvitae' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'cvitae', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'cvitae-blog-image', 890, 514, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'cvitae' ),
	) );

	add_theme_support( 'post-formats', array(
		'audio',
		'gallery',
		'quote',
		'video'
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	$views_options = get_option('views_options');

	if( $views_options ){
		$views_options['template'] = '%VIEW_COUNT%';
		update_option('views_options', $views_options);
	}
	
}
endif;
add_action( 'after_setup_theme', 'cvitae_setup' );

function cvitae_theme_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'cvitae_theme_add_editor_styles' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cvitae_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cvitae_content_width', 1920 );
}
add_action( 'after_setup_theme', 'cvitae_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cvitae_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cvitae' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cvitae' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cvitae_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cvitae_scripts() {

	wp_enqueue_style( 'cvitae-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'cvitae-google-fonts', cvitae_google_fonts_url(), array(), '' );

	wp_enqueue_style( 'themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css', array(), '' );
	
	wp_enqueue_style( 'cvitae-catSlider', get_template_directory_uri() . '/assets/css/catSlider.css', array(), '' );

	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '' );
	
	wp_enqueue_style( 'materialize', get_template_directory_uri() . '/assets/css/materialize.min.css', array(), '0.97.6' );

	wp_enqueue_style( 'cvitae-grid', get_template_directory_uri() . '/assets/css/cvitae-grid.css', array(), '1.0.0' );

	wp_enqueue_style( 'cvitae-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0' );

	wp_enqueue_script( 'queryloader2', get_template_directory_uri() . '/assets/js/queryloader2.min.js', array('jquery'), '3.2.2', true );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array(), '2.8.1', false );

	wp_enqueue_script( 'materialize', get_template_directory_uri() . '/assets/js/materialize.min.js', array('jquery'), '0.97.6', true );
	
	wp_enqueue_script( 'cvitae-typed', get_template_directory_uri() . '/assets/js/typed.min.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'jquery-smooth-scroll', get_template_directory_uri() . '/assets/js/jquery.smooth-scroll.js', array('jquery'), '1.7.2', true );
	
	wp_enqueue_script( 'SmoothScroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array('jquery'), '1.4.4', true );
	
	wp_enqueue_script( 'jquery-waypoints', get_template_directory_uri() . '/assets/js/jquery.waypoints.min.js', array('jquery'), '4.0.0', true );
	
	wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), '1.0.3', true );
	
	wp_enqueue_script( 'jquery-catslider', get_template_directory_uri() . '/assets/js/jquery.catslider.js', array('jquery'), '', true );
	
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.0.0', true );
	
	wp_enqueue_script( 'jquery-slabtext', get_template_directory_uri() . '/assets/js/jquery.slabtext.min.js', array('jquery'), '2.4.0', true );
	
	wp_enqueue_script( 'jquery-parallax', get_template_directory_uri() . '/assets/js/jquery.parallax.js', array('jquery'), '1.1.3', true );	

	if( ot_get_option( 'cvitae_intro_type', 1 ) == 16 ){
		wp_enqueue_script( 'animatedHeadline', get_template_directory_uri() . '/assets/js/animatedHeadline.js', array('jquery'), '1.0', true );
		wp_enqueue_script( 'jquery.youtubebackground', get_template_directory_uri() . '/assets/js/jquery.youtubebackground.js', array('jquery'), '1.0.5', true );
	}
	
	wp_enqueue_script( 'cvitae-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.2', true );

}

add_action( 'wp_enqueue_scripts', 'cvitae_scripts' );

function cvitae_reg_widget($name) {
	$function = 'register' . '_widget';
	$function($name);
}


/**
 * Include OptionTree for CVitae Theme Option.
 */
require get_template_directory() . '/option-tree/ot-cvitae-config.php';


/**
 * CVitae TGM Plugin Activation Config.
 */
require get_template_directory() . '/lib/cvitae-tgm-plugin-activation-config.php';

/**
 * CVitae functions.
 */
require get_template_directory() . '/inc/cvitae-functions.php';

/**
 * CVitae filters.
 */
require get_template_directory() . '/inc/cvitae-filters.php';

/**
 * CVitae Nav Walker
 */
require get_template_directory() . '/inc/cvitae-menu.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Load CVitae Image Ad Widget.
 */
require get_template_directory() . '/inc/widgets/cvitae-image-ad.php';

/**
 * Load CVitae Social Links Widget.
 */
require get_template_directory() . '/inc/widgets/cvitae-social-links.php';

/*
 * CVitae Google Font Url
 */
function cvitae_google_fonts_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'cvitae' ) ) {
		$string = 'Anton|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic';
		if( ot_get_option( 'cvitae_intro_type', 1 ) == 16 ){
			$string .= '|Playfair+Display:700';
		}
        $font_url = add_query_arg( 'family', urlencode( $string ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}