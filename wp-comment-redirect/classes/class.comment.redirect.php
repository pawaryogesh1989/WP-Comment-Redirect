<?php

//Main Class File
class WP_Comment_Redirect
{

    /**
     * Constructor of the class
     */
    function __construct()
    {

        add_action('admin_menu', array($this, 'wpCommentRedirectMenu'));
        add_action('admin_init', array($this, 'wpRedirectSettings'));
        add_filter('comment_post_redirect', array($this, 'wp_comment_redirect_url'));
    }

    /**
     * Function to add menu in backend
     */
    public function wpCommentRedirectMenu()
    {
        add_plugins_page('Comment Redirect Settings', 'Comment Redirect Settings', 'manage_options', 'comment-redirect-settings', array($this, 'loadRedirectSettingsPage'), '', 85);
    }

    /**
     * Function to load the settings Page
     */
    public function loadRedirectSettingsPage()
    {
        if (file_exists(plugin_dir_path(__DIR__) . '/views/redirect-settings.php')) {
            require plugin_dir_path(__DIR__) . '/views/redirect-settings.php';
        } else {
            die('<br /><h3>Plugin Installation is Incomplete. Please install the plugin again or make sure you have copied all the plugin files.</h3>');
        }
    }

    /**
     * Function to register settings group to save redirect URL
     */
    public function wpRedirectSettings()
    {

        register_setting('wp-comment-redirect-settings-group', 'wp_comment_redirect_url');
    }

    /**
     * Function to redirect user to custom URL
     * @param type $location
     * @return type
     */
    public function wp_comment_redirect_url($location)
    {

        $redirect_custom_url = get_option('wp_comment_redirect_url');
        return $redirect_custom_url;
    }
}

?>