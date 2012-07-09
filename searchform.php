<form action="<?php echo home_url(); ?>" method="get" id="searchform">
<input type="text" name="s" id="s" value="Search..."  onblur="if(this.value=='') this.value='Search...';" onfocus="if(this.value=='Search...') this.value='';"/>
<input type="image" src="<?php echo get_template_directory_uri(); ?>/images/search.jpg" alt="" name="searchsubmit" id="submitbutton" value="" />
</form>
