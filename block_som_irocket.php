<?php

/**
iRocket helpdesk block for Moodle
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
