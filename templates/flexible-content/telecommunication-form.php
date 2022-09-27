<section class="section-superior">
	<?php if ( wld_has( 'use_form' ) ) : ?>
		<div class="inner">
			<?php while ( wld_loop( 'wld_telecommunication' ) ) : ?>
				<div class="text">
					<?php wld_the( 'text_title', '<h5 class="title">' ); ?>
					<?php wld_the( 'text', '<p>' ); ?>
					<?php while ( wld_loop( 'superior_cart' ) ) : ?>
						<div class="col-3">
							<img src="{{root}}images/superior.png" alt="">
							<?php wld_the( 'image', '150x0' ); ?>
							<?php wld_the( 'name_cart', '<p>' ); ?>
							<?php wld_the( 'post_cart' ); ?>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="form">
					<?php wld_the( 'form' ); ?>
				</div>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
</section>
