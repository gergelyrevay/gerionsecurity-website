<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<label class="hidden" for="s"><?php _e(''); ?></label>
	<input type="text" value="<?php the_search_query(); ?>" name="search input" id="search_input" class="inputbox" />
	<input type="submit" id="searchsubmit" value="GO" />
</form>
