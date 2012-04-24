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
define('DB_NAME', 'no-crematorium');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '.!ZnF#L}-Ip)BLy.+_w9n1?c+|/%1ttdpS.d3s26_GU2!ttPg26+HddAG<1_=ge9');
define('SECURE_AUTH_KEY',  '4r9(%>!lt.mf,`#-$.Ln3{} YIe5;NVmGs7UI[$%FfvO{H$zb[*8+2RQwUk*Sym@');
define('LOGGED_IN_KEY',    'iRP7yynWU=(RjkQ^q?Au^F^aI?+{;Xn97e}<wQ<-zQ3J(RI>uoy3V5,|.i&xouit');
define('NONCE_KEY',        'm}jdxBzg@8&V(NtpZ#n,V)`6n]%miOzgl3`A|;&h49h[N-5]ts.@}K@o}IxQ0Vgd');
define('AUTH_SALT',        'cAJ;b{FBYRi-j8b{u=M|rmvy;BR[N=4j,->85|4w=9|I|t[o4LYloL/h_PV8?1b+');
define('SECURE_AUTH_SALT', '0s)V-6Z[a>2L:>IhTc>BW`UEkk`00Cq|M!gr,Zx?_=$2%j1FF4)sghI>Z/YoY093');
define('LOGGED_IN_SALT',   '|HhWb63Pc}]]ha3~8r?75 9*76gOv-w+l.X/8Lws8,kT6BJ&Gug!%Z+o{crjFZ<z');
define('NONCE_SALT',       'L7:U78!jf s{Ex240 OId&<DIDmT4,(!-=4HpJ|c|[rYPtx%!pkl7^q}o.I]xV)p');

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
