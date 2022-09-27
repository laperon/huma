<?php
$section_index = get_row_index();
?>
<section class="section-title-home">
	<?php while ( wld_loop( 'items', '<div class="slider">' ) ) : ?>
		<div class="item">
			<?php
			$is_first_screen = 1 === get_row_index() && 1 === $section_index;
			wld_the(
				'background',
				'cover',
				array(
					'loading' => $is_first_screen ? 'eager' : 'lazy',
				)
			);
			?>
			<div class="inner">
				<div class="left">
					<?php wld_the( 'text_left', '<div class="number">' ); ?>
					<?php wld_the( 'title_left', 'title' ); ?>
				</div>
				<div class="right">
					<?php wld_the( 'text_right' ); ?>
					<?php wld_the( 'button', 'btn', '<p>' ); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
</section>
