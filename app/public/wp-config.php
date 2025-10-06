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
define( 'AUTH_KEY',          'vY.v,Sh8qcr.Yp=qVZU0!8=RTayk09!?z$Y8E-:i5S>_QR6g:Pc: D=`>+htzRa7' );
define( 'SECURE_AUTH_KEY',   'C6fQ]=vM<Yu`7:.ljMc<fb,hp*25#bt<B<[DIvX-q?Ua~o,Fui*4~4xL=s[Bh`I-' );
define( 'LOGGED_IN_KEY',     'W]e+$[Ya6C0sI~=n/.HBoxJn >%V!{]B^jv[*`e5sM<F|^?,WZulOxc+8tM42:R`' );
define( 'NONCE_KEY',         '@Gvc-lAq>K,`l@8Ur2LIQx}d(]a$qaiUp)) oMNzXx#XD-vk3TkI#d?gdm|f{P1S' );
define( 'AUTH_SALT',         'iL,b7Avbm9+$=d59]6 2e5-N}z&l.{[T{l0A-KlhH_Kt}n)JrrH9FoCGA&N*SwS*' );
define( 'SECURE_AUTH_SALT',  'CVx5wfzN6EvT3UBTz&95t2;,h?19lk6Kk$}%;XoX#i58|SuLok.8?{ufBsko~p:C' );
define( 'LOGGED_IN_SALT',    'aJ73gxJdqRT2=]BO^$h}R>}T(0&tw=o(A>]j.cVa*iS7C!B`]i7P,CS=46w5SP+[' );
define( 'NONCE_SALT',        'o_hy(|p;ahK`3#kDB+rV3. ZIOuR!e|oXemrOpQOO_7SvVnmI#X_P,v^!cShg$=V' );
define( 'WP_CACHE_KEY_SALT', '8{g;h|F=J:]u;lfOpm*Yif#.U4~XWA)^z~WdT~ k+[]|6&N:x6Bj}aoZ}YP_ddd7' );


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
