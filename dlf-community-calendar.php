<?php
/**
 * Plugin Name: DLF Community Calendar
 * Plugin URI: https://github.com/clirdlf/wp_community_calendar
 * Description: Widget and shortcode for the DLF Community Calendar
 * Text Domain: clir-dlf
 * Domain Path: /languages
 * Author: Council on Libraries and Information Resources
 * Version: 0.0.1
 * Author URI: https://www.diglib.org
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 */

define('CLIR_WIDGETS_PLUGIN_PATH', plugin_dir_path(__FILE__));
define('CLIR_WIDGETS_PLUGIN_PATH', plugin_dir_path(__FILE__));

require_once CLIR_WIDGETS_PLUGIN_PATH . 'lib/calendar-widget.php';
require_once CLIR_WIDGETS_PLUGIN_PATH . 'lib/shortcodes.php';

// Block direct requests
if (!defined('ABSPATH')) {
    die(-1);
}

add_action('widgets_init', 'clir_load_widgets');

/**
 * Load widgets
 * @return null
 */
function clir_load_widgets()
{
    register_widget('Community_Calendar_Widget');
}
