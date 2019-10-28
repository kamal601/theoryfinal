<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theory
 */

?>

<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">

							<?php 
							if(is_active_sidebar('footer-4')){
								dynamic_sidebar('footer-4');
							}
							 ?>
							
						</div>
						<ul class="icons">
							<?php
                                $theory_fb = get_field("facebook","user_".get_the_author_meta("ID"));
                                $theory_tw = get_field("twitter","user_".get_the_author_meta("ID"));
                                $theory_pin = get_field("pinterest","user_".get_the_author_meta("ID"));
                                $theory_inst = get_field("instagram","user_".get_the_author_meta("ID"));
                                $theory_link= get_field("linkedin","user_".get_the_author_meta("ID"));
                            ?>
                            <?php 
                                if($theory_fb ):
                            ?>
                                <li><a class="icon fa-facebook" href="<?php echo esc_url($theory_fb );?>"></a></li>
                            <?php 
                                endif;
                            ?>
                            <?php 
                                if($theory_tw ):
                            ?>
                                <li><a class="icon fa-twitter" href="<?php echo esc_url($theory_tw );?>"></a></li>
                            <?php 
                                endif;
                            ?>
                            <?php 
                                if($theory_inst ):
                            ?>
                                <li><a class="icon fa-instagram" href="<?php echo esc_url($theory_inst );?>"></a></li>
                            <?php 
                                endif;
                            ?>
                             <?php 
                                if($theory_pin ):
                            ?>
                                <li><a class="icon fa-pinterest" href="<?php echo esc_url($theory_pin );?>"></a></li>
                            <?php 
                                endif;
                            ?>
                            <?php 
                                if($theory_link ):
                            ?>
                                <li><a class="icon fa-linkedin" href="<?php echo esc_url($theory_link );?>"></a></li>
                            <?php 
                                endif;
                            ?>
							
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			
	<?php wp_footer(); ?>
	</body>
</html>