<?php

require_once('mode.php');

$config = array(
	'production' => array(
    /** MySQL hostname */
		'DB_HOST' => 'localhost',
    /** MySQL database username */
		'DB_USER' => '',
    /** MySQL database password */
		'DB_PASSWORD' => '',
    /** The name of the database for WordPress */
		'DB_NAME' => '',
    /** Database Charset to use in creating database tables. */
		'DB_CHARSET' => 'utf8',
    /** The Database Collate type. Don't change this if in doubt. */
    'DB_COLLATE' => '',
		'GOOGLE_ANALYTICS_ID' => '',
		'DEBUG'     => false // unused for now...
	)
);

$config['development'] = array_merge($config['production'], array(
		'DB_HOST' => 'localhost',
		'DB_USER' => '',
		'DB_PASSWORD' => '',
		'DB_NAME' => '',
//		'JETPACK_DEV_DEBUG' => true
	)
);

if(empty($config[MODE])) {
	die(MODE.' is not a valid config environment.');
}

foreach ($config[MODE] as $key => $value) {
	define($key, $value);
}
