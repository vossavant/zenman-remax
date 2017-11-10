<?php
/**
 * This template controls display of the page that is set
 * as the "Front Page" in Settings → Reading.
 */
get_header();


/**
 * Load flexible content sections.
 */
if (have_rows('page_sections')) :
	while (have_rows('page_sections')) :
		the_row();
		
		$section_background = get_sub_field('section_background');
		$section_parallax = get_sub_field('section_parallax');
		
		if ($section_background == 'bg-image') {
			$section_background_image = 'style="background: url(\'' . get_sub_field('section_background_image') . '\') center no-repeat; background-size: cover;"';
		} else {
			$section_background_image = null;
		}
		?>
		
		<?php if ($section_parallax) : ?>
			<div class="parallax-section overflow-hidden text-white">
				<div class="bg-image bg-parallax py-5" <?= $section_background_image; ?>></div>
		<?php else: ?>
			<div class="<?=$section_background; ?> py-5<?php if ($section_background_image) { echo ' text-white'; } ?>" <?= $section_background_image; ?>>
		<?php endif; ?>

				<div class="container py-4">
			
					<?php
					if (have_rows('section_layout')) :
						while (have_rows('section_layout')) :
							the_row();
							
							switch ($layout = get_row_layout()) :
								default:
									get_template_part('partials/layout', $layout);
									break;
							endswitch;
						endwhile;
					endif;
					?>
			
				</div>
			</div>
		
		<?php
	endwhile;
endif;

get_template_part('partials/front-page', 'resources');

get_footer();