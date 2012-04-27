<?php _log('search.php runs'); get_header(); ?>
<div id="sidebar_and_content">
<div id="sidebar">
<div id="sidebar-double-wrapper">
<?php get_menu(); ?>
</div>
</div>

	<div id="content">
        <div class='shareinpost'>
        <?php my_share_links(); ?>
        </div>
<?php _e( 'Search Results for: ', 'your-theme' ); ?><span><?php the_search_query(); ?></span>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                <div class="navigation">
                        <span class="previous-entries"><?php previous_post_link('%link', '« prev post') ?></span>
                        <span class="next-entries"><?php next_post_link('%link', 'next post »') ?></span>
                </div>
<?php } ?>                            

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="post">

			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			
		</div>

		<?php endwhile; ?>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                <div class="navigation">
                        <span class="previous-entries"><?php previous_post_link('%link', '« prev post') ?></span>
                        <span class="next-entries"><?php next_post_link('%link', 'next post »') ?></span>
                </div>
<?php } ?>     
	<?php else : ?>

		<div class='title'><br>Sorry, no results...</div>

	<?php endif; ?>

	</div>
	<!--/content -->

</div>
<?php get_footer(); ?>
