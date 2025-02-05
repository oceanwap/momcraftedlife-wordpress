<?php
/**
 * Kids Learning Toys: Customizer
 *
 * @subpackage Kids Learning Toys
 * @since 1.0
 */

function kids_learning_toys_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('kids_learning_toys_pro', array(
        'title'    => __('KIDS LEARNING TOYS PREMIUM', 'kids-learning-toys'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('kids_learning_toys_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Kids_Learning_Toys_Pro_Control($wp_customize, 'kids_learning_toys_pro', array(
        'label'    => __('KIDS LEARNING TOYS PREMIUM', 'kids-learning-toys'),
        'section'  => 'kids_learning_toys_pro',
        'settings' => 'kids_learning_toys_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'kids_learning_toys_customize_register' );


define('KIDS_LEARNING_TOYS_PRO_LINK',__('https://www.ovationthemes.com/products/toys-wordpress-theme','kids-learning-toys'));

define('KIDS_LEARNING_TOYS_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','kids-learning-toys'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Kids_Learning_Toys_Pro_Control')):
    class Kids_Learning_Toys_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( KIDS_LEARNING_TOYS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE KIDS LEARNING TOYS PREMIUM','kids-learning-toys');?> </a>
	        </div>
            <div class="col-md">
                <img class="kids_learning_toys_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'kids-learning-toys');?> </li>                 
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'kids-learning-toys');?> </li>
                    <li class="upsell-kids_learning_toys"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'kids-learning-toys');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( KIDS_LEARNING_TOYS_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('Wordpress Theme Bundle (100+ Themes at Just $89)','kids-learning-toys');?> </a>
            </div>
        </label>
    <?php } }
endif;