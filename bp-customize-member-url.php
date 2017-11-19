<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/gjerm94
 * @since             1.0.0
 * @package           Bp_Customize_Member_Url
 *
 * @wordpress-plugin
 * Plugin Name:       BuddyPress Customize Member URL
 * Plugin URI:        https://github.com/gjerm94/bp-customize-member-url
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Gjermund Bakken
 * Author URI:        https://github.com/gjerm94
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bp-customize-member-url
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bp-customize-member-url-activator.php
 */
function activate_bp_customize_member_url() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bp-customize-member-url-activator.php';
	Bp_Customize_Member_Url_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bp-customize-member-url-deactivator.php
 */
function deactivate_bp_customize_member_url() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bp-customize-member-url-deactivator.php';
	Bp_Customize_Member_Url_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bp_customize_member_url' );
register_deactivation_hook( __FILE__, 'deactivate_bp_customize_member_url' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bp-customize-member-url.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bp_customize_member_url() {

	$plugin = new Bp_Customize_Member_Url();
	$plugin->run();

}
run_bp_customize_member_url();
