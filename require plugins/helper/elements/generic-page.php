<?php 

add_shortcode('generic_first_section','generic_first_title_shortcode');
function generic_first_title_shortcode($section){
	$result = shortcode_atts(array(
		'section_tit'			 =>'',
		'sect_text'			 	 =>'',
		'sub_title'				 =>'',
		'generic_section_group'  =>'',
	
	),$section);
	extract($result);
 ob_start();
	?>
<!-- Three -->
			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<h2><?php echo esc_html($section_tit); ?></h2>
						<p><?php echo esc_html($sub_title); ?> </p>
					</header>
					<p><?php echo esc_html($sect_text); ?></p>
					<div class="flex flex-2">
					<?php 
						$generic_theory=vc_param_group_parse_atts($generic_section_group);

						foreach ($generic_theory as $theory): 
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

add_action( 'vc_before_init', 'generic_first_title_el' );
function generic_first_title_el() {
 vc_map( array(
  "name" => __( "Generic First Section", "theory" ), 
  "base" => "generic_first_section",
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
			  "type" => "textarea",
			  "heading" => __( "upload Background Image", "theory" ),
			  "param_name" => "sect_text",
			  "value" => __( "Choose Your Background image", "theory" ),
			  "description" => __( "Description for Background image", "theory" )
			 ),
			  array(
			 	'type'=>'param_group',
			 	'heading'=>'Theory Section three Group',
			 	'param_name'=>'generic_section_group',
			 	'group' => 'Content Repeat',
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
 	) );
}