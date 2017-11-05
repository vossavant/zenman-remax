<?php
get_header();
?>

<!-- Intro -->
<div class="bg-slant py-5">
	<section class="container pt-4 pb-5">
		<h1 class="mb-4 text-center">Real Estate (Placeholder)</h1>
		<div class="mb-5 mx-auto w-75">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut leo justo. Mauris elit lectus, tempus ac eros ut, ornare egestas orci. Fusce blandit orci vitae finibus tempor. Ut efficitur lorem lacus, sit amet dignissim lacus tempor et. Duis eget ante sagittis, hendrerit eros sed, aliquam justo.</p>
		</div>

		<div class="row justify-content-center">
			<div class="card-deck col-xl-10">
				<div class="card border-0 mx-5 rounded-0 shadow">
					<div class="card-body">
						<h3 class="card-title mb-4 text-center">Buyers Guide</h3>
						<img class="d-block mx-auto" src="<?php bloginfo('template_url'); ?>/images/fpo/Icon_BuyersGuide.svg" width="120">
						<p class="card-text my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec ex condimentum, lobortis eros suscipit, imperdiet.</p>
						<div class="mt-4 text-center">
							<a href="#" class="btn btn-primary">Buy a Home</a>
						</div>
					</div>
				</div>
				<div class="card border-0 mx-5 rounded-0 shadow">
					<div class="card-body">
						<h3 class="card-title mb-4 text-center">Sellers Guide</h3>
						<img class="d-block mx-auto" src="<?php bloginfo('template_url'); ?>/images/fpo/Icon_SellersGuide.svg" width="120">
						<p class="card-text my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec ex condimentum, lobortis eros suscipit, imperdiet.</p>
						<div class="mt-4 text-center">
							<a href="#" class="btn btn-primary">Sell Your Home</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="container pt-5">
		<h1 class="mb-4 text-center">
			<img src="<?php bloginfo('template_url'); ?>/images/fpo/Icon_StartJourney.svg" width="85">
			Start Your Journey Here
		</h1>
		<p>Widget to be provided by Remax. Code below (see source):</p>
		<!--	<script src="http://remax.com/resources_resp/js/app/ui-modules/searchwidget/rmx-search.js"></script>-->
		<!--	<div id="remax_search1" class="remax_search"></div>-->
		<!--	<script>-->
		<!--		var options = {-->
		<!--			_blank: true,-->
		<!--			count: 10,-->
		<!--			autoEnter: true,-->
		<!--			buttonText: "Let's Go",-->
		<!--			placeholder: 'City and State, Address or Zip Code'-->
		<!--		};-->
		<!---->
		<!---->
		<!--		$(document).ready(function() {-->
		<!--			$('.remax_search').remaxseach(options);-->
		<!--		});-->
		<!--	</script>-->
	</section>

	<!-- Image Gallery -->
	<section class="container pt-5">
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
	</section>
</div>

<!-- Lead Capture -->
<div class="bg-light py-5">
	<div class="container">
		<h1 class="mb-4 text-center">
			<img class="mr-3" src="<?php bloginfo('template_url'); ?>/images/fpo/Icon_LeadCapture.svg" width="85">
			Lead Capture Form
		</h1>
		<div class="mx-auto mb-4 w-75">
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

<!-- Testimonial -->
<div class="bg-image overflow-hidden text-white" style="background: url('<?php bloginfo('template_url'); ?>/images/fpo/street.jpg') center no-repeat; background-size: cover;">
	<div class="container">
		<blockquote class="mb-0 mx-auto w-75">
			<p class="pt-3">This is a testimonial quote consectetur adipiscing elit. Integer dapibus efficitur ligula vulputate ultricies. Id odio eros. Integer tristique varius nibh eu convallis.</p>
		</blockquote>
	</div>
</div>

<div class="bg-slant bg-slant-reverse py-5">
	<!-- Foreclosure -->
	<section class="container pt-4 pb-5">
		<h1 class="mb-4 text-center">Behind the Foreclosure Process (Placeholder)</h1>
		<div class="mb-5 mx-auto w-75">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias autem, blanditiis cupiditate dolore eaque est ex expedita illo illum ipsa labore natus necessitatibus nesciunt non quae quisquam sapiente tempore vero.</p>
		</div>
		
		<ol class="d-flex flex-wrap justify-content-between list-stylized list-unstyled mb-0">
			<li>The borrower/owner reinstates the loan by paying off the default amount during a grace period determined by state law. This grace period is also known as pre-foreclosure.</li>
			<li>The borrower/owner sells the property to a third party during the pre-foreclosure period. The sale allows the borrower/owner to pay off the loan and avoid having a foreclosure on his or her credit history.</li>
			<li>A third party buys the property at a public auction at the end of the pre-foreclosure period.</li>
			<li>The lender takes ownership of the property, usually with the intent to re-sell it on the open market. The lender can take ownership either through an agreement with the borrower/owner during pre-foreclosure, via a short sale foreclosure or by buying back the property at the public auction. Properties repossessed by the lender are also known as bank-owned or REO properties (Real Estate Owned by the lender).</li>
		</ol>

		<div class="text-center">
			<a class="btn btn-primary" href="">Next Steps</a>
		</div>
	</section>
	
	<!-- 5 Tips for Selling -->
	<section class="container pt-4 pb-5">
		<h1 class="mb-4 text-center">Top 5 Tips for Selling (placeholder)</h1>
		<p>This lil widget can be gotten from zenman's homepage</p>
	</section>
</div>

<!-- Half Column -->
<div class="bg-light py-5">
	<div class="container">
		<h1 class="mb-4 text-center">Real Estate 1/2 Column</h1>
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
		<h1 class="mb-4 text-center">Real Estate 1/3 Column</h1>
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
		<h1 class="mb-4 text-center">Real Estate 2/3 Column</h1>
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

<!-- Real Estate Resources -->
<div class="py-5">
	<section class="container pt-4">
		<h1 class="mb-4 text-center">Real Estate Resources</h1>
		<div class="card-deck card-deck-posts mb-4 pb-2 text-left">
			<div class="card m-2 position-relative rounded-0">
				<div class="card-image-wrap">
					<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/house.jpg" alt="">
				</div>
				<div class="card-body position-absolute text-white">
					<h5 class="card-title font-weight-bold mb-1 text-white">For Buyers</h5>
					<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<p class="card-text mb-2">
						<a class="text-primary" href="#">Read More &rsaquo;</a>
					</p>
					<p class="card-text">11.1.17</p>
					<p class="card-text card-tags"><a href="">Tag 1</a>, <a href="">Tag 2</a>, <a href="">Tag 3</a></p>
				</div>
			</div>
			<div class="card m-2 position-relative rounded-0">
				<div class="card-image-wrap">
					<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/house.jpg" alt="">
				</div>
				<div class="card-body position-absolute text-white">
					<h5 class="card-title font-weight-bold mb-1 text-white">For Sellers</h5>
					<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<p class="card-text mb-2">
						<a class="text-primary" href="#">Read More &rsaquo;</a>
					</p>
					<p class="card-text">11.1.17</p>
					<p class="card-text card-tags"><a href="">Tag 1</a>, <a href="">Tag 2</a>, <a href="">Tag 3</a></p>
				</div>
			</div>
			<div class="card m-2 position-relative rounded-0">
				<div class="card-image-wrap">
					<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/house.jpg" alt="">
				</div>
				<div class="card-body position-absolute text-white">
					<h5 class="card-title font-weight-bold mb-1 text-white">For Fun</h5>
					<p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					<p class="card-text mb-2">
						<a class="text-primary" href="#">Read More &rsaquo;</a>
					</p>
					<p class="card-text">11.1.17</p>
					<p class="card-text card-tags"><a href="">Tag 1</a>, <a href="">Tag 2</a>, <a href="">Tag 3</a></p>
				</div>
			</div>
		</div>
		
		<div class="pt-4 text-center">
			<a class="btn btn-primary" href="">Read More</a>
		</div>
	</section>
</div>

<?php
get_footer();