<section class="section-contact-sales">
	<div class="inner">
		<div class="left">
			<?php while ( wld_loop( 'items', '<div class="slider">' ) ) : ?>
				<div class="item">
					<?php wld_the( 'image', '490x0' ); ?>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="right">
			<?php wld_the( 'text_top' ); ?>
			<?php wld_the( 'text_bottom' ); ?>
			<?php wld_the( 'button', 'btn', '<p>' ); ?>
		</div>
	</div>
</section>
