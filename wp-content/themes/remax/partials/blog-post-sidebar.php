<?php
/**
 * This partial is loaded from sidebar.php and controls display
 * of the mini blog posts in the sidebar (e.g., under "Related"
 * and "Social").
 */
?>

<article class="blog-post blog-post-small gallery mx-0 py-3">
	<a class="d-flex" href="<?php the_permalink(); ?>">
		<div class="image-grow-on-hover mr-3 position-relative">
			<img class="mw-100" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-small'); ?>">
		</div>
		<div class="w-50">
			<h1><?php the_title(); ?></h1>
			<span class="blog-post-permalink">Read More &rsaquo;</span>
		</div>
	</a>
</article>