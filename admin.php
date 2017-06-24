<?php
/**
 * check access of user
 */
function atchfa_check_access()
{
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
}

/**
 * add option page to settings menu
 */
function atchfa_plugin_options()
{
    add_options_page('Attach Font-Awesome Options', 'Attach Font-Awesome', 'manage_options', 'atchfa-plugin-options', 'atchfa_plugin_options_body');
}

/**
 * register options of plugin
 */
function atchfa_register_options()
{
    register_setting('atchfa-option-group', 'attach-version');
    register_setting('atchfa-option-group', 'attach-load-type');
}

/**
 * add js file in admin
 */
function atchfa_admin_js_files()
{
    wp_enqueue_script('attach-font-awesome-script-file', plugins_url('js/scripts.js', __FILE__)); // includes CSS file
}

/**
 * make html of option page
 */
function atchfa_plugin_options_body()
{
    atchfa_check_access();
    global $atchfa_data;
//    get saved value of options
    $savedOptions['version'] = atchfa_get_cdn_version_option();
    $savedOptions['load-type'] = atchfa_get_load_type_option();
//    get cdn versions from config data
    $versions = $atchfa_data['cdn_versions'];
    ?>
    <div class="wrap">
        <h1>Attach Font-Awesome Options</h1>
        <form method="post" action="options.php">
            <?php echo settings_fields('atchfa-option-group'); ?>
            <?php echo do_settings_sections('atchfa-option-group'); ?>
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">Load css file from :</th>
                    <td>
                        <label>
                            <input type="radio" value="local" id="atchfaLoadLocalType" name="attach-load-type"
                                   <?php if ($savedOptions['load-type'] == 'local'): ?>checked<?php endif; ?>/>
                            Local
                        </label>
                        <label>
                            <input type="radio" value="cdn" id="atchfaLoadCdnType" name="attach-load-type"
                                   <?php if ($savedOptions['load-type'] == 'cdn'): ?>checked<?php endif; ?>/>
                            CDN (cloudflare.com)
                        </label>
                    </td>
                </tr>
                <tr valign="top" id="atchfaCdnVersionContainter"
                    <?php if ($savedOptions['load-type'] == 'local'): ?>style="display:none;"<?php endif; ?>>
                    <th scope="row">Version :</th>
                    <td>
                        <select name="attach-version">
                            <?php foreach ($versions as $version => $url) : ?>
                                <option value="<?= $url; ?>"
                                        <?php if ($savedOptions['version'] == $url): ?>selected<?php endif; ?>><?= $version; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            </table>
            <hr>
            <?php echo submit_button(); ?>
        </form>
    </div>
    <?php
}
?>