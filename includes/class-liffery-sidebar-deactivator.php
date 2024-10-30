<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.liffery.com
 * @since      1.0.5
 *
 * @package    Liffery_sidebar
 * @subpackage Liffery_sidebar/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.5
 * @package    Liffery_sidebar
 * @subpackage Liffery_sidebar/includes
 * @author     Your Name <email@example.com>
 */
class Liffery_sidebar_Deactivator
{

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.5
     */
    public static function deactivate()
    {
        // NB error_log used as PHP does not appear to offer a standard logging option
        error_log("Deactivating the Liffery sidebar plugin", 0);
    }

}
