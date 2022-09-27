<?php if ( has_post_thumbnail() ) : ?>
	<div class="img">
		<?php the_post_thumbnail( 'large' ); ?>
	</div>
<?php endif; ?>
<div class="text">
	<?php the_title( '<h3>', '</h3>' ); ?>
	<?php wld_the( 'position', '<h4>' ); ?>
	<?php the_content(); ?>
</div>
