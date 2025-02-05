<?php

add_action( 'admin_menu', 'kids_learning_toys_gettingstarted' );
function kids_learning_toys_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'kids-learning-toys'), esc_html__('Begin Installation', 'kids-learning-toys'), 'edit_theme_options', 'kids-learning-toys-guide-page', 'kids_learning_toys_guide');
}

function kids_learning_toys_admin_theme_style() {
   wp_enqueue_style('kids-learning-toys-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'kids_learning_toys_admin_theme_style');

if ( ! defined( 'KIDS_LEARNING_TOYS_SUPPORT' ) ) {
define('KIDS_LEARNING_TOYS_SUPPORT',__('https://wordpress.org/support/theme/kids-learning-toys/','kids-learning-toys'));
}
if ( ! defined( 'KIDS_LEARNING_TOYS_REVIEW' ) ) {
define('KIDS_LEARNING_TOYS_REVIEW',__('https://wordpress.org/support/theme/kids-learning-toys/reviews/','kids-learning-toys'));
}
if ( ! defined( 'KIDS_LEARNING_TOYS_LIVE_DEMO' ) ) {
define('KIDS_LEARNING_TOYS_LIVE_DEMO',__('https://trial.ovationthemes.com/kids-learning-toys/','kids-learning-toys'));
}
if ( ! defined( 'KIDS_LEARNING_TOYS_BUY_PRO' ) ) {
define('KIDS_LEARNING_TOYS_BUY_PRO',__('https://www.ovationthemes.com/products/toys-wordpress-theme','kids-learning-toys'));
}
if ( ! defined( 'KIDS_LEARNING_TOYS_PRO_DOC' ) ) {
define('KIDS_LEARNING_TOYS_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-kids-learning-toys-doc/','kids-learning-toys'));
}
if ( ! defined( 'KIDS_LEARNING_TOYS_FREE_DOC' ) ) {
define('KIDS_LEARNING_TOYS_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-kids-learning-toys-free-doc/','kids-learning-toys'));
}
if ( ! defined( 'KIDS_LEARNING_TOYS_THEME_NAME' ) ) {
define('KIDS_LEARNING_TOYS_THEME_NAME',__('Premium Kids Learning Toys Theme','kids-learning-toys'));
}
if ( ! defined( 'KIDS_LEARNING_TOYS_BUNDLE_LINK' ) ) {
define('KIDS_LEARNING_TOYS_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','kids-learning-toys'));
}
/**
 * Theme Info Page
 */
function kids_learning_toys_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'kids-learning-toys'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( KIDS_LEARNING_TOYS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'kids-learning-toys'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( KIDS_LEARNING_TOYS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'kids-learning-toys'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','kids-learning-toys'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','kids-learning-toys'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','kids-learning-toys'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','kids-learning-toys'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','kids-learning-toys'); ?></h4>
					<p><?php esc_html_e('To check your website click here','kids-learning-toys'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','kids-learning-toys'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','kids-learning-toys'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','kids-learning-toys'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( KIDS_LEARNING_TOYS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','kids-learning-toys'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(KIDS_LEARNING_TOYS_THEME_NAME); ?></h3>
				<img class="kids_learning_toys_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( KIDS_LEARNING_TOYS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'kids-learning-toys'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( KIDS_LEARNING_TOYS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'kids-learning-toys'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( KIDS_LEARNING_TOYS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'kids-learning-toys'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( KIDS_LEARNING_TOYS_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('Wordpress Theme Bundle (100+ Themes at Just $89)', 'kids-learning-toys'); ?></a>
				</div>
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
		</div>
	</div>

<?php }?>