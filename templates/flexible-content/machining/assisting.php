<section class="section-assisting">
	<?php while ( wld_loop( 'items', '<div class="wrapper">' ) ) : ?>
		<div class="item">
			<?php wld_the( 'title_item', '<h4>' ); ?>
			<?php wld_the( 'text_item' ); ?>
		</div>
	<?php endwhile; ?>
	<?php wld_the( 'button', 'btn' ); ?>
</section>
