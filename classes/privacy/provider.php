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
 * Privacy Subsystem implementation for local_acsb.
 *
 * @package    local_acsb
 * @copyright  2024 TNG Consulting Inc. <www.tngconsulting.ca>
 * @author     Michael Milette
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace local_acsb\privacy;

/**
 * Privacy Subsystem for local_acsb implementing null_provider.
 *
 * @copyright  2024 TNG Consulting Inc. <www.tngconsulting.ca>
 * @license    https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\null_provider {
    /**
     * Get the language string identifier with the component's language
     * file to explain why this plugin stores no data.
     *
     * @return  string
     */
    public static function get_reason(): string {
        return 'privacy:metadata';
    }
}
