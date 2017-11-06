<?php
/**
 * These social media sharing links appear near the title
 * of all blog posts.
 */

// TODO: update constants below - these should be replaced with sharing URLs (e.g., using bit.ly), not the actual social media pages
?>

<ul class="blog-post-social d-flex float-right list-unstyled mb-0 position-relative">
	<?php if (FACEBOOK_URL) : ?>
		<li>
			<a class="social social-facebook" href="<?= FACEBOOK_URL; ?>">Facebook</a>
		</li>
	<?php endif; ?>
	<?php if (LINKEDIN_URL) : ?>
		<li>
			<a class="social social-linkedin" href="<?= LINKEDIN_URL; ?>">LinkedIn</a>
		</li>
	<?php endif; ?>
	<?php if (TWITTER_URL) : ?>
		<li>
			<a class="social social-twitter" href="<?= TWITTER_URL; ?>">Twitter</a>
		</li>
	<?php endif; ?>
</ul>