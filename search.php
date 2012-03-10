<?php _log('search.php runs'); get_header(); ?>
<div id="sidebar_and_content">
<div id="sidebar">
<div id="sidebar-double-wrapper">
<?php get_menu(); ?>
</div>
</div>

	<div id="content">
    <?php _e( 'Search Results for: ', 'your-theme' ); ?><span><?php the_search_query(); ?></span>
<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
                <div id="nav-above" class="navigation">
                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
                </div><!-- #nav-above -->
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
                <div id="nav-below" class="navigation">
                    <div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'your-theme' )) ?></div>
                    <div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'your-theme' )) ?></div>
                </div><!-- #nav-below -->
<?php } ?>     
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, no results...</p>

	<?php endif; ?>

	</div>
	<!--/content -->

</div>
<?php get_footer(); ?>
