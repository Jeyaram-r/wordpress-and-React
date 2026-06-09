<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'iD_C!v|.>o(4T^Uxq6$/AMb7)x{xcHQZq03,B{3s_PH5%Q7|EOZBS8O@IDHuz3ud' );
define( 'SECURE_AUTH_KEY',   'I(tUKd`|v(O^67h8cP#~jIn-Tz*H`wsfRSodM&Mc)a;)2Mv1}tOKuCP5*g[#h%/A' );
define( 'LOGGED_IN_KEY',     'bkO!OGC<~PO&$X%Y(V4+*h #1jrtHi7zDDK(0-Gkh:pL%O^6j/t@{6{X_xXE:2`q' );
define( 'NONCE_KEY',         '7<Ny}[db#9]}v3M Rr}-JTe~y]t1_pbI>Y)R6$0r>GCkjf!BB>=8P`3XdPn=yYKW' );
define( 'AUTH_SALT',         'cqdZ`yD0{.7YT{o&JPb7vdNZZ9cxf[<WLnvrvd,/7;rWEhr`A-{ilTLd@6u4~O&p' );
define( 'SECURE_AUTH_SALT',  '7Rn1&O+sf%/#YnYSsl;k}m-{Mej%7t=0[|0:5A:fzy3dN:w2u;&(RUH*gv`2DUXj' );
define( 'LOGGED_IN_SALT',    'P=g0[2sp;$^43{*w$m(s:p9K3#](F]W5oNx;0=bg3i:OC-=7qW`?-:UrAG @M^dN' );
define( 'NONCE_SALT',        '/NyKb&]>QP]P(c6>/W&ML6cH[5B2Bp5XH2Be5Prj(@a+|OK#SU&t;E(pWk,a`K6h' );
define( 'WP_CACHE_KEY_SALT', 'x]RnxJk[.exThG;?H(xV-b:jBM^PmE n5=D 6| UjB}cJ[4#az>3%{H$A/@Lm2z&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
