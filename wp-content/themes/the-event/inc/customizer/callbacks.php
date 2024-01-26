<?php
/**
 * Callbacks functions
 *
 * @package the_event
 */

if ( ! function_exists( 'the_event_has_woocommerce' ) ) :
	/**
	 * Check if woocommerce is enabled enabled
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_has_woocommerce() {
		return class_exists( 'WooCommerce' ) ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_slider_section_enable' ) ) :
	/**
	 * Check if slider_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_slider_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_slider]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_hero_content_section_enable' ) ) :
	/**
	 * Check if hero_content_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_hero_content_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_hero_content]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_speaker_section_enable' ) ) :
	/**
	 * Check if speaker_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_speaker_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_speaker]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_service_section_enable' ) ) :
	/**
	 * Check if service_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_service_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_service]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_team_section_enable' ) ) :
	/**
	 * Check if team_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_team_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_team]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_schedule_section_enable' ) ) :
	/**
	 * Check if schedule_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_schedule_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_schedule]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_portfolio_section_enable' ) ) :
	/**
	 * Check if portfolio_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_portfolio_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_portfolio]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_skills_section_enable' ) ) :
	/**
	 * Check if skills_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_skills_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_skills]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_gallery_section_enable' ) ) :
	/**
	 * Check if gallery_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_gallery_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_gallery]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_product_section_enable' ) ) :
	/**
	 * Check if product_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_product_section_enable( $control ) {
		return ( the_event_has_woocommerce() && $control->manager->get_setting( 'the_event_theme_options[enable_product]' )->value() );
	}
endif;

if ( ! function_exists( 'the_event_cta_section_enable' ) ) :
	/**
	 * Check if cta_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_cta_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_cta]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_client_section_enable' ) ) :
	/**
	 * Check if client_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_client_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_client]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_testimonial_section_enable' ) ) :
	/**
	 * Check if testimonial_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_testimonial_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_testimonial]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_recent_section_enable' ) ) :
	/**
	 * Check if recent_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_recent_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_recent]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'the_event_recent_content_category_enable' ) ) :
	/**
	 * Check if recent content type is category.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_recent_content_category_enable( $control ) {
		return ( $control->manager->get_setting( 'the_event_theme_options[enable_recent]' )->value() && 'category' == $control->manager->get_setting( 'the_event_theme_options[recent_content_type]' )->value() );
	}
endif;

if ( ! function_exists( 'the_event_contact_section_enable' ) ) :
	/**
	 * Check if contact_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function the_event_contact_section_enable( $control ) {
		return $control->manager->get_setting( 'the_event_theme_options[enable_contact]' )->value() ? true : false;
	}
endif;
