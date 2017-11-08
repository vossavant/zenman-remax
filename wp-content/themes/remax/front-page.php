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
		the_row(); ?>
		
		<div class="<?php the_sub_field('section_background'); ?> py-5">
		
		<?php
		if (have_rows('section_layout')) :
			while (have_rows('section_layout')) :
				the_row();
		
				$layout = get_row_layout();
				
				echo $layout . '<br>';
			endwhile;
		endif;
		?>
		
		</div>
		
		<?php
	endwhile;
endif;
	
// left off here
switch ($layout) :
	case 'title_with_text':
		echo 'title with text';
		break;
	
	case 'text_with_image_half':
		echo '1/2 column';
		break;
	
	case 'text_with_image_third':
		echo '1/3 column';
		break;
	
	case 'text_with_image_two_thirds':
		echo '2/3 column';
		break;
	
	case 'card_deck':
		echo 'card deck';
		break;
	
	case 'form':
		echo 'form';
		break;
	
	case 'image_gallery':
		echo 'image gallery!';
		break;
	
	case 'stylized_list':
		echo 'stylized list';
		break;
	
	case 'tabbed_slider':
		echo 'tabbed slider';
		break;
	
	case 'testimonial':
		echo 'testimonial';
		break;
	
	default:
		echo 'Invalid or no layout chosen!';
		break;
endswitch;
?>

<!-- Intro -->
<div class="bg-slant py-5">
	<section class="container pt-4 pb-5">
		<div class="row">
			<div class="col col-9 mx-auto">
				<h1 class="mb-4 text-center">Real Estate (Placeholder)</h1>
				<div class="mb-5">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut leo justo. Mauris elit lectus, tempus ac eros ut, ornare egestas orci. Fusce blandit orci vitae finibus tempor. Ut efficitur lorem lacus, sit amet dignissim lacus tempor et. Duis eget ante sagittis, hendrerit eros sed, aliquam justo.</p>
				</div>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="card-deck col-xl-10">
				<div class="card border-0 mx-5 rounded-0 shadow">
					<div class="card-body pt-4 px-5 pb-5">
						<h3 class="card-title mb-4 text-center">Buyers Guide</h3>
						<img class="d-block mx-auto" src="<?php bloginfo('template_url'); ?>/images/fpo/Icon_BuyersGuide.svg" width="120">
						<p class="card-text my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec ex condimentum, lobortis eros suscipit, imperdiet.</p>
						<div class="mt-4 text-center">
							<a href="<?php bloginfo('home'); ?>/category/for-buyers" class="btn btn-primary">Buy a Home</a>
						</div>
					</div>
				</div>
				<div class="card border-0 mx-5 rounded-0 shadow">
					<div class="card-body pt-4 px-5 pb-5">
						<h3 class="card-title mb-4 text-center">Sellers Guide</h3>
						<img class="d-block mx-auto" src="<?php bloginfo('template_url'); ?>/images/fpo/Icon_SellersGuide.svg" width="120">
						<p class="card-text my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec ex condimentum, lobortis eros suscipit, imperdiet.</p>
						<div class="mt-4 text-center">
							<a href="<?php bloginfo('home'); ?>/category/for-sellers" class="btn btn-primary">Sell Your Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Search -->
	<section class="container py-5">
		<div class="row">
			<div class="col col-9 mx-auto text-center">
				<h1 class="d-flex align-items-end justify-content-center">
					<img src="<?php bloginfo('template_url'); ?>/images/fpo/Icon_StartJourney.svg" width="85">
					Start Your Journey Here
				</h1>
				<h2 class="font-weight-bold mb-4 pb-4 red-hash red-hash-after red-hash-center red-hash-wide">We'll Make it As Smooth as Possible</h2>
				<div id="remax_search1" class="remax_search mx-auto w-75"></div>
			</div>
		</div>
	</section>

	<!-- Image Gallery -->
	<section class="container pt-5">
		<div class="row">
			<div class="col">
				<h1 class="mb-4 text-center">Image Gallery</h1>
				<div class="gallery d-flex flex-wrap">
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-1.jpg">
						</div>
						<figcaption>
							<h4>Image Title #1</h4>
							<p>ONE Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores, tempore. Asperiores consectetur debitis dolorem iusto modi mollitia officia possimus similique? Aperiam est exercitationem facilis ipsa nihil quod reprehenderit veritatis.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-2.jpg">
						</div>
						<figcaption>
							<h4>Image Title #2</h4>
							<p>TWO Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores, tempore. Asperiores consectetur debitis dolorem iusto modi mollitia officia possimus similique? Aperiam est exercitationem facilis ipsa nihil quod reprehenderit veritatis.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-3.jpg">
						</div>
						<figcaption>
							<h4>Image Title #3</h4>
							<p>THREE Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores, tempore. Asperiores consectetur debitis dolorem iusto modi mollitia officia possimus similique? Aperiam est exercitationem facilis ipsa nihil quod reprehenderit veritatis.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-4.jpg">
						</div>
						<figcaption>
							<h4>Image Title #4</h4>
							<p>FOUR Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores, tempore. Asperiores consectetur debitis dolorem iusto modi mollitia officia possimus similique? Aperiam est exercitationem facilis ipsa nihil quod reprehenderit veritatis.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-2.jpg">
						</div>
						<figcaption>
							<h4>Image Title #5</h4>
							<p>ROW TWO FIVE Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores, tempore. Asperiores consectetur debitis dolorem iusto modi mollitia officia possimus similique? Aperiam est exercitationem facilis ipsa nihil quod reprehenderit veritatis.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-3.jpg">
						</div>
						<figcaption>
							<h4>Image Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet consequat metus. Donec sapien turpis, rhoncus sit amet efficitur ac, bibendum nec orci. Fusce scelerisque neque posuere leo dictum, quis placerat libero sodales. Donec efficitur auctor lacinia. Fusce sagittis mattis est. Maecenas ullamcorper, nulla a pellentesque molestie, urna ipsum porta est, id suscipit arcu tellus et nisl. Phasellus venenatis diam dui, ac placerat sapien semper at. Suspendisse rutrum vehicula gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-4.jpg">
						</div>
						<figcaption>
							<h4>Image Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet consequat metus. Donec sapien turpis, rhoncus sit amet efficitur ac, bibendum nec orci. Fusce scelerisque neque posuere leo dictum, quis placerat libero sodales. Donec efficitur auctor lacinia. Fusce sagittis mattis est. Maecenas ullamcorper, nulla a pellentesque molestie, urna ipsum porta est, id suscipit arcu tellus et nisl. Phasellus venenatis diam dui, ac placerat sapien semper at. Suspendisse rutrum vehicula gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-1.jpg">
						</div>
						<figcaption>
							<h4>Image Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet consequat metus. Donec sapien turpis, rhoncus sit amet efficitur ac, bibendum nec orci. Fusce scelerisque neque posuere leo dictum, quis placerat libero sodales. Donec efficitur auctor lacinia. Fusce sagittis mattis est. Maecenas ullamcorper, nulla a pellentesque molestie, urna ipsum porta est, id suscipit arcu tellus et nisl. Phasellus venenatis diam dui, ac placerat sapien semper at. Suspendisse rutrum vehicula gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-4.jpg">
						</div>
						<figcaption>
							<h4>Image Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet consequat metus. Donec sapien turpis, rhoncus sit amet efficitur ac, bibendum nec orci. Fusce scelerisque neque posuere leo dictum, quis placerat libero sodales. Donec efficitur auctor lacinia. Fusce sagittis mattis est. Maecenas ullamcorper, nulla a pellentesque molestie, urna ipsum porta est, id suscipit arcu tellus et nisl. Phasellus venenatis diam dui, ac placerat sapien semper at. Suspendisse rutrum vehicula gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-1.jpg">
						</div>
						<figcaption>
							<h4>Image Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet consequat metus. Donec sapien turpis, rhoncus sit amet efficitur ac, bibendum nec orci. Fusce scelerisque neque posuere leo dictum, quis placerat libero sodales. Donec efficitur auctor lacinia. Fusce sagittis mattis est. Maecenas ullamcorper, nulla a pellentesque molestie, urna ipsum porta est, id suscipit arcu tellus et nisl. Phasellus venenatis diam dui, ac placerat sapien semper at. Suspendisse rutrum vehicula gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-3.jpg">
						</div>
						<figcaption>
							<h4>Image Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet consequat metus. Donec sapien turpis, rhoncus sit amet efficitur ac, bibendum nec orci. Fusce scelerisque neque posuere leo dictum, quis placerat libero sodales. Donec efficitur auctor lacinia. Fusce sagittis mattis est. Maecenas ullamcorper, nulla a pellentesque molestie, urna ipsum porta est, id suscipit arcu tellus et nisl. Phasellus venenatis diam dui, ac placerat sapien semper at. Suspendisse rutrum vehicula gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<figure class="mb-0 p-2 w-25">
						<div class="gallery-image-mask">
							<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/gallery-2.jpg">
						</div>
						<figcaption>
							<h3>Image Title</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sit amet consequat metus. Donec sapien turpis, rhoncus sit amet efficitur ac, bibendum nec orci. Fusce scelerisque neque posuere leo dictum, quis placerat libero sodales. Donec efficitur auctor lacinia. Fusce sagittis mattis est. Maecenas ullamcorper, nulla a pellentesque molestie, urna ipsum porta est, id suscipit arcu tellus et nisl. Phasellus venenatis diam dui, ac placerat sapien semper at. Suspendisse rutrum vehicula gravida. Orci varius natoque penatibus et magnis dis parturient montes, nascetur.</p>
							<a class="btn btn-primary" href="">Learn More</a>
						</figcaption>
					</figure>
					<div class="current-photo-details d-none m-2 w-100" data-js-closeable="true">
						<div class="js-photo-box p-5 w-50"></div>
						<div class="js-photo-details-box pt-5 pr-5 pb-5 pl-2 w-50"></div>
						<button class="js-close-photo-details btn btn-close rounded-circle">X</button>
					</div>
					<figure class="gallery-placeholder m-0">&nbsp;</figure>
				</div>
			</div>
		</div>
	</section>
</div>

<!-- Lead Capture -->
<div class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col col-9 mx-auto">
				<h1 class="mb-4 text-center">
					<img class="mr-3" src="<?php bloginfo('template_url'); ?>/images/fpo/Icon_LeadCapture.svg" width="85">
					Lead Capture Form
				</h1>
				<div class="mb-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus turpis vel gravida vehicula. Integer ligula ipsum, gravida ut fringilla vel, pellentesque quis justo. Mauris nibh mauris, bibendum a sem vel, tempor mollis sem.</p>
				</div>

				<form class="form-inline justify-content-center mb-2">
					<div class="form-group">
						<label for="name" class="sr-only">Name</label>
						<input type="text" class="form-control px-3" id="name" placeholder="Name">
					</div>
					<div class="form-group mx-3">
						<label for="email" class="sr-only">Email</label>
						<input type="email" class="form-control px-3" id="email" placeholder="Email">
					</div>
					<button type="submit" class="btn btn-primary">Learn More</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Testimonial -->
<div class="parallax-section overflow-hidden text-white">
	<div class="bg-image parallax-bg" style="background: url('<?php bloginfo('template_url'); ?>/images/fpo/street.jpg') center no-repeat; background-size: cover;"></div>
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
	<section class="container pt-4 pb-5">
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
	</section>
	
	<!-- 5 Tips for Selling -->
	<section class="container pt-4 pb-5 text-center">
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
	</section>
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
		<section class="container pt-4">
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
		</section>
	</div>
<?php endif; ?>

<?php
get_footer();