<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'games shtorm' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'GMuUb.0jX--vlNCD+Y2,C](8i4PPuWb-8ZXM17nF41K&W/euF0;8~kH;V`uzmmpH' );
define( 'SECURE_AUTH_KEY',  'AXYFe{(#3}lNzp1&M]Tj 6|3<h!3@>swVz94aEWBhRx;d3J4l33~&TK9s yemh;f' );
define( 'LOGGED_IN_KEY',    '7s2~-`&>=W,d<k1}(?E-(^&@lk>,rkeffXRezVR-%B7!Om3G-#d)kvTSE| :JQRe' );
define( 'NONCE_KEY',        'D1xsB{ien2TstO4p:VhiC1tJbmYTMQTlozW{[/PUf9hwD-QJjRqX>V3Xe,<40I{{' );
define( 'AUTH_SALT',        'X@hw_5!*?mw{EBy55BAqG7`lB~u ?[wcye(?P#KSgJ#s6_Ef[P*D;b*L^wQL=f/R' );
define( 'SECURE_AUTH_SALT', '{X7?Xz>%M4bXfG$j<x8XQ-DMaxe*)fY}/LDl_p:zyO/SyDI:QeNec]DIcMg6 KFQ' );
define( 'LOGGED_IN_SALT',   ':VA Q0;d]fBIN8Ri^-(/r>|@AY4M(Z^7@!R.VBF}ixFd7T`mHQ/ZG{{f`#!@?;ZW' );
define( 'NONCE_SALT',       'Y~p*^`O];t9%LbSx&qA}wX|dtWCOpHX2SE[x9V2V2D2FDVYds7V>k}p&x<PaA>lc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
