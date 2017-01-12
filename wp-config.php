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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'AL:K6J9$NqV#<1RC>Qnb|I) IY-_jB-{d0_d=[Nja5dK%QMk/[;hC6B-Gp#lJ04E');
define('SECURE_AUTH_KEY',  '!IM+L=mYA6N{Jrh<A287N=boSSa6xg;G6WJJ%?@RShY}Z*g;^D$4l0 H4>.CXi-J');
define('LOGGED_IN_KEY',    'BDo*:ib_V+,) psdW3sWt@C~E8`Q4(5Wvo]uj%u~G)ToS#fvj`Jb~~=u7=NGT}mf');
define('NONCE_KEY',        '[;,C(dA_sGw?Ir.zmZ:/[i,_xQ|Os15 ,I-KI|-CR2V-9kBI4^Tm<e0hj0lDUKMS');
define('AUTH_SALT',        'uUn{XeZHv2i SF:[I^ZXtDlT2gk_]/%[SBv|N]>|-hVmlA0?#?d2=!W(b)Tv8>k4');
define('SECURE_AUTH_SALT', ')kr^Tj%[0uuN=E{Q ~V703lIqPGf{Xr]H>8AQL:V6Qr~Z5lhdZ8F>FV@oW=]K>/f');
define('LOGGED_IN_SALT',   '8!=a3|]o`agz~_-Va)l,NkP}aZ!wBle~/po2[EHcCW@8D|6YOsgp&zApXrZEt}ay');
define('NONCE_SALT',       '5g;-Zm`m_=m=Gb#fQkMK)DH7QE{L>8&hk#wR:S;42FI,3MoQGt|^7qH5|F$<N:Zd');

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
