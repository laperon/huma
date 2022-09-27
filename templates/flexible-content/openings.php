<section class="section-openings">
	<div class="inner">
		<?php wld_the( 'text' ); ?>
		<div class="inner">
			<?php while ( wld_loop( 'items', '<ul class="tabs-nav">' ) ) : ?>
				<?php wld_the( 'city', '<li>' ); ?>
			<?php endwhile; ?>
			<?php while ( wld_loop( 'items' ) ) : ?>
				<div class="content tab">
					<?php while ( wld_loop( 'categories' ) ) : ?>
						<?php wld_the( 'job_category', '<p class="sub-title">' ); ?>
						<?php
						if ( have_rows( 'jobs' ) ) {
							while ( have_rows( 'jobs' ) ) {
								the_row();
								get_row_layout();
								WLD_ACF_Flex_Content::the_content( 'templates/flexible-content/job/' );
							}
						}
						?>
					<?php endwhile; ?>
				</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>
