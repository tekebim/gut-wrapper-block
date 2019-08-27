<?php
/**
 * Plugin Name: Block Section Gutenberg
 * Description: Section block for Gutenberg in WordPress.
 * Author: Custom
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: wrapper-block-section
 * Domain Path: /languages/
 *
 * @package wrapper-block-section
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

add_action('enqueue_block_editor_assets', 'wrapper_block_example_enqueue_block_editor_assets');

function wrapper_block_example_enqueue_block_editor_assets()
{
    // Enqueue our script
    wp_enqueue_script(
        'wrapper-block-section-js',
        esc_url(plugins_url('/dist/wrapper-block-section.js', __FILE__)),
        array('wp-blocks', 'wp-i18n', 'wp-element', 'wp-editor'),
        '1.0.0',
        true// Enqueue the script in the footer.
    );
}
