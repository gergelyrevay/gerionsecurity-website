	<div id="sidebar">
                <?php get_menu(); ?>
<!--		<h3>category</h3>
		<ul class="ul-cat">
			<?php wp_list_categories('show_count=1&title_li='); ?>
		</ul>-->
		<h3>archives</h3>
		<ul class="ul-archives">
			<?php wp_get_archives('show_count=1type=monthly'); ?>
		</ul>
		</ul>
	</div>
	<!--/sidebar -->
