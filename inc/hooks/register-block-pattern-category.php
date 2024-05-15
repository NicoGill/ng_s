<?php
/**
 * Registers custom block pattern categories for the NG_S theme.
 *
 * @package ng_s
 */

namespace NicolasGillium\ng_s;

/**
 * Registers custom block pattern categories for the NG_S theme.
 */
function register_custom_block_pattern_category() {

	register_block_pattern_category(
		'wds-patterns',
		[
			'label' => __( 'WDS Patterns', 'ng_s' ),
		]
	);

	// Remove default patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'init', __NAMESPACE__ . '\register_custom_block_pattern_category', 9 );
