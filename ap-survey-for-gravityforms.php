<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://aleksandarperisic.com/
 * @since             1.0.0
 * @package           Ap_Survey_For_GravityForms
 *
 * @wordpress-plugin
 * Plugin Name:       AP Survey for GravityForms
 * Plugin URI:        https://aleksandarperisic.com/
 * Description:       Extend Survey add-on so checkboxes and radioboxes looks more like buttons (nicer UI)
 * Version:           1.0.0
 * Author:            Aleksandar P.
 * Author URI:        https://aleksandarperisic.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ap-survey-for-gravityforms
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'AP_SURVEY_FOR_GRAVITYFORMS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ap-survey-for-gravityforms-activator.php
 */
function activate_ap_survey_for_gravityforms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ap-survey-for-gravityforms-activator.php';
	Ap_Survey_For_GravityForms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ap-survey-for-gravityforms-deactivator.php
 */
function deactivate_ap_survey_for_gravityforms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ap-survey-for-gravityforms-deactivator.php';
	Ap_Survey_For_GravityForms_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ap_survey_for_gravityforms' );
register_deactivation_hook( __FILE__, 'deactivate_ap_survey_for_gravityforms' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ap-survey-for-gravityforms.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ap_survey_for_gravityforms() {

	$plugin = new Ap_Survey_For_GravityForms();
	$plugin->run();

}
run_ap_survey_for_gravityforms();
