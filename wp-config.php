<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '5&1:l<tUy3eDQ@?7oUUZ2=!H);Y5^zUESsE>A5J?=sM:wSoL-IAHTvfGN$/9J)/{');
define('SECURE_AUTH_KEY',  '`|{6JRe.6 pIT3@%w2j;b!+>e)A%yfDEjwITD(lzg$?okry_5Z,4%@V!fw7]Y^jC');
define('LOGGED_IN_KEY',    'F@BEFZ{#JPqCP_St^Db|ti~1[Et<MVD#zHm8JVBI[,.C R3d_C,VPl48U;AZe$UY');
define('NONCE_KEY',        '%{(9=~-:]Tr2-}RV7.SL ;/;uQ?/S@d%h+T!ZjI;4&ky#@8YZW<o+ ttXW][m0J>');
define('AUTH_SALT',        '-)R)$y%2_ajTMhI*zU6LNg=h1oJL^p;x)H%R63{l:=F;W<<nuJph_U|GKCV`{N_6');
define('SECURE_AUTH_SALT', 'Cp-Isd:cW2IS_L7NmwaLbrbBj]Gjci<zOow?y=2z!&R1)kudo}A;[4P04.2qcEw6');
define('LOGGED_IN_SALT',   'zxktNc4.+bLS<WQG#ual-bPBXz#Zt2:@}u-OwT!Jf/XUbQfJ/+yo* GhNP!]dIes');
define('NONCE_SALT',       ']I)hUY7W7x/1^e@E$=]ET&wX*XTe/?cG3iWdFwf{Dq)=|3lVSyV%y!G>`Rb;R#8 ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
