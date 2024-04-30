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
define( 'DB_NAME', 'advcard_pt' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root_' );

/** Database hostname */
define( 'DB_HOST', '172.25.0.3' );

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
define( 'AUTH_KEY',         'Mi|Du3xh6MNo?dY%([B)pw!b#d4?dL;3YgX[ge|u}0<|7dpkXu$yscK(v0zjUxgq' );
define( 'SECURE_AUTH_KEY',  '9#Zrz2@/wv(=aeJh>p[]MeNCl$#pmo_J:~QMT~3 ^dxu2lU4{^%wf.-eo7(j]U<]' );
define( 'LOGGED_IN_KEY',    '@-8UGZ>3_/AG<H]Q9n%bUd!G=v`_KWn$MhbXEfD,Qm!v&AW+,&>T&z%fta68K])T' );
define( 'NONCE_KEY',        'Zqyg-BYw.E0UZ3J,+OY@M0T WjTk]5M;lbh(V<A=xAD&J5Y}%NA0Lyt:+<ve%Bjy' );
define( 'AUTH_SALT',        '#+>18n(o{sr4Lt4},a9Pp53WhDEn2dh[9~Y|Huoa*i|;lrnisT0nk60go0Js8Zz#' );
define( 'SECURE_AUTH_SALT', '}9F<*~wYmRa=[vSYa6C#HhE04U:j.H,Vz&hVdW?N15y#m>.jB(ts7ZIk26]3Hn$1' );
define( 'LOGGED_IN_SALT',   'cGWgM;d3r84a:b=9ujuXgwnjq/nZzr1q9legE8R}ifTw/7JmiPCu+X9~!nQ9-[E2' );
define( 'NONCE_SALT',       'HVWc%xga7WduGn{BX!cAF)#57gsVL8pBuQJe>hn;85o8x$zL.uJNs)XclDf>zqVT' );

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
