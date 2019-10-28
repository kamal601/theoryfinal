<?php 
	function astrum_style_enqueue_Style(){

		wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/main.css',array(),'1.0.0');
		
		

		wp_enqueue_script('plugins-js', get_template_directory_uri().'/assets/js/browser.min.js',array('jquery'),'',true);
		wp_enqueue_script('breakpoint-js', get_template_directory_uri().'/assets/js/breakpoints.min.js',array('jquery'),'',true);
		wp_enqueue_script('util-js', get_template_directory_uri().'/assets/js/util.js',array('jquery'),'',true);

		
		wp_enqueue_script('industrious-main-js', get_template_directory_uri().'/assets/js/main.js',array('jquery'),'1.0',true);
	}
	add_action('wp_enqueue_scripts','astrum_style_enqueue_Style');
 ?>