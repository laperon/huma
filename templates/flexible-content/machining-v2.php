<section class="machining">
	<div class="inner">
		<div class="wrapper">
			<aside class="accordion one">
				<div class="wrapper">
					<?php wld_the( 'title', '<h3 class="accordion_title">' ); ?>
					<?php wld_the_nav_machining_menu(); ?>
				</div>
			</aside>
			<?php if ( wld_has( 'sections' ) ) : ?>
				<section class="content-wrapper">
					<?php
					while ( wld_loop( 'sections' ) ) {
						get_row_layout();
						WLD_ACF_Flex_Content::the_content( 'templates/flexible-content/machining/' );
					}
					?>
				</section>
			<?php endif; ?>
		</div>
	</div>
</section>
