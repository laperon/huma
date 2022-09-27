<?php
$fields = [
	'Title'          => get_the_title(),
	'Function'       => wld_get( 'function' ),
	'Client'         => wld_get( 'client' ),
	'Classification' => wld_get( 'classification' ),
	'Details'        => wld_get( 'details' )
];
?>
<div class="item">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="img">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
	<?php endif; ?>
	<div class="box">
		<?php foreach ( $fields as $label => $field ) :
			if ( ! empty( $field ) ): ?>
				<?php printf( '<p><strong>%s</strong> %s</p>', $label, $field ); ?>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
</div>
