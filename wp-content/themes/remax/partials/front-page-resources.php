<?php
/**
 * Called from front-page.php, this template partial
 * loads three curated blog posts and displays them
 * if the "visibility" field in the WP admin is true.
 */

if (get_field('resources_visibility')) : ?>
	<div class="py-5">
		<div class="container pt-4">
			<h1 class="mb-5 text-center"><?php the_field('resources_section_title'); ?></h1>
			<?php if ($real_estate_resources = get_field('resources_blog_posts')) : ?>
				<div class="card-deck card-deck-posts mb-4 pb-2">
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
						<div class="card position-relative rounded-0">
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
<?php endif;