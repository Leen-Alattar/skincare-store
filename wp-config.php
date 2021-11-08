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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mySkinCare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'YFgKbFRqMi1w2w +3`UvG1(1%LA/=%N(ht&QTQ]oC,w_o !lD4h2o_`<Hh0VPNr.' );
define( 'SECURE_AUTH_KEY',  '0iucH?GL`,2D0MaC`tWTVc5^r*q tTF(m9Y0-HUPjz2XEb`^s7;|lydm4d|>,vZ&' );
define( 'LOGGED_IN_KEY',    'J-yP-tuv.(Uy(j SXjC@kE5Ir3[AK9^fy[/D$=E@q%=jSJk:_( -dB1Pjv2!>z?Z' );
define( 'NONCE_KEY',        '@NQ@uO#@Ck0I^f_>yQ/A+d2M|u{-i4^NzGSvnc05-sDsI7$OB6jMYyUH<D+%!]YQ' );
define( 'AUTH_SALT',        'ubd~-B4c<IaL u7~@6b$yf3kt{gI]<X!N@d,eR+hHWS@Qc.<|IjEv.#10gGxz478' );
define( 'SECURE_AUTH_SALT', ']E8:?Vi|$49*dI=;AwxkD>8cd%Jo_t[:qr&CET9Cr.pbTXd^n,;<o( 7AiNFPWdz' );
define( 'LOGGED_IN_SALT',   'b3@X4qgl(d+5T25AJIMlxNQ0Ka5Ra#~&27ytSin;bnX(#MNS>,M3[!ie#Ln2ai[8' );
define( 'NONCE_SALT',       '`^UUce_5Q-:3C$lxng_C.V7KTWF^MdFs?!fG{qIBchiHv|J=:P&&:!38,#StO</^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
