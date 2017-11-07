<div class="col-4 sidebar">
	<?php if (is_single()) : ?>
		<section>
			<h1 class="h4 font-weight-bold icon icon-2 icon-document text-primary">Related Posts</h1>

			<article class="blog-post blog-post-small d-flex py-3">
				<div class="pr-3 w-50">
					<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/Placeholder_5.jpg">
				</div>
				<div class="w-50">
					<h1>Pros and Cons of Solar Panels</h1>
					<a class="blog-post-permalink" href="">Read More &rsaquo;</a>
				</div>
			</article>
			<article class="blog-post blog-post-small d-flex py-3">
				<div class="pr-3 w-50">
					<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/Placeholder_6.jpg">
				</div>
				<div class="w-50">
					<h1>6 easy, affordable smart home features that could help you sell...</h1>
					<a class="blog-post-permalink" href="">Read More &rsaquo;</a>
				</div>
			</article>
			<article class="blog-post blog-post-small d-flex py-3">
				<div class="pr-3 w-50">
					<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/Placeholder_7.jpg">
				</div>
				<div class="w-50">
					<h1>Buying a Home? 4 Signs It’s Time to Call An Agent</h1>
					<a class="blog-post-permalink" href="">Read More &rsaquo;</a>
				</div>
			</article>
		</section>
	
	<?php else :
		$popular_posts = $wpdb->get_results("SELECT postid FROM wp_popularpostsdata ORDER BY pageviews DESC LIMIT 3");
		$popular_posts_array = array();
		
		foreach ($popular_posts as $popular_post) :
			array_push($popular_posts_array, $popular_post->postid);
		endforeach;
		
		$args = array(
			'orderby' => 'post__in',
			'post__in' => $popular_posts_array,
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 3
		);
		
		$popular_posts = new WP_Query($args);
	
		if ($popular_posts->have_posts()) : ?>
			<section class="mb-4 pb-2">
				<h1 class="h4 font-weight-bold icon icon-3 icon-megaphone text-primary">Now Trending</h1>
				
				<?php
				while ($popular_posts->have_posts()) :
					$popular_posts->the_post();
					?>
					<article class="blog-post blog-post-small d-flex py-3">
						<div class="pr-3 w-50">
							<img class="mw-100" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-small'); ?>">
						</div>
						<div class="w-50">
							<h1><?php the_title(); ?></h1>
							<a class="blog-post-permalink" href="<?php the_permalink(); ?>">Read More &rsaquo;</a>
						</div>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
				
				<a class="d-block py-3" href="">View All Trending &rsaquo;</a>
			</section>
			
			<?php
			wp_reset_postdata();
		endif;
		?>
		
		<section class="mb-4 pb-2">
			<h1 class="h4 font-weight-bold icon icon-3 icon-chat text-primary">On Social</h1>
			
			<article class="blog-post blog-post-small d-flex py-3">
				<div class="pr-3 w-50">
					<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/Placeholder_5.jpg">
				</div>
				<div class="w-50">
					<h1>Pros and Cons of Solar Panels</h1>
					<a class="blog-post-permalink" href="">Read More &rsaquo;</a>
				</div>
			</article>
			<article class="blog-post blog-post-small d-flex py-3">
				<div class="pr-3 w-50">
					<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/Placeholder_6.jpg">
				</div>
				<div class="w-50">
					<h1>6 easy, affordable smart home features that could help you sell...</h1>
					<a class="blog-post-permalink" href="">Read More &rsaquo;</a>
				</div>
			</article>
			<article class="blog-post blog-post-small d-flex py-3">
				<div class="pr-3 w-50">
					<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/Placeholder_7.jpg">
				</div>
				<div class="w-50">
					<h1>Buying a Home? 4 Signs It’s Time to Call An Agent</h1>
					<a class="blog-post-permalink" href="">Read More &rsaquo;</a>
				</div>
			</article>
			
			<a class="d-block py-3" href="">View All Social &rsaquo;</a>
		</section>
		
		<section>
			<h1 class="h4 font-weight-bold icon icon-3 icon-email text-primary">Newsletter Sign-Up</h1>
			<form class="form-inline pt-3">
				<div class="form-group w-100">
					<label for="name" class="sr-only">Name</label>
					<input type="text" class="form-control mb-2 px-3 w-100" id="name" placeholder="Name">
				</div>
				<button type="submit" class="btn btn-unstyled px-0">Submit &rsaquo;</button>
			</form>
		</section>
	<?php endif; ?>
</div>