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
define('DB_NAME', 'eizisoft');

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
define('AUTH_KEY',         'TSi1j%SP[i9f-:{AO%PItBcQ+w*?PMXQY>bwiIa%70S?b$5mZE4LC!p>3Bb$sE@D');
define('SECURE_AUTH_KEY',  '1F~:<Y;4rX(tZjrE QK2D=f>9J{58XR:[_babv+$dPVB5?~FmE%r|fQ1Z.;gf,(n');
define('LOGGED_IN_KEY',    '1CABv*iTc)t U=$Ie{.kDylTrwjVf#3%Qf]GTL%0MU-z2lu_Uej[s-?{T~XQbk$4');
define('NONCE_KEY',        '`5%g.%3i|2aiCZ0gaMK9%`9ITOP+7Q&d-_DCF&][H_JHOYt.[Gm :QN.[i:dU7o ');
define('AUTH_SALT',        'qf#l?eYt?Zc5x>S<6e:F&j3}N84Q+$*tD`w -RFL&u7>VSi!CGz=,]{L:vR-/dKq');
define('SECURE_AUTH_SALT', '>x Ir2@J5O^!bo<DucgOTxLM<#8ZfUCDH%-#s+&<ED#4Tkb{p,(!zi}UD42|%VZk');
define('LOGGED_IN_SALT',   'Awfu!`D_~3~d$1e:ncEdUbJjq)`pSXapQC^)4}gk)x7U(G:)MBq;~)(6dlHEim1.');
define('NONCE_SALT',       'tF*(F2QtN}3vc.pM@+>iMj8^VK))aA{Fq.;s$0Z-{vPslqh2iQSPG_DNEE-<uv!H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ez_';

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
