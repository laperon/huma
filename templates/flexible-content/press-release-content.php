<?php
$loop = new WP_Query(
	array(
		'post_type'      => 'press-release',
		'post_status'    => 'publish',
		'posts_per_page' => 3,
		'orderby'        => 'title',
		'order'          => 'ASC',
	)
);
?>
<section class="section-content">
	<div class="inner">
		<div class="content-container">
			<?php while ( $loop->have_posts() ) : ?>
				<?php $loop->the_post(); ?>
				<div class="content-item">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( '370x0' ); ?>
						<p><?php the_excerpt(); ?> </p>
						<h2 class="title"><?php the_title(); ?> </h2>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="pagination">
			<?php
			echo paginate_links(
				array(
					'base'    => '%_%',
					'format'  => '?paged=%#%',
					'current' => max( 1, get_query_var( 'paged' ) ),
					'total'   => $loop->max_num_pages,
					'type'    => 'list',
				)
			);
			wp_reset_postdata();
			?>
		</div>
	</div>
</section>
