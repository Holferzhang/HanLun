<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme version info
 * @package    theme
 * @subpackage contemporary
 * @copyright � 2012 - 2013 | 3i Logic (Pvt) Ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    global $CFG;
    // Logo file setting.
    $name = 'theme_contemporary/banner';
    $title = get_string('banner', 'theme_contemporary');
    $description = get_string('bannerdesc', 'theme_contemporary');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'banner');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Link color setting.
    $name = 'theme_contemporary/linkcolor';
    $title = get_string('linkcolor', 'theme_contemporary');
    $description = get_string('linkcolordesc', 'theme_contemporary');
    $default = '#2d83d5';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);


    // Block Header setting.
    $name = 'theme_contemporary/blockheaderbg';
    $title = get_string('blockheaderbg', 'theme_contemporary');
    $description = get_string('blockheaderbgdesc', 'theme_contemporary');
    $default = '#2d83d5';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Block Header Fonts setting.
    $name = 'theme_contemporary/blockheadercolor';
    $title = get_string('blockheadercolor', 'theme_contemporary');
    $description = get_string('blockheadercolordesc', 'theme_contemporary');
    $default = '#ffffff';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Foot note setting.
    $name = 'theme_contemporary/footertext';
    $title = get_string('footertext', 'theme_contemporary');
    $description = get_string('footertextdesc', 'theme_contemporary');
    $setting = new admin_setting_confightmleditor($name, $title, $description, '');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_contemporary/customcss';
    $title = get_string('customcss', 'theme_contemporary');
    $description = get_string('customcssdesc', 'theme_contemporary');
    $setting = new admin_setting_configtextarea($name, $title, $description, '');
	$setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Menu Font Color.
    $name = 'theme_contemporary/menucolor';
    $title = get_string('menucolor', 'theme_contemporary');
    $description = get_string('menucolordesc', 'theme_contemporary');
    $default = '#ffffff';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Menu Background.
    $name = 'theme_contemporary/menubg';
    $title = get_string('menubg', 'theme_contemporary');
    $description = get_string('menubgdesc', 'theme_contemporary');
    $default = '#000000';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Menu Hover Background.
    $name = 'theme_contemporary/menulinkhover';
    $title = get_string('menulinkhover', 'theme_contemporary');
    $description = get_string('menulinkhoverdesc', 'theme_contemporary');
    $default = '#D8D2C6';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
	$setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
