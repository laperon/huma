<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php echo '<div class="container">'; ?>

	<aside class="menu-wrap" aria-hidden="true">
		<?php wld_the_nav( 'Header Main', true ); ?>
		<button class="close-button" id="close-button">
			<span class="screen-reader-text">
				<?php esc_html_e( 'Close Menu', 'parent-theme' ); ?>
			</span>
		</button>
	</aside>

	<?php echo '<div class="content-wrap">'; ?>

	<header class="header">
		<div id="sticky-header" class="unfixed">
			<div class="inner">
				<?php wld_the_logo(); ?>
				<?php wld_the_nav( 'Header Main' ); ?>
				<div class="search">
					<div class="search-icon"></div>
					<?php get_search_form(); ?>
				</div>
				<div class="btn-link">
					<?php wld_the( 'wld_link_header' ); ?>
				</div>
			</div>
			<button class="menu-button" id="open-button">
				<span class="screen-reader-text">
					<?php esc_html_e( 'Menu', 'parent-theme' ); ?>
				</span>
			</button>
		</div>
	</header>

	<?php if ( function_exists( 'yoast_breadcrumb' ) && ! is_front_page() ) : ?>
		<?php yoast_breadcrumb( '<div class="breadcrumbs"><div class="inner">', '</div></div>' ); ?>
	<?php endif; ?>

	<?php echo '<main class="main">'; ?>

	<?php do_action( 'wld_end_header' ); ?>
