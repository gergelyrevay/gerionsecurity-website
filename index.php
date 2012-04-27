<?php get_header(); ?>
<div id="sidebar_and_content">
<?php get_sidebar(); ?>

    <div id="content">

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>

		<div class="post">
            <div class="post-header">
                        <div class="post-title">
		        		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
        		    	</div>
                        <div class="post-date"><div class="post-month"><?php the_time('F jS') ?></div><div class="post-year"><?php the_time('Y') ?></div></div>
            </div>
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
		</div>

		<?php endwhile; ?>
        <div class="navigation">
                <span class="previous-entries"><?php previous_post_link('%link', '« prev post') ?></span>
                <span class="next-entries"><?php next_post_link('%link', 'next post »') ?></span>
        </div>

	<?php else : ?>

		<div class='title'><br>Sorry, but you are looking for something that isn't here.</div>

	<?php endif; ?>

	</div>
	<!--/content -->
</div>
<?php get_footer(); ?>
