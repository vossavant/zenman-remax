<?php
/**
 * This partial is loaded from sidebar.php and controls display
 * of the mini blog posts in the sidebar (e.g., under "Related"
 * and "Social").
 */
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