<?php
$posts = get_posts(
	array(
		'post_type'      => 'member',
		'post_status'    => 'publish',
		'posts_per_page' => 4,
	)
);
?>
<section class="section-leadership">
	<div class="inner">
		<?php if ( $posts ) : ?>
			<ul class="personal-info">
				<?php while ( wld_loop( $posts ) ) : ?>
					<li><?php get_template_part( 'templates/blocks/member' ); ?></li>
				<?php endwhile; ?>
			</ul>
			<div class="button-load">
				<a href="#"><?php esc_html_e( 'Load More', 'parent-theme' ); ?></a>
			</div>
		<?php endif; ?>
	</div>
</section>
