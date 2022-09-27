<section class="section-contact">
	<div class="inner">
		<div class="left">
			<?php wld_the( 'title', '<h1>' ); ?>
			<div class="wrap">
				<div class="col">
					<?php while ( wld_loop( 'tabs', '<ul class="tabs-nav">' ) ) : ?>
						<li>
							<?php wld_the( 'tab_name', '<p>' ); ?>
						</li>
					<?php endwhile; ?>
				</div>
				<?php while ( wld_loop( 'tabs' ) ) : ?>
					<div class="col tab">
						<div class="cart-wrap">
							<?php while ( wld_loop( 'items' ) ) : ?>
								<div class="item">
									<?php wld_the( 'office', '<h3>' ); ?>
									<?php wld_the( 'text' ); ?>
								</div>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
		<div class="right">
			<?php wld_the( 'form_title', '<h2>' ); ?>
			<?php wld_the_sub_form( 'contact_form' ); ?>
		</div>
	</div>
</section>
