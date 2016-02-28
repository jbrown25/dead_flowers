<?php
/**
 * latest-post.php
 * 
 * Plugin Name: Dead Flowers Latest Post
 * Plugin URI: http://www.justinbrowndev
 * Description: A widget that displays the latest post
 * Version: 1.0
 * Author: Justin Brown
 * Author URI: http://www.justinbrowndev.com
*/

class Latest_Post_Widget extends WP_Widget {

	/**
	 * Specifies the widget name, description, class name and instatiates it
	 */
	public function __construct() {
		parent::__construct( 
			'latest-post-widget',
			__( 'Latest Post', 'dead_flowers' ),
			array(
				'classname'   => 'latest-post-widget',
				'description' => __( 'A custom widget that displays the latest post', 'dead_flowers' )
			) 
		);
	}

	/**
	 * Output the contents of the widget
	 */
	public function widget($args) {

		$before_widget = $args['before_widget'];
		$after_widget = $args['after_widget'];

		// Display the markup before the widget (as defined in functions.php)
		echo $before_widget;

		$post_args = array(
			'numberposts' => 1,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_type' => 'post',
			'post_status' => 'publish'
		);

		//get first post
		$recent_post = wp_get_recent_posts($post_args)[0];

		//get excerpt of post
		if(strlen($recent_post["post_content"]) > 300){
			$postExcerpt = substr($recent_post["post_content"], 0, 300) . ' ...';
		}else {
			$postExcerpt = $recent_post["post_content"];
		}

		//get posts page
		$page_id = get_option('page_for_posts');		

		//if first post not null, display it
		if($recent_post){
			echo '<h2>Recent News</h2>';
			echo '<h3>' . $recent_post["post_title"] . '</h3>';
			echo '<p>' . $postExcerpt . '</p>';
			echo '<p><a href="' . get_page_link($page_id) . '">Continue Reading</a></p>';
		}

		// Display the markup after the widget (as defined in functions.php)
		echo $after_widget;
	}
}

// Register the widget using an annonymous function
add_action( 'widgets_init', create_function( '', 'register_widget( "Latest_Post_Widget" );' ) );
?>