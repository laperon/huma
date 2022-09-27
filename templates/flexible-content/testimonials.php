<section class="section-howard">
	<div class="inner">
		<?php if ( wld_has( 'items' ) ) : ?>
			<?php while ( wld_loop( 'items', '<div class="slider">' ) ) : ?>
				<div class="item">
					<?php wld_the( 'subtitle' ); ?>
					<?php the_title( '<h2 class="title">', '</h2>' ); ?>
					<?php the_content(); ?>
					<?php wld_the( 'company_name' ); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>
