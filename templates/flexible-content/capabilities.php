<section class="capabilities">
	<div class="inner">
		<div class="col-1">
			<?php wld_the( 'title' ); ?>
			<?php wld_the( 'text' ); ?>
			<?php wld_the( 'button', 'btn' ); ?>
		</div>
		<?php while ( wld_loop( 'items', '<div class="col-2">' ) ) : ?>
			<div class="item">
				<?php wld_the( 'title_cart' ); ?>
				<?php wld_the( 'text_cart' ); ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>
