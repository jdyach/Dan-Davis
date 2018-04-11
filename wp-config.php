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
define('DB_NAME', 'ddd_db');

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
define('AUTH_KEY',         '8%. ;~aVMq8FF)5}?[X+M: ]dPaEoBf=Y*@K`fN`K%*I=G{WD#hAE*z[4EoI]fUI');
define('SECURE_AUTH_KEY',  'nCb.TRn21,;bUK*@;r-5iZ)DW1oM92M8-IqsE.P-X0q2o}/J(S*u9vl=w|G9X8S2');
define('LOGGED_IN_KEY',    '+vh;a:_DMzTGJ+ng9%~@|tob4GHc/*O4cT/K{z(08`UW]_kn<vp;>]uQvOx2PpBp');
define('NONCE_KEY',        'GEV6.$[T[51$Yxs#+PavEI-vQ*b^eS{iF7T7MG`4Y>}ag*#idfXZs8fsB37#5:|`');
define('AUTH_SALT',        'F6_bfFe-X`j,1xfx<K2xVs?T[Q^XEx j[S`McGvFt7%t(`hs6+|>,4P.#K9% ]oT');
define('SECURE_AUTH_SALT', 'S~rw$MWDYk~RM}Ax,0;Ojr-vq*3pZ JJIKq>wl[CRr^wx].#M=}DHXZuKp#T: Q2');
define('LOGGED_IN_SALT',   'h&nLAm6AMT+o(zU:{~Di+O>ujN9R3Gd`vyBc]N 1Q~?xK>Q3Pl08)W/`,}p~>WST');
define('NONCE_SALT',       'SUxrdR6rxmum}tj_9JNa;}Wk8Rgw5P6kO_*aUd&b/&Esdv6b[J^Bs}6McY^sC}w~');

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
