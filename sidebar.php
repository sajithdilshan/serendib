<div id="sidebar">
<div class="padding2">
<ul>
<?php if ( !dynamic_sidebar() ) :

wp_list_pages('title_li=<h2>Pages</h2>'); 
wp_list_categories('title_li=<h2>Categories</h2>'); 

?>

<h2>Archives</h2>
<?php wp_get_archives('type=monthly'); ?>

<?php endif; ?>
</ul>
</div>
</div><!-- end of sidebar -->
