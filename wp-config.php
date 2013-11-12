<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
define('ROOT_FILE', dirname(__FILE__));
require_once(ROOT_FILE . '/includes/config.php');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', DB_76NAME);

/** MySQL database username */
define('DB_USER', DB_76USER);

/** MySQL database password */
define('DB_PASSWORD', DB_76PASS);

/** MySQL hostname */
define('DB_HOST', DB_76HOST);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', DB_76CHAR);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*INMYA.<*}U7N|P%FllP@i >QDH;PF<?)a;jJSQ#Z6D`9h2|lu:+QjY%(@%VE/!e');
define('SECURE_AUTH_KEY',  '@R2sk9XQ)(LSjjhx`o?E`oy-V&%I+q^~HVt,Ppfth[fB3%R:rpcDs8x{mz-!{n<m');
define('LOGGED_IN_KEY',    '~wdjgW8V8zoF$B~CP /|wL 4FVA5KJ$Sk<{z=sW+(-(90)ceBlrcaBaoF.? <5Dt');
define('NONCE_KEY',        'wl-dpCn<4AA5[+A$gW<7UjL6|-n~P`-v{`#3w9c)]Pw+K,h~K:;CjzRf9P`BrO~J');
define('AUTH_SALT',        'f+m+-+hdI+UU&YsE+AjM]9Ld b@ZdG/^7pNqe5ix$:NxvKMpkJ=>e-k8-AEde:A,');
define('SECURE_AUTH_SALT', '3C_,eze.:#f%*fMIszdbdsjJ1$spKXstt2-^|bV$Uu$cVU`rYme-Cs5Ogk])3H+S');
define('LOGGED_IN_SALT',   '>-&,XWZ}|W$>^/pQq3MFot(>INiB$T||L-z]xjB1S/ ;Sp..NhrT{ -:B.+0N<8T');
define('NONCE_SALT',       '?^`$V6#)5-?OW|+mG?zYn_Qyga?0^_^i.ZO^Tv:&Y=$PUfUe`qSn!oV|U[4Z;:$j');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

