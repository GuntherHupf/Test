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
define('DB_NAME', 'Test');

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
define('AUTH_KEY',         'H^W|@~7L^,a=qb0S[0r1-ImmLe|!<O*tv7T.9:z6w.`/#A@$@]Rlt]m=z3`>-U-]');
define('SECURE_AUTH_KEY',  '=aR0h,H0Qg2|BWtFklYeG,9lT&7OK$3SPP6[p@p] <wMa6}?uUqOsPxKp^Vv&jmX');
define('LOGGED_IN_KEY',    'G&Agv8[z$oY|3cdQ^X{Aom,iHvHy^pkj+citTMcRr2;d-F`]vQ9hfe(@)xA:O_Ir');
define('NONCE_KEY',        'dG_95+^ }?^`!,V.@M^tr<T`o+9M{qx`/><Q)E:nB7xVT9iqcOC~X5tuhsAXoqgT');
define('AUTH_SALT',        '_$mPoaR--hgRU|plO-!h:Q2.al2Fk46&#QuFYISA2afaOoafmbNc6oG+d(p>K7M2');
define('SECURE_AUTH_SALT', 'y1&^^;~W1Ydq3VVZwq>u[n8:vjJRf_b3NYTRBJ:5[0S@WD8xOEnNW:@8j9=qY@f|');
define('LOGGED_IN_SALT',   'fSSWUJ-_2.n*_?};h+6EJ<S=l`cdwU[OGEb%U8TxAl)66Il%)FoSjbDU[|{|Fb*t');
define('NONCE_SALT',       '/!lG;BQLVQJd &5$30ZaK@rt6qNQK)&mN10<{-ZJUtP#bS,8s3owAzo?jfm-N/cL');

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
