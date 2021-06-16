<?php
/**
 * talk2rep functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package talk2rep
 */

if ( ! function_exists( 'talk2rep_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function talk2rep_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on talk2rep, use a find and replace
		 * to change 'talk2rep' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'talk2rep', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'talk2rep' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'talk2rep_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'talk2rep_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function talk2rep_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'talk2rep_content_width', 640 );
}
add_action( 'after_setup_theme', 'talk2rep_content_width', 0 );


/**
 *
 *
 *# changing email type
 *
 */

function wpse27856_set_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function talk2rep_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'talk2rep' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'talk2rep' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'talk2rep_widgets_init' );

function talk2rep_contact_bottom_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Contact Bottom 	Widget', 'talk2rep' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'talk2rep' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'talk2rep_contact_bottom_init' );



function talk2rep_career_bottom_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Carrier bottom right', 'talk2rep' ),
        'id'            => 'sidebar-career',
        'description'   => esc_html__( 'Add widgets here.', 'talk2rep' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'talk2rep_career_bottom_init' );


function talk2rep_solution_chat() {
	register_sidebar( array(
		'name'          => esc_html__( 'Solution Chat Slider', 'talk2rep' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add widgets here.', 'talk2rep' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'talk2rep_solution_chat' );

function talk2rep_about_header() {
	register_sidebar( array(
		'name'          => esc_html__( 'About Header', 'talk2rep' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'talk2rep' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'talk2rep_about_header' );



function talk2rep_casaAmor_one() {
	register_sidebar( array(
		'name'          => esc_html__( 'Casa Amor One', 'talk2rep' ),
		'id'            => 'sidebar-11',
		'description'   => esc_html__( 'Add widgets here.', 'talk2rep' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'talk2rep_casaAmor_one' );



function talk2rep_casaAmor_two() {
	register_sidebar( array(
		'name'          => esc_html__( 'Casa Amor Two', 'talk2rep' ),
		'id'            => 'sidebar-12',
		'description'   => esc_html__( 'Add widgets here.', 'talk2rep' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'talk2rep_casaAmor_two' );


function talk2rep_about_footer() {
	register_sidebar( array(
		'name'          => esc_html__( 'About Bottom Slider', 'talk2rep' ),
		'id'            => 'sidebar-5',
		'description'   => esc_html__( 'Add widgets here.', 'talk2rep' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'talk2rep_about_footer' );


/**
 * Enqueue scripts and styles.
 */
function talk2rep_scripts() {
	wp_enqueue_style( 'talk2rep-style', get_stylesheet_uri() );

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/dist/bootstrap/css/bootstrap.min.css' );

	wp_enqueue_style( 'home-page-style', get_template_directory_uri() . '/css/home.css' );

	wp_enqueue_style( 'about-page-style', get_template_directory_uri() . '/css/about.css' );

	wp_enqueue_style( 'solutions-page-style', get_template_directory_uri() . '/css/solutions.css' );

	wp_enqueue_style( 'news-page-style', get_template_directory_uri() . '/css/news.css' );

	wp_enqueue_style( 'general-talk-style', get_template_directory_uri() . '/css/general.css' );

	wp_enqueue_style( 'single-post-style', get_template_directory_uri() . '/css/single.css' );


	wp_enqueue_style( 'const-form-style', get_template_directory_uri() . '/css/contact.css' );

    wp_enqueue_style( 'thank-you-style', get_template_directory_uri() . '/css/thankyou.css' );

	wp_enqueue_style( 'ocf-page-style', get_template_directory_uri() . '/css/ocf-page.css' );

	wp_enqueue_style( '404-page-style', get_template_directory_uri() . '/css/404.css' );
	
	wp_enqueue_style( 'social-media-page-style', get_template_directory_uri() . '/css/social-media.css' );
	// wp_enqueue_style( 'ekko-lightbox', get_template_directory_uri() . '/css/ekko-lightbox.css' );

    // Media Queries
    wp_enqueue_style( 'ocf-page-style', get_template_directory_uri() . '/css/media-queries.css' );

	// wp_enqueue_style( 'ekko-lightbox', get_template_directory_uri() . '/js/bootstrap-lightbox/bootstrap-lightbox.min.css' );

	wp_enqueue_style( 'semantic-style', get_template_directory_uri() . '/dist/semanticuicss/semantic.min.css' );


	wp_enqueue_style( 'aos-style', get_template_directory_uri() . '/dist/aos/aos.css' );

	wp_enqueue_style( 'light-style', get_template_directory_uri() . '/js/lightbox-master/dist/css/lightbox.css' );

	wp_enqueue_style( 'privacy-policy', get_template_directory_uri() . '/css/privacy-policy.css' );

	wp_enqueue_style( 'careers-style', get_template_directory_uri() . '/css/careers.css' );

	//wp_enqueue_style( 'bxslider-style', get_template_directory_uri() . '/dist/bxslider/jquery.bxslider.min.css' );

	wp_enqueue_style( 'main-jj', get_template_directory_uri() . '/css/main_jj.css' );
	
	

	wp_enqueue_script( 'jquery-javascript', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '201812', true );

	//wp_enqueue_script( 'counter-up', get_template_directory_uri() . '/js/jquery.counterup.min.js', array(), true );

	wp_enqueue_script( 'jquery-goglemap-javascript', get_template_directory_uri() . '/js/jquery.googlemap.js', array(), '201813', true );

	wp_enqueue_script( 'jquery-Gmap-javascript', get_template_directory_uri() . '/js/gmap.js', array(), '201813', true );

	wp_enqueue_script( 'talk2rep-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151225', true );

	if (is_page(29)) {

	wp_enqueue_script( 'jquery-javascript', get_template_directory_uri() . '/js/contact.js', array(), '201812', true );

	}
	wp_enqueue_script( 'aos-animations', get_template_directory_uri() . '/dist/aos/aos.js', array(), true );

	//wp_enqueue_script( 'Owl-Carousel', get_template_directory_uri() . '/dist/owlcarousel/dist/owl.carousel.js', array(), true );


		 wp_enqueue_script( 'ekko-lightbox', get_template_directory_uri() . '/js/lightbox-master/dist/js/lightbox.js', array(), true );

	// wp_enqueue_script( 'bxslider-javascript', get_template_directory_uri() . '/dist/bxslider/jquery.bxslider.min.js', array(), '201812997', true );

	// wp_enqueue_script( 'ekko-lightbox-map', get_template_directory_uri() . '/js/ekko-lightbox.js.map', array(), true );


	// wp_enqueue_script( 'ekko-lightbox', get_template_directory_uri() . '/js/ekko-lightbox.js', array(), true );

	// wp_enqueue_script( 'ekko-lightbox', get_template_directory_uri() . '/js/bootstrap-lightbox/bootstrap-lightbox.min.js', array(), true );


    if (is_page(318)) {
        wp_enqueue_script('talk2rep-animations', get_template_directory_uri() . '/js/talk-animation.js', array(), true);
        wp_enqueue_script('talk2rep-custom-script-navigation', get_template_directory_uri() . '/js/talk-script.js', array('jquery-Gmap-javascript'), '20151216', true);

    }

    wp_enqueue_script( 'bootstrap-javascript', get_template_directory_uri() . '/dist/bootstrap/js/bootstrap.min.js', array(), '20181215', true );

	wp_enqueue_script( 'semantic-javascript', get_template_directory_uri() . '/dist/semanticuicss/semantic.js', array(), '20181217', true );

	wp_enqueue_script( 'talk2rep-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );


	wp_enqueue_script( 'count-up-normal', get_template_directory_uri() . '/js/countUp.js', array(), '20151215', true );
	
	wp_enqueue_script( 'main-jj', get_template_directory_uri() . '/js/main_jj.js', array(), '20151215', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if (is_page(8)) { // this should the page id where this script gonna work.
		wp_enqueue_script( 'solutions-script', get_template_directory_uri() . '/js/solutions.js', array(), true );
	}
	if (is_page(10)) {// this should the page id where this script gonna work.
		wp_enqueue_script( 'about-script', get_template_directory_uri() . '/js/about.js', array(), true );
	}
}
add_action( 'wp_enqueue_scripts', 'talk2rep_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

