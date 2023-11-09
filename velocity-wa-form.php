<?php

/**
 *
 * @link              https://velocitydeveloper.com
 * @since             1.0.0
 * @package           Velocity_wa_form
 *
 * @wordpress-plugin
 * Plugin Name:       Velocity Whatsapp Form
 * Plugin URI:        https://velocitydeveloper.com
 * Description:       Addon plugin for Velocitydeveloper Client
 * Version:           1.0.0
 * Author:            Velocity
 * Author URI:        https://velocitydeveloper.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       velocity-wa-form
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('VELOCITY_WA_FORM_VERSION', '1.0.1');


require_once plugin_dir_path(__FILE__) . 'inc/class-asset-handler.php';
require_once plugin_dir_path(__FILE__) . 'inc/class-shortcode-handler.php';
require_once plugin_dir_path(__FILE__) . 'inc/class-admin-menu-handler.php';