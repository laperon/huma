<?php echo '</main>'; ?>

	<footer class="footer">
		<div class="inner">
			<div class="wrap">
				<div class="col col1">
					<?php wld_the_nav( 'Footer Main' ); ?>
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<div class="inner">
				<div class="copyright">
					<?php wld_the_nav( 'Footer Links' ); ?>
					<?php the_field( 'wld_footer_copyright', 'options' ); ?>
				</div>
				<div class="by">
					<?php the_field( 'wld_footer_social_links', 'options' ); ?>
					<?php wld_the_by(); ?>
				</div>
			</div>
		</div>
	</footer>

<?php
echo '</div></div>';
wp_footer();
echo '</body></html>';
