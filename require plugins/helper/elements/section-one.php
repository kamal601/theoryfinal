<?php 

add_shortcode('theory_section_one','theory_section_one_shortcode');
function theory_section_one_shortcode($service){
	$result = shortcode_atts(array(
		'theory_secion_one_group'	 =>'',
	),$service);
	extract($result);
	ob_start();
	?>

<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-3">
					<?php 
						$theory_bar=vc_param_group_parse_atts($theory_secion_one_group);

						foreach ($theory_bar as $theory): ?>
					<article>
						<header>
							<h3><?php echo esc_html($theory['section_title']); ?></h3>
						</header>
						<p><?php echo esc_html($theory['section_text']); ?></p>
						<footer>
							<a href="<?php echo esc_attr($theory['btn_link']); ?>" class="button special"><?php echo esc_html($theory['btn']); ?></a>
						</footer>
					</article>
					<?php	
						endforeach;
					?>
					</div>
				</div>
			</section>
	<!-- Highlights -->
	



<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'theory_section_one_el' );
function theory_section_one_el() {
 vc_map( array(
  "name" => __( "Theory Section One", "theory" ), 
  "base" => "theory_section_one",
  "category" => __( "theory", "theory"),
  "params" => array(

  		 array(
			 	'type'=>'param_group',
			 	'heading'=>'Theory Section One Group',
			 	'param_name'=>'theory_secion_one_group',
			 	'params'=>array(
		  		 array(
					  "type" => "textarea_html",
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
					  "type" => "textarea",
					  "heading" => __( "Read More Button Link", "theory" ),
					  "param_name" => "btn_link",

					 ),
					)
			 )
  		)
		
  	
 	)

  );
}