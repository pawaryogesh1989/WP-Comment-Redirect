<?php

class WP_Comment_Redirect {

    public function __construct() {

        add_action('admin_menu', array($this, 'wp_comment_redirect_menu'));
        add_action('admin_init', array($this, 'wp_comment_redirect_settings'));
        add_filter('comment_post_redirect', array($this, 'wp_comment_redirect_url'));
    }

    public function wp_comment_redirect_menu() {
        add_plugins_page('Comment Redirect Settings', 'Comment Redirect Settings', 'manage_options', 'comment-redirect-settings', array($this, 'load_redirect_settings_page'), '', 85);
    }

    public function load_redirect_settings_page() {
        if (file_exists(plugin_dir_path(__DIR__) . '/views/redirect-settings.php')) {
            require plugin_dir_path(__DIR__) . '/views/redirect-settings.php';
        } else {
            die('<br /><h3>Plugin Installation is Incomplete. Please install the plugin again or make sure you have copied all the plugin files.</h3>');
        }
    }

    public function wp_comment_redirect_settings() {

        register_setting('wp-comment-redirect-settings-group', 'wp_comment_redirect_url');
    }

    public function wp_comment_redirect_url($location) {

        $redirect_custom_url = get_option('wp_comment_redirect_url');
        return $redirect_custom_url;
    }

}
?>