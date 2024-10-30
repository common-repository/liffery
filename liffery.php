<?php

/**
 * The Liffery plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.liffery.com
 * @since             1.0.5
 * @package           Liffery
 *
 * @wordpress-plugin
 * Plugin Name:       Liffery
 * Plugin URI:        https://github.com/liffery-com/plugin-liffery-wordpress
 * Description:       The official Liffery Wordpress/ Woocommerce Plugin - Make sure you verify the installation on the settings page
 * Version:           1.0.5
 * Author:            Liffery Ltd
 * Author URI:        https://www.liffery.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       liffery
 */

// If this file is called directly, abort.
if ( ! defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.5 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define('LIFFERY_sidebar_VERSION', '1.0.5');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-liffery-sidebar-activator.php
 */
function activate_liffery_sidebar()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-liffery-sidebar-activator.php';
    Liffery_sidebar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-liffery-sidebar-deactivator.php
 */
function deactivate_liffery_sidebar()
{
    require_once plugin_dir_path(__FILE__) . 'includes/class-liffery-sidebar-deactivator.php';
    Liffery_sidebar_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_liffery_sidebar');
register_deactivation_hook(__FILE__, 'deactivate_liffery_sidebar');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-liffery-sidebar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.5
 */
function run_liffery_sidebar()
{

    $plugin = new Liffery_sidebar();
    $plugin->run();

}

run_liffery_sidebar();


/**
 * Add the settins link to the plugin page
 */
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'liffery_apd_settings_link');
function liffery_apd_settings_link(array $links)
{
    $url           = get_admin_url() . "options-general.php?page=liffery";
    $settings_link = '<a href="' . $url . '">' . __('Settings', 'textdomain') . '</a>';
    array_unshift($links, $settings_link);

    return $links;
}

/**
 * The settings link to Liffery page
 *
 * @return void
 */
function liffery_options_page_html()
{
    require_once plugin_dir_path(__FILE__) . 'admin/partials/liffery-sidebar-admin-display.php';
}
function liffery_custom_plugin_page()
{
    add_options_page('Liffery', 'Liffery', 'manage_options', 'liffery', 'liffery_options_page_html');
}

add_action('admin_menu', 'liffery_custom_plugin_page');
