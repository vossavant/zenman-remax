<?php
/**
 * Global search form. Loaded in other templates by the
 * `get_search_form` method.
 */
?>

<form class="form-inline<?php if (is_home()) { echo ' position-absolute'; } ?> search-form">
	<div class="form-group w-100">
		<label for="name" class="sr-only">Search</label>
		<input type="text" class="form-control w-100" id="name" placeholder="Search">
	</div>
<!--	<button type="submit" class="btn btn-unstyled px-0">Submit &rsaquo;</button>-->
</form>