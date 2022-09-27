<section class="section-further-reading read-oil">
	<div class="inner">
		<?php wld_the( 'text_title', 'title' ); ?>
		<?php while ( wld_loop( 'items', '<div class="content-container">' ) ) : ?>
			<div class="content-item">
				<?php wld_the( 'text_span', '<span class="flag">' ); ?>
				<?php wld_the( 'image', '370x0' ); ?>
				<?php wld_the( 'text' ); ?>
				<?php while ( wld_wrap( 'link', '', false ) ) : ?>
					<?php wld_the( 'title_item', 'title' ); ?>
				<?php endwhile; ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>
