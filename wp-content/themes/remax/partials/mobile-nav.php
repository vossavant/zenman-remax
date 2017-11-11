<input class="mobile-menu-toggle" id="mobile-nav" type="checkbox">
<label for="mobile-nav"></label>
<?php
$args = array(
	'container' => '',
	'menu_class' => 'mobile-menu list-unstyled text-left',
	'item_spacing' => 'discard',
	'theme_location' => 'mobile'
);
wp_nav_menu($args);