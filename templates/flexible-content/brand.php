<section class="section-was-branded">
	<div class="inner">
		<div class="wrapper">
			<?php if ( wld_has( 'image' ) ) : ?>
				<div class="left">
					<?php wld_the( 'image', 'large', '<div class="img">' ); ?>
				</div>
			<?php endif; ?>
			<div class="right">
				<?php wld_the( 'text' ); ?>
			</div>
		</div>
	</div>
</section>
