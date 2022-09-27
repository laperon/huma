<section class="section-why-human">
	<div class="inner">
		<div class="wrapper">
			<div class="left">
				<?php wld_the( 'title', 'title' ); ?>
				<?php wld_the( 'text' ); ?>
			</div>
			<?php if ( wld_has( 'image' ) ) : ?>
				<div class="right">
					<div class="img">
						<?php wld_the( 'image', '480x0' ); ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>



