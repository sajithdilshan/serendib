<?php get_header(); ?>
<div id ="middle">
<div id="content">
<div class="padding2">


<?php if (is_day()) { ?>
	<h3 class="listline">Daily Archive, <?php the_time('jS F Y'); ?></h3>
<?php } elseif (is_month()) { ?>
	<h3 class="listline">Monthly Archive, <?php the_time('F Y'); ?></h3>
<?php } elseif (is_year()) { ?>
	<h3 class="listline">Yearly Archive, <?php the_time('Y'); ?></h3>
<?php } elseif (is_tag()) { ?>
	<h3 class="listline">Tag Archive &#39;<?php single_tag_title(); ?>&#39;:</h3>
<?php } elseif (is_category()) { ?>
	<h3 class="listline">Category Archive &#39;<?php single_cat_title(); ?>&#39;:</h3>
<?php } ?>
	
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h2 class="page-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
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
	<p>Sorry, there are no posts for this archive yet</p>
	</div>

<?php endif; ?>

</div><!--end of padding2 -->
</div><!--end of content -->


<?php get_sidebar(); ?>
</div> <!-- end of middle -->
<?php get_footer(); ?>
