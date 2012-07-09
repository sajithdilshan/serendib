<?php get_header(); ?>
<div id ="middle">
<div id="content">
<div class="padding2">

<h3 class="listline">Search results &#39;<?php echo $_GET['s']; ?>&#39;:</h3>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h2 class="page-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 
		<?php the_excerpt(); ?>
		<div class="meta_bottom">
			<p><?php if(function_exists('the_tags')) 
			the_tags('Tags: ',' ');  ?></p>
		</div>

	</div>


<?php endwhile; ?>
	
	<div class="navigation">
		<div class="alignleft"><?php next_posts_link('Previous Entries') ?></div>
		<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
	</div>

<?php else: ?>

	<div id="noresults">
		<p>Sorry, there are no results for this query</p>
	</div>

<?php endif; ?>

</div><!--end of padding2 -->
</div><!--end of content -->

<?php get_sidebar(); ?>

</div> <!-- end of middle -->
<?php get_footer(); ?>
