<section class="section-core-values">
	<div class="inner">
		<div class="wrapper">
			<div class="left">
				<?php wld_the( 'title', 'title' ); ?>
				<?php wld_the( 'text' ); ?>
			</div>
			<?php if ( wld_has( 'image' ) ) : ?>
				<div class="right">
					<div class="img">
						<?php wld_the( 'image', '770x0' ); ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
		<?php while ( wld_loop( 'items', '<div class="wrap">' ) ) : ?>
			<div class="item">
				<div class="img">
					<?php wld_the( 'image', '370x0' ); ?>
				</div>
				<?php wld_the( 'title', '<h3>' ); ?>
				<?php wld_the( 'text' ); ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>
