<?php 

add_shortcode('element_first_section','element_first_title_shortcode');
function element_first_title_shortcode($section){
	$result = shortcode_atts(array(
		'section_tit'			 =>'',
		'sect_text'			 	 =>'',
		'sub_title'				 =>'',
		'element_section_group'  =>'',
		'element_second_group' 	 =>'',
		'p_title' 	 			=>'',
		'p_text' 	 			=>'',
	
	),$section);
	extract($result);
 ob_start();
	?>
<!-- Three -->
<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2><?php echo esc_html($section_tit); ?></h2>
						<p><?php echo esc_html($sub_title); ?> </p>
					</header>

				<!-- Content -->
					<h2 id="content"><?php echo esc_html($p_title); ?></h2>
					<p><?php echo esc_html($p_text); ?></p>
					<div class="row">
						<?php 
						$element_theory=vc_param_group_parse_atts($element_section_group);

						foreach ($element_theory as $theory): 
					?>
						<div class="6u 12u$(small)">
							<h3><?php echo esc_html($theory['section_title']); ?></h3>
							<p><?php echo esc_html($theory['section_text']); ?></p>
						</div>
					<?php endforeach; ?>

					<?php 
						$element_two=vc_param_group_parse_atts($element_second_group);

						foreach ($element_two as $theory): 
					?>
						<div class="4u 12u$(medium)">
							<h3><?php echo esc_html($theory['section_title']); ?></h3>
							<p><?php echo esc_html($theory['section_text']); ?></p>
						</div>
					<?php endforeach; ?>
						
					</div>

				<hr class="major" />
				</div>
			</section>
			

<?php  
return ob_get_clean();
} 

add_action( 'vc_before_init', 'element_first_title_el' );
function element_first_title_el() {
 vc_map( array(
  "name" => __( "element First Section", "theory" ), 
  "base" => "element_first_section",
  "category" => __( "theory", "theory"),
  "params" => array(
			 array(
			  "type" => "textfield",
			  "heading" => __( "Section Title", "theory" ),
			  "param_name" => "section_tit",
		 	  "value" => __( "Write your Section Title here", "theory" ),
			  "description" => __( "Description for section-title param.", "theory" )
			 ),
			 array(
			  "type" => "textfield",
			  "heading" => __( "Section Text", "theory" ),
			  "param_name" => "sub_title",
			  "value" => __( "Write your Section Text here", "theory" ),
			  "description" => __( "Description for section-text param.", "theory" )
			 ),
			 array(
			  "type" => "textfield",
			  "heading" => __( "Post Title", "theory" ),
			  "param_name" => "p_title",
			  "value" => __( "Choose Your Background image", "theory" ),
			  "description" => __( "Description for Background image", "theory" )
			 ), 
			 array(
			  "type" => "textfield",
			  "heading" => __( "Post Content", "theory" ),
			  "param_name" => "p_text",
			  "value" => __( "Choose Your Background image", "theory" ),
			  "description" => __( "Description for Background image", "theory" )
			 ),
			  array(
			 	'type'=>'param_group',
			 	'heading'=>'Theory Element page Group',
			 	'param_name'=>'element_section_group',
			 	'group' => 'Content Repeat',
			 	'params'=>array(
			 	
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
				)
			 ),
			  array(
			 	'type'=>'param_group',
			 	'heading'=>'Theory Element Page Group',
			 	'param_name'=>'element_second_group',
			 	'group' => 'Content Repeat',
			 	'params'=>array(
			 	
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
		  
					
					)
			 )
  		)
 	) );
}