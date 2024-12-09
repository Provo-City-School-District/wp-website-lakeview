<aside id="mainSidebar">
	<?php
	$post_id = 29830;
	$post = get_post($post_id);
	if ($post) {
		echo apply_filters('the_content', $post->post_content);
	}
	?>
</aside>