<?php 

add_shortcode('element_page_section','element_page_shortcode');
function element_page_shortcode($section){
	$result = shortcode_atts(array(
		'button_tit' =>'',
		'first_btn_group' =>'',
		'second_btn_group' =>'',
		'third_btn_group' =>'',
		'forth_btn_group' =>'',
		'fifth_btn_group' =>'',
		'sixth_btn_group' =>'',
		'seventh_btn_group' =>'',
	
	),$section);
	extract($result);
 ob_start();
	?> 
		
<div class="col-6 col-12-medium">
	<!-- Actions -->
	<h3><?php echo $button_tit; ?></h3>
	<ul class="actions">
		<?php 
		$first_btn=vc_param_group_parse_atts($first_btn_group);

		foreach ($first_btn as $btn_class): 
			?>
			<li><a href="#" class="<?php echo $btn_class['sect_text']; ?>">Default</a></li>
			<?php	
		endforeach;
		?>
		<!-- 						<li><a href="#" class="button">Default</a></li> -->
	</ul>
	<ul class="actions">
		<?php 
		$sec_btn=vc_param_group_parse_atts($second_btn_group);

		foreach ($sec_btn as $btn_class): 
			?>
			<li><a href="#" class="<?php echo $btn_class['subTitle']; ?>">Small</a></li>
			<?php	
		endforeach;
		?>
		<!-- <li><a href="#" class="button small">Small</a></li> -->
	</ul>

	<ul class="actions">
		<?php 
		$third_btn=vc_param_group_parse_atts($third_btn_group);

		foreach ($third_btn as $btn_class): 
			?>
			<li><a href="#" class="<?php echo $btn_class['btn_class_name'];?>">Default</a></li>
			<?php	
		endforeach;
		?>
		<!-- <li><a href="#" class="button">Default</a></li> -->
	</ul>


	<ul class="actions fit">
		<?php 
		$forth_btn=vc_param_group_parse_atts($forth_btn_group);

		foreach ($forth_btn as $btn_class): 
			?>
			<li><a href="#" class="<?php echo $btn_class['btn_one']; ?>">Small</a></li>
			<?php	
		endforeach;
		?>
		<!-- <li><a href="#" class="button small">Small</a></li> -->
	</ul>

	<ul class="actions fit">
		<?php 
		$fifth_btn=vc_param_group_parse_atts($fifth_btn_group);

		foreach ($fifth_btn as $btn_class): 
			?>
			<li><a href="#" class="<?php echo $btn_class['btn_two']; ?>">Default</a></li>
			<?php	
		endforeach;
		?>
		<!-- <li><a href="#" class="button fit">Default</a></li> -->
	</ul>

	<ul class="actions">
		<?php 
		$sixth_btn=vc_param_group_parse_atts($sixth_btn_group);

		foreach ($sixth_btn as $btn_class): 
			?>
			<li><a href="#" class="<?php echo $btn_class['btn_three']; ?>">Small</a></li>
			<?php	
		endforeach;
		?>
		<!-- <li><a href="#" class="button small fit">Small</a></li> -->
	</ul>
	<ul class="actions">
		<?php 
		$seventh_btn=vc_param_group_parse_atts($seventh_btn_group);

		foreach ($seventh_btn as $btn_class): 
			?>
			<li><a href="#" class="<?php echo $btn_class['btn_four']; ?>">Small</a></li>
			<?php	
		endforeach;
		?>
		<!-- <li><a href="#" class="button small fit">Small</a></li> -->
	</ul>
</div>

<?php  
return ob_get_clean();
} 

add_action( 'vc_before_init', 'element_page_el' );
function element_page_el() {
 vc_map( array(
  "name" => __( "Element Button Right", "theory" ), 
  "base" => "element_page_section",
  "category" => __( "theory", "theory"),
  "params" => array(
			 array(
			  "type" => "textfield",
			  "heading" => __( "Main Title", "theory" ),
			  "param_name" => "button_tit",
		 	  "value" => __( "Write your Section Title here", "theory" ),
			  "description" => __( "Description for section-title param.", "theory" )
			 ),
			  array(
			 	'type'=>'param_group',
			 	'heading'=>'Team Social Icon Items',
			 	'param_name'=>'first_btn_group',
			 	'params'=>array(
					 array(
					  "type" => "textarea",
					  "heading" => __( "Main Text", "theory" ),
					  "param_name" => "sect_text",
					  "value" => __( "Write your Section Text here", "theory" ),
					  "description" => __( "Description for section-text param.", "theory" )
					 ),
					),
			 ),
			   array(
			 	'type'=>'param_group',
			 	'heading'=>'Team Social Icon Items',
			 	'param_name'=>'second_btn_group',
			 	'params'=>array(
					 array(
					  "type" => "textfield",
					  "heading" => __( "Button Class Name", "theory" ),
					  "param_name" => "subTitle",
					  "value" => __( "fa fa_facebook", "theory" ),
					  "description" => __( "Button class here", "theory" )
					 ), 
					),
					 ),
			    array(
			 	'type'=>'param_group',
			 	'heading'=>'Team Social Icon Items',
			 	'param_name'=>'third_btn_group',
			 	'params'=>array(
					 array(
					  "type" => "textarea",
					  "heading" => __( "Button Class Name", "theory" ),
					  "param_name" => "btn_class_name",
					  "value" => __( "Button Class Name", "theory" ),
					  "description" => __( "Button Class Name", "theory" )
					 ),
		  		),
			),  
			    array(
			 	'type'=>'param_group',
			 	'heading'=>'Team Social Icon Items',
			 	'param_name'=>'forth_btn_group',
			 	'params'=>array(
					 array(
					  "type" => "textarea",
					  "heading" => __( "Button Class Name", "theory" ),
					  "param_name" => "btn_one",
					  "value" => __( "Button Class Name", "theory" ),
					  "description" => __( "Button Class Name", "theory" )
					 ),
		  		),
			) , 
			array(
			 	'type'=>'param_group',
			 	'heading'=>'Team Social Icon Items',
			 	'param_name'=>'fifth_btn_group',
			 	'params'=>array(
					 array(
					  "type" => "textarea",
					  "heading" => __( "Button Class Name", "theory" ),
					  "param_name" => "btn_two",
					  "value" => __( "Button Class Name", "theory" ),
					  "description" => __( "Button Class Name", "theory" )
					 ),
		  		),
			),  
			array(
			 	'type'=>'param_group',
			 	'heading'=>'Team Social Icon Items',
			 	'param_name'=>'sixth_btn_group',
			 	'params'=>array(
					 array(
					  "type" => "textarea",
					  "heading" => __( "Button Class Name", "theory" ),
					  "param_name" => "btn_three",
					  "value" => __( "Button Class Name", "theory" ),
					  "description" => __( "Button Class Name", "theory" )
					 ),
		  		),
			) , 
			array(
			 	'type'=>'param_group',
			 	'heading'=>'Team Social Icon Items',
			 	'param_name'=>'seventh_btn_group',
			 	'params'=>array(
					 array(
					  "type" => "textarea",
					  "heading" => __( "Button Class Name", "theory" ),
					  "param_name" => "btn_four",
					  "value" => __( "Button Class Name", "theory" ),
					  "description" => __( "Button Class Name", "theory" )
					 ),
		  		),
			) , 

		)
 	) );
}