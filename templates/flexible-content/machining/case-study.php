<section class="section-case-study">
	<?php wld_the( 'title' ); ?>
	<?php while ( wld_loop( 'study_cart', '<div class="wrapper">%s</div>' ) ) : ?>
		<div class="item <?php wld_the( 'select_style' ); ?>">
			<div class="img">
				<?php wld_the( 'image', '320x0' ); ?>
				<?php wld_the( 'img_text', '<p>' ); ?>
			</div>
			<div class="text">
				<?php wld_the( 'date', '<p>' ); ?>
				<?php wld_the( 'title' ); ?>
				<?php wld_the( 'text' ); ?>
				<?php wld_the( 'button', 'btn' ); ?>
				<?php if ( get_sub_field( 'button_download' ) ) : ?>
					<a href="<?php wld_the( 'button_download' ); ?>"
					   class="btn"> <?php _e( 'Download', 'parent-theme' ); ?>
					</a>
				<?php endif; ?>
			</div>
		</div>
	<?php endwhile; ?>
</section>
