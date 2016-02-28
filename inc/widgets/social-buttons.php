<?php
/**
 * social-buttons.php
 * 
 * Plugin Name: Dead Flowers Social Buttons
 * Plugin URI: http://www.justinbrowndev
 * Description: A widget that displays social buttons
 * Version: 1.0
 * Author: Justin Brown
 * Author URI: http://www.justinbrowndev.com
*/

class Dead_Flowers_Social_Buttons extends WP_Widget {

	/**
	 * Specifies the widget name, description, class name and instatiates it
	 */
	public function __construct() {
		parent::__construct( 
			'social-buttons-widget',
			__( 'Social Buttons', 'dead_flowers' ),
			array(
				'classname'   => 'social-buttons-widget',
				'description' => __( 'A custom widget that displays social buttons.', 'dead_flowers' )
			) 
		);
	}


	/**
	 * Generates the back-end layout for the widget
	 */
	public function form( $instance ) {
		// Default widget settings
		//Fields: button name, url
		$defaults = array(
			'first_button' => 'facebook',
			'first_url' => 'http://facebook.com',
			'second_button' => 'github',
			'second_url' => 'http://github.com',
			'third_button' => 'twitter',
			'third_url' => 'http://twitter.com',
			'fourth_button' => 'instagram',
			'fourth_url' => 'http://instagram.com',
			'fifth_button' => 'soundcloud',
			'fifth_url' => 'http://soundcloud.com',
		);

		$instance = wp_parse_args( (array) $instance, $defaults );

		// The widget content ?>
		<!-- first button/icon -->
		<p>
			<label for="<?php echo $this->get_field_id('first_button'); ?>"><?php _e('First Icon: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('first_button') ?>" name="<?php echo $this->get_field_name('first_button') ?>" value="<?php echo esc_attr($instance['first_button']); ?>">
		</p>

		<!-- first url -->
		<p>
			<label for="<?php echo $this->get_field_id('first_url'); ?>"><?php _e('First Url: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('first_url') ?>" name="<?php echo $this->get_field_name('first_url') ?>" value="<?php echo esc_attr($instance['first_url']); ?>">
		</p>

		<!-- second button/icon -->
		<p>
			<label for="<?php echo $this->get_field_id('second_button'); ?>"><?php _e('Second Icon: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('second_button') ?>" name="<?php echo $this->get_field_name('second_button') ?>" value="<?php echo esc_attr($instance['second_button']); ?>">
		</p>

		<!-- second url -->
		<p>
			<label for="<?php echo $this->get_field_id('second_url'); ?>"><?php _e('Second Url: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('second_url') ?>" name="<?php echo $this->get_field_name('second_url') ?>" value="<?php echo esc_attr($instance['second_url']); ?>">
		</p>

		<!-- third button/icon -->
		<p>
			<label for="<?php echo $this->get_field_id('third_button'); ?>"><?php _e('Third Icon: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('third_button') ?>" name="<?php echo $this->get_field_name('third_button') ?>" value="<?php echo esc_attr($instance['third_button']); ?>">
		</p>

		<!-- third url -->
		<p>
			<label for="<?php echo $this->get_field_id('third_url'); ?>"><?php _e('Third Url: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('third_url') ?>" name="<?php echo $this->get_field_name('third_url') ?>" value="<?php echo esc_attr($instance['third_url']); ?>">
		</p>
		<!-- fourth button/icon -->
		<p>
			<label for="<?php echo $this->get_field_id('fourth_button'); ?>"><?php _e('Fourth Icon: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('fourth_button') ?>" name="<?php echo $this->get_field_name('fourth_button') ?>" value="<?php echo esc_attr($instance['fourth_button']); ?>">
		</p>

		<!-- fourth url -->
		<p>
			<label for="<?php echo $this->get_field_id('fourth_url'); ?>"><?php _e('Fourth Url: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('fourth_url') ?>" name="<?php echo $this->get_field_name('fourth_url') ?>" value="<?php echo esc_attr($instance['fourth_url']); ?>">
		</p>
		<!-- fifth button/icon -->
		<p>
			<label for="<?php echo $this->get_field_id('fifth_button'); ?>"><?php _e('Fifth Icon: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('fifth_button') ?>" name="<?php echo $this->get_field_name('fifth_button') ?>" value="<?php echo esc_attr($instance['fifth_button']); ?>">
		</p>

		<!-- fifth url -->
		<p>
			<label for="<?php echo $this->get_field_id('fifth_url'); ?>"><?php _e('Fifth Url: ', 'dead_flowers'); ?></label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id('fifth_url') ?>" name="<?php echo $this->get_field_name('fifth_url') ?>" value="<?php echo esc_attr($instance['fifth_url']); ?>">
		</p>



		<?php
	}


	/**
	 * Processes the widget's values
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		$instance['first_button'] = strip_tags(stripslashes($new_instance['first_button']));
		$instance['first_url'] = strip_tags(stripslashes($new_instance['first_url']));

		$instance['second_button'] = strip_tags(stripslashes($new_instance['second_button']));
		$instance['second_url'] = strip_tags(stripslashes($new_instance['second_url']));

		$instance['third_button'] = strip_tags(stripslashes($new_instance['third_button']));
		$instance['third_url'] = strip_tags(stripslashes($new_instance['third_url']));

		$instance['fourth_button'] = strip_tags(stripslashes($new_instance['fourth_button']));
		$instance['fourth_url'] = strip_tags(stripslashes($new_instance['fourth_url']));

		$instance['fifth_button'] = strip_tags(stripslashes($new_instance['fifth_button']));
		$instance['fifth_url'] = strip_tags(stripslashes($new_instance['fifth_url']));

		return $instance;
	}


	/**
	 * Output the contents of the widget
	 */
	public function widget( $args, $instance ) {
		// Extract the arguments
		extract( $args );
		$title               = apply_filters( 'widget_title', $instance['title'] );
		$first_button = $instance['first_button'];
		$first_url = $instance['first_url'];

		$second_button = $instance['second_button'];
		$second_url = $instance['second_url'];

		$third_button = $instance['third_button'];
		$third_url = $instance['third_url'];

		$fourth_button = $instance['fourth_button'];
		$fourth_url = $instance['fourth_url'];

		$fifth_button = $instance['fifth_button'];
		$fifth_url = $instance['fifth_url'];

		// Display the markup before the widget (as defined in functions.php)
		echo $before_widget;
		?>
			<ul class="social-buttons">
		<?php
			if($first_button && $first_url){
				?>
				<li><a href="<?php echo $first_url; ?>" target="_blank" button="first"><i class="fa fa-2x fa-<?php echo $first_button; ?>"></i></a></li>
				<?php
			}

			if($second_button && $second_url){
				?>
				<li><a href="<?php echo $second_url; ?>" target="_blank" button="second"><i class="fa fa-2x fa-<?php echo $second_button; ?>"></i></a></li>
				<?php
			}

			if($third_button && $third_url){
				?>
				<li><a href="<?php echo $third_url; ?>" target="_blank" button="third"><i class="fa fa-2x fa-<?php echo $third_button; ?>"></i></a></li>
				<?php
			}
			
			if($fourth_button && $fourth_url){
				?>
				<li><a href="<?php echo $fourth_url; ?>" target="_blank" button="fourth"><i class="fa fa-2x fa-<?php echo $fourth_button ?>"></i></a></li>
				<?php
			}

			if($fifth_button && $fifth_url){
				?>
				<li><a href="<?php echo $fifth_url; ?>" target="_blank" button="fifth"><i class="fa fa-2x fa-<?php echo $fifth_button ?>"></i></a></li>
				<?php
			}
		?>
			</ul>
		<?php
		// Display the markup after the widget (as defined in functions.php)
		echo $after_widget;
	}
}

// Register the widget
add_action( 'widgets_init', create_function( '', 'register_widget( "Dead_Flowers_Social_Buttons" );' ) );
?>