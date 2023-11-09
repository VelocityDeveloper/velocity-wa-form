<?php

/**
 *
 * @link       https://velocitydeveloper.com
 * @since      1.0.0
 *
 * @package    Velocity_wa_form
 * @subpackage Velocity_wa_form/inc
 */

class Admin_Menu_Handler {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_admin_menu'));
        add_action('admin_init', array($this, 'register_settings'));
    }

    public function add_admin_menu() {
        add_menu_page(
            'WhatsApp Settings',
            'WhatsApp Settings',
            'manage_options',
            'whatsapp-settings',
            array($this, 'render_settings_page'),
            'dashicons-phone',
            70
        );
    }

    public function register_settings() {
        register_setting('whatsapp_settings_group', 'whatsapp_number');
        register_setting('whatsapp_settings_group', 'phone_number');
    }

    public function render_settings_page() {
        ?>
        <div class="wrap">
            <h1>WhatsApp Settings</h1>
            <form method="post" action="options.php">
                <?php settings_fields('whatsapp_settings_group'); ?>
                <?php do_settings_sections('whatsapp_settings_group'); ?>
                <table class="form-table">
                    <tr>
                        <th scope="row">Nomor WhatsApp</th>
                        <td>
                            <input type="text" name="whatsapp_number" value="<?php echo esc_attr(get_option('whatsapp_number')); ?>" class="regular-text">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Nomor HP</th>
                        <td>
                            <input type="text" name="phone_number" value="<?php echo esc_attr(get_option('phone_number')); ?>" class="regular-text">
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
}

$admin_menu_handler = new Admin_Menu_Handler();