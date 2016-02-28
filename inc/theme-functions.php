<?php
/** theme-functions.php.  Functions to be called directly from theme files **/

if(!function_exists('dead_flowers_pagination')){
	function dead_flowers_pagination(){
		global $wp_query;

		$big = 99999999; //arbitrarily large integer

		$args = array(
			'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
			'format' => '?paged=%#%',
			'current' => max(1, get_query_var('paged')),
			'total' => $wp_query->max_num_pages
		);

		echo '<div class="paginated-links">';
		echo paginate_links($args);
		echo '</div>';
	}
}