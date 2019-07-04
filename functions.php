<?php
/**
 * WP Bootstrap 4 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_4
 */

if ( ! function_exists( 'wp_bootstrap_4_setup' ) ) :
	function wp_bootstrap_4_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'wp-bootstrap-4', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Enable Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'status', 'quote', 'link' ) );

		// Enable support for woocommerce.
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'wp-bootstrap-4' ),
		) );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_4_custom_background_args', array(
			'default-color' => 'f8f9fa',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_4_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_4_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_4_content_width', 800 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_4_content_width', 0 );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wp-bootstrap-4' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget border-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'wp-bootstrap-4' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'wp-bootstrap-4' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'wp-bootstrap-4' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'wp-bootstrap-4' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'wp_bootstrap_4_widgets_init' );




/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_4_scripts() {
	wp_enqueue_style( 'open-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'wp-bootstrap-4-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );

	wp_enqueue_script( 'bootstrap-4-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_4_scripts' );


/**
 * Registers an editor stylesheet for the theme.
 */
function wp_bootstrap_4_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wp_bootstrap_4_add_editor_styles' );


// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Implement the Custom Comment feature.
require get_template_directory() . '/inc/custom-comment.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Custom Navbar
require get_template_directory() . '/inc/custom-navbar.php';

// Customizer additions.
require get_template_directory() . '/inc/tgmpa/tgmpa-init.php';

// Use Kirki for customizer API
require get_template_directory() . '/inc/theme-options/add-settings.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}





//Test Fucntions for Admin Content

function oma_teema($wp_customize) {
    //Otsikko
    $wp_customize->add_section("oma_teema_section",array(
        "title" => "Header"
    ));
    
    $wp_customize->add_setting("oma_teema_headline", array(
        "default" => "We do tables"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_headline_control", array(
        "label" => "headline",
        "section" => "oma_teema_section",
        "settings" => "oma_teema_headline"
    )));
    
    //alaotsikko
    
    $wp_customize->add_setting("oma_teema_smallline", array(
        "default" => "Wood & Steel"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_smallline_control", array(
        "label" => "Small line",
        "section" => "oma_teema_section",
        "settings" => "oma_teema_smallline"
    )));
    
    
    //sisältö
    
    
    //para 1
    $wp_customize->add_section("oma_teema_content",array(
        "title" => "Content"
    ));
    
    $wp_customize->add_setting("oma_teema_para1-headline", array(
        "default" => "PHILOSOPHY"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_para1-headline_control", array(
        "label" => "para 1 headline",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_para1-headline"
    )));
    
    $wp_customize->add_setting("oma_teema_para1", array(
        "default" => "Text"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_para1_control", array(
        "label" => "para 1",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_para1"
    )));
    
    
    //para 2
    $wp_customize->add_setting("oma_teema_para2-headline", array(
        "default" => "SIT & SAT"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_para2-headline_control", array(
        "label" => "para 2 headline",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_para2-headline"
    )));
    
    $wp_customize->add_setting("oma_teema_para2", array(
        "default" => "Text"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_para2_control", array(
        "label" => "para 2",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_para2"
    )));
    
    
    //para 3
    $wp_customize->add_setting("oma_teema_para3-headline", array(
        "default" => "WE DO GOOD"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_para3-headline_control", array(
        "label" => "para 3 headline",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_para3-headline"
    )));
    
    $wp_customize->add_setting("oma_teema_para3", array(
        "default" => "Text"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_para3_control", array(
        "label" => "para 3",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_para3"
    )));
    
    
    //box 1
    
    $wp_customize->add_setting("oma_teema_box1-headline", array(
        "default" => "Headline"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_box1-headline_control", array(
        "label" => "box 1 headline",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_box1-headline"
    )));
    
    $wp_customize->add_setting("oma_teema_box1", array(
        "default" => "Text"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_box1_control", array(
        "label" => "box 1",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_box1"
    )));
    
    
    //box 2
    $wp_customize->add_setting("oma_teema_box2-headline", array(
        "default" => "Headline"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_box2-headline_control", array(
        "label" => "box 2 headline",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_box2-headline"
    )));
    
    $wp_customize->add_setting("oma_teema_box2", array(
        "default" => "Text"
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, "oma_teema_box2_control", array(
        "label" => "box 2",
        "section" => "oma_teema_content",
        "settings" => "oma_teema_box2"
    )));
    
}

add_action("customize_register","oma_teema");
