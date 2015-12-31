<?php if ( ! defined( 'ABSPATH' ) ) exit;

/*
Plugin Name: Config Loader
Description: Adds the ability to pre-configure your WordPress Plugins by storing and injecting API keys into plugins.
Version: 0.0.1
Author: Kenny Hall
Author URI: http://kennyinthewild.com
*/

class config_loader
{
    /**
     * @var string
     */
    public static $url = '';

    /**
     * @var string
     */
    public static $dir = '';

    /**
     * kennys_config_loader constructor.
     */
    public function __construct()
    {
        include( 'includes/cl-admin-menu.php' );

        self::$dir = plugin_dir_path( __FILE__ );

        self::$url = plugin_dir_url( __FILE__ );
    }

}

return new config_loader;