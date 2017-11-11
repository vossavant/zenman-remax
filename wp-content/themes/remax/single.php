<?php
get_header();
?>

<div class="container my-2 my-md-4 py-2 mx-auto">
	<div class="row">
		<section class="col-12 col-md-8">
			<img class="mw-100 w-100" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-large'); ?>">
			<div class="single-post-meta d-flex justify-content-between my-3">
				<?php get_template_part('partials/blog-post-social'); ?>
				<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('m.j.y'); ?></time>
			</div>
			
			<article class="single-post-content pt-0 pt-lg-3">
				<h1><?php the_title(); ?></h1>
				<?php edit_post_link('Edit Post', null, null, null, 'btn btn-primary mb-4'); ?>
				<?php the_content(); ?>
			</article>

			<div class="single-post-meta mt-3 pt-3">
				<div class="single-post-author pb-2"><?php the_author(); ?></div>
				<div class="pb-2">
					<span class="single-post-category">
						<?php the_category(','); ?>
					</span>
					
					<?php if ($post_tags = get_the_tags()) : ?>
						<span class="single-post-tags ml-3 pl-3 position-relative">
							<?php foreach($post_tags as $tag) : ?>
								<a href="<?= get_tag_link($tag->term_id); ?>"><?= $tag->name; ?></a><?php if (next($post_tags)) { echo ', '; } ?>
							<?php endforeach; ?>
						</span>
					<?php endif; ?>
				</div>
				<?php get_template_part('partials/blog-post-social'); ?>
			</div>
			
			<?php comments_template(); ?>
		</section>
		
		<?php get_sidebar(); ?>
	</div>
</div>

<?php
get_footer();