<?php if ( ! defined( 'ABSPATH' ) ) exit;

class register_admin_menu
{
    /**
     * register_admin_menu constructor.
     */
    public function __construct()
    {
        add_action('admin_menu', array($this, 'cl_admin_menu'));
    }

    public function cl_admin_menu()
    {
        add_options_page(
            __('Config Loader'),
            __('Config Loader'),
            'manage_options',
            'custom-password-reset-email',
            array( $this, 'cl_admin_callback' )
        );
    }

    public function cl_admin_callback()
    {
        include( config_loader::$dir . '/includes/cl-admin-template.html.php' );
    }
}

return new register_admin_menu();