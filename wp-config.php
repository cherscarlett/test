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
define('DB_NAME', 'usatDB4oaxi');

/** MySQL database username */
define('DB_USER', 'usatDB4oaxi');

/** MySQL database password */
define('DB_PASSWORD', 'sVKE0ykhSF');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'OH*ilK:1pSW;x-H59~hl1#[hGO#ltS18wV:5-SZ9@|kCK[1oOV:s-ZCGsgk0|[VKN');
define('SECURE_AUTH_KEY',  'Dx5a.h]Oi1WKt#V-S-5dRw9Z!G!Ng[NCr|JsRz}R^F3cvF$Bj,MBj$^E3bDX*X#Le');
define('LOGGED_IN_KEY',    '<b;uLPEmX6A;XLP<xEH6mae2#PDH*q9;1la_x+SDthlD:WKO_xG5pth[-SWK|lCG1');
define('NONCE_KEY',        'tDH5hla#]~Dthp1#[hKO#ptoRV:s-R48wVdC|[gF@|kCJ[0vU}4z!Y8v@cBJ>0nNU');
define('AUTH_SALT',        'ImL.{qPW6t+a2A*aP*#+DL9iWe#;.SaOxlt5];aPS#-~K9Dpeh9_#ZOS~swD15hWa');
define('SECURE_AUTH_SALT', '6bL.iA{uT{;.X6uyiH#eiW*qHLApei9]SHL.iD15tS];~W5-~t5#dhW~txSGpdh9');
define('LOGGED_IN_SALT',   'K#-D19pwl:_#SGOwlpC15hVZ|-~K9CwkoG[:kOR[owV4Czc08@|dCK>ovN}4sVZ0z');
define('NONCE_SALT',       '^YJvjn3>0fUY,y^I7Bncj3<{XMQ$quB3mbj{*.QEI^jnL;2qTXy+I6Euiq2<;XL');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
