<?php
get_header();
?>

	<div class="container my-4 py-2 mx-auto">
		
		<?php
		/**
		 * Get latest sticky post in category. If none exists, get most recent post.
		 * This breaks down if a category does NOT have at least one sticky post
		 * (necessitating the second query below, which always pulls latest post).
		 */
		$get_latest_sticky_post = array(
			'category__in' => get_query_var('cat'),
			'ignore_sticky_posts' => 1,
			'post__in' => get_option('sticky_posts'),
			'posts_per_page' => 1
		);
		
		$get_latest_post = array(
			'category__in' => get_query_var('cat'),
			'ignore_sticky_posts' => 1,
			'posts_per_page' => 1
		);
		
		$top_story = new WP_Query($get_latest_sticky_post);
		$top_story_post_id = null;
		
		
		/**
		 * If there is a sticky post in the current category, show it
		 */
		if ($top_story->have_posts()) :
			while ($top_story->have_posts()) :
				$top_story->the_post();
				$top_story_post_id = $post->ID;
				get_template_part('partials/blog-top-story');
			endwhile;
			wp_reset_postdata();
		
		/**
		 * Otherwise, show the most recent post
		 */
		else:
			$latest_story = new WP_Query($get_latest_post);
			
			if ($latest_story->have_posts()) :
				while ($latest_story->have_posts()) :
					$latest_story->the_post();
					$top_story_post_id = $post->ID;
					get_template_part('partials/blog-top-story');
				endwhile;
				wp_reset_postdata();
			endif;
		endif;
		
		/**
		 * Build a query that excludes the post displayed in the "Top Story"
		 * box, whether or not that post is sticky.
		 */
		$get_posts_exclude_top_story = array(
			'category__in' => get_query_var('cat'),
			'post__not_in' => array($top_story_post_id),
			'posts_per_page' => 8
		);
		$regular_posts = new WP_Query($get_posts_exclude_top_story);
		?>

		<div class="my-4 pt-2 row">
			<?php if ($regular_posts->have_posts()) : ?>
				<section class="col-8">
					<h1 class="h4 font-weight-bold icon icon-2 icon-calendar text-primary">Happening Now</h1>
					<div class="gallery row">
						<?php
						while ($regular_posts->have_posts()) :
							$regular_posts->the_post();
							
							// get the first category (assumption: each post is only in one category)
							$post_categories = get_the_category();
							if (!empty($post_categories)) :
								$first_category_name = $post_categories[0]->name;
							endif;
							?>
							<article class="col-6 blog-post p-3 pb-5">
								<div class="gallery-image-mask position-relative">
									<img class="mw-100" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-medium'); ?>">
									<div class="blog-post-meta d-flex align-items-center justify-content-between p-3">
										<?php if (!empty($first_category_name)) : ?>
											<span class="h5 m-0 position-relative"><?= $first_category_name; ?></span>
										<?php endif; ?>
										<?php get_template_part('partials/blog-post-social'); ?>
									</div>
								</div>
								<time class="blog-post-date d-block pt-3 pb-2 position-relative text-right" datetime=""><?php the_date('m.j.y'); ?></time>
								<h1 class="h4">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h1>
								<a class="blog-post-permalink" href="<?php the_permalink(); ?>">Read More &rsaquo;</a>
							</article>
							<?php
						endwhile;
						wp_reset_postdata();
						?>
					</div>
					[ pagination here ]
				</section>
			<?php endif; ?>
			
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php
get_footer();