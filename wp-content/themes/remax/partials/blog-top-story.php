<?php
/**
 * This partial is loaded from index.php and controls display
 * of the "Top Story" blog post on the blog main page and on
 * category archive pages.
 */
?>

<article class="overflow-hidden position-relative top-story">
	<img class="mw-100" src="<?= get_the_post_thumbnail_url($post->ID, 'top-story'); ?>">
	<div class="d-flex flex-wrap p-4 top-story-content">
		<h1 class="align-self-start font-weight-bold h4 icon icon-star">Top Story</h1>
		<div class="align-self-end">
			<p class="h4 mb-4 pb-4 position-relative"><?php the_title(); ?></p>
			<div class="d-flex align-items-center justify-content-between">
				<a href="<?php the_permalink(); ?>">Read More &rsaquo;</a>
				<?php get_template_part('partials/blog-post-social'); ?>
			</div>
		</div>
	</div>
</article>