<?php
if ($_POST['conf_options'] == 'Y') {
    //Form data sent
    $allowed = $_POST['site_allowed'];
    update_option('site_allowed', $allowed);

    $prohibted = $_POST['site_prohibted'];
    update_option('site_prohibted', $prohibted);

    $silkadmin = $_POST['site_silkprohibted'];
    update_option('site_silkprohibted', $silkadmin);

    $webshop = $_POST['site_webshop'];
    update_option('site_webshop', ($webshop) ? TRUE : FALSE );

    $ServerRates = $_POST['site_ServerRates'];
    update_option('site_ServerRates', $ServerRates);

    $TeamMembers = $_POST['site_TeamMembers'];
    update_option('site_TeamMembers', $TeamMembers);
    ?>
    <div class="updated"><p><strong><?php _e('Options saved.'); ?></strong></p></div>
    <?php
} else {
    //Normal page display
    $allowed = get_option('site_allowed');
    $prohibted = get_option('site_prohibted');
    $silkadmin = get_option('site_silkprohibted');
    $webshop = get_option('site_webshop');
    $ServerRates = get_option('site_ServerRates');
    $TeamMembers = get_option('site_TeamMembers');
}
?>
<div class="wrap">
    <?php echo "<h2>" . __('Site menu Links Control Options') . "</h2>"; ?>

    <form name="silkCodes_form" method="post" action="<?php echo str_replace('%7E', '~', $_SERVER['REQUEST_URI']); ?>">
        <input type="hidden" name="conf_options" value="Y">
        <?php echo "<h4>" . __('Site Global Configurable Settings') . "</h4>"; ?>
        <p><?php _e("Allowed Links (No Login Required): "); ?><input type="text" name="site_allowed" value="<?php echo $allowed; ?>" size="20"><?php _e(" ex: Login, Register"); ?></p>
        <hr />
        <p><?php _e("Prohibted Links (Login Required): "); ?><input type="text" name="site_prohibted" value="<?php echo $prohibted; ?>" size="20"><?php _e(" ex: Contact Us, Charge Silk"); ?></p>
        <hr />
        <p><?php _e("Enable Web Shop (Online Purchases): "); ?><input type="checkbox" name="site_webshop" <?php echo ($webshop) ? "checked" : ''; ?> size="20" readonly=""/><?php _e(" ex: (Un)Checked Webshop (En|Dis)abled"); ?></p>
        <hr />
        <p><?php _e("Server Rates (Separate By New Lines): "); ?> </p> <textarea name="site_ServerRates" style="width: 250px;height: 150px;"><?php echo $ServerRates ?></textarea>
        <hr />
        <p><?php _e("Team Members (Separate Members By New Line): "); ?> </p> <textarea name="site_TeamMembers" style="width: 250px;height: 150px;"><?php echo $TeamMembers ?></textarea>
        <hr />
        <p><?php _e("Silk Administration Links (Super Admin Required): "); ?><input type="text" name="site_silkprohibted" value="<?php echo $silkadmin; ?>" size="20" readonly=""/><?php _e(" ex: Gen Silk, Check Silk (Don't Change This)"); ?></p>
        <p class="submit">
            <input type="submit" name="Submit" value="<?php _e('Update Options') ?>" />
        </p>
    </form>
</div>