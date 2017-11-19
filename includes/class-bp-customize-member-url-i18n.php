<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/gjerm94
 * @since      1.0.0
 *
 * @package    Bp_Customize_Member_Url
 * @subpackage Bp_Customize_Member_Url/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bp_Customize_Member_Url
 * @subpackage Bp_Customize_Member_Url/includes
 * @author     Gjermund Bakken <gjermundbakken94@gmail.com>
 */
class Bp_Customize_Member_Url_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bp-customize-member-url',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
