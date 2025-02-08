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
define( 'DB_NAME', 'twentytwentyproject' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234567' );

/** Database hostname */
define( 'DB_HOST', 'ttp_db' );

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
define( 'AUTH_KEY',         '}[61T;%.QV:KUTG7<8i1bpAcrK^?:Dn~d0pogZt=`(PI4rxgsuFyy(z$`2qLt#ox' );
define( 'SECURE_AUTH_KEY',  'OWCuDBl+?^vuVW/cvfVQ#1dOfFRyTXZOEsr6ad3q1SVhY{;RJ~6Xh9=6_J~{<R)b' );
define( 'LOGGED_IN_KEY',    '`kM@=5,M,e35*Y>?zptcpp)2E[9#MvU`}dPvF^5_nE:|CV&J9Z_,b(esC3g)c_)#' );
define( 'NONCE_KEY',        'l%#T9xWH)lr(Yzrv5F,rm2u]BF4H ^Yg,V_TS!1*clAc6GKm pE`-rYAz]#=aCLQ' );
define( 'AUTH_SALT',        'picE+tR9Tvb9gsJG/Q?V*tX~=09`v!$sPM!exq*uDQyePPBosf|}9@T18/T$mgRN' );
define( 'SECURE_AUTH_SALT', 'OaBzH!,y] v#5<([VGD~bRU=G4fgj4L jt4~W7+tX{,C0p,.>Uxn/mfz0| Tbo<0' );
define( 'LOGGED_IN_SALT',   'E8`eN!&wW}2YMCW$F[t&vKx33}t~9)XfxeezzbsW@eBDPyjvJ3MW$ACPR$e9J+lH' );
define( 'NONCE_SALT',       '%LhQag|y.a-8y[]`8a@sz+]p~hkntP,LB&^4O|F2-YDbQT9td_kV1,V|S8b37cAM' );

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
