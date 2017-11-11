<?php
/**
 * Called from each of the "layout-[layout_name]" partials,
 * this checks to see if any whitespace is set on each section.
 */
$whitespace = null;

if (have_rows('add_whitespace')) :
	while (have_rows('add_whitespace')) :
		the_row();
		
		if (get_sub_field('top')) {
			$whitespace .= ' pt-3 pt-md-3';
		}
		
		if (get_sub_field('bottom')) {
			$whitespace .= ' pb-3 pb-md-5';
		}
	endwhile;
endif;
?>