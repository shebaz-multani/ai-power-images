<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://shebaz-multani.github.io
 * @since             1.0.0
 * @package           Ai_Power_Images
 *
 * @wordpress-plugin
 * Plugin Name:       AI Power Images
 * Plugin URI:        https://shebaz-multani.github.io
 * Description:      A powerful AI tool to generate images and import to WordPress media so you can easily use in posts and pages featured image. Plugin uses Lexica.art to generate images.
 * Version:           1.0.0
 * Author:            Shebaz Multani
 * Author URI:        https://shebaz-multani.github.io
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ai-power-images
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
define( 'AI_POWER_IMAGES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ai-power-images-activator.php
 */
function activate_ai_power_images() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ai-power-images-activator.php';
	Ai_Power_Images_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ai-power-images-deactivator.php
 */
function deactivate_ai_power_images() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ai-power-images-deactivator.php';
	Ai_Power_Images_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ai_power_images' );
register_deactivation_hook( __FILE__, 'deactivate_ai_power_images' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ai-power-images.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ai_power_images() {

	$plugin = new Ai_Power_Images();
	$plugin->run();

}
run_ai_power_images();
