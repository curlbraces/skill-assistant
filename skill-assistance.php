<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.seasonalcoder.com/skill-assistance
 * @since             1.0.0
 * @package           Skill_Assistance
 *
 * @wordpress-plugin
 * Plugin Name:       Skill Assistance
 * Plugin URI:        https://www.seasonalcoder.com
 * Description:       Skill Assistance designed to create account sorting depend on the listing designation.
 * Version:           1.0.0
 * Author:            Seasonal Coder
 * Author URI:        https://www.seasonalcoder.com/skill-assistance
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       skill-assistance
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
define( 'SKILL_ASSISTANCE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-skill-assistance-activator.php
 */
function activate_skill_assistance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-skill-assistance-activator.php';
	Skill_Assistance_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-skill-assistance-deactivator.php
 */
function deactivate_skill_assistance() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-skill-assistance-deactivator.php';
	Skill_Assistance_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_skill_assistance' );
register_deactivation_hook( __FILE__, 'deactivate_skill_assistance' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-skill-assistance.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_skill_assistance() {

	$plugin = new Skill_Assistance();
	$plugin->run();

}
run_skill_assistance();
