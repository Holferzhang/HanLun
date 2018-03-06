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
 *
 * @package    theme
 * @subpackage contemporary
 * @copyright � 2012 - 2013 | 3i Logic (Pvt) Ltd.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter_layout = (empty($PAGE->layout_options['nofooter']));
$hassidepre = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-pre', $OUTPUT));
$hassidepost = (empty($PAGE->layout_options['noblocks']) && $PAGE->blocks->region_has_content('side-post', $OUTPUT));
$haslogo = (!empty($PAGE->theme->settings->logo));
$showsidepre = ($hassidepre && !$PAGE->blocks->region_completely_docked('side-pre', $OUTPUT));
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));
$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));
$hasfooter = (!empty($PAGE->theme->settings->footertext));

$bodyclasses = array();
if ($showsidepre && !$showsidepost) {
    $bodyclasses[] = 'side-pre-only';
} else if ($showsidepost && !$showsidepre) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost && !$showsidepre) {
    $bodyclasses[] = 'content-only';
}
if ($hascustommenu) {
    $bodyclasses[] = 'has_custom_menu';
}
echo $OUTPUT->doctype()
?>
<html <?php echo $OUTPUT->htmlattributes() ?>>

    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?php echo $PAGE->title ?></title>
        <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme') ?>" />
        <?php echo $OUTPUT->standard_head_html() ?>
        <script type="text/javascript">
        <!--
            function toggle_visibility(id) {
                var e = document.getElementById(id);
                if (e.style.display == 'block')
                    e.style.display = 'none';
                else
                    e.style.display = 'block';
            }
        //-->
        </script>
    </head>
    <body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses . ' ' . join(' ', $bodyclasses)) ?>">
        <?php echo $OUTPUT->standard_top_of_body_html() ?>
        <div id="page">
            <div id="wrapper" class="clearfix">
                <div class="top-bar">
            
                    <div class="headermenu">
                    <ul>
                        <?php
                        if (!empty($PAGE->layout_options['langmenu'])) {
                            echo '<li>'.$OUTPUT->lang_menu().'</li>';
                        }
                        if (method_exists($OUTPUT, 'user_menu')) {
							 echo '<li class="notifications">'.$OUTPUT->navbar_plugin_output().'</li>'; // Moodle 3.2+
                            echo '<li>'.$OUTPUT->user_menu().'</li>'; // user menu, for Moodle 2.8
                           
                            echo '<li>'.$OUTPUT->search_box().'</li>';
                        } else {
                            echo '<li>'.$OUTPUT->login_info().'</li>'; // login_info, Moodle 2.7 and before
                        }
                        //echo $PAGE->headingmenu;
                        ?>
                        </ul>
                    </div>
                    <div class="clearfix">&nbsp;</div>
                </div>
                <?php if ($hasheading || $hasnavbar) { ?>
                    <div id="page-header" class="clearfix">
                        <?php if ($hasheading) { ?>
                            <h1 class="headermain">
                                <?php // Comment echo $PAGE->heading ?  ?>
                            </h1>

                        <?php } ?>
                    </div>
                    <?php if ($hascustommenu) { ?>

                        <div id="custommenu"><div class="toggle"><a  onclick="toggle_visibility('responsive-menu');"><img src="<?php echo $OUTPUT->pix_url('nav-menu', 'theme'); ?>" alt="" /></a></div><div id="responsive-menu"><?php echo $custommenu; ?><div class="clearfix">&nbsp;</div></div></div>
                    <?php } ?>
                    <!-- START OF NAVIGATION BAR -->
                    <?php if ($hasnavbar) { ?>
                        <div class="navbar clearfix">
                            <div class="breadcrumb"><?php echo $OUTPUT->navbar(); ?></div>
                            <div class="navbutton">
                                <?php echo $OUTPUT->page_heading_button(); ?>
                            </div>
                        </div>
                        <!-- END OF NAVIGATION BAR -->	
                        <?php
                    }
                }
                ?>
                <!-- END OF HEADER -->
                <div id="page-content-wrapper">
                    <div id="page-content">
                        <!--<div id="region-main-box">
                            <div id="region-post-box">
                                <div id="region-main-wrap">-->
                               
                                    <div id="region-main" style="width:100%; float:none; padding:0px;">
                                        <div class="region-content"> <?php echo core_renderer::MAIN_CONTENT_TOKEN ?> </div>
                                    </div>   
                                <!--</div>

                         </div>-->       

                           <!-- </div>-->
                        
                    </div>
                </div>
            </div>
            <!-- START OF FOOTER -->
            <?php if ($hasfooter_layout) {
                ?>
                <div id="page-footer" class="clearfix">
                    <?php
                    if ($hasfooter) {
                        echo $PAGE->theme->settings->footertext;
                    } else {
                        ?>
                        <p class="helplink">
                        <?php //echo page_doc_link(get_string('moodledocslink'))   ?>
                        </p>
                        <?php
                        echo $OUTPUT->login_info();
                        //	echo $OUTPUT->home_link();
                        echo $OUTPUT->standard_footer_html();
                    }
                    ?>
                </div>
            <?php }
            ?>
        </div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
    </body>
</html>
