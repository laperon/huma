<section class="section-focused">
	<?php wld_the( 'background', 'cover' ); ?>
	<div class="inner">
		<div class="wrapper">
			<div class="left">
				<?php wld_the( 'title_left', 'title' ); ?>
				<?php wld_the( 'text_left' ); ?>
				<?php wld_the( 'button_left', 'btn' ); ?>
			</div>
			<div class="right">
				<?php wld_the( 'title_right', 'title' ); ?>
				<?php wld_the( 'text_right' ); ?>
				<?php wld_the( 'subtitle' ); ?>
				<?php wld_the( 'button_right', 'btn', '<p>' ); ?>
			</div>
		</div>
	</div>
</section>
