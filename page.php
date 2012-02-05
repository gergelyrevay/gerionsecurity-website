<?php get_header(); ?>
<div id="sidebar_and_content">
<div id="sidebar">
<div id="sidebar-double-wrapper">
<?php get_menu(); ?>
</div>
</div>

	<div id="content">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="post">

			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
			
		</div>

		<?php endwhile; ?>
	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	</div>
	<!--/content -->

</div>
<?php get_footer(); ?>
