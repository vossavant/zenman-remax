<?php include 'whitespace.php'; ?>

<div class="row<?= $whitespace; ?>">
	<div class="col col-12 col-lg-9 mx-auto">
		<h1 class="mb-2 mb-md-4 text-left text-md-center"><?php the_sub_field('title'); ?></h1>
		<?php the_sub_field('content'); ?>
	</div>
</div>