<section class="section-text-slider">
	<div class="left">
		<?php wld_the( 'text' ); ?>
	</div>
	<div class="right">
		<?php while ( wld_loop( 'slider', '<div class="slider">%s</div>' ) ) : ?>
			<div class="slide">
				<?php wld_the( 'image', '370x0' ); ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>
