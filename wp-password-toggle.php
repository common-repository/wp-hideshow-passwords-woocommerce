<?php
   /*
   Plugin Name: WP hide/show passwords woocommerce
   Plugin URI: http://wordpress.org/plugins/
   description: woocommerce show hide password all form but mandatory woocommerce Plugin
   Version: 1.2
   Author: Mr. Raubi Gaur
   Author URI: https://www.wordpressintegration.com/
   */
?>
<?php 
add_action('wp_head','wpshowhideinit');
function wpshowhideinit(){
	
	wp_enqueue_script( 'script-js',plugins_url('/assets/js/script.js',__FILE__));
	wp_enqueue_style('style-css', plugins_url('/assets/css/style.css',__FILE__));
	
}
?>