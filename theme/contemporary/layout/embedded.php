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
echo $OUTPUT->doctype()
?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title><?php echo $PAGE->title ?></title>
        <link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme') ?>" />
<?php echo $OUTPUT->standard_head_html() ?>
    </head>
    <body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses) ?>">
    <h1>2</h1>
<?php echo $OUTPUT->standard_top_of_body_html() ?>

        <div id="page">

            <!-- END OF HEADER -->

            <div id="content" class="clearfix">
<?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
            </div>

            <!-- START OF FOOTER -->
        </div>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
    </body>
</html>
