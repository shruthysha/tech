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
define( 'DB_NAME', 'first' );

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
define( 'AUTH_KEY',         'i)>i>yfKEUGD+7Woz:>6P~#vG^,$F8bqzJ)AUsQY$ ;EhjsZ`u|2J)`Q-v}`U>@[' );
define( 'SECURE_AUTH_KEY',  '$/<#V!:N%B@Pu7UX1*8V3@(:0 p8rwq*D1TTFB}siyTa_9v+U2C.ki0t4ok`53H]' );
define( 'LOGGED_IN_KEY',    'l-`UNGWU+Gp1W}gtTgav`?{k7Kh)Tt{VIH(,ZQ)JrLRSQo=ppM>EaXouRlDs5~h ' );
define( 'NONCE_KEY',        '5N ,h9f(hA`YnVIYySQOyda)VMp3W-D26pepJ5TcHxiE6[qY*.W?C<{0KpO3h^5c' );
define( 'AUTH_SALT',        'X>HlDL52}-3!B*C@`y,DG.vNnZbAM$p`c,0~gHo)Gx])vnWpdTU ?*]~,jbzrDKj' );
define( 'SECURE_AUTH_SALT', 'HJf:/X#&V DVRm8>Q~nU2*+[mBgPR[wl2YK{3:(GCOkNm~E~Z*a3iWyzWFW#^:%V' );
define( 'LOGGED_IN_SALT',   'FygM5![lQ~Q:f#*3M.6E^mX+;A`b$M~#O-L]F_LwM6n-$Pwa5.Dfp,AN7NL7_5uN' );
define( 'NONCE_SALT',       'C}u7&(y/`5)}dRN2/~O*b!!lL/ol%5wv|&zr{ 88|qH2Z{ByygUdy5?HPSS]%D9z' );

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
