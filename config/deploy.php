<?php

return array(
	
	'test'				=> array(
		'git_command'		=> 'git checkout master; git pull origin master;',
		'migrate_command'	=> 'php oil r migrate',
		),
		
	'production'		=> array(
		'git_command'		=> 'git checkout master; git pull origin master;',
		'migrate_command'	=> 'php oil r migrate',
		),
	
	);