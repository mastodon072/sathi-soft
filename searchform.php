<div class="searchform">
	<form role="search" method="get"  action="<?php echo esc_url(home_url( '/' )); ?>">

	<input type="text" placeholder="Search..." class="form-control" name = "s"  value="<?php echo get_search_query() ?>" required />
</form>
</div>