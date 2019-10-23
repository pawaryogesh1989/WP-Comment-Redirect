<div class="wrap">
    <h3><?php _e('Comment Redirect Settings'); ?></h3>

    <form method="post" action="options.php">
        <?php settings_fields('wp-comment-redirect-settings-group'); ?>
        <?php do_settings_sections('wp-comment-redirect-settings-group'); ?>
        <table class="form-table">
            <tr valign="top">
                <th scope="row">Redirect to URL: </th>
                <td><input class="regular-text" type="url" required="required" name="wp_comment_redirect_url" value="<?php echo esc_attr(get_option('wp_comment_redirect_url')); ?>" /></td>
            </tr>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
