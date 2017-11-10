<?php
/**
 * Global search form. Loaded in other templates by the
 * `get_search_form` method.
 */
?>

<form action="<?= home_url('/'); ?>" class="form-inline form-search" method="get">
	<div class="form-group w-100">
		<label for="name" class="sr-only">Search</label>
		<input class="form-control w-100" id="name" maxlength="250" name="s" placeholder="Search" type="search" value="<?= get_search_query(); ?>">
	</div>
</form>