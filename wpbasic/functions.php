<?php
	
	if( ! defined( 'WPBASIC_VERSION' ) ){
		define( 'WPBASIC_VERSION', '1.0' );
		define( 'WPBASIC_CSS_DIR', get_theme_file_uri().'/assets/css/' );
		define( 'WPBASIC_JS_DIR', get_theme_file_uri().'/assets/js/' );
	}

if ( ! function_exists('wpbasic_setup_theme') ) :

	if ( ! isset ($content_width) )
		$content_width = 800; //pixel

	function wpbasic_setup_theme(){
		//Theme supports
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'editor-styles' );
		add_theme_support( 'html5', array( 'style','script', ) );

		//Custom Headers
		add_theme_support( 'custom-header', array(
			'default-image'		=> get_theme_file_uri(). '/assets/img/vendor-7.jpg',
			'default-text-color'	=> '000',
			'width'		=> '200',
			'height'	=> '50',
			'flex-width'	=> true,
			'flex-height'	=> true,
		) );

		//Text domain
		load_theme_textdomain( 'wpbasic', get_template_directory() . '/languages' );

		//Menu registration
		register_nav_menus( array(
		    'primary'   => __( 'Primary Menu', 'wpbasic' ),
		    'footer_menu' => __( 'Footer Menu', 'wpbasic' )
		) );

	}
endif;
	add_action('after_setup_theme', 'wpbasic_setup_theme');

//Register styles and scripts

	function wpbasic_enqueue_scripts(){
		//Styles
		wp_enqueue_style( 'wpbasic-bootstrap', WPBASIC_CSS_DIR . 'bootstrap.min.css', array(), '5.0.2', 'all' );
		wp_enqueue_style( 'wpbasic-fontawesome', WPBASIC_CSS_DIR . 'all.min.css', array(), '6.1.1', 'all' );
		wp_enqueue_style( 'wpbasic-main-style', WPBASIC_CSS_DIR . 'wpbasic-style.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'wpbasic-style', get_stylesheet_uri() );
		//Scripts
		wp_enqueue_script( 'wpbasic-bootstrap', WPBASIC_JS_DIR . 'bootstrap.min.js', array(), '5.0.2', true );
		wp_enqueue_script( 'wpbasic-fontawesome', WPBASIC_JS_DIR . 'all.min.js', array(), '6.1.1', true );
	}
	add_action('wp_enqueue_scripts', 'wpbasic_enqueue_scripts');

add_action( 'widgets_init', 'wpbasic_sidebars' );
     
function wpbasic_sidebars() { 

    register_sidebar( array(
        'name'          => __( 'Right Sidebar One', 'theme_name' ),
        'id'            => 'r-sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s wpbasic-rsidebar">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title wpbasic-rsidebar-title">',
        'after_title'   => '</h3>',
    ) ); 

    register_sidebar( array(
        'name'          => __( 'Right Sidebar Two', 'theme_name' ),
        'id'            => 'r-sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s wpbasic-rsidebar">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title wpbasic-rsidebar-title">',
        'after_title'   => '</h3>',
    ) ); 

    register_sidebar( array(
        'name'          => __( 'Right Sidebar Three', 'theme_name' ),
        'id'            => 'r-sidebar-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s wpbasic-rsidebar">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title wpbasic-rsidebar-title">',
        'after_title'   => '</h3>',
    ) );


    register_sidebar( array(
        'name'          => __( 'Right Sidebar Four', 'theme_name' ),
        'id'            => 'r-sidebar-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s wpbasic-rsidebar">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title wpbasic-rsidebar-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer One', 'theme_name' ),
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s wpbasic-footer-widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title wpbasic-footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Two', 'theme_name' ),
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s wpbasic-footer-widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title wpbasic-footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Three', 'theme_name' ),
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s wpbasic-footer-widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title wpbasic-footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Four', 'theme_name' ),
        'id'            => 'footer-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s wpbasic-footer-widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title wpbasic-footer-widget-title">',
        'after_title'   => '</h3>',
    ) );

}

function wpbasic_nav_anchor_atts($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'wpbasic_nav_anchor_atts');

function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'primary') {
    $classes[] = 'nav-item';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);

