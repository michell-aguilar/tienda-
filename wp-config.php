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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'El_Rincon_Literario' );

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
define( 'AUTH_KEY',         ',{O_a/#s|*`4m%WW@ntDc%6Hds4L8rm*:k=0OhY=MofIBaelY}),2E9(4__&ds*u' );
define( 'SECURE_AUTH_KEY',  'wNTnylZ/-<WZ[+r+5.9T%o{}raYem>NH}_[/?0~UMf]+Peh&B!L~_2w_cAxmwcKv' );
define( 'LOGGED_IN_KEY',    '4)Dy>Imh=uD`<sqSjH)HKB,|aA>jB5R0@`o,HH(nvBw;C2[LcV}6:`5?T^Zs-C#9' );
define( 'NONCE_KEY',        'i4,PYkydJqiKkd7W!P`=WU*^,n}jg?`L|fJiof{l4]$}vFlj4Dq~o5XnF,,kH..!' );
define( 'AUTH_SALT',        'K7Rm{{jSS-oM/R|d%( y<mizRd[VM=3HgpS<Fr|fc]0m/POdWeJ)qU,Uc=`iUoPX' );
define( 'SECURE_AUTH_SALT', '#QS8VgYo!rbV01k*Qu9Q>Rh,#ooRy31Z~5Gzx*z;`u&sH/`eI8-edATBMg(@K_Yx' );
define( 'LOGGED_IN_SALT',   'z#4SP`{~R^[2h=_<;>(C5m|gNC2Cv!PK_o{Kj5q= x(nu}w+Fkp-bzM11XihAb|m' );
define( 'NONCE_SALT',       'hl4fzECbF^D:oNljL6ti1a8&ov[ZF|^f8d#v:;mFJCcc]I>u!hlWcM!m&czn&BK1' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
