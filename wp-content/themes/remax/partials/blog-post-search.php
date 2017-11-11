<article class="d-flex mb-5 search-result">
	<div class="image-grow-on-hover mr-4 position-relative">
		<a href="<?php the_permalink(); ?>">
			<img class="mw-100" src="<?= get_the_post_thumbnail_url($post->ID, 'featured-small'); ?>">
		</a>
	</div>
	<div class="w-75">
		<h1 class="h4">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h1>
		<p class="mb-0"><?= get_the_excerpt(); ?></p>
	</div>
</article>