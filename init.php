<?php

/*

Plugin Name: Simple Scroll To Top
plugin URI: https://wordpress.org/plugins/simple-scroll-to-top-rubsum/
Author: RubSum
Author URI: http://facebook.com/rubelbdp
Description: Simple Scroll to Top by RubSum Private Ltd, very easy to use.
Version: 1.0

*/

class simple_scroll_to_top_button {
	public function __construct(){
		add_action('wp_footer', array($this, 'simple_scroll_to_top_') );
		add_action('wp_enqueue_scripts', array($this, 'simple_scroll_to_top_scripts') );
	}


	public function simple_scroll_to_top_(){
		?>

		<div class="scroll-to-top-icon">
			<a href="#"><i class="fas fa-angle-up"></i></a>
		</div>

		<?php 
	}




	public function simple_scroll_to_top_scripts(){
		wp_enqueue_style('plugin-font-awesome', plugins_url('css/fontawesome-all.min.css', __FILE__ ) );

		wp_enqueue_style('plugin-custom-style', plugins_url('css/custom.css', __FILE__ ) );

		wp_enqueue_script('plugin-custom-js', plugins_url('scripts/custom.js', __FILE__), array('jquery'), '', false);

	}

}


$simple_scroll_top_button = new simple_scroll_to_top_button();

?>