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
define('DB_NAME', 'denver');

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
define('AUTH_KEY',         '0<)T2Kdt9$J*j;Phx$*);1Qs5w_d} n`[qx+E2=*,VXDck<_^Smt>t~E6iZ.DBZq');
define('SECURE_AUTH_KEY',  'HqL4/FUE+D5fXaX[z8@[B&1r2p1#x%UcCV8IH#|mC38-uboKt8GrTcV/N)x=~_i.');
define('LOGGED_IN_KEY',    'TKFO[?tK&jt@9;}&=yEHV}kPFJ/yW%wMI`{oUcymg|Xj5[,bf-qSED_,J[uR^nL(');
define('NONCE_KEY',        '.gyzd{Dqbx$JGCl 8:+9l{xM[8L)(o@3b/%1+i=@ae29.IHRFdJxJl`$*%a| wH8');
define('AUTH_SALT',        'qig}#)kd6<{Y^)hy=-+w{qs8liBY&Thktdf_0?wiX%jFfNE3:$8gnLYXwzCRzF.V');
define('SECURE_AUTH_SALT', 'z+<*nT0H-WVpM3^bNu}3S]K[G|PUqtF~p9:5x;-yyWU?&H! S WNm_6,gDX^a/R3');
define('LOGGED_IN_SALT',   'f0hc@gHwqinj0Cg]Me<w,z6/4b]TTf$RI>8nqz_=y}e/pH$QwU,-1?td[biI N=/');
define('NONCE_SALT',       'St7xG&+g|(pZ^CK&|^J].Q+m=g34`5i2= fX*YI$=VSy{6-MYCZzE*-/9bBd*~77');

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
