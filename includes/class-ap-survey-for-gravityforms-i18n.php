<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://aleksandarperisic.com/
 * @since      1.0.0
 *
 * @package    Ap_Survey_For_GravityForms
 * @subpackage Ap_Survey_For_GravityForms/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ap_Survey_For_GravityForms
 * @subpackage Ap_Survey_For_GravityForms/includes
 * @author     Aleksandar P. <aleksandar.perisic@toptal.com>
 */
class Ap_Survey_For_GravityForms_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ap-survey-for-gravityforms',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
