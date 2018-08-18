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
define('DB_NAME', 'app_beanbag');

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
define('AUTH_KEY',         'u~XT$*QNNR)f;>x-:LL_sQ7uvh.q;[N4vQH:bl!:INlLvC wKLz8!h7*g0JS,JAD');
define('SECURE_AUTH_KEY',  '7(51olt9r4ziR6*v1CH)w@]_Y+!q 8{5MZVfwT vmN}_k{KqS3(y1.r(@z=eg&//');
define('LOGGED_IN_KEY',    'eoM9P!tD2wgO>}+]mX1Zw#[JWG3=_}6x3`0sE%`L!!>*g5XvFkCG?djap&<.N7H3');
define('NONCE_KEY',        'QnENabQj/b+l%c4cv|2sP$t!oOSDl.UauEuiYkqj|X/2s>m~4R^Z@^`vF7]Qi;+z');
define('AUTH_SALT',        'l=vd-C7<hu!f*,=(i=)kii6^nDQ^c3EKSg6FJ6+ecpogir2?jI5lPYe~t]u^?FC{');
define('SECURE_AUTH_SALT', 'qjbu$|1{I+N&>Z7(N|_`==69^blu$*Btf&rnRKQAH&Oa3R.aawxpQThg(n0)DAS`');
define('LOGGED_IN_SALT',   '@u3pEy+b3da@I#p GMD|Y*7H]:~3mH4b-n_Ql&Z|6UubeE(Pzor}yS=_|LFm*@Wk');
define('NONCE_SALT',       'V:/!`K/R:r~4t=c4+&Z33yRL/,[PYo=Yu+kGLMp3q(}~M^9/3jRt&O&3`D9|jW H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpab441_';

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
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);