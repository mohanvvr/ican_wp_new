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
define('DB_NAME', 'mohan_web');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'q4]S5]Z4L]8?1Ce_~&vU&P)n6W% G1iZdk/zyLKb[prpzMvJSvqdQ{NoCR+RG+[<');
define('SECURE_AUTH_KEY',  'e@9(FV!/& {`yI_B3)g%)j/r99;0F8;>K3fG/qm9H{Um`tqoF?)BU>H06zs:b3[-');
define('LOGGED_IN_KEY',    '_:/WRW0XT|j3BA~^Xo9/,9!!?Ya&y7``?/Uqb=nr^&dMu7pxA>5~Ekkv}&[m]em{');
define('NONCE_KEY',        '%ZrOt3W4>MPR7vx:rxz~,l?-a:YoEDU{x(*a)^zf{cfkZy-/}DH7V_3x rpCgncH');
define('AUTH_SALT',        '&L<lQ=(%+6^Ru].7[/cNc.4LR3xN71G ]UTF=E1Z#1LXiI8|=]5]ch|A*:>W8.=1');
define('SECURE_AUTH_SALT', 'T__Xd#~6*WDv9#yf;|W5/]rh`#O!8_keWb/ a~wzCOLcFT+H{{&K?MI/KoTp!Q?U');
define('LOGGED_IN_SALT',   '5xn,4j<^=4(F58zc)d003m_S)8~pv6Wss1Q|t7lyzK*nC}TgZ;0YdDQPI}?$6s0A');
define('NONCE_SALT',       '%6wiR>Z*<kPrc@a3JdE}ghjWE4Qw`17~fgsSCOsR^ R-@c$!{-).vA4ERw 8K8UD');

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
