<?php 

add_shortcode('theory_team_section','theory_team_section_shortcode');
function theory_team_section_shortcode($service){
	$result = shortcode_atts(array(
		'theory_team_group'	 =>'',
		'title'	 			 =>'',
		'text'	 			 =>'',
	),$service);
	extract($result);
	ob_start();
	?>



	<!-- Two -->
	<section id="two" class="wrapper style1 special">
		<div class="inner">
			<header>
				<h2><?php echo esc_html($title); ?></h2>
				<p><?php echo esc_html($text); ?></p>
			</header>
			<div class="flex flex-4">
				<?php 
				$theory_team=vc_param_group_parse_atts($theory_team_group);

				foreach ($theory_team as $team): ?>
					<div class="box person">
						<div class="image round">
							<?php $src = wp_get_attachment_url($team['image']);?>
							<img src="<?php echo $src; ?>" alt="Person 1" />
						</div>
						<h3><?php echo esc_html($team['team_name']); ?></h3>
						<p><?php echo esc_html($team['desig']); ?></p>
					</div>
					<?php	
				endforeach;
				?>
			</div>
		</div>
	</section>


<?php 
return ob_get_clean(); 
} 

add_action( 'vc_before_init', 'theory_team_section_el' );
function theory_team_section_el() {
 vc_map( array(
  "name" => __( "Theory Team Member", "theory" ), 
  "base" => "theory_team_section",
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
			 	'heading'=>'Theory Section One Group',
			 	'param_name'=>'theory_team_group',
			 	'params'=>array(
		  		 array(
					  "type" => "attach_image",
					  "heading" => __( "Upload Team Member Image", "theory" ),
					  "param_name" => "image",
					 ),
					 array(
					  "type" => "textfield",
					  "heading" => __( "Team Member Name", "theory" ),
					  "param_name" => "team_name",
					 ),
		  
					 array(
					  "type" => "textfield",
					  "heading" => __( "Team Memeber Designation", "theory" ),
					  "param_name" => "desig",

					 ),
					
					)
			 )
  		)
		
  	
 	)

  );
}