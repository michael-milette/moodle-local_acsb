<?php
// This file is part of Accessibility Sidebar for Moodle - https://moodle.org/
//
// Accessibility Sidebar is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Accessibility Sidebar is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Accessibility Sidebar.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin version and other meta-data are defined here.
 *
 * @package     local_acsb
 * @copyright   2023-2024 TNG Consulting Inc. <www.tngconsulting.ca>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->component = 'local_acsb';
$plugin->release = '0.2.0';
$plugin->version = 2024061900;
$plugin->requires = 2020061500;
$plugin->maturity = MATURITY_ALPHA;
$plugin->callback = 'local_acsb_admin_footer';
