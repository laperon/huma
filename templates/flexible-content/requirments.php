<section class="section-requirements">
	<div class="inner">
		<?php wld_the( 'title', 'title' ); ?>
		<?php wld_the( 'text' ); ?>
		<?php while ( wld_loop( 'sections' ) ) : ?>
			<?php wld_the( 'sub-title', 'title' ); ?>
			<?php while ( wld_loop( 'items', '<ul>' ) ) : ?>
				<?php wld_the( 'text-list', '<li>' ); ?>
			<?php endwhile; ?>
		<?php endwhile ?>
		<?php wld_the( 'text-bottom' ); ?>
		<?php wld_the( 'button', 'btn', '<p>' ); ?>
	</div>
</section>
