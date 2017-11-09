<?php
/**
 * This template controls display of the page that is set
 * as the "Front Page" in Settings → Reading.
 */
get_header();


/**
 * Load flexible content sections.
 */
if (have_rows('page_sections')) :
	while (have_rows('page_sections')) :
		the_row();
		
		$section_background = get_sub_field('section_background');
		$section_parallax = get_sub_field('section_parallax');
		
		if ($section_background == 'bg-image') {
			$section_background_image = 'style="background: url(\'' . get_sub_field('section_background_image') . '\') center no-repeat; background-size: cover;"';
		} else {
			$section_background_image = null;
		}
		?>
		
		<?php if ($section_parallax) : ?>
			<div class="parallax-section overflow-hidden text-white">
				<div class="bg-image bg-parallax py-5" <?= $section_background_image; ?>></div>
		<?php else: ?>
			<div class="<?=$section_background; ?> py-5<?php if ($section_background_image) { echo ' text-white'; } ?>" <?= $section_background_image; ?>>
		<?php endif; ?>

				<div class="container">
			
					<?php
					if (have_rows('section_layout')) :
						while (have_rows('section_layout')) :
							the_row();
							
							switch ($layout = get_row_layout()) :
								default:
									get_template_part('partials/layout', $layout);
									break;
							endswitch;
						endwhile;
					endif;
					?>
			
				</div>
			</div>
		
		<?php
	endwhile;
endif;
?>


<!-- Testimonial -->
<div class="parallax-section overflow-hidden text-white">
	<div class="bg-image bg-parallax" style="background: url('<?php bloginfo('template_url'); ?>/images/fpo/street.jpg') center no-repeat; background-size: cover;"></div>
	<div class="container">
		<div class="row">
			<div class="col col-9 mx-auto">
				<blockquote class="mb-0">
					<p class="pt-3 red-hash red-hash-wide">This is a testimonial quote consectetur adipiscing elit. Integer dapibus efficitur ligula vulputate ultricies. Id odio eros. Integer tristique varius nibh eu convallis.</p>
				</blockquote>
			</div>
		</div>
	</div>
</div>

<div class="bg-slant bg-slant-reverse py-5">
	<!-- Foreclosure -->
	<div class="container pt-4 pb-5">
		<div class="row">
			<div class="col col-9 mx-auto">
				<h1 class="mb-4 text-center">Behind the Foreclosure Process (Placeholder)</h1>
				<div class="mb-5">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem, blanditiis cupiditate dolore eaque est ex expedita illo illum ipsa labore natus necessitatibus nesciunt non quae quisquam sapiente tempore vero.</p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col">
				<ol class="d-flex flex-wrap justify-content-between list-stylized list-unstyled mb-0">
					<li class="pt-0">
						<p class="pt-2 red-hash">The borrower/owner reinstates the loan by paying off the default amount during a grace period determined by state law. This grace period is also known as pre-foreclosure.</p>
					</li>
					<li class="pt-0">
						<p class="pt-2 red-hash">The borrower/owner sells the property to a third party during the pre-foreclosure period. The sale allows the borrower/owner to pay off the loan and avoid having a foreclosure on his or her credit history.</p>
					</li>
					<li class="pt-0">
						<p class="pt-2 red-hash">A third party buys the property at a public auction at the end of the pre-foreclosure period.</p>
					</li>
					<li class="pt-0">
						<p class="pt-2 red-hash">The lender takes ownership of the property, usually with the intent to re-sell it on the open market. The lender can take ownership either through an agreement with the borrower/owner during pre-foreclosure, via a short sale foreclosure or by buying back the property at the public auction. Properties repossessed by the lender are also known as bank-owned or REO properties (Real Estate Owned by the lender).</p>
					</li>
				</ol>

				<div class="text-center">
					<a class="btn btn-primary" href="">Next Steps</a>
				</div>
			</div>
		</div>
	</div>
	
	<!-- 5 Tips for Selling -->
	<div class="container pt-4 pb-5 text-center">
		<div class="row">
			<div class="col">
				<h1 class="mb-4 text-center">Top 5 Tips for Selling (placeholder)</h1>

				<div class="tab-slider mt-5">
					<input class="tab-slider-input d-none" id="tab-1" name="tabs" type="radio" checked>
					<input class="tab-slider-input d-none" id="tab-2" name="tabs" type="radio">
					<input class="tab-slider-input d-none" id="tab-3" name="tabs" type="radio">
					<input class="tab-slider-input d-none" id="tab-4" name="tabs" type="radio">
					<input class="tab-slider-input d-none" id="tab-5" name="tabs" type="radio">

					<div class="tab-slider-tabs d-flex mb-4">
						<label class="tab-slider-label position-relative m-0 pb-3 px-4" for="tab-1">
							<img class="tab-slider-icon" src="<?php bloginfo('template_url'); ?>/images/icon/fire.svg">
							<h4>Stay Warm</h4>
						</label>
						<label class="tab-slider-label position-relative m-0 pb-3 px-4" for="tab-2">
							<img class="tab-slider-icon" src="<?php bloginfo('template_url'); ?>/images/icon/lightbulb.svg">
							<h4>Lighten Up</h4>
						</label>
						<label class="tab-slider-label position-relative m-0 pb-3 px-4" for="tab-3">
							<img class="tab-slider-icon" src="<?php bloginfo('template_url'); ?>/images/icon/flag.svg">
							<h4>Highlight Features</h4>
						</label>
						<label class="tab-slider-label position-relative m-0 pb-3 px-4" for="tab-4">
							<img class="tab-slider-icon" src="<?php bloginfo('template_url'); ?>/images/icon/fence.svg">
							<h4>Show Landscaping</h4>
						</label>
						<label class="tab-slider-label position-relative m-0 pb-3 px-4" for="tab-5">
							<img class="tab-slider-icon" src="<?php bloginfo('template_url'); ?>/images/icon/clipboard.svg">
							<h4>Clear the Way</h4>
						</label>
					</div>

					<div class="tab-slider-panes overflow-hidden text-left">
						<div>
							<div class="tab-slider-content float-left" id="tab-pane-1">
								<div class="mx-auto w-75">
									<h4>Tab 1</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi architecto asperiores blanditiis consequatur dignissimos dolorum earum eligendi, eveniet facere incidunt labore laboriosam natus odit provident reprehenderit sed sit voluptatem!</p>
								</div>
							</div>
							<div class="tab-slider-content float-left" id="tab-pane-2">
								<div class="mx-auto w-75">
									<h4>Tab 2</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi architecto asperiores blanditiis consequatur dignissimos dolorum earum eligendi, eveniet facere incidunt labore laboriosam natus odit provident reprehenderit sed sit voluptatem!</p>
								</div>
							</div>
							<div class="tab-slider-content float-left" id="tab-pane-3">
								<div class="mx-auto w-75">
									<h4>Tab 3</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi architecto asperiores blanditiis consequatur dignissimos dolorum earum eligendi, eveniet facere incidunt labore laboriosam natus odit provident reprehenderit sed sit voluptatem!</p>
								</div>
							</div>
							<div class="tab-slider-content float-left" id="tab-pane-4">
								<div class="mx-auto w-75">
									<h4>Tab 4</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi architecto asperiores blanditiis consequatur dignissimos dolorum earum eligendi, eveniet facere incidunt labore laboriosam natus odit provident reprehenderit sed sit voluptatem!</p>
								</div>
							</div>
							<div class="tab-slider-content float-left" id="tab-pane-5">
								<div class="mx-auto w-75">
									<h4>Tab 5</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi architecto asperiores blanditiis consequatur dignissimos dolorum earum eligendi, eveniet facere incidunt labore laboriosam natus odit provident reprehenderit sed sit voluptatem!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Half Column -->
<div class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mb-4 text-center">Real Estate 1/2 Column</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur cupiditate delectus ex laboriosam libero modi non quidem unde. Ab inventore ipsa minus suscipit totam veniam vero. At nam, reprehenderit.</p>
				<a class="btn btn-primary mt-4 mb-2" href="">Next CTA</a>
			</div>
			<div class="col-6">
				<img class="mb-2 mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/living-room-sq.jpg">
			</div>
		</div>
	</div>
</div>

<!-- Third Column -->
<div class="py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mb-4 text-center">Real Estate 1/3 Column</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur cupiditate delectus ex laboriosam libero modi non quidem unde. Ab inventore ipsa minus suscipit totam veniam vero. At nam, reprehenderit.</p>
				<a class="btn btn-primary mt-4 mb-2" href="">Next CTA</a>
			</div>
			<div class="col-8">
				<img class="mb-2 mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/living-room-sq.jpg">
			</div>
		</div>
	</div>
</div>

<!-- Two-Thirds Column -->
<div class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mb-4 text-center">Real Estate 2/3 Column</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-8">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur cupiditate delectus ex laboriosam libero modi non quidem unde. Ab inventore ipsa minus suscipit totam veniam vero. At nam, reprehenderit.</p>
				<a class="btn btn-primary mt-4 mb-2" href="">Next CTA</a>
			</div>
			<div class="col-4">
				<img class="mb-2 mw-100 rounded-circle" src="<?php bloginfo('template_url'); ?>/images/fpo/living-room-sq.jpg">
			</div>
		</div>
	</div>
</div>

<?php if (get_field('resources_visibility')) : ?>
	<div class="py-5">
		<div class="container pt-4">
			<div class="row">
				<div class="col">
					<h1 class="mb-4 text-center"><?php the_field('resources_section_title'); ?></h1>
					<?php if ($real_estate_resources = get_field('resources_blog_posts')) : ?>
						<div class="card-deck card-deck-posts mb-4 pb-2 text-left">
							<?php
							foreach ($real_estate_resources as $post) :
								setup_postdata($post);
								$first_category_name = null;
								
								// get the first category (assumption: each post is only in one category)
								$post_categories = get_the_category();
								if (!empty($post_categories)) :
									$first_category_name = $post_categories[0]->name;
								endif;
								?>
								<div class="card m-2 position-relative rounded-0">
									<div class="card-image-wrap">
										<img class="mw-100" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-medium'); ?>">
									</div>
									<div class="align-items-bottom card-body position-absolute text-white">
										<h5 class="card-title font-weight-bold mb-1 text-white"><?= $first_category_name; ?></h5>
										<p class="card-text mb-2"><?php the_title(); ?></p>
										<p class="card-text mb-2">
											<a class="text-primary" href="<?php the_permalink(); ?>">Read More &rsaquo;</a>
										</p>
										<time class="card-text" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.j.y'); ?></time>
										<p class="card-text card-tags"><?php the_tags('', ', '); ?></p>
									</div>
								</div>
								<?php
							endforeach;
							wp_reset_postdata();
							?>
						</div>
					<?php endif; ?>
					
					<?php if ($button_text = get_field('resources_button_text')) : ?>
						<div class="pt-4 text-center">
							<a class="btn btn-primary" href="<?= get_permalink(get_option('page_for_posts')); ?>"><?= $button_text; ?></a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
get_footer();