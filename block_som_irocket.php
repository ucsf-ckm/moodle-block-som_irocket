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
 * iRocket helpdesk block for Moodle
 * 
 * @package   block_som_irocket.php
 * @copyright University of California, San Francisco
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_som_irocket extends block_base {
    function init() {
        $this->title = get_string('som_irocket', 'block_som_irocket');
    }

    function get_content() {
        global $CFG;

        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;

        $logofile = $CFG->wwwroot.'/blocks/som_irocket/helpdesk-logo.gif';
        $somlogo = '<img src="'.$logofile.'" align="middle" alt="SOM iROCKET" title="SOM iROCKET">';


        $this->content->text = $somlogo.

            '<br /><br />For assistance email the iROCKET Team at <a target="_blank" href="mailto:irocket@ucsf.edu">irocket@ucsf.edu</a> or call us at 415/502-2800. Our help desk is open M-F, 8a-5p.<br /><br /><a target="_blank" href="http://meded.ucsf.edu/tel/irocket-usage-policy">iROCKET Usage Policy </a>';


        $this->content->footer ='';

    }

}
