<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.liffery.com
 * @since      1.0.5
 *
 * @package    Liffery_sidebar
 * @subpackage Liffery_sidebar/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Liffery_sidebar
 * @subpackage Liffery_sidebar/public
 * @author     Your Name <email@example.com>
 */
class Liffery_sidebar_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.5
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.5
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @param string $plugin_name The name of the plugin.
     * @param string $version The version of this plugin.
     * @since    1.0.5
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.5
     */
    public function enqueue_styles()
    {
        // Styles are managed by the parent site, no additional style sheets required.
    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.5
     */
    public function enqueue_scripts()
    {
        wp_enqueue_script($this->plugin_name, 'https://www.liffery.com/_/sidebar/p.js', false);
    }
}
