<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="postpage">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


			<h2 class="page-title"><?php the_title(); ?></h2>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>

			<?php wp_link_pages('before=<div id="page-links">&after=</div>') ?>
				<div class="meta_bottom">
				<p><?php edit_post_link('Edit'); ?></p>
				</div>


		</div>
</div> <!-- end of postpage -->
<?php comments_template(); ?>

<?php endwhile; endif; ?>
