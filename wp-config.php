<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mike_mikeandmanny');

/** MySQL database username */
define('DB_USER', 'mike_user');

/** MySQL database password */
define('DB_PASSWORD', 'm1k3andm@nny');

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
define('AUTH_KEY',         '.K_rZQb<|q,aDQi?;0a[?-{!_-T`2Ge0!s-o7vJ;U9fwdYSDt^@q2u#>wt#$HkoT');
define('SECURE_AUTH_KEY',  's5~YR7G1K%xm4oJ>2)&OqJ7e3P]Hfe7gLcp,@v=i^NY |}sqdSf;uPQ:M3tM% +{');
define('LOGGED_IN_KEY',    '#vkIHN1t/S{+fa|XlKdFjt_.y]A bY[y(=/*Bl*%Al(wR5-R$:ZQQ, Hq_&uehB3');
define('NONCE_KEY',        'VG*pkDHiav+xr~+VCQc6{:HfvohXjGGZDT0T.tMgNaLY1Sz.?h+J:TW27<>L*7:a');
define('AUTH_SALT',        '~KKci)c1-Dn& #7+O0{J>nk(8$c9p+^D(*M9=k+6~1)2?vmM{UM]It[U-g>nX-5@');
define('SECURE_AUTH_SALT', '7yga<i8[q6*H~W<5t8f=g5y]{UKBxr{[I*{<35/=+!E Fy&3Q.mxg(PSRw-<1knS');
define('LOGGED_IN_SALT',   'g QGa]eW1,eSjq5~Z*Q-cX|tIU6xg#Ojp-={H?>AP?9rPVTVVU3bg PPUO+<=M{|');
define('NONCE_SALT',       'y)[u&Ar$&L5=nc_-9={l]3W.w~m*|cDFIhde3p2GLP}9NN10&5x$75T|6<%|4~)7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
