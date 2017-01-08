<?php 

return [
	'database' => [
		'name' 			=> 'mytodo',
		'user' 			=> 'dev',
		'password' 		=> '12123434',
		'connection' 	=> 'pgsql:host=127.0.0.1',
		'options'		=> [
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		]
	]
];