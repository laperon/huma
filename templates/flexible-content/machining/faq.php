<section class="section-faq">
	<?php wld_the( 'title' ); ?>
	<?php while ( wld_loop( 'items', '<div class="wrapper"><div class="block one">%s</div></div>' ) ) : ?>
		<div class="block__item">
			<div class="block__title">
				<?php wld_the( 'title_cart_button' ); ?>
			</div>
			<div class="block__text">
				<?php wld_the( 'text_cart_faq' ); ?>
			</div>
		</div>
	<?php endwhile; ?>
</section>
