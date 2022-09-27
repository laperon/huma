<?php

class WLD_Members {
	public static function init() : void {
		add_action( 'wp_ajax_get_members', array( static::class, 'ajax' ) );
		add_action( 'wp_ajax_nopriv_get_members', array( static::class, 'ajax' ) );
	}

	public static function ajax() : void {
		check_ajax_referer( 'ajax-nonce', 'nonce' );

		$posts = new WP_Query(
			array(
				'post_type'      => 'member',
				'post_status'    => 'publish',
				'paged'          => (int) $_POST['page'],
				'posts_per_page' => 4,
			)
		);

		if ( $posts->have_posts() ) {
			while ( $posts->have_posts() ) {
				$posts->the_post();
				echo '<li>';
				get_template_part( 'templates/blocks/member' );
				echo '</li>';
			}
			echo '<span class="wld-last-page"></span>';
		}
	}
}
