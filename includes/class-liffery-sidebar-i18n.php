<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.liffery.com
 * @since      1.0.5
 *
 * @package    Liffery_sidebar
 * @subpackage Liffery_sidebar/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.5
 * @package    Liffery_sidebar
 * @subpackage Liffery_sidebar/includes
 * @author     Liffery <info@liffery.com>
 */
class Liffery_sidebar_i18n
{
    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.5
     */
    public function load_plugin_textdomain()
    {

        load_plugin_textdomain(
            'liffery-sidebar',
            false,
            dirname(dirname(plugin_basename(__FILE__))) . '/languages/'
        );

    }
}
