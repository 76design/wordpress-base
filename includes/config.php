<?php

require_once('mode.php');

$config = array(
	'production' => array(
		'DB_76HOST' => 'localhost',
		'DB_76USER' => '',
		'DB_76PASS' => '',
		'DB_76NAME' => '',
		'DB_76CHAR' => 'utf8',
		'GOOGLE_ANALYTICS_ID' => '',
		'DEBUG'     => false // unused for now...
	)
);

$config['development'] = array_merge($config['production'], array(
		'DB_76HOST' => 'localhost',
		'DB_76USER' => '',
		'DB_76PASS' => '',
		'DB_76NAME' => '',
		'JETPACK_DEV_DEBUG' => true
	)
);

$config['appleby'] = array_merge($config['development'], array(
		'DB_76NAME' => 'lilyoc',
		'DB_76USER' => 'root',
		'DB_76PASS' => ''
	)
);

if(empty($config[MODE])) {
	die(MODE.' is not a valid config environment.');
}

foreach ($config[MODE] as $key => $value) {
	define($key, $value);
}
