<?php

/**
 *
 * @link       https://velocitydeveloper.com
 * @since      1.0.0
 *
 * @package    Velocity_wa_form
 * @subpackage Velocity_wa_form/inc
 */

class Asset_Handler {
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_assets'));
    }

    public function enqueue_assets() {
        wp_enqueue_style('custom-style', plugin_dir_url(__FILE__) . '../assets/style.css');
        wp_enqueue_script('custom-script', plugin_dir_url(__FILE__) . '../assets/script.js', array('jquery'), '1.0', true);
    }
}

$form_asset_handler = new Asset_Handler();