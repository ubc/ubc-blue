<?php

/**
 * Settings for the ubc_blue theme
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // font size reference
    $name = 'theme_ubc_blue/fontsizereference';
    $title = get_string('fontsizereference','theme_ubc_blue');
    $description = get_string('fontsizereferencedesc', 'theme_ubc_blue');
    $default = '13';
    $choices = array(11=>'11px', 12=>'12px', 13=>'13px', 14=>'14px', 15=>'15px', 16=>'16px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // moodle 1.* like setting
    $name = 'theme_ubc_blue/noframe';
    $title = get_string('noframe','theme_ubc_blue');
    $description = get_string('noframedesc', 'theme_ubc_blue');
    $default = '0';
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Frame margin
    $name = 'theme_ubc_blue/framemargin';
    $title = get_string('framemargin','theme_ubc_blue');
    $description = get_string('framemargindesc', 'theme_ubc_blue', get_string('noframe','theme_ubc_blue'));
    $default = '15';
    $choices = array(0=>'0px', 5=>'5px', 10=>'10px', 15=>'15px', 20=>'20px', 25=>'25px', 30=>'30px', 35=>'35px', 40=>'40px', 45=>'45px', 50=>'50px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Display logo or heading
    $name = 'theme_ubc_blue/headercontent';
    $title = get_string('headercontent','theme_ubc_blue');
    $description = get_string('headercontentdesc', 'theme_ubc_blue');
    $default = '1';
    $choices = array(1=>get_string('displaylogo', 'theme_ubc_blue'), 0=>get_string('displayheading', 'theme_ubc_blue'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom site logo setting
    $name = 'theme_ubc_blue/customlogourl';
    $title = get_string('customlogourl','theme_ubc_blue');
    $description = get_string('customlogourldesc', 'theme_ubc_blue');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW); // we want it accepting ../ at the beginning. Security is not at its top but Moodle trusts admins.
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom front page site logo setting
    $name = 'theme_ubc_blue/frontpagelogourl';
    $title = get_string('frontpagelogourl','theme_ubc_blue');
    $description = get_string('frontpagelogourldesc', 'theme_ubc_blue');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW); // we want it accepting ../ at the beginning. Security is not at its top but Moodle trusts admins.
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // page header background colour setting
    $name = 'theme_ubc_blue/headerbgc';
    $title = get_string('headerbgc','theme_ubc_blue');
    $description = get_string('headerbgcdesc', 'theme_ubc_blue');
    $default = '#002859';
    $previewconfig = array('selector'=>'#page-header', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // creditstomoodleorg: ctmo
    $name = 'theme_ubc_blue/creditstomoodleorg';
    $title = get_string('creditstomoodleorg','theme_ubc_blue');
    $description = get_string('creditstomoodleorgdesc', 'theme_ubc_blue');
    $default = '2';
    $choices = array(2 => get_string('ctmo_ineverypage', 'theme_ubc_blue'), 1 => get_string('ctmo_onfrontpageonly', 'theme_ubc_blue'), 0 => get_string('ctmo_no', 'theme_ubc_blue'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Block region width
    $name = 'theme_ubc_blue/blockcolumnwidth';
    $title = get_string('blockcolumnwidth','theme_ubc_blue');
    $description = get_string('blockcolumnwidthdesc', 'theme_ubc_blue');
    $default = '200';
    $choices = array(150=>'150px', 170=>'170px', 200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Block padding
    $name = 'theme_ubc_blue/blockpadding';
    $title = get_string('blockpadding','theme_ubc_blue');
    $description = get_string('blockpaddingdesc', 'theme_ubc_blue');
    $default = '8';
    $choices = array(1=>'1px', 2=>'2px', 4=>'4px', 8=>'8px', 12=>'12px', 16=>'16px');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Block content background colour setting
    $name = 'theme_ubc_blue/blockcontentbgc';
    $title = get_string('blockcontentbgc','theme_ubc_blue');
    $description = get_string('blockcontentbgcdesc', 'theme_ubc_blue');
    $default = '#F6F6F6';
    $previewconfig = array('selector'=>'.block .content', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Left column colour setting
    $name = 'theme_ubc_blue/lblockcolumnbgc';
    $title = get_string('lblockcolumnbgc','theme_ubc_blue');
    $description = get_string('lblockcolumnbgcdesc', 'theme_ubc_blue');
    $default = '#002859';
    $previewconfig = array('selector'=>'#page-content, #page-content #region-pre, #page-content #region-post-box', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Right column colour setting
    $name = 'theme_ubc_blue/rblockcolumnbgc';
    $title = get_string('rblockcolumnbgc','theme_ubc_blue');
    $description = get_string('rblockcolumnbgcdesc', 'theme_ubc_blue');
    $default = '';
    $previewconfig = array('selector'=>'#page-content #region-post-box, #page-content #region-post', 'style'=>'backgroundColor');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Foot note setting
    $name = 'theme_ubc_blue/footnote';
    $title = get_string('footnote','theme_ubc_blue');
    $description = get_string('footnotedesc', 'theme_ubc_blue');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file
    $name = 'theme_ubc_blue/customcss';
    $title = get_string('customcss','theme_ubc_blue');
    $description = get_string('customcssdesc', 'theme_ubc_blue');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
