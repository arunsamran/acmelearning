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
define('DB_NAME', 'acmee');

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
define('AUTH_KEY',         'b-@CY*di7cO]~|+hb0gyf@/(&Rv6nu>W%~Zm1ldv5vz1oOmLIA(}tC%9aXj6?D_N');
define('SECURE_AUTH_KEY',  ';sZ2CEJX=uR>[D_~O,NY^,,=PdaBxPlBzjgIyHq~{=m5F1Ewc>3vS9)jQs?,f5k8');
define('LOGGED_IN_KEY',    'iS*|5WER!<[#NwEWDd&) ~&)tQ@y7VsXqdL:l:Ly~d(:LP:rpwf(1A XZIcC1!UA');
define('NONCE_KEY',        'nCp1tV%i3I8%_ERz1X#IFV?Bf<>GJvN22Heq*>!Lt~Eomgv.6Kxji_awb0Iy6tDJ');
define('AUTH_SALT',        '_]3e|nnDLI8B!I@@!!-wE7XJzw@QFglpc @.*dnAo lzn^Q,0F#Nz!mVe6rvmJ1k');
define('SECURE_AUTH_SALT', '>q@pLOth5Be%]~JqUR2Xke)IZrvfG7U/}3er|T;ji(p8F1e;Z*16B%dH1*J8sfr#');
define('LOGGED_IN_SALT',   'H7?-QhSAA1TLN.fcL}N@U`bar]suPNJ<c#JK@|?!yf-mP4GPHLnI9e?uxl/a#90{');
define('NONCE_SALT',       'G51ps72/)_BzMTKl0L)0@;m?78B~Dcw55IVN suv{4_$,gT631|2Ncm2Atq~lA3+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'edu_';

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

$wpDir = ABSPATH;
