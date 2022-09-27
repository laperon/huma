<?php
global $post;

$categories = WLD_Products::get_categories();
$products   = WLD_Products::get_format_products();
?>
<section class="product-gallery">
	<div class="inner">
		<div class="wrap">
			<?php wld_the( 'title', 'title' ); ?>
			<?php wld_the( 'sub_title', 'sub-title' ); ?>
		</div>
		<?php if ( ! empty( $categories ) ) : ?>
			<div class="wrap-button">
				<h3><?php esc_html_e( 'Filter by Capabilities', 'parent-theme' ); ?></h3>
				<ul class="tabs-nav">
					<?php foreach ( $categories as $category ) : ?>
						<?php printf( '<li>%s<span>(%s)</span></li>', $category['name'], $category['count'] ); ?>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php foreach ( $products as $category => $products_list ) : ?>
				<div class="wrap-item tab">
					<?php
					foreach ( $products_list as $post ) {
						setup_postdata( $post );
						get_template_part( 'templates/blocks/product' );
					}
					wp_reset_postdata();
					?>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</section>
