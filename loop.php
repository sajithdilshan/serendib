<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		<?php if(is_sticky()) { ?><p class="featured">Featured</p><?php } ?>
		<?php if(get_the_title()) { ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		<?php } else { ?>
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" rel="bookmark">(no title)</a></h2><?php } ?>
			<div class="meta_top">
			<p>Posted on: <span class="time"><?php the_time('F j, Y'); ?></span><span class="comments"><?php comments_popup_link(); ?></span></p>
			</div>
		<?php the_content('Read more...'); ?>
			<div class="meta_bottom">
			<p><?php the_tags('Tags: ',' '); ?></p>
			</div>

	</div>
<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Posts') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Posts &raquo;') ?></div>
		</div>

<?php else: ?>

<div id="noresults">
<p>Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.</p>
</div>
<?php endif; ?>
