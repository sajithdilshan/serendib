<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

		<h2><?php the_title(); ?></h2>
			<div class="meta_top">
			<p>Posted on: <span class="time"><?php the_date(); ?></span><span class="comments"><?php comments_popup_link(); ?></span></p>
			</div>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		<?php wp_link_pages('before=<div id="page-links">&after=</div>') ?>
			<div class="meta_bottom">
			<p><?php the_tags('Tags: ',' '); ?></p>
			<p class="categories">Categories: <?php the_category(' '); ?></p>
			<p class="editlink"><?php edit_post_link('Edit'); ?></p>
			</div>
			
		

	<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
	</div>

	</div>

<?php comments_template(); ?>

<?php endwhile; endif; ?>
