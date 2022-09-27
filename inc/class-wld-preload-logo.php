<?php

class WLD_Preload_Logo {
	protected static array $logo_src_and_mime_type = array();

	public static function init() : void {
		static::set_logo_src_and_mime_type();

		add_action(
			'wp_head',
			array( static::class, 'the_preload_link_tag_for_logo' ),
			3
		);
		add_action(
			'send_headers',
			array( static::class, 'send_preload_link_header_for_logo' )
		);
	}

	public static function the_preload_link_tag_for_logo() : void {
		if ( static::$logo_src_and_mime_type ) {
			/** @noinspection HtmlUnknownTarget */
			echo sprintf(
				'<link rel="preload" as="image" href="%s" type="%s">',
				esc_url( static::$logo_src_and_mime_type[0] ),
				esc_attr( static::$logo_src_and_mime_type[1] )
			);
		}
	}

	public static function send_preload_link_header_for_logo() : void {
		if ( static::$logo_src_and_mime_type ) {
			header(
				sprintf(
					'Link: <%s>; rel=preload; as=image; type=%s;',
					esc_url_raw( static::$logo_src_and_mime_type[0] ),
					sanitize_mime_type( static::$logo_src_and_mime_type[1] )
				),
				false
			);
		}
	}

	protected static function set_logo_src_and_mime_type() : void {
		$logo_attachment_id = (int) get_option( 'options_wld_header_logo', 0 );
		if ( $logo_attachment_id ) {
			$logo_mime_type = get_post_mime_type( $logo_attachment_id );
			if ( $logo_mime_type && 'image/svg+xml' !== $logo_mime_type ) {
				$logo_url = wp_get_attachment_image_url( $logo_attachment_id, 'full' );
				if ( $logo_url ) {
					static::$logo_src_and_mime_type = array( $logo_url, $logo_mime_type );
				}
			}
		}
	}
}
