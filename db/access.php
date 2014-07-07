<?php
    $capabilities = array(

    'block/som_irocket:myaddinstance' => array(
        'captype' => 'write',
	'contextlevel' => CONTEXT_SYSTEM,
	'archetypes' => array(
	    'user' => CAP_ALLOW
	    ),
 
        'clonepermissionsfrom' => 'moodle/my:manageblocks'
	),

    'block/som_irocket:addinstance' => array(
	
	'captype' => 'write',
	'contextlevel' => CONTEXT_BLOCK,
	'archetypes' => array(
			      'editingteacher' => CAP_ALLOW,
			      'manager' => CAP_ALLOW
			      ),
	
	'clonepermissionsfrom' => 'moodle/site:manageblocks'
	),
    );
