<?php $type = wld_get( 'type' ); ?>
<?php if ( 'working' === $type ) : ?>
	<section class="section-working">
		<div class="inner">
			<div class="image"><?php wld_the( 'image', '480x0' ); ?></div>
			<div class="text">
				<?php wld_the( 'title', 'title' ); ?>
				<?php wld_the( 'subtitle', 'sub-title' ); ?>
				<?php wld_the( 'text' ); ?>
			</div>
		</div>
	</section>
<?php elseif ( 'working-revert' === $type ) : ?>
	<section class="section-working section-working_revert">
		<div class="inner">
			<div class="image"><?php wld_the( 'image', '480x0' ); ?></div>
			<div class="text">
				<?php wld_the( 'title', 'title' ); ?>
				<?php wld_the( 'subtitle', 'sub-title' ); ?>
				<?php wld_the( 'text' ); ?>
			</div>
		</div>
	</section>
<?php endif; ?>
