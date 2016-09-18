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
define('DB_NAME', 'wordpress3');

/** MySQL database username */
define('DB_USER', 'erez');

/** MySQL database password */
define('DB_PASSWORD', '5221842');

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
define('AUTH_KEY',         'z[z-#9q@tg&!!RC%x~37XGJW%q3mUa*+,<6bQm]r4:K1UIG.URxbo.[YDdW/Y|7M');
define('SECURE_AUTH_KEY',  '2uuzQ7k2FneOb=NNIsAAR3#R(dwpVo>0xgG+~xoe02:i0Ujm,5=1B@v*X*gzFGaG');
define('LOGGED_IN_KEY',    'o/y0}135iWbpkC9F[yc4wa=,+,9=1.lbmeHWle=abIoav@%Q~_He6yZ#eNn!riz%');
define('NONCE_KEY',        'Tw`)rAq#FrAk:e(+!sBod:k;erG!g|gAL8OtG9FE@Jt7b1-Dob^yYRXQ{&QPGO!V');
define('AUTH_SALT',        '/9hQgYRx$DCiS2<aXe~4JX>v5NMImxK?zt3Kh;+FS&Qw`{&B[k@uzowgW+[nVb<#');
define('SECURE_AUTH_SALT', '/^MS@LHq7h^2#N`?3:.~mWE>Z>-pO!uidqkHY$Exi+r^`~#2S}q3N;S3ePe[%IF$');
define('LOGGED_IN_SALT',   'z+ei,SUicAP0_EY|y*lb*+oSU}9&(Ma^[*LW_Oov*KS/TA&1j)Iny0P6T@E~8T%G');
define('NONCE_SALT',       'svFAhlum%tftQ3NBO}s.Xr rXk`atEhf<^<uD^Z7K~Jql<MWX+U|gU%z$.w]m1n@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_3';

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
