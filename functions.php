<?php
if(!isset($content_width)) { 
	$content_width = 500;
}

function serendib_registersidebar() { 
	register_sidebar();
}

add_action('widgets_init', 'serendib_registersidebar');

function serendib_addthemesupport() {
	add_theme_support('automatic-feed-links');
}

add_action('after_setup_theme', 'serendib_addthemesupport');

function serendib_enqueue_comment_reply() { 
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'serendib_enqueue_comment_reply' );
?>
