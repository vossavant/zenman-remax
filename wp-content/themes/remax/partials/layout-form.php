<?php
include 'whitespace.php';

$form = get_sub_field('form');
$icon = get_sub_field('icon');
?>

<div class="row<?= $whitespace; ?>">
	<div class="col col-9 mx-auto text-center">
		<?php if ($form == 'lead-capture') : ?>
			<h1 class="mb-4 text-center">
				<?php if ($icon) : ?>
					<img class="mr-3" src="<?= $icon; ?>" width="85">
				<?php endif; ?>
				<?php the_sub_field('title'); ?>
			</h1>
		
		<?php elseif ($form == 'search') : ?>
			<h1 class="d-flex align-items-end justify-content-center">
				<?php if ($icon) : ?>
					<img src="<?= $icon; ?>" width="85">
				<?php endif; ?>
				
				<?php the_sub_field('title'); ?>
			</h1>
		<?php endif; ?>
		
		<?php if ($subtitle = get_sub_field('subtitle')) : ?>
			<h2 class="font-weight-bold mb-4 pb-4 red-hash red-hash-after red-hash-center red-hash-wide"><?= $subtitle; ?></h2>
		<?php endif; ?>

		<?php if ($text = get_sub_field('text')) : ?>
			<div class="mb-5">
				<?= $text; ?>
			</div>
		<?php endif; ?>
		
		<?php if ($form == 'lead-capture') : ?>
			<?= do_shortcode('[contact-form-7 id="354" title="Lead Capture Form"]'); ?>
		<?php elseif ($form == 'search') : ?>
			<div id="remax_search1" class="remax_search mx-auto w-75"></div>
		<?php endif; ?>
	</div>
</div>