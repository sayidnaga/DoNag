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
define( 'DB_NAME', 'donatnaga' );

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
define( 'AUTH_KEY',         '-wpC 6y^C.4P1w6Ro8IFqdt&Wm0$,9ibI>fhUojseiI>4=f3E&=K1||%-%=a!?EM' );
define( 'SECURE_AUTH_KEY',  'u%Hu[&eG`#|6j4%u]cK8xI0BsM!Od=fDSJSL(%Q/b8?Et&w.QwE*]SNQJ@_o.$El' );
define( 'LOGGED_IN_KEY',    'f&[.Yz[2OpTs;D%Ubqnz~c2DnU,vIc;/b~bOjz9B fUXZ6et8YS%7+buGc?mY|Uj' );
define( 'NONCE_KEY',        'ug:=c#8]tmEwQ7JV*{ZB21kI;= UkAYEs 7::#(!$&SWq3+;!V]xxLMs>6/(CP&Z' );
define( 'AUTH_SALT',        ',/p~o~_sf,]`-0.517aHqkw@H5%?H1+q8VFwVF]yooL5FkQiv~bG)@p>X*7!m[__' );
define( 'SECURE_AUTH_SALT', 'Qqm=<6L2gd@1cEDED@*A~y{TjD`yV[h*-J8:JP7 aKCK9O-tWuc P-_>TFpr7*|3' );
define( 'LOGGED_IN_SALT',   'IAi$Jt$b.Bu[@)M^X6FG}*q3aaSJ,PR&ITH6Hu)hA!)M;/y%^5x5_I5vk.Cpq?`Z' );
define( 'NONCE_SALT',       '1zQ!{AzYg/<!2[LY$Dh}!yGdEuI1a*0EiCdy*=[Zi8Pl:$gnQ:w$A@?%F-?PRTKe' );

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
