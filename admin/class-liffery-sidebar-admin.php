<?php


/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.liffery.com
 * @since      1.0.5
 *
 * @package    Liffery_sidebar
 * @subpackage Liffery_sidebar/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Liffery_sidebar
 * @subpackage Liffery_sidebar/admin
 * @author     Your Name <email@example.com>
 */
class Liffery_sidebar_Admin
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
     * @param string $plugin_name The name of this plugin.
     * @param string $version The version of this plugin.
     * @since    1.0.5
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

        $this->registerSettings();
    }

    /**
     * Enables/registers the setting for this plugin
     */
    private function registerSettings()
    {
        register_setting('liffery_options_group', 'liffery_option_domain_validated');
        register_setting('liffery_options_group', 'liffery_option_domain_validated_date');
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.5
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Liffery_sidebar_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Liffery_sidebar_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/liffery-sidebar-admin.css', array(), $this->version, 'all');

    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.5
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Liffery_sidebar_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Liffery_sidebar_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/liffery-sidebar-admin.js', array('jquery'), $this->version, false);

    }

    public function admin_menu()
    {
//        function liffery_options_page_html()
//        {
//            include plugin_dir_path(__FILE__) . 'partials/liffery-sidebar-admin-display.php';
//        }
//
//        add_menu_page(
//            'Liffery',
//            'Liffery',
//            'manage_options',
//            'liffery',
//            'liffery_options_page_html',
//            plugin_dir_url(__FILE__) . 'images/liffery.png',
//            20
//        );
    }
}
