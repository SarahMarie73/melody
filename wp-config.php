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
define('DB_NAME', 'melodymusicapp');

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
define('AUTH_KEY',         'aOZ`*Db{a4y6|cZQnF0#_riQ/Z}]h]f$AFH::m>@2Vw@r(Wg}.dflr;ef9b7n.C>');
define('SECURE_AUTH_KEY',  'D45FT=`J[!pcr)*Ptc`$a4Gw9?`R[A2bl<R}>P-fC6v]6Y72Wf=Fn1:([bND26pX');
define('LOGGED_IN_KEY',    'Isph|1?eO9@vJIdM~: [u#/~i 4O)X`fmGkP@*bSLIs4;ksA>DoO^7^Ltz}R7j;_');
define('NONCE_KEY',        'W7Ua/d(px)`/+QuYke97T7it.N:yVDQ}G2M+(1+5l80BO,4U{5$#0!F[xJ4*4i_P');
define('AUTH_SALT',        'u4<+ATHv7j*~+OIZyX*T97Iy`|tRx*&E0+hq[S#=qOeaJjUZu+)3.:(F<)*jmwt}');
define('SECURE_AUTH_SALT', 'TMC~jY<f!1|#N_ni4^Mp;Af&sN6olwhTk[9 &4mJ:=Qt?+GqGaS+x0b1)fmB8DRW');
define('LOGGED_IN_SALT',   '<B$bRj&qx.kn>PGsxJU>aN-tEcOJ7/ltrG~?}Ic;?r&F_JO6zwCk2i]5@NI!LrC{');
define('NONCE_SALT',       '9aSW%MUvCYf{-9[l9yIU6hS#b)O)F-gqMku?(yRLADAV:nbUFBHatP-cwWz[u0c`');

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
