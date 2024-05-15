<?php
/**
 * Customizer sections.
 *
 * @package ng_s
 */

namespace NicolasGillium\ng_s;

/**
 * Register the section sections.
 *
 * @author WebDevStudios
 * @param object $wp_customize Instance of WP_Customize_Class.
 */
function customize_sections( $wp_customize ) {

	// Register additional scripts section.
	$wp_customize->add_section(
		'ng_s_additional_scripts_section',
		[
			'title'    => esc_html__( 'Additional Scripts', 'ng_s' ),
			'priority' => 10,
			'panel'    => 'site-options',
		]
	);

	// Register a footer section.
	$wp_customize->add_section(
		'ng_s_footer_section',
		[
			'title'    => esc_html__( 'Footer Customizations', 'ng_s' ),
			'priority' => 90,
			'panel'    => 'site-options',
		]
	);
}
add_action( 'customize_register', __NAMESPACE__ . '\customize_sections' );
