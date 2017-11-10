<div class="col-4 sidebar">
	<?php if (is_single()) : ?>
		<section>
			<h1 class="h4 font-weight-bold icon icon-2 icon-document text-primary">Related Posts</h1>
			<?php
			$number_of_manually_selected_posts = 0;
			
			if ($manual_related_posts = get_field('related_posts_manual')) :
				$args = array(
					'ignore_sticky_posts' => 1,
					'orderby' => 'post__in',
					'post__in' => $manual_related_posts,
					'posts_per_page' => MAX_RELATED_POSTS,
				);
				
				$query = new WP_Query($args);
		
				while ($query->have_posts()) :
					$query->the_post();
					get_template_part('partials/blog-post-sidebar');
					$number_of_manually_selected_posts++;
				endwhile;
				wp_reset_query();
			endif;
			
			
			/**
			 * Only if fewer than MAX_RELATED_POSTS posts are manually selected
			 * do we fill in missing spots.
			 */
			if ($number_of_manually_selected_posts < MAX_RELATED_POSTS) :
				
				/**
				 * Use tags as a basis for fetching related posts. For more details:
				 * https://www.hongkiat.com/blog/wordpress-related-posts-without-plugins/
				 */
				$tags = wp_get_post_tags($post->ID);
				
				if ($tags) :
					$tag_ids = array();
					foreach ($tags as $individual_tag) :
						$tag_ids[] = $individual_tag->term_id;
					endforeach;
					
					$args = array(
						'ignore_sticky_posts' => 1,
						'post__not_in' => array($post->ID),
						'posts_per_page' => (MAX_RELATED_POSTS - $number_of_manually_selected_posts),
						'tag__in' => $tag_ids
					);
					
					$tags_query = new WP_Query($args);
					
					while ($tags_query->have_posts()) :
						$tags_query->the_post();
						get_template_part('partials/blog-post-sidebar');
					endwhile;
					wp_reset_query();
					
				else :
					if ($number_of_manually_selected_posts == 0) :
						echo '<p>No related content found!</p>';
					endif;
				endif;
			endif;
			?>
		</section>
	
	<?php
	// else: not a post permalink page
	else :
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
					get_template_part('partials/blog-post-sidebar');
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
			
			<article class="blog-post blog-post-small gallery d-flex mx-0 py-3">
				<div class="image-grow-on-hover mr-3 position-relative">
					<a href="<?php the_permalink(); ?>">
						<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/Placeholder_5.jpg">
					</a>
				</div>
				<div class="w-50">
					<h1>Pros and Cons of Solar Panels</h1>
					<a class="blog-post-permalink" href="">Read More &rsaquo;</a>
				</div>
			</article>
			<article class="blog-post blog-post-small gallery d-flex mx-0 py-3">
				<div class="image-grow-on-hover mr-3 position-relative">
					<a href="<?php the_permalink(); ?>">
						<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/Placeholder_6.jpg">
					</a>
				</div>
				<div class="w-50">
					<h1>6 easy, affordable smart home features that could help you sell...</h1>
					<a class="blog-post-permalink" href="">Read More &rsaquo;</a>
				</div>
			</article>
			<article class="blog-post blog-post-small gallery d-flex mx-0 py-3">
				<div class="image-grow-on-hover mr-3 position-relative">
					<a href="<?php the_permalink(); ?>">
						<img class="mw-100" src="<?php bloginfo('template_url'); ?>/images/fpo/Placeholder_7.jpg">
					</a>
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