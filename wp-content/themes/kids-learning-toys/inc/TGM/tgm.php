<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function kids_learning_toys_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'WooCommerce', 'kids-learning-toys' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Ovation Elements', 'kids-learning-toys' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'MC Woocommerce Wishlist', 'kids-learning-toys' ),
			'slug'             => 'smart-wishlist-for-more-convert',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	kids_learning_toys_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'kids_learning_toys_register_recommended_plugins' );