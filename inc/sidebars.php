<?php 


class industrious_Sidebars{
	public function __construct() {
		add_action('widgets_init', array($this, 'register'));
	}

	public function register() {
		

		register_sidebar( array(
            'name'          => esc_html__('Footer Bottom Section','industrious'),
            'id'            => 'footer-4',
            'description'   => esc_html__('Add widgets here for footer Third column','industrious'),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   =>'',
        ));

	/*Custom Widget Register*/

    register_widget('industrious_Footer_forth_widget');


	/*Sidebar Wedgeds*/

	}
	}


//Footer Forth Widget

class industrious_Footer_forth_widget extends WP_Widget{
    function __construct(){
        parent::__construct(
            'footer_bottom',
            esc_html__('Footer Copy Right widget','industrious'),
            array(
                'description'  => esc_html__('this is Footer Second widget','industrious')
            )
        );
    }
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        if(!empty($instance['title'])){
            echo $args['before_title'].apply_filters('widget_title',$instance['title']).$args['after_title'];
        }; ?>

     Design: <a href="<?php echo $instance['linkone'];  ?>"><?php echo $instance['linkText'];  ?></a>
        Images: <a href="<?php echo $instance['linkTwo'];  ?>"><?php echo $instance['linkTwoText'];  ?></a>

        <?php 
        echo $args['after_widget'];
    }
    public function form($instance){
        $title = !empty($instance['title'])? $instance['title']: esc_html__('write Title here','industrious');
        $linkone = !empty($instance['linkone'])? $instance['linkone']: esc_html__('Item One','industrious');
        $linkText = !empty($instance['linkText'])? $instance['linkText']: esc_html__('item Two','industrious');
        $linkTwo = !empty($instance['linkTwo'])? $instance['linkTwo']: esc_html__('item three','industrious');
        $linkTwoText = !empty($instance['linkTwoText'])? $instance['linkTwoText']: esc_html__('item four','industrious');
       
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>">
                <?php esc_attr_e('Title','industrious');?>
            </label>
            <input 
                class="widefat"
                id="<?php echo esc_attr($this->get_field_id('title')); ?>"
                name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                type="text"
                value="<?php echo esc_attr($title); ?>">
        </p> 
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('linkone')); ?>">
                <?php esc_attr_e('linkone','industrious');?>
            </label>
            <input 
                class="widefat"
                id="<?php echo esc_attr($this->get_field_id('linkone')); ?>"
                name="<?php echo esc_attr($this->get_field_name('linkone')); ?>"
                type="text"
                value="<?php echo esc_attr($linkone); ?>">
        </p>
         <p>
            <label for="<?php echo esc_attr($this->get_field_id('linkText')); ?>">
                <?php esc_attr_e('linkText','industrious');?>
            </label>
            <input 
                class="widefat"
                id="<?php echo esc_attr($this->get_field_id('linkText')); ?>"
                name="<?php echo esc_attr($this->get_field_name('linkText')); ?>"
                type="text"
                value="<?php echo esc_attr($linkText); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('linkTwo')); ?>">
                <?php esc_attr_e('linkTwo','industrious');?>
            </label>
            <input 
                class="widefat"
                id="<?php echo esc_attr($this->get_field_id('linkTwo')); ?>"
                name="<?php echo esc_attr($this->get_field_name('linkTwo')); ?>"
                type="text"
                value="<?php echo esc_attr($linkTwo); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('linkTwoText')); ?>">
                <?php esc_attr_e('linkTwoText','industrious');?>
            </label>
            <input 
                class="widefat"
                id="<?php echo esc_attr($this->get_field_id('linkTwoText')); ?>"
                name="<?php echo esc_attr($this->get_field_name('linkTwoText')); ?>"
                type="text"
                value="<?php echo esc_attr($linkTwoText); ?>">
        </p>
       

    <?php }
    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']))? strip_tags($new_instance['title']):'';
        $instance['linkone'] = (!empty($new_instance['linkone']))? strip_tags($new_instance['linkone']):'';
        $instance['linkText'] = (!empty($new_instance['linkText']))? strip_tags($new_instance['linkText']):'';
        $instance['linkTwo'] = (!empty($new_instance['linkTwo']))? strip_tags($new_instance['linkTwo']):'';
        $instance['linkTwoText'] = (!empty($new_instance['linkTwoText']))? strip_tags($new_instance['linkTwoText']):'';
    
        return $instance;
    }
}

	new industrious_Sidebars;


