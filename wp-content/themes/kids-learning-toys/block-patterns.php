<?php
/**
 * Kids Learning Toys: Block Patterns
 *
 * @since Kids Learning Toys 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Kids Learning Toys 1.0
 *
 * @return void
 */
function kids_learning_toys_register_block_patterns() {
	$block_pattern_categories = array(
		'kids-learning-toys'    => array( 'label' => __( 'Kids Learning Toys', 'kids-learning-toys' ) ),
	);

	$block_pattern_categories = apply_filters( 'kids_learning_toys_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'kids_learning_toys_register_block_patterns', 9 );
