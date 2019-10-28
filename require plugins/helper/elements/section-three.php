<?php 

add_shortcode('theory_section_three','theory_section_three_shortcode');
function theory_section_three_shortcode($service){
	$result = shortcode_atts(array(
		'theory_secion_three_group'	 =>'',
		'title'	 					 =>'',
		'text'	 					 =>'',
	),$service);
	extract($result);
	ob_start();
	?>

<!-- Three -->
			<section id="three" class="wrapper special">
				<div class="inner">
					<header class="align-center">
						<h2><?php echo esc_html($title); ?></h2>
						<p><?php echo esc_html($text); ?></p>
					</header>

					<div class="flex flex-2">
					<?php 
						$theory_three=vc_param_group_parse_atts($theory_secion_three_group);

						foreach ($theory_three as $theory): 
					?>
						<article>
							<div class="image fit">
								<?php $src = wp_get_attachment_url($theory['image']);?>
								<img src="<?php  echo $src; ?>" alt="Pic 01" />
							</div>
							<header>
								<h3><?php echo esc_html($theory['section_title']); ?></h3>
							</header>
							<p><?php echo esc_html($theory['section_text']); ?></p>
							<footer>
								<a href="<?php echo esc_html($theory['btn_link']); ?>" class="button special"><?php echo esc_html($theory['btn']); ?></a>
							</footer>
						</article>
					<?php	
						endforeach;
					?>
					</div>
				</div>
			</section>


	



<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'theory_section_three_el' );
function theory_section_three_el() {
 vc_map( array(
  "name" => __( "Theory Section three", "theory" ), 
  "base" => "theory_section_three",
  "category" => __( "theory", "theory"),
  "params" => array(
  	  	 array(
			 "type" => "textfield",
			"heading" => __( "Team Section Title", "theory" ),
			"param_name" => "title",

			), 
  		 array(
			 "type" => "textfield",
			"heading" => __( "Team Section Text", "theory" ),
			"param_name" => "text",

			),


  		 array(
			 	'type'=>'param_group',
			 	'heading'=>'Theory Section three Group',
			 	'param_name'=>'theory_secion_three_group',
			 	'params'=>array(
			 	array(
					  "type" => "attach_image",
					  "heading" => __( "Upload Team Member Image", "theory" ),
					  "param_name" => "image",
					 ),
		  		 array(
					  "type" => "textfield",
					  "heading" => __( "Section Title", "theory" ),
					  "param_name" => "section_title",
					 ),
					 array(
					  "type" => "textarea",
					  "heading" => __( "Section Text", "theory" ),
					  "param_name" => "section_text",
					 ),
		  
					 array(
					  "type" => "textfield",
					  "heading" => __( "Read More Button", "theory" ),
					  "param_name" => "btn",

					 ),
					 array(
					  "type" => "textfield",
					  "heading" => __( "Read More Button Link", "theory" ),
					  "param_name" => "btn_link",

					 ),
					)
			 )
  		)
		
  	
 	)

  );
}