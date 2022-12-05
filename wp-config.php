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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'getgadget' );

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
define( 'AUTH_KEY',         '{X]g}I@+W[F-G&8Lb$)rOEjK>I$]rz%~BLOR:T&*Kz(pb8?g0zf[8%WSb^=)j^xL' );
define( 'SECURE_AUTH_KEY',  'l/xKGmz|AV9)lG#d0~:0|H%k;}3dX#)t#O__4U}^_bSOsE5>=pf:N-Y{_v}p>Vc?' );
define( 'LOGGED_IN_KEY',    'GVn&,G8koJoD6VA>(j?Htj~E@sNhp$0j>b9vkwjB2h#W:f5>J@5q} Is!e/1Fg10' );
define( 'NONCE_KEY',        'L/Xb#KDVF|S+$cm&w>S<sCX;(4bL]nS)r3zwohk*d}ZSBCj(-l^WzbrmKUEh5{Ln' );
define( 'AUTH_SALT',        '{bm,!voqZrGk7N?I/VW<ox(`I#/yy@xNU,,b]X0_e~<H_GXYaSo,:?ugLY1X5T,O' );
define( 'SECURE_AUTH_SALT', '+:&[B|7({i{v2)].w>IFz>U>w@HR>9G56[JRq9;ZyHz`<&$?a_V<@`?SNYeZ}65.' );
define( 'LOGGED_IN_SALT',   ',EcZ3yJ>VB?)K]< ]3Ds?d7&WLX|y,C~bgumtElKmpw3IJM`2&%[x*=hbn{vN/{A' );
define( 'NONCE_SALT',       ';y#%oW-`Jhx*Aw+~:iaxJA[#T@gab$PJa=91I*n7bzh~hD_c-BqZ$BwW(C<dX50)' );

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
