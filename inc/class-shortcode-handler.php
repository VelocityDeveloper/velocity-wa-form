<?php

/**
 *
 * @link       https://velocitydeveloper.com
 * @since      1.0.0
 *
 * @package    Velocity_wa_form
 * @subpackage Velocity_wa_form/inc
 */

class Form_Shortcode_Handler {
    public function __construct() {
        add_shortcode('wa-form', array($this, 'render_form'));
    }

    public function render_form() {
        ob_start();
        ?>
        <form class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" required>
                <div class="invalid-feedback">
                    Silakan masukkan nama Anda.
                </div>
            </div>
            <div class="mb-3">
                <label for="whatsapp" class="form-label">Nomor WhatsApp</label>
                <input type="text" class="form-control" id="whatsapp" required>
                <div class="invalid-feedback">
                    Silakan masukkan nomor WhatsApp Anda.
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        return ob_get_clean();
    }
}

$form_shortcode_handler = new Form_Shortcode_Handler();