<?php
/**
 * dead_flowers Theme Customizer.
 *
 * @package dead_flowers
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function dead_flowers_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_section(
		'dead_flowers_display_options',
		array(
			'title' => __('Dead Flowers Display Options', 'dead_flowers'),
			'priority' => 1
		)
	);

	//main page parallax background
	$wp_customize->add_setting(
		'parallax_background_image',
		array(
			'default' => '',
			'transport' => 'refresh'
		)
	);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'parallax_background_image', 
		array(
			'section' => 'dead_flowers_display_options',
			'label' => __('Parallax Background Image', 'dead_flowers'),
			'mime_type' => 'image'
		)
	));

	//main page parallax opacity
	$wp_customize->add_setting(
		'parallax_opacity',
		array(
			'default' => 0.9,
			'transport' => 'postMessage'
		)
	);

	$wp_customize->add_control(
		'parallax_opacity',
		array(
			'section' => 'dead_flowers_display_options',
			'label' => __('Parallax Image Opacity', 'dead_flowers'),
			'type' => 'range',
			'input_attrs' => array(
				'min' => 0,
				'max' => 1,
				'step' => 0.05
			)
		)
	);

}
add_action( 'customize_register', 'dead_flowers_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

if(!function_exists('dead_flowers_test_customizer')){
	function dead_flowers_test_customizer(){
		wp_enqueue_script('dead_flowers-customizer-js', get_template_directory_uri() . '/js/customizer.js', array('jquery', 'customize-preview'));
	}
}

add_action('customize_preview_init', 'dead_flowers_test_customizer');


if(!function_exists('dead_flowers_customize_css')){
	function dead_flowers_customize_css(){
		?>
			<style type="text/css">

				#parallax-header {
					background-image: url("<?php echo get_theme_mod('parallax_background_image') ?>");
				}

				#parallax-header > img {
					opacity: <?php echo get_theme_mod('parallax_opacity') ?>;
				}


			</style>
		<?php
	}
}

add_action('wp_head', 'dead_flowers_customize_css');
