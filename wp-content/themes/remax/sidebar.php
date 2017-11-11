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
		$popular_posts = remax_get_popular_posts(3);
	
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
				
				<a class="d-block py-3" href="<?php bloginfo('home'); ?>/trending">View All Trending &rsaquo;</a>
			</section>
			
			<?php
			wp_reset_postdata();
		endif;
	
		if ($trending_on_social_posts = get_field('social_trending_posts', 'option')) : ?>
			<section class="mb-4 pb-2">
				<h1 class="h4 font-weight-bold icon icon-3 icon-chat text-primary">On Social</h1>
				<?php
				foreach ($trending_on_social_posts as $key => $post) :
					if ($key > 2) {
						break;
					}
					
					setup_postdata($post);
					get_template_part('partials/blog-post-sidebar');
				endforeach;
				?>
				
				<a class="d-block py-3" href="<?php bloginfo('home'); ?>/trending-social">View All Social &rsaquo;</a>
			</section>
			<?php
		endif; ?>
		
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