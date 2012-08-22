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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ovtco');

/** MySQL database username */
define('DB_USER', 'ovtco');

/** MySQL database password */
define('DB_PASSWORD', 'x7f5m4WRUqepUg');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Xb7~.5n`3;{H^L|gUPQbxIw-KQ0qxDP0. 90dwPE,Ng9F;|0++|8h+FN1d}5QDmh');
define('SECURE_AUTH_KEY',  'qD::123tq/k2y,jF67IuE6C*!HFDSYz<*K1n*%n+S5c&8xu0i&*aNa]ucQp^4Oz.');
define('LOGGED_IN_KEY',    '{^gk>+%!*L{e0`&6xXlVg.|[R+[Z@/Nu7v7k!-Vg=+Nj#YR|$z#X-~/V&~p[~wjE');
define('NONCE_KEY',        '_WO,(>j5x/Y%J*m9a!p$Bze&=H||wBLzg(IqS9w,iGaypMkZTmyOT_-W)9ZG++~ ');
define('AUTH_SALT',        'Shp%W]l^;/:h,#Zsf(;3f,_??[ufI,f00ESrvqA4T%G=+ZC-A-+!Zv]cy,=Qc@V7');
define('SECURE_AUTH_SALT', '*Pu42e}N^-A-x&ArOvdy-UqXpun:tROA8{-O-:SHu*vs:8.}H;t2@/[Alu.@pv|$');
define('LOGGED_IN_SALT',   '[Vv4gV&E sXW_|zzwim9BCtql-p?RQpeOZ-!JpQk6v-1M`)7)+i6+|HK 0]R@*AH');
define('NONCE_SALT',       'ZJ`YI{p!}`SG0Otz#9ORz*u8(0|xE&{C(0&-R`u,|PZeMPZ|heXN 2FEZ1Hn<f#l');

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
