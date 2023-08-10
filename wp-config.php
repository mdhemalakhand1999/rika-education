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
define( 'DB_NAME', 'rika-education' );

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
define( 'AUTH_KEY',         '{24U$);}9>uI%}2QopKa(<k;4^se{UbD<7}Fbq&YX:?^!B4`DF&<B8EP `<`f,vd' );
define( 'SECURE_AUTH_KEY',  '];/`m=G: MUkG.c!bCl^Ob;b4yqgwEWT*,Ha&b_ }?_Rh~VFWkn3^0Bp9~~/|g1L' );
define( 'LOGGED_IN_KEY',    '0gN{Ex]&<Q!}[H^2aF)I#Yfpa|~cTTAEaZ7X3[y:<+T:y$*)}A`~Lu8=RGkFFkl%' );
define( 'NONCE_KEY',        'GyYtM FNzjd#oebUADol2h#,5uV)H;n&:3) )/%a-V|w*4/Xho?/=nGN[2hH^p%n' );
define( 'AUTH_SALT',        '1RCSfwe;6?nLS_D[WR!s{ezXBS?fF{t[3wzN[9jVm<%IndYILbQNKU+Rlwxj=MV.' );
define( 'SECURE_AUTH_SALT', 'ag>mYL(wme1WgP{8{YvT~$+`hM?~0SJ9PT(lyg2SeooA3p7)C_rGnwkD(&wjldM/' );
define( 'LOGGED_IN_SALT',   'LgJkTIe>zc72x^R:iNl^,~dK5~RApK-7Z,Rf|-m  .CxB:k9fmJsF3BD2Z@=gMUc' );
define( 'NONCE_SALT',       'L;AhG+jTd Kv)Y?JX9)u|!=Y=(J^4 b+tiASgaAhLMV>8ig3HbYOS7fT,bu[F>0P' );

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
