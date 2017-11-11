<?php
/**
 * This partial is loaded from sidebar.php and controls display
 * of the mini blog posts in the sidebar (e.g., under "Related"
 * and "Social").
 */
?>

<article class="blog-post blog-post-small gallery mx-0 py-2 py-lg-3">
	<a class="row" href="<?php the_permalink(); ?>">
		<div class="col-6 col-md-12 col-lg-6 image-grow-on-hover mb-2 mb-lg-0 position-relative pr-lg-0">
			<img class="mw-100 w-100" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-small'); ?>">
		</div>
		<div class="col-6 col-md-12 col-lg-6">
			<h1><?php the_title(); ?></h1>
			<span class="blog-post-permalink">Read More &rsaquo;</span>
		</div>
	</a>
</article>