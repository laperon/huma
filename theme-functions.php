<?php
WLD_Fonts::init( 'js' );
WLD_GF_Load_Optimization::init();
WLD_Members::init();
WLD_Preload_Logo::init();

// Specify styles for .btn as in file styles.css
WLD_TinyMCE::add_editor_styles( '.btn', 'background-color:#ef3e16 ;color:#fff;' );

// Specify styles for login page
WLD_Login_Style::set( 'btn_bg', '#ef3e16' );
WLD_Login_Style::set( 'btn_color', '#ffffff' );

// Add custom post types
WLD_CPT::add(
	'testimonial',
	array(
		'public'   => true,
		'supports' => array( 'title', 'thumbnail', 'editor' ),
	)
);
WLD_CPT::add(
	'press-release',
	array(
		'supports' => array( 'title', 'editor', 'thumbnail' ),
	)
);
WLD_CPT::add(
	'member',
	array(
		'public'   => true,
		'supports' => array( 'title', 'thumbnail', 'editor' ),
	)
);
WLD_CPT::add(
	'product',
	array(
		'public'   => true,
		'supports' => array( 'title', 'thumbnail' ),
	)
);

// Add taxonomies
WLD_Tax::add(
	'product_category',
	array(
		'public'       => true,
		'object_type'  => 'product',
		'single_label' => esc_html__( 'Category', 'parent-theme' ),
		'rewrite'      => array(
			'slug'       => 'product-category',
			'with_front' => true,
		),
	)
);

// Add menus
WLD_Nav::add( 'Header Main' );
WLD_Nav::add( 'Footer Main' );
WLD_Nav::add( 'Footer Links' );
WLD_Nav::add( 'Machining Links' );

// Add image sizes
WLD_Images::add_size( '40x0' );
WLD_Images::add_size( '108x108' );
WLD_Images::add_size( '150x0' );
WLD_Images::add_size( '300x0' );
WLD_Images::add_size( '320x0' );
WLD_Images::add_size( '370x0' );
WLD_Images::add_size( '480x0' );
WLD_Images::add_size( '490x0' );
WLD_Images::add_size( '530x0' );
WLD_Images::add_size( '770x0' );

add_theme_support( 'post-thumbnails', array( 'post', 'press-release' ) );

add_action(
	'wp_enqueue_scripts',
	static function () {
		if ( 'templates/tpl-flexible-content.php' !== get_page_template_slug() ) {
			wp_enqueue_style(
				'theme-blog-styles',
				get_stylesheet_directory_uri() . '/css/blog-and-default-pages.css',
				array(),
				WLD_VER
			);
		}
	}
);
