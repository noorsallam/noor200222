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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(iFDm8Ut](!+d%.|*a>HTz;bZKy1MpKK%ae+yag4x>M=FCk_x6t{:#5sL]|:HlKs' );
define( 'SECURE_AUTH_KEY',  'Wg+OjyZE3WY`<m(;naaI6/Cq1,[u*R#Hfb]Y5SiXsx{.9V Y80N,k;sqDJ_`zf@k' );
define( 'LOGGED_IN_KEY',    'BUjv9YkXoeahiuEmT<GMMx{;jp1cV3SwM/wyc~H~yR|OJn?m?t=lu,%<C ZDRt<%' );
define( 'NONCE_KEY',        'Aj8M8pj!ZwJ@m]#]&0cTU`CG=LaWdC&Xqi0C{(p7DxHXXC)Kzs(.vN#+A9!F]n-$' );
define( 'AUTH_SALT',        'k}#pK]=|5i;3}y%UDzFf*lixTu_-F<ku&Dq{0i0i_y)I(&(ggJ)ay&T>r1]FQ[Er' );
define( 'SECURE_AUTH_SALT', ':RW?uP{~Yf=oa HapI% R$q.uWUbt{^OaCs*qS9nlffU4E@Wu!Yatcp7S:bI_c~&' );
define( 'LOGGED_IN_SALT',   'ZPEM4XP?DKyQ XSw(EkpR68%MMOR7[B^Hu-&qb|{Y%x0P6E5+w1!%mm7+V@>R_mE' );
define( 'NONCE_SALT',       '# =3HwL;V{$n=`!8<lLzC ,h@DZ.<FNNw_9e]4Joa&o.i<@v8rH4:qu}o nVQQM&' );

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
