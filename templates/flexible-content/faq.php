<section class="section-faq">
	<div class="inner">
		<?php wld_the( 'title', 'title' ); ?>
		<?php while ( wld_loop( 'items', '<div class="faq-content">' ) ) : ?>
			<div class="item">
				<a href="#" class="item-toggler">
					<?php wld_the( 'sub_title', 'title' ); ?>
				</a>
				<div class="item-content">
					<?php wld_the( 'text' ); ?>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</section>
