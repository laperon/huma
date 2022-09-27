<section class="section-experience">
	<?php wld_the( 'background', 'cover' ); ?>
	<div class="inner">
		<div class="wrapper">
			<div class="left">
				<?php wld_the( 'image', '480x0', '<div class="img">' ); ?>
			</div>
			<div class="right">
				<?php wld_the( 'title', 'title' ); ?>
				<?php wld_the( 'text' ); ?>
				<?php while ( wld_loop( 'items', '<ul>' ) ) : ?>
					<?php wld_the( 'item-text', '<li>' ); ?>
				<?php endwhile; ?>
				<?php wld_the( 'button', 'btn', '<p>' ); ?>
			</div>
		</div>
	</div>
</section>
