<div id="comments">


<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
		</div>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->



<?php if ( have_comments() ) : ?>
		<ol class="commentlist">
			<?php wp_list_comments(); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :  ?>
		<nav id="comment-nav-below" class="paged-navigation contain">
			<h1>Comments Navigation</h1>
			<div><?php previous_comments_link('Older Comments'); ?></div>
			<div><?php next_comments_link('Newer Comments'); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>
	<?php endif; ?>

	<?php if ( comments_open() ) : ?>
		<?php comment_form(); ?>
	<?php elseif ( have_comments() ) : ?>
		<p class="comments-closed">Comments are closed</p>
	<?php endif; ?>

</div><!-- end of "comments" -->





