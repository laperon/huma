<section class="machining">
	<div class="inner">
		<div class="wrap">
			<div class="col">
				<aside class="accordion one">
					<?php wld_the( 'title', 'accordion_title' ); ?>
					<?php wld_the_nav_machining_menu(); ?>
				</aside>
			</div>
			<?php while ( wld_loop( 'content_capabilities', '<div class="col tab"><div class="col-1">%s</div></div>' ) ) : ?>
				<div class="banner-machining">
					<?php wld_the( 'background', 'cover' ); ?>
					<?php wld_the( 'title_cart', 'title' ); ?>
				</div>
				<div class="text">
					<?php wld_the( 'title_text' ); ?>
					<?php wld_the( 'text_text' ); ?>
					<div class="wrap">
						<div class="col-2">
							<?php wld_the( 'text_slider' ); ?>
						</div>
						<?php while ( wld_loop( 'slider', '<div class="slider">%s</div>' ) ) : ?>
							<?php wld_the( 'image', '370x0' ); ?>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="assisting">
					<?php while ( wld_loop( 'items', '<div class="items">%s</div>' ) ) : ?>
						<div class="item">
							<?php wld_the( 'title_item' ); ?>
							<?php wld_the( 'text_item' ); ?>
						</div>
					<?php endwhile; ?>
					<?php wld_the( 'button', 'btn' ); ?>
				</div>
				<div class="what-we-offer">
					<?php wld_the( 'title_offer' ); ?>
					<?php wld_the( 'text_offer' ); ?>
					<?php wld_the( 'list_offer' ); ?>
					<?php wld_the( 'image_offer', '530x0' ); ?>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="second-wrap">
			<div class="case-study">
				<?php wld_the( 'title_cart' ); ?>
				<?php while ( wld_loop( 'case_study_cart', '<div class="wrap">' ) ) : ?>
					<div class="item <?php wld_the( 'select_style' ); ?>">
						<div class="col-img">
							<?php wld_the( 'image_case_study', '320x0' ); ?>
							<?php wld_the( 'img_text', '<p>' ); ?>
						</div>
						<div class="col-text">
							<?php wld_the( 'date', '<p>' ); ?>
							<?php wld_the( 'title_case_study' ); ?>
							<?php wld_the( 'text_case_study' ); ?>
							<?php wld_the( 'button_case_study', 'btn' ); ?>
							<?php if ( get_sub_field( 'button_case_study_download' ) ) : ?>
								<a href="<?php wld_the( 'button_case_study_download' ); ?>"
								   class="btn"> <?php _e( 'Download', 'parent-theme' ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<div class="faq">
				<div class="inner">
					<?php wld_the( 'title_faq' ); ?>
					<?php while ( wld_loop( 'items_2', '<div class="wrapper"><div class="block one">%s</div></div>' ) ) : ?>
						<div class="block__item">
							<div class="block__title">
								<?php wld_the( 'title_cart_buuton' ); ?>
							</div>
							<div class="block__text">
								<?php wld_the( 'text_cart_faq' ); ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	</div>
</section>
