<?php
/**
 * genexis.
 *
 * This file adds the Customizer additions to the genexis Theme.
 *
 * @package genexis
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

/**
 * Get default link color for Customizer.
 *
 * Abstracted here since at least two functions use it.
 *
 * @since 2.2.3
 *
 * @return string Hex color code for link color.
 */
function genexiscustomizer_get_default_link_color() {
	return '#c3251d';
}

/**
 * Get default accent color for Customizer.
 *
 * Abstracted here since at least two functions use it.
 *
 * @since 2.2.3
 *
 * @return string Hex color code for accent color.
 */
function genexiscustomizer_get_default_accent_color() {
	return '#c3251d';
}

add_action( 'customize_register', 'genexiscustomizer_register' );
/**
 * Register settings and controls with the Customizer.
 *
 * @since 2.2.3
 * 
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function genexiscustomizer_register() {

	global $wp_customize;

	$wp_customize->add_setting(
		'genexislink_color',
		array(
			'default'           => genexiscustomizer_get_default_link_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'genexislink_color',
			array(
				'description' => __( 'Change the default color for linked titles, menu links, post info links and more.', 'genexis' ),
			    'label'       => __( 'Link Color', 'genexis' ),
			    'section'     => 'colors',
			    'settings'    => 'genexislink_color',
			)
		)
	);

	$wp_customize->add_setting(
		'genexisaccent_color',
		array(
			'default'           => genexiscustomizer_get_default_accent_color(),
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'genexisaccent_color',
			array(
				'description' => __( 'Change the default color for button hovers.', 'genexis' ),
			    'label'       => __( 'Accent Color', 'genexis' ),
			    'section'     => 'colors',
			    'settings'    => 'genexisaccent_color',
			)
		)
	);

}
