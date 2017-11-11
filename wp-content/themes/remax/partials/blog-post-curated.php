<?php
/**
 * Called from front-page.php, this template partial
 * loads three curated blog posts and displays them
 * if the "visibility" field in the WP admin is true.
 */

if (get_field('resources_visibility')) : ?>
	<div class="py-5">
		<div class="container pt-4">
			<h1 class="mb-2 mb-md-4 text-center"><?php the_field('resources_section_title'); ?></h1>
			<?php if ($real_estate_resources = get_field('resources_blog_posts')) : ?>
				<div class="curated-posts mb-4 pb-2 row">
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
						<div class="curated-post col-12 col-md-6 col-xl-4">
							<a class="d-flex position-relative" href="<?php the_permalink(); ?>">
								<div class="card-image-wrap image-grow-on-hover">
									<img class="mw-100" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-medium'); ?>">
								</div>
								<div class="align-items-bottom card-body position-absolute text-white">
									<h5 class="card-title font-weight-bold mb-1 text-white"><?= $first_category_name; ?></h5>
									<p class="card-text mb-0 mb-xl-2"><?php the_title(); ?></p>
									<p class="card-text mb-2">
										<span class="read-more text-primary">Read More &rsaquo;</span>
									</p>
									<time class="card-text" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.j.y'); ?></time>
								</div>
							</a>
							<?php if ($post_tags = get_the_tags()) : ?>
								<p class="card-text card-tags">
									<?php foreach($post_tags as $tag) : ?>
										<a href="<?= get_tag_link($tag->term_id); ?>"><?= $tag->name; ?></a><?php if (next($post_tags)) { echo ', '; } ?>
									<?php endforeach; ?>
								</p>
							</span>
							<?php endif; ?>
						</div>
						<?php
					endforeach;
					wp_reset_postdata();
					?>
				</div>
			<?php endif; ?>
			
			<?php if ($button_text = get_field('resources_button_text')) : ?>
				<div class="text-center">
					<a class="btn btn-primary" href="<?= get_permalink(get_option('page_for_posts')); ?>"><?= $button_text; ?></a>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif;