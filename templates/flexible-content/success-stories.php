<section class="machining-v2">
	<div class="inner">
		<div class="wrap">
			<div class="col">
				<aside class="accordion one">
					<?php wld_the( 'sidebar_title', '<h3 class="accordion_title">' ); ?>
					<?php while ( wld_loop( 'navigations', '<ul class="tabs-nav accordion_text">' ) ) : ?>
						<li>
							<a href="<?php wld_the( 'section_id' ); ?>"><?php wld_the( 'label' ); ?></a>
						</li>
					<?php endwhile; ?>
				</aside>
			</div>
			<div class="second-wrap">
				<div class="get-started" id="case-studies">
					<?php wld_the( 'title' ); ?>
					<?php while ( wld_loop( 'case_studies', '<div class="wrap">' ) ) : ?>
						<div class="item <?php wld_the( 'color' ); ?>">
							<div class="col-img">
								<?php wld_the_sub_image( 'image', 'large' ); ?>
							</div>
							<div class="col-text">
								<?php wld_the( 'title', '<h5>' ); ?>
								<?php wld_the( 'text' ); ?>
								<?php wld_the_sub_link( 'link', 'btn' ); ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div id="testimonials" class="testimonials">
					<?php wld_the( 'testimonials_title', '<h2 class="title">' ); ?>
					<?php while ( wld_loop( 'testimonials', '<div class="wrap">' ) ) : ?>
						<div class="item">
							<div class="img">
								<?php wld_the_sub_image( 'image', 'large' ); ?>
							</div>
							<div class="text">
								<?php wld_the( 'title', '<h3>' ); ?>
								<?php wld_the( 'reviews', '<h4>' ); ?>
								<h4>8 reviews · 1 photo</h4>
								<div class="star-rating">
									<div class="starsg">
										<img src="images/star-icon.svg" alt="star">
										<img src="images/star-icon.svg" alt="star">
										<img src="images/star-icon.svg" alt="star">
										<img src="images/star-icon.svg" alt="star">
										<img src="images/star-icon.svg" alt="star">
									</div>
									<p>8 months ago</p>
								</div>

								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci quis risus suscipit
									aliquet. Auctor auctor aliquet at eu. Id egestas tempor dolor, condimentum eu tempus
									sit. Dictum consectetur morbi condimentum id mattis. Pellentesque purus libero
									morbi... <a href="#">More</a></p>
								<div class="like">3</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
</section>
