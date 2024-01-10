<?php
/**
 * Plugin Name: 00 JLMR Show Cookies a todos
 * Plugin URI: https://webyblog.es/
 * Description: Muestra las cookies en la parte superior de cada página a todos los usuarios logeados o no.
 * Version: 10-01-2024
 * Author: Juan Luis Martel
 * Author URI: https://www.webyblog.es
 * License: GPLv3 or later
 */


if (!defined('ABSPATH')) {
    exit;
}

function jlmr_show_cookies_todos() {
    echo '<div style="position: fixed; top: 0; left: 0; background: #fff; z-index: 9999; width: 100%; padding: 10px; border-bottom: 1px solid #ccc;">';
    echo '<strong>Cookies:</strong><pre>';
    print_r($_COOKIE);
    echo '</pre></div>';
}
add_action('wp_footer', 'jlmr_show_cookies_todos');