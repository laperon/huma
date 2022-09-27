<section class="section-text text-oil" id="section-text">
	<?php if ( wld_has( 'icon' ) ) : ?>
		<p class="anchor">
            <?php wld_the( 'icon', '40x0' ); ?>
		</p>
	<?php endif; ?>
	<?php wld_the( 'text' ); ?>
</section>
