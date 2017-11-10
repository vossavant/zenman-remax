<?php
/**
 * These social media sharing links appear near the title
 * of all blog posts.
 */
?>

<ul class="blog-post-social d-flex float-right list-unstyled mb-0 position-relative">
	<li>
		<a class="social social-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(get_permalink()); ?>">Facebook</a>
	</li>
	<li>
		<a class="social social-linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= urlencode(get_permalink()); ?>&title=<?php the_title(); ?>&summary=<?= get_the_excerpt(); ?>">LinkedIn</a>
	</li>
	<li>
		<a class="social social-twitter" href="https://twitter.com/home?status=<?= urlencode(get_permalink()); ?>">Twitter</a>
	</li>
</ul>