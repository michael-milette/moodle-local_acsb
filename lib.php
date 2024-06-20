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
 * Add acsb to footer.
 *
 * @package     local_acsb
 * @copyright   2023-2024 TNG Consulting Inc. <www.tngconsulting.ca>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * This function adds the Accessibility Sidebar (acsb) to the footer of the page.
 * It first checks if the current page layout is not in the excluded pages list.
 * If the page is not excluded and the 'local_acsb' configuration is enabled,
 * it adds the Sienna Accessibility Widget script to the page.
 * It also sets the language of the widget UI to match Moodle's current language.
 *
 * @return void
 */
function local_acsb_before_footer() {
    global $PAGE, $CFG;

    $excludepages = ['embedded', 'frametop', 'popup', 'print', 'redirect']; // Removed: admin, maintenance and report.

    if (!in_array($PAGE->pagelayout, $excludepages)) { // Do not show on pages that may use $OUTPUT.
        if (get_config('local_acsb', 'enabled')) {
            // Add the widget.

            echo "<script src=\"$CFG->wwwroot/local/acsb/thirdparty/Sienna-Accessibility-Widget/sienna.min.js\" defer></script>";

            // Set its UI lang to match Moodle's.

            $lang = substr(current_language(), 0, 2);
            $supportedlanguages = [
                'ar', 'de', 'el', 'en', 'es',
                'fr', 'he', 'hi', 'hr', 'id',
                'it', 'ja', 'ko', 'ms', 'pt',
                'ro', 'sr', 'tr', 'zh',
            ];
            if (!in_array($lang, $supportedlanguages)) {
                $lang = 'en';
            }

            echo '
            <script>
                document.addEventListener("load", function() {
                    const languageSelect = document.getElementById("asw-language");
                    languageSelect.value = "' . $lang . '";
                    const event = new Event("change");
                    languageSelect.dispatchEvent(event);
                });
            </script>
            ';
        }
    }
}
