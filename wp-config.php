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
define('DB_NAME', 'steflouk709028_TAGaccessorize');

/** MySQL database username */
define('DB_USER', 'steflouk709028_TAGaccessorize');

/** MySQL database password */
define('DB_PASSWORD', 'TAGaccessorize123!');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'xV)H#Wwvn2Ua0sP%W(^DAC8!jalWm9bZJTR%0IU5TiPa*K#iFzD#P8leF5K4CK5i');
define('SECURE_AUTH_KEY',  'Bp5Cg)Z#PAG0PSlup0DxE^RbfQHDIRsNs^WkhQVsZ5L*w11lFWG(knE2B5V1h9EF');
define('LOGGED_IN_KEY',    '^H*zknDvkj!jpzyEHg!l!7W93dX!3#hfXj1VgezuszvlwKBgZ)zkSz)3)E%FXzCd');
define('NONCE_KEY',        '2pqwOcp9z#w7T%OnZr^h&XUOII4vEq4JR2jJy0#R1Jt9WFEwWdiQ*4QHCjMZMBZ(');
define('AUTH_SALT',        '4HtZQWEybYUOlKgHEg3^JIyX9g2oR(Kws3g3F7@A2OehAnR*89dhSBrvc5a1MiGJ');
define('SECURE_AUTH_SALT', '#D!tH^r*vP%8yGLNcY!X^sa9ik@ISPbId@m*2Sc(Wfso1lKx2ysMccA*TQhv7!DL');
define('LOGGED_IN_SALT',   '^cv(kcyaNA0ycaP8V2e#0!%)JtpqWa3ye0(@SHt3k#H2QH##hpGhB3T0VeHpH2qw');
define('NONCE_SALT',       'prWTM5wcYx(BI0QlnxomXAN8mCxu%Yc3qwZe3#T&BZMHEoy*1vQ(Ft(sAE4c5L@6');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'TAGaccessorize_wp_';

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

define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
