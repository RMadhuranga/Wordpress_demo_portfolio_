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
define( 'AUTH_KEY',          '0*ejkIqgso8j4rexqk~>+EZ#WS[_m&8iti/o[aPwb:5cVhcy<;JbsoHre0w4wI_;' );
define( 'SECURE_AUTH_KEY',   'B(/6eG8&=)d;@P5V0=r&nLD/JWPoxH_`^zD#ULl8X;iDh(-xvz>oE*~KTjg@E)rp' );
define( 'LOGGED_IN_KEY',     'q#y)_$lyd2xcb){mApz#P!A4~a8zQP8FfwrM(jZ6tJ:~*i|L=:)%XL=z#U3~Z7Y3' );
define( 'NONCE_KEY',         'kY+`209_tZXof%OSBjV6!;W_rsuE$rh5q5@C+P~7TKxv_Hm=U/eclh([wh^Ao+I{' );
define( 'AUTH_SALT',         '4csA#G$/lR!%o:h:xX2Dy|5]x7%T1G@  ,XW5M/S357fDqkhZ5W*!L`=au:|%e@t' );
define( 'SECURE_AUTH_SALT',  'MC) r@%^`em`V`TyY?$wA{d;El3mPy>-tt?r1Ay(Kg%ze-B[N>L47PK(p5C/z%Us' );
define( 'LOGGED_IN_SALT',    ')fcgu@fzH|2dw[@={*7Yrh Q2<?L6fb%ug! )~ %!.!ZK*^~w*dmmvKV^<;0HitG' );
define( 'NONCE_SALT',        'im,r;,|fq3P/p@k?_[SXO]qBZqo.nqi=>T}eDTCb4|d{{joEynDqWadmeQF(KGa)' );
define( 'WP_CACHE_KEY_SALT', 'l!/&.EGIy~{**mD:Yh:ymM`pED<0sI#f(AW7i;e.2*{ =Eq.F65eX]m$m[Yc2s3c' );


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
