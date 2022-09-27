<?php

class WLD_Products {
	public static string $post_type = 'product';
	public static string $category  = 'product_category';

	public static function get_products() : array {
		$products = new WP_Query(
			array(
				'post_type'      => self::$post_type,
				'posts_per_page' => - 1,
				'post_status'    => 'publish',
			)
		);

		return $products->posts;
	}

	public static function get_categories() : array {
		$categories = get_terms(
			array(
				'post_type'  => 'product',
				'taxonomy'   => 'product_category',
				'hide_empty' => false,
			)
		);

		$result[0] = array(
			'count' => count( self::get_products() ),
			'name'  => esc_html__( 'All', 'parent-theme' ),
			'slug'  => 'all',
		);

		if ( ! empty( $categories ) ) {
			foreach ( $categories as $category ) {
				$result[] = array(
					'count' => $category->count,
					'name'  => $category->name,
					'slug'  => $category->slug,
				);
			}
		}

		return $result;
	}

	public static function get_category_by_pid( object $post ) {

		$category = get_the_terms( $post, self::$category );

		if ( ! empty( $category ) ) {
			return $category[0]->slug;
		}

		return 'none';
	}

	public static function get_format_products() {
		$result['all'] = self::get_products();

		foreach ( self::get_products() as $product ) {
			$category = self::get_category_by_pid( $product );

			if ( 'none' !== $category ) {
				$result[ $category ][] = $product;
			}
		}


		return $result;
	}
}
