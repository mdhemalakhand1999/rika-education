<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://hrtechnotes.com
 * @since             1.0.0
 * @package           Rika_Edu
 *
 * @wordpress-plugin
 * Plugin Name:       Rika Education
 * Plugin URI:        https://rika.com
 * Description:       Rika education basically for job website
 * Version:           1.0.0
 * Author:            HR Foundation
 * Author URI:        https://hrtechnotes.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rika-edu
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
define( 'RIKA_EDU_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rika-edu-activator.php
 */
function activate_rika_edu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rika-edu-activator.php';
	Rika_Edu_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rika-edu-deactivator.php
 */
function deactivate_rika_edu() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rika-edu-deactivator.php';
	Rika_Edu_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rika_edu' );
register_deactivation_hook( __FILE__, 'deactivate_rika_edu' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rika-edu.php';
require_once plugin_dir_path( __FILE__ ) . 'admin/post-type/post-type-courses.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rika_edu() {

	$plugin = new Rika_Edu();
	$plugin->run();

}
run_rika_edu();
