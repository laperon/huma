<?php
function wld_get_the_by() : string {
	if ( is_front_page() ) {
		return '
			<p>
				<a href="https://www.webloftdesigns.com" target="_blank" rel="noopener">
					Dallas Web Design Agency: <span>Web Loft Designs</span>
				</a>
			</p>
		';
	}

	return '';
}

function wld_the_nav_machining_menu() {
	wp_nav_menu(
		array(
			'theme_location' => 'machining_links_location',
			'container'      => 'ul',
			'menu_class'     => 'tabs-nav accordion_text',
			'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'          => 0,
		)
	);
}

function _hook_jquery_scripts_in_footer() {
	$ver = '3.6.0';
	wp_deregister_script( 'jquery-core' );
	wp_deregister_script( 'jquery' );
	wp_register_script(
		'jquery-core',
		get_stylesheet_directory_uri() . '/js/jquery.js',
		array(),
		$ver,
		true
	);
	wp_register_script(
		'jquery',
		false,
		array( 'jquery-core' ),
		$ver,
		true
	);
}

add_action(
	'wp_footer',
	static function () {
		wp_scripts()->do_items( 'jquery-core' );
	},
	PHP_INT_MIN
);

add_action( 'wp_enqueue_scripts', '_hook_jquery_scripts_in_footer' );

function _hook_fonts_load_optimization() {
}
