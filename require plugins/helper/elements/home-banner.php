<?php 

add_shortcode('main_slider','main_slider_shortcode');
function main_slider_shortcode($slider){
	$result = shortcode_atts(array(
		'slider_image' =>'',
		'slider_title' =>'',
		'slider_text' =>'',
	),$slider);
	extract($result);
	ob_start();
	?>


	<!-- Home Banner -->
	<?php $src = wp_get_attachment_url($slider_image);?>
	<section id="banner" style="background-image: url('<?php echo $src; ?>');">
		<h1><?php echo $slider_title; ?></h1>
		<p><?php echo $slider_text; ?></p>
	</section>
	
	<!-- Bannar Section End -->	

<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'main_slider_el' );
function main_slider_el() {
 vc_map( array(
  "name" => __( "Main Slider", "theory" ), 
  "base" => "main_slider",
  "category" => __( "theory", "theory"),
  "params" => array(

  					 array(
					  "type" => "attach_image",
					  "heading" => __( "Upload Your image", "theory" ),
					  "param_name" => "slider_image",
					 ), 
					 array(
					  "type" => "textfield",
					  "heading" => __( "Give Title", "theory" ),
					  "param_name" => "slider_title",
					 ), 
					 array(
					  "type" => "textfield",
					  "heading" => __( "Sub Title", "theory" ),
					  "param_name" => "slider_text",
					 ), 
					  
  				),

 	) );
}
